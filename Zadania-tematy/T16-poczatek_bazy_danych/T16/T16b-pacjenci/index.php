<?php

$db = mysqli_connect('localhost', 'root', '', '4ir_1_pacjenci');

if (mysqli_connect_errno()) {
    exit("Błąd połączeniaz serwerem MySQL:". mysqli_connect_error());
} else {
    $plik = fopen("dane.txt", "r");

    while (!feof($plik)) {
        $data = fgetcsv($plik);
        $q1 = "INSERT INTO tabela_1 (identyfikator, imie, nazwisko, email) VALUES ('$data[0]', '$data[1]', '$data[2]', '$data[3]')";
        if (mysqli_query($db, $q1)) {
            echo "Rekord został dodany<br/>";
        } else {
            echo "Error: " . $q1 . "<br>" ;
        }
    }
    fclose($plik);

    $q2 = "SELECT * FROM tabela_1";
    $wynik = mysqli_query($db, $q2);

    if (mysqli_fetch_row($wynik)) {
        echo "<table><tr><th>Identyfikator</th><th>Imię</th><th>Nazwisko</th><th>Email</th></tr>";
        while ($row = $wynik->fetch_assoc()) {
            echo "<tr><td>" . $row["identyfikator"] . "</td><td>" . $row["imie"] . "</td><td>" . $row["nazwisko"] . "</td><td>" . $row["email"] . "</td></tr>";
        }
        echo "</table>";
    } else {
        echo "Brak danych";
    }
}
mysqli_close($db);



