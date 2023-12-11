<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>06_Argumenty_przekazywane_przez_wartosc.php</title>
</head>
<body>
<?php
        // funkcje pracują na kopiach
        function wart($liczba)
        {
            $liczba+=3; // $liczba = $liczba + 3;
        }
        $liczba=2;
        echo "Wartość zmiennej \$liczba przed wywołaniem funkcji: $liczba <br/>";
        wart($liczba);
        echo "Wrtość zmiennej \$liczba po wywołaniu funkcji: $liczba <br/>";
?>   
    
</body>
</html>