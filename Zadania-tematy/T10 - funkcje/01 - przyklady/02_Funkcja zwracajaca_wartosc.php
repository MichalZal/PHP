<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>02_Funkcja zwracajaca_wartosc.php</title>
</head>
<body>
   <?php
    function Suma($a, $b)
    {
        return ($a+$b);
    }
    $wynik = Suma(2,3.5345356);
    echo "Suma liczb wynosi: ".$wynik;
    ?>
    
</body>
</html>