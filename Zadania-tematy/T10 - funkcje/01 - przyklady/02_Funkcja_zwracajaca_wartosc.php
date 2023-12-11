<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>02_Funkcja_zwracajaca_wartosc.php</title>
</head>
<body>
   <?php
    function Suma($a, $b)
    {
        return ($a+$b);
    }
    $wynik = Suma(2.4,3.6);
    echo "Suma liczb wynosi: ".$wynik;
    ?>
    
</body>
</html>