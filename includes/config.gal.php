<?php
// Alkalmazás logika:
$MAPPA = 'media/images/gallery_images/';
$TIPUSOK = array ('.jpg', '.png');
$MEDIATIPUSOK = array('image/jpeg', 'image/png');
$DATUMFORMA = "Y.m.d. H:i";
$MAXMERET = 500*1024;

// adatok összegyűjtése:
$kepek = array();
$olvaso = opendir($MAPPA);
while (($fajl = readdir($olvaso)) !== false)
    if (is_file($MAPPA.$fajl)) {
        $vege = strtolower(substr($fajl, strlen($fajl)-4));
        if (in_array($vege, $TIPUSOK))
            $kepek[$fajl] = filemtime($MAPPA.$fajl);
    }
closedir($olvaso);

if (isset($_POST['kuld'])) {
    foreach ($_FILES as $fajl) {
        if ($fajl['error'] == 4);   // Nem töltött fel fájlt
        elseif (!in_array($fajl['type'], $MEDIATIPUSOK))
            $uzenet[] = " Nem megfelelő típus: " . htmlspecialchars($fajl['name']);
        elseif ($fajl['error'] == 1   // A fájl túllépi a php.ini -ben megadott maximális méretet
            or $fajl['error'] == 2   // A fájl túllépi a HTML űrlapban megadott maximális méretet
            or $fajl['size'] > $MAXMERET)
            $uzenet[] = " Túl nagy állomány: " . htmlspecialchars($fajl['name']);
        else {
            $vegsohely = $MAPPA . strtolower($fajl['name']);
            if (file_exists($vegsohely))
                $uzenet[] = " Már létezik: " . htmlspecialchars($fajl['name']);
            else {
                move_uploaded_file($fajl['tmp_name'], $vegsohely);
                $uzenet[] = ' Ok: ' . htmlspecialchars($fajl['name']);
            }
        }
    }
}
?>