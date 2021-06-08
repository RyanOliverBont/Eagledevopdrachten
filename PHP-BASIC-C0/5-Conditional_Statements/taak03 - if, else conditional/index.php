
<body>
<?php
$test1 = 3;
$test2 = 6;

if($test1 == $test2) {
    echo "gelijk";
    echo "<br>";
}
else {
    echo "niet gelijk";
    echo "<br>";
}

if($test1 != $test2) {
    echo "ongelijk";
    echo "<br>";
}
else {
    echo "gelijk";
    echo "<br>";
}

if($test1 === $test2) {
    echo "identiek";
    echo "<br>";
}
else {
    echo "niet identiek";
    echo "<br>";
}

if($test1 > $test2) {
    echo "test1 is groter dan test2";
    echo "<br>";
}
else {
    echo "test1 is niet groter dan test2";
    echo "<br>";
}

if($test1 < $test2) {
    echo "test1 is kleiner dan test2";
    echo "<br>";
}
else {
    echo "test1 is niet kleiner dan test2";
    echo "<br>";
}
if($test1 >= $test2) {
    echo "test1 is groter of gelijk aan test2";
    echo "<br>";
}
else {
    echo "test1 is niet groter of gelijk aan test2";
    echo "<br>";
}
if($test1 <= $test2) {
    echo "test1 is kleiner of gelijk aan test2";
    echo "<br>";
}
else {
    echo "test1 is niet kleiner of gelijk aan test2";
    echo "<br>";
}
?>
    
</body>
</html>