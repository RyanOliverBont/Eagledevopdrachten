<?php
function mijnNaamIsGroot()
{
    $voornaam = "Oliver";
    $achternaam = "Bont";
    $gehelenaam = $voornaam . " " .$achternaam;
    $zin = "mijn naam is $gehelenaam";
   $zin = strtoupper($zin);
    echo $zin;
}
mijnNaamIsGroot();


?>