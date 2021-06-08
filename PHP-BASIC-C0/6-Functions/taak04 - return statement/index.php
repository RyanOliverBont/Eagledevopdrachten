<?php
function geefTienProcent(){
    $koopPrijs = 75.0;
    $korting = 10.0;
    $nieuweprijs = $koopPrijs * (1 - ($korting/100));
    return $nieuweprijs;
}
$prijs = geefTienProcent();
echo "Het totaalbedrag is $prijs euro";
    




?>