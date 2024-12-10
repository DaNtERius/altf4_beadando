<?php
include('./includes/config.inc.php');

//$keres = current($oldalak);
$keres = $oldalak['/'];
if (isset($_GET['oldal'])) {
    if (isset($oldalak[$_GET['oldal']]) && file_exists("./sites/content/{$oldalak[$_GET['oldal']]['fajl']}.php")) {
        $keres = $oldalak[$_GET['oldal']];
    }
    else {
        $keres = $hiba_oldal;
        header("HTTP/1.0 404 Not Found");
    }
}
include('./sites/fooldal.php');
?>