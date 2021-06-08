
<body>
<?php
$getallen = array("676","5345","78657","3","46","21","47");

asort($getallen);
$laag_hoog = $getallen;
print_r($laag_hoog);
echo "<br>";
arsort($getallen);
$hoog_laag = $getallen;
print_r ($hoog_laag);

?>
</body>
</html>