<?php
    $tab = array("Polska"=>"Warszawa","Niemcy"=>"Berlin","Francja"=>"Paryż", "Hiszpania"=>"Madryt", "Portugalia"=>"Lizbona","Ukraina"=>"Kijów", "Czechy"=>"Praga", "Austria"=>"Wiedeń","Włochy"=>"Rzym","WIelka Brytania"=>"Londyn");
    echo "<pre>";
    var_dump($tab);
    echo "</pre>";

    forEach($tab as $el) {
        echo "$el<br/>";
    }
?>