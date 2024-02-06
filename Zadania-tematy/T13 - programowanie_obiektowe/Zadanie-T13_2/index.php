<?php

class Czolg {
    private $nazwa = "Mój Czołg", $kolor = "Czerwony", $ilosc_amunicjii = 5;

    function nazwijCzolg($imie)
    {
        $this->nazwa=$imie;
    }

    function info()
    {
        echo "Czołg " . $this->nazwa . " ma kolor " . $this->kolor . " oraz ma aktualnie " . $this->ilosc_amunicjii . " pocisków <br/><br/>";
    }

    function pomaluj ($nowyKolor) {
        $staryKolor = $this->kolor;
        $this->kolor=$nowyKolor;
        echo "Czołg zmienił kolor z " . $staryKolor . " na " . $this->kolor . "<br/>";
    }

    function zaladuj() {
        echo "----------<br/>Czołg ładuje jeden pocisk!<br />";
        $this->ilosc_amunicjii++;
        echo "Ilość amunicjii: " . $this->ilosc_amunicjii . "<br/>";
    }

    function strzelaj() {
        if ($this->ilosc_amunicjii <= 0) {
            echo "<br/>Skończyła się amunicja. Musisz załadować!<br/>";
        } else {
            echo "----------<br/>Czołg strzela!<br />";
            $this->ilosc_amunicjii--;
            echo "Ilość amunicjii: " . $this->ilosc_amunicjii . "<br/>";
        }
    }
}

$mojCzolg = new Czolg();
$mojCzolg->nazwijCzolg("Witold");
$mojCzolg->pomaluj("brązowy");
$mojCzolg->info();

$mojCzolg->strzelaj();
$mojCzolg->strzelaj();
$mojCzolg->strzelaj();
$mojCzolg->strzelaj();
$mojCzolg->strzelaj();
$mojCzolg->strzelaj();
$mojCzolg->strzelaj();
$mojCzolg->strzelaj();
$mojCzolg->zaladuj();
$mojCzolg->strzelaj();

echo "<br/>---------------------Kolejny gracz---------------------<br/>";

$twojCzolg = new Czolg();
$twojCzolg->nazwijCzolg('Artur');
$twojCzolg->pomaluj('czarny');
$twojCzolg->info();

$twojCzolg->strzelaj();
$twojCzolg->strzelaj();
$twojCzolg->strzelaj();
$twojCzolg->strzelaj();
$twojCzolg->strzelaj();
$twojCzolg->strzelaj();
$twojCzolg->strzelaj();
$twojCzolg->strzelaj();
$twojCzolg->zaladuj();
