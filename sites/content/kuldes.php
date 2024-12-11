<?php
include('./includes/db.php');
// Szerveroldali validáció
$name = trim($_POST['name'] ?? 'Vendég');
$email = trim($_POST['email'] ?? '');
$subject = trim($_POST['subject'] ?? '');
$message = trim($_POST['message'] ?? '');

$errors = [];
if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = "Érvényes email cím szükséges.";
if (empty($subject)) $errors[] = "A tárgy megadása kötelező.";
if (empty($message)) $errors[] = "Az üzenet mező nem lehet üres.";

if (!empty($errors)) {
    foreach ($errors as $error) {
        echo "<p style='color: red;'>$error</p>";
    }
    echo '<a href="?oldal=contact_form">Vissza az űrlaphoz</a>';
    exit;
}

// Adatok mentése adatbázisba
$stmt = $conn->prepare("INSERT INTO contact_messages (username, email, subject, message) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $name, $email, $subject, $message);
$stmt->execute();
$stmt->close();
$conn->close();

// Adatok megjelenítése
?>
<h2 class="text-center mb-4">Elküldött adatok</h2>

<div class="card">
    <div class="card-body">
        <p><strong>Név:</strong> <?= htmlspecialchars($name) ?></p>
        <p><strong>Email:</strong> <?= htmlspecialchars($email) ?></p>
        <p><strong>Tárgy:</strong> <?= htmlspecialchars($subject) ?></p>
        <p><strong>Üzenet:</strong></p>
        <p><?= nl2br(htmlspecialchars($message)) ?></p>
    </div>
</div>

<div class="mt-3 text-center">
    <a href="?oldal=contact_form" class="btn btn-primary">Vissza az űrlaphoz</a>
</div>