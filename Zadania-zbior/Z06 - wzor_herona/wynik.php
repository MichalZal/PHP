<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Zadanie 06 - wzór Herona</title>
    <meta name="author" content="MIchał Zalewski">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1>Zadanie 06 - wynik
    </h1>
</header>
<main>
    <?php
        $a = $_REQUEST['liczbaA'];
        $b = $_REQUEST['liczbaB'];
        $c = $_REQUEST['liczbaC'];

        $max = $a;
        if ($b > $a) $max = $b;
        if ($c > $b) $max = $c;

        $pole = 0;
        if ($a + $b > $c && $a + $c > $b && $b + $c > $a) {
            $polowaDlugosci = 1/2*($a+$b+$c);
            $pa = $polowaDlugosci - $a;
            $pb = $polowaDlugosci - $b;
            $pc = $polowaDlugosci - $c;

            // pole = sqrt(p(p - a)(p - b)(p - c)))
            $pole = sqrt($polowaDlugosci * $pa * $pb * $pc);
            echo "<h2>Z liczb <br/>a: $a <br/>b: $b <br/>c: $c<br/> Na podstawie wzoru Herona wychodzi pole: ".round($pole, 4)."m2</h2>";
        } else {
            echo "<p>Błąd. Podane wartości nie mogą utworzyć trójkąta.<br />Nie da się zastosować wzoru Herona :(</p>";
            echo "<a href='index.html'>Spróbuj jeszce raz</a>";
        }
    ?>
</main>
</body>
</html>
