<?php

class Osoba
{
    private $id, $nazwisko, $imie, $wiek;

    // dodaliśmy pole wiek i uzupełniamy klasę osoba o właściwe metody.
    function wpiszNazwisko($arg1)
    {
        $this->nazwisko = $arg1;
    }

    function pobierzNazwisko()
    {
        return $this->nazwisko;
    }

    function wpiszImie($arg2)
    {
        $this->imie = $arg2;
    }

    function pobierzImie()
    {
        return $this->imie;
    }

    function wpiszId($arg3)
    {
        $this->id = $arg3;
    }

    function pobierzId()
    {
        return $this->id;
    }

    function wpiszWiek($arg4)
    {
        $this->wiek = $arg4;
    }

    function pobierzWiek()
    {
        return $this->wiek;
    }
}

$postac1 = new Osoba();
$postac2 = new Osoba();

//Takie odwołoywanie się do wartości jest możliwe, dzięki temu, że zostały zdefiniowane jako publiczne.
//Jakby były prywatne, nie byłoby to możliwe
//$postac1->nazwisko = 'Kowalski';
//$postac1->imie = 'Jan';
//$postac1->id = 1;
//$postac1->wiek = 18;

$postac2->wpiszNazwisko('Nowak');
$postac2->wpiszImie('Adam');
$postac2->wpiszId(2);
$postac2->wpiszWiek(22);

// Tak samo, są publiczne, więc można zrobić tak:
//echo $postac1->nazwisko . " " . $postac1->imie . " " . $postac1->wiek . " " . $postac1->id;
//echo "<br>";
// W innym wypadku, konieczne jest korzystanie ze zdefiniowanych metod.
echo $postac2->pobierzNazwisko() . " " . $postac2->pobierzImie() . " " . $postac2->pobierzWiek();