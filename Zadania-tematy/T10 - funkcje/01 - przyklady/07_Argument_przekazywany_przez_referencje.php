<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>07_Argument_przekazywany_przez_referencje.php</title>
</head>
<body>
<?php
    // referencja do jakiejkolwiek zmiennej, która zostanie podana jako argument do funkcji.
    // w ten sposób funkcja wpływa na istinejący zewnętrzny element, a nie działa na kopii
    function wart(&$liczba)
    {
        $liczba+=3;
    }
    $num=2;
    echo "Wartość zmiennej \$liczba przed wywołaniem funkcji: $num <br/>";
    wart($num);
    echo "Wartość zmiennej \$liczba po wywołaniu funkcji: $num <br/>";
?>   
    
</body>
</html>