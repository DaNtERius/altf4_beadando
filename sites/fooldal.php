<?php session_start(); ?>
<?php if(file_exists('./logicals/'.$keres['fajl'].'.php')) { include("./logicals/{$keres['fajl']}.php"); } ?>
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="<?php echo htmlspecialchars($fejlec['leiras']); ?>" />
    <meta name="author" content="<?php echo htmlspecialchars($fejlec['author']); ?>">
    <title><?php echo htmlspecialchars($fejlec['cim']); ?></title>
    <link rel="icon" type="image/x-icon" href="<?php echo htmlspecialchars($fejlec['kepforras']); ?>" />
    <link href="./css/bootstrap.min.css" rel="stylesheet" />
  <link href="./css/styles.css" rel="stylesheet" />
    <link href="./css/custom.css" rel="stylesheet" />
    <script src="./js/jquery-3.7.1.min.js"></script>
    <script src="./js/custom.js"></script>
    <script src="./js/bootstrap.bundle.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body id="page-top">
<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <div class="container px-0">
        <div class="container d-flex align-items-center flex-wrap">
            <!-- Logo and Brand Name -->
            <div class="d-flex align-items-center">
                <a href="index.php">
                    <img
                            class="rounded me-3 img-fluid"
                            style="max-width: 50px; height: auto;"
                            src="./images/<?=$fejlec['kepforras']?>"
                            alt="<?=$fejlec['kepalt']?>"
                    />
                </a>
                <a class="navbar-brand logo" title="<?php echo htmlspecialchars($fejlec['leiras']); ?>">
                    <?php echo htmlspecialchars($ablakcim['cim']); ?>
                </a>
                <?php if (isset($_SESSION['login'])) { ?>
                    <span class="nav-link">
                        <div class="d-flex align-items-center justify-content-end">
                            <a href="?oldal=logout" class="btn btn-secondary me-3">Kilépés</a>
                            <p class="mb-0 text-white me-3">Bejelentkezve: <strong><?= htmlspecialchars($_SESSION['csn'] . " " . $_SESSION['un'] . " (" . $_SESSION['login'] . ")") ?></strong></p>
                        </div>
                    </span>
                <?php } else { ?>
                    <a href="?oldal=login" class="btn btn-secondary ms-4">Belépés</a>
                <?php } ?>
            </div>

            <ul class="navbar-nav ms-auto"></ul>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <?php foreach ($oldalak as $url => $oldal) { ?>
                        <?php if ((!isset($_SESSION['login']) && $oldal['menun'][0]) || (isset($_SESSION['login']) && $oldal['menun'][1])) { ?>
                            <li class="nav-item<?= ($oldal === $keres) ? ' active' : '' ?>">
                                <a class="nav-link" href="<?= ($url === '/') ? '.' : ('?oldal=' . htmlspecialchars($url)) ?>">
                                    <?= htmlspecialchars($oldal['szoveg']) ?>
                                </a>
                            </li>
                        <?php } ?>
                    <?php } ?>
                </ul>

                <!-- Search Bar -->
                <div class="nav-item dropdown ms-3">
                    <a class="nav-link" href="#" role="button" id="searchDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-search" style="filter: invert(100%);"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end p-3" style="min-width: 300px;" aria-labelledby="searchDropdown">
                        <form action="https://cse.google.com/cse" method="get" class="d-flex">
                            <input type="text" name="q" class="form-control me-2" placeholder="Keresés..." aria-label="Keresés">
                            <input type="hidden" name="cx" value="600c9212070a34cb9">
                            <button class="btn btn-primary" type="submit">Keresés</button>
                        </form>
                    </div>
                </div>
                <!-- GitHub -->
                <div class="nav-item dropdown ms-3">
                    <a class="nav-link" href="https://github.com/DaNtERius/altf4_beadando">
                        <i class="bi bi-github" style="filter: invert(100%);"></i>
                    </a>
            </div>
        </div>
    </div>
</nav>
<!-- About section-->
<?php include("./sites/content/{$keres['fajl']}.php")?>
<!-- Footer-->
<footer class="py-5 bg-dark">
    <div class="container px-4">
        <ul class="list-unstyled d-flex justify-content-center mb-0">
            <li class="mx-3"><p class="m-0 text-center text-white">
                    <?php if(isset($lablec['copyright'])) { ?>&copy;&nbsp;<?= $lablec['copyright'] ?> <?php } ?>
                    &nbsp;
                    <?php if(isset($lablec['ceg'])) { ?><?= $lablec['ceg']; ?><?php } ?>
                </p></li>
        </ul>
    </div>
</footer>
</body>
</html>
