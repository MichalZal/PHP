<?php

$db = mysqli_connect("localhost", "root", "", "dane2");

if (!mysqli_errno($db)) {
    $tytul = $_POST['tytul'];
    $gatunek = $_POST['gatunek'];
    $rok = $_POST['rok'];
    $ocena = $_POST['ocena'];

    $query = "INSERT INTO filmy (filmy.tytul, filmy.gatunki_id, filmy.rok, filmy.ocena) VALUES (" . "'$tytul'" . ', ' . $gatunek . ', ' . $rok . ', ' . $ocena . ');';

    mysqli_query($db, $query);
    echo "Film " . $tytul . " został dodany do bazy.";
}

mysqli_close($db);