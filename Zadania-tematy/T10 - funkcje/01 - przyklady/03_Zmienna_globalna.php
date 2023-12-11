<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>03_Zmienna_globalna.php</title>
</head>
<body>
   <?php
    $zm = 11;
    
    function pokaz()
    {
       // global $zm;
        echo "Zmienna \$zm wynosi: ".$GLOBALS['zm'];
    }
    
    pokaz();
    
    ?>
    
</body>
</html>