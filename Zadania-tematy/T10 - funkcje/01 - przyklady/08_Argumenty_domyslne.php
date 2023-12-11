<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>08_Argumenty_domyslne.php</title>
</head>
<body>
<?php
    function progr($jezyk="PHP")
    {
        return "Język programowania $jezyk";
    }
    echo progr(); 
    echo "<br/>";
    echo progr(null); 
    echo "<br/>";
    echo progr("JAVA");

?>    
</body>
</html>