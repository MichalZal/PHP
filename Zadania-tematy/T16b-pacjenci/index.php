<?php

//$db = new mysqli('localhost', 'root', '', '4ir_1_pacjenci');
//if ($db->connect_error) {
//    die("Connection failed: " . $db->connect_error);
//}
//
//$file = fopen("dane.txt", "r");
//while (!feof($file)) {
//    $data = fgetcsv($file);
//    $q1 = "INSERT INTO tabela_1 (identyfikator, imie, nazwisko, email) VALUES ('$data[0]', '$data[1]', '$data[2]', '$data[3]')";
//    if ($db->query($q1) === TRUE) {
//        echo "Rekord został dodany<br/>";
//    } else {
//        echo "Error: " . $q1 . "<br>" . $db->error;
//    }
//}
//fclose($file);
//
//$q2 = "SELECT * FROM tabela_1";
//$result = mysqli_query($db, $q2);
//
//if ($result->num_rows > 0) {
//    echo "<table><tr><th>Identyfikator</th><th>Imię</th><th>Nazwisko</th><th>Email</th></tr>";
//    while ($row = $result->fetch_assoc()) {
//        echo "<tr><td>" . $row["identyfikator"] . "</td><td>" . $row["imie"] . "</td><td>" . $row["nazwisko"] . "</td><td>" . $row["email"] . "</td></tr>";
//    }
//    echo "</table>";
//} else {
//    echo "0 results";
//}
//
//$db->close();



$db = mysqli_connect('localhost', 'root', '', '4ir_1_pacjenci');

if (mysqli_connect_errno()) {
    exit("Błąd połączeniaz serwerem MySQL:". mysqli_connect_error());
} else {
    $file = fopen("dane.txt", "r");

    // odczytanie zawartości pliku
    while (!feof($file)) {
        $data = fgetcsv($file);
        $q1 = "INSERT INTO tabela_1 (identyfikator, imie, nazwisko, email) VALUES ('$data[0]', '$data[1]', '$data[2]', '$data[3]')";
        if ($db->query($q1) === TRUE) {
            echo "Rekord został dodany<br/>";
        } else {
            echo "Error: " . $q1 . "<br>" . $db->error;
        }
    }
    fclose($file);

    $q2 = "SELECT * FROM tabela_1";
    $result = mysqli_query($db, $q2);

    if ($result->num_rows > 0) {
        echo "<table><tr><th>Identyfikator</th><th>Imię</th><th>Nazwisko</th><th>Email</th></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["identyfikator"] . "</td><td>" . $row["imie"] . "</td><td>" . $row["nazwisko"] . "</td><td>" . $row["email"] . "</td></tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }
}
$db->close();



