<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Wędkowanie</title>
    <link rel="stylesheet" href="styl_1.css">
</head>
<body>
<header>
    <h1>Portal dla wędkarzy</h1>
</header>
<section class="lewy-1">
    <h3>Ryby zamieszkujące rzeki</h3>
    <ol>
        <?php
            $db = mysqli_connect("localhost", 'root', '', 'wedkowanie');
            $q = "SELECT r.nazwa, l.akwen, l.wojewodztwo FROM ryby as r INNER JOIN lowisko AS l ON r.id = l.Ryby_id WHERE l.rodzaj=3;";

            $wynik = mysqli_query($db, $q);
            while ($el = mysqli_fetch_row($wynik)) {
                echo "<li>$el[0] pływa w rzece $el[1], $el[2].</li>";
            }
            ?>
    </ol>
</section>
<section class="prawy-1">
    <img src="pliki1/ryba1.jpg" alt="Sum">
    <br>
    <a href="./kwerendy.txt">Pobierz kwerendy</a>
</section>
<section class="lewy-2">
    <h3>Ryby drapieżne naszych wód</h3>
    <table>
        <tr>
            <th>L.p.</th>
            <th>Gatunek</th>
            <th>Występowanie</th>
        </tr>
            <?php
                $q = "SELECT ryby.id, ryby.nazwa, ryby.wystepowanie FROM ryby WHERE ryby.styl_zycia=1;";

                $wynik = mysqli_query($db, $q);
                while ($el = mysqli_fetch_row($wynik)) {
                    echo "<tr>";
                    echo "<td>$el[0]</td><td>$el[1]</td><td>$el[2]</td>";
                    echo "</tr>";
                }

                mysqli_close($db);
            ?>
    </table>
</section>
<footer>
    <p>Stronę wykonał: Michał Zalewski 4ip_1</p>
</footer>
</body>
</html>