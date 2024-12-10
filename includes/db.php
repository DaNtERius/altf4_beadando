<?php
$servername = "localhost";
$username = "root";
$password = ""; // Ha nincs jelszó, hagyd üresen
$dbname = "dbsql"; // Az adatbázis neve

// Adatbázis kapcsolat létrehozása
$conn = new mysqli($servername, $username, $password, $dbname);

// Kapcsolati hiba ellenőrzése
if ($conn->connect_error) {
    die("Adatbázis-kapcsolódási hiba: " . $conn->connect_error);
}
?>
<?php
