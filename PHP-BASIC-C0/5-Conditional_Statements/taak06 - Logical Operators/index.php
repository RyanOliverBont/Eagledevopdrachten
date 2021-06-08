
<?php
$var1 = 5;
$var2 = 6;

if($var1 < 10 && $var2 > 5) {
    echo "var1 is kleiner dan 10 en var2 is groter dan 5!";
} else {
    echo "var1 is niet kleiner dan 10 en var2 is niet groter dan 5!";
}
echo "<br>";
if($var1 < 10 || $var2 > 5) {
    echo "var1 is kleiner dan 10 of var2 is groter dan 5";
} else {
    echo "var 1 is niet kleienr dan 10 of var2 is niet kleiner dan 5";
}
echo "<br>";
if($var1 < 10 xor $var2 > 5) {
    echo "var1 is kleiner dan 10 of var2 is groter dan 5";
} else {
    echo "var1 is niet groter dan 10 en var2 is niet groter dan 5";
}
echo "<br>";
if(!$var1 < 10 && !$var2 > 5) {
    echo "var1 is niet kleiner dan 5 var2 is niet groter dan 5";
} else {
    echo "het getal is kleiner dan 5 en var2 is groter dan 5";
}


?>

