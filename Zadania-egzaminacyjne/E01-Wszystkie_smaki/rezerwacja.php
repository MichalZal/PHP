<?php
    echo "Dodano rezerwację do bazy <br/>";

    $db = mysqli_connect('localhost', 'root', '', 'baza');

    if (mysqli_connect_errno()) {
        exit("Błąd połączeniaz serwerem MySQL:". mysqli_connect_error());
    } else {
        $data = $_POST['data'];
        $ilosc_osob = $_POST['ilosc_osob'];
        $nr_tel = $_POST['nr_tel'];

        $q = "INSERT INTO rezerwacje (rezerwacje.data_rez, rezerwacje.liczba_osob, rezerwacje.telefon) VALUES (" . "'$data'" . ', ' . $ilosc_osob . ', ' . $nr_tel . ')';
    }

    mysqli_query($db, $q);
    mysqli_close($db);

