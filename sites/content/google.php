<?php
// Check if the 'q' parameter exists in the GET request
// Check if the 'q' parameter exists in the GET request
if (!isset($_GET['q']) || empty($_GET['q'])) {
    echo "
    <div class='container my-5'>
        <div class='alert alert-warning' role='alert'>
            <h4 class='alert-heading'>Keresés</h4>
            <p>Kérlek, adj meg egy kulcsszót a kereséshez.</p>
            <hr>
            <p class='mb-0'>Használj a kereséshez kulcsszót a fenti mezőben.</p>
        </div>
    </div>";
    exit;
}


// Get the query from the GET request
$query = htmlspecialchars($_GET['q']); // Sanitize input to prevent XSS attacks
$site = 'vaszilijedc.hu'; // Site domain restriction

// Google Custom Search Embedded Script
$googleEmbeddedSearch = <<<HTML
<gcse:searchresults-only></gcse:searchresults-only>
<script async src="https://cse.google.com/cse.js?cx=600c9212070a34cb9"></script>
HTML;

?>

<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keresési eredmények: <?= htmlspecialchars($query) ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container my-5">
    <h1 class="text-center mb-4">Keresési eredmények: "<?= htmlspecialchars($query) ?>"</h1>
    <div class="card">
        <div class="card-body">
            <?= $googleEmbeddedSearch ?>
            <div class="text-center mt-4">
                <a href="../../index.php" class="btn btn-primary btn-lg">Vissza a korábbi oldalra</a>
            </div>
        </div>
    </div>
    <!-- Bootstrap Button after the search results -->

</div>
<script>
    // Monitor the iframe for changes
    document.addEventListener("DOMContentLoaded", function () {
        const observer = new MutationObserver((mutations) => {
            mutations.forEach((mutation) => {
                // Check if the iframe's content or visibility changes
                const iframe = document.querySelector("iframe[src*='google']");
                if (iframe && iframe.style.display === "none") {
                    // Redirect to the previous page when the iframe is closed
                    window.location.href = document.referrer || '/';
                }
            });
        });

        // Observe changes to the iframe container
        const container = document.querySelector("gcse\\:searchresults-only");
        if (container) {
            observer.observe(container, { attributes: true, childList: true, subtree: true });
        }
    });
</script>
</body>
</html>
