
<body>
<?php
$test1 = 10;
$test2 = 6;

if($test1 == $test2) {
    echo "gelijk";
    echo "<br>";
}

if($test1 != $test2) {
    echo "ongelijk";
    echo "<br>";
}
if($test1 === $test2) {
  echo "identiek";
  echo "<br>";
}
 
if($test1 > $test2) {
    echo "test1 is groter dan test2";
    echo "<br>";
  }
  if($test1 < $test2) {
    echo "test1 is kleiner dan test2";
    echo "<br>";
  }
  if($test1 >= $test2) {
    echo "test1 is groter dan of gelijk aan test2";
    echo "<br>";
  }
  if($test1 <= $test2) {
    echo "test1 is kleiner of groter dan test2";
    echo "<br>";
  }
?>
</body>
</html>