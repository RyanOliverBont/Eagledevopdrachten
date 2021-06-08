
<body>
<?php
$prod_besteld = 6;

if($prod_besteld < 10) {
    $prijs = 1.50;
echo $prijs;
} elseif($prod_besteld < 20) {
    $prijs = 1.25;
    echo $prijs;
    
} else {
    $prijs = 1.00;
    echo $prijs;
    
}
echo "<br>";
$prod_besteld = 15;
if($prod_besteld < 10) {
        $prijs = 1.50;
    echo $prijs;
    } elseif($prod_besteld < 20) {
        $prijs = 1.25;
        echo $prijs;
        $prod_besteld = 25;
    } else {
        $prijs = 1.00;
        echo $prijs;
    }
    echo "<br>";
    $prod_besteld = 30;
    if($prod_besteld < 10) {
        $prijs = 1.50;
    echo $prijs;
    } elseif($prod_besteld < 20) {
        $prijs = 1.25;
        echo $prijs;
        $prod_besteld = 25;
    } else {
        $prijs = 1.00;
        echo $prijs;
    }


?>

</body>
</html>