
<body>
<?php
$test1 = 3;
$test2 = 6;

if ($test1 != "10") {
    echo "niet gelijk";
}

echo "<br>";

if ($test1 <= "10") {
    echo "ongelijk indentiek";
}

echo "<br>";

if ($test1 !== "10") {
    echo "zelf bedacht";
}

echo "<br>";

if ($test1 < "10") {
    echo "test1 is kleiner dan test2";
}

echo "<br>";

if ($test1 != "10") {
    echo "zelf bedachte tekst";
}

echo "<br>";

if ($test1 <= "10") {
    echo "test1 is kleiner of gelijk aan test2";
}
?> 
</body>
</html>