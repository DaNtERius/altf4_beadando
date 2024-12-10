<?php
$servername = "localhost";  // vagy az adatbázis szerver IP címe
$username = "root";         // MySQL felhasználónév
$password = "";             // MySQL jelszó (ha nincs, hagyd üresen)
$dbname = "dbsql";        // A létrehozott tesztadatbázis neve

// Adatbázis kapcsolat létrehozása
$conn = new mysqli($servername, $username, $password, $dbname);

// Kapcsolati hiba ellenőrzése
if ($conn->connect_error) {
    die("Kapcsolódási hiba: " . $conn->connect_error);
}

// Tesztkérdés (opcionális)
$sql = "SELECT DATABASE()";
$result = $conn->query($sql);

if ($result) {
    $row = $result->fetch_row();
    echo "Kapcsolat sikeres! Az aktuális adatbázis: " . $row[0];
} else {
    echo "Kapcsolat sikeres, de a tesztkérdés hibás: " . $conn->error;
}

$conn->close();
?>
<?php
