<?php
echo "<pre>";
//inicjowanie tablicy
  $owoce = array('Jabłko','Gruszka','Banan');
  $owoce[] = "Karkóweczka";
  $owoce[] = "Boczuś";
  $owoce[] = "Skrzydełko";
  var_dump($owoce);

  $pieczywo = ['chleb','bułka','rogal'];
  $pieczywo[1] = "Bułeczki";
  print_r($pieczywo);


  // inicjowanie tablicy tablicą

$kopia_owocow = $owoce;
print_r($kopia_owocow);

echo "</pre>";
