<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>09_Przyklad.php</title>
</head>
<body>
<?php
    function styl($tekst, $kolor="red")
    {
        echo "<p style=\"color: $kolor\">".$tekst."<p/>";
    }
    styl("Tytuł <br/>","blue");
    styl("Rozdział 1 <br/>","green");
    styl("Treść <br/>");
?>   
    
</body>
</html>