<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>05_Zmienne_statyczne.php</title>
</head>
<body>
<?php
        function funk()
        {
            static $i=1;
            echo "Funkcja wywołana $i raz(y) <br/>";
            $i++;
        }
        funk();
        funk();
        funk();
        funk();
?>   
    
</body>
</html>