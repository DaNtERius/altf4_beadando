<?php
if(isset($_POST['felhasznalo'])  && isset($_POST['jelszo']) && isset($_POST['csaladi_nev']) && isset($_POST['uto_nev']) && isset($_POST['email'])) {
    try {
        // Kapcsolódás
        $dbh = new PDO('mysql:host=localhost;dbname=dbsql', 'root', '',
            array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
        $dbh->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');

        // Létezik már a felhasználói név?
        $sqlSelect = "select id from felhasznalok where bejelentkezes = :bejelentkezes";
        $sth = $dbh->prepare($sqlSelect);
        $sth->execute(array(':bejelentkezes' => $_POST['felhasznalo']));
        if($row = $sth->fetch(PDO::FETCH_ASSOC)) {
            $uzenet = "A felhasználói név már foglalt!";
            $ujra = "true";
        }
        else {
            // Ha nem létezik, akkor regisztráljuk
            $sqlInsert = "insert into felhasznalok(csaladi_nev, uto_nev, bejelentkezes, jelszo, email)
                          values(:csaladi_nev, :uto_nev, :bejelentkezes, :jelszo, :email)";
            $stmt = $dbh->prepare($sqlInsert);
            $stmt->execute(array(':csaladi_nev' => $_POST['csaladi_nev'], ':uto_nev' => $_POST['uto_nev'],
                ':bejelentkezes' => $_POST['felhasznalo'], ':jelszo' => sha1($_POST['jelszo']), ':email' => $_POST['email']));
            if($count = $stmt->rowCount()) {
                $newid = $dbh->lastInsertId();
                $uzenet = "A regisztrációja sikeres.\nAzonosítója: {$newid}";
                $ujra = false;
            }
            else {
                $uzenet = "A regisztráció nem sikerült.";
                $ujra = true;
            }
        }
    }
    catch (PDOException $e) {
        $uzenet = "Hiba: ".$e->getMessage();
        $ujra = true;
    }
}
else {
    header("Location: .");
}
?>