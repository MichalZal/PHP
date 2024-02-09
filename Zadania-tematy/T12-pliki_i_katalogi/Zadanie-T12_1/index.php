<?php
// fopen("sciezka/nazwa.txt", "tryb") - tworzy i otwiera plik
// fclose("nazwa.txt") - zamyka plik.
// mkdir("nazwa") - tworzy folder
// unlink("Nazwa.txt") - usuwa plik.

$plik1 = fopen("Zalewski_i_Michal.txt", "w");
fclose($plik1);

$plik2 = fopen("doSkasownia.txt", "w");
fclose($plik2);

unlink("doSkasownia.txt");

mkdir("Zalewski");

$plik3 = fopen("Zalewski/Zalewski_i_Michal.txt", "w");
fclose($plik3);


