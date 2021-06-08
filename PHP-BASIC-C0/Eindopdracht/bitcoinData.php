
<?php
/* Er zijn vier opdrachten te doen voor jou
 *
 * 1. Voeg bitcoinData.php toe aan het bestand index.php (de bestanden header.php footer.php, en de JS bestanden worden al toegevoegd)
 * 2. Maak een array met verschillende waardes. 
 *      Deze array noem je $buttons. Op de index pagina wordt van deze array gebruik gemaakt om knoppen met euro-prijzen te genereren.
 *      De array bevat 3 verschillende waardes: 2 integers en 1 float getal.
 *      Deze waardes mag je zelf kiezen, wees zo uniek mogelijk.
 * 3. De functie calculateBitcoinAmount() is niet afgemaakt. Deze functie rekent uit hoeveel bitcoins er worden gekocht als er op 1 van de knoppen geklikt wordt. 
 *     Zie regel 36 van dit bestand
 * 4. Voeg de drie benodigde waardes toe aan de $transactions array met array_push() zodat de nieuwe gekochte stukje bitcoin wordt toegevoegd 
 */

/*******************************************************************************************************************/
/******************************************* OPDRACHT 2 doe je hieronder *******************************************/

/* 
 * Opdracht 2: Zet hier de $buttons array neer 
 */
$buttons = array(5,10.5,10);

/******************************************* OPDRACHT 2 doe je hierboven *******************************************/
/*******************************************************************************************************************/



/*******************************************************************************************************************/
/******************************************* OPDRACHT 3 doe je hieronder *******************************************/
/* 
 * Maak met behulp van de functie getBitcoinPrice() een berekening. 
 * De uitkomst van de berekening moet het aantal gekochte bitcoins opleveren.
 * De functie geeft de uitkomst van die berekening terug.
 * De gebruiker kan voor een vast bedrag bitcoins kopen. 
 */

function calculateBitcoinAmount()
{
    //echo "test";
    if (isset($_GET['euro'])) {
        $euro = (int)$_GET['euro']; //Dit blokje code (if-statement) kun je laten staan.
        $bitcoinprice = getBitcoinPrice();
        //echo "test";
       // echo "<br>";
        //echo $bitcoinprice;
       // echo "<br>";
       // echo $euro;
    
        $totaleprijsinbitcoin = 1/($bitcoinprice / $euro);
      //  echo "<br>";
      //  echo $totaleprijsinbitcoin;
        return ($totaleprijsinbitcoin);
    
    
    }


    //SCHRIJF JE CODE.



}
/******************************************* OPDRACHT 3 doe je hierboven *******************************************/
/*******************************************************************************************************************/



/*******************************************************************************************************************/
/******************************************* OPDRACHT 4 doe je hieronder *******************************************/

/* 
 * Deze array bevat alle eerder gemaakte transacties. 
 * De structuur van de array is als volgt: [ prijs 1 bitcoin, koopbedrag, aantal bitcoin gekocht]
 * Deze array laat je staan en verander je niet. Jij maakt gebruik van array_push()
 */

$transactions = [
    [4638.78, 200, 0.0431],
    [9750.61, 250, 0.0256],
    [6421.15, 450, 0.0701],
    [7276.93, 100, 0.0137],
    [8832.08, 100, 0.0113],
    [9418.41, 250, 0.0265],
    [9431.84, 250, 0.0265],
    [5211.67, 200, 0.0384]
];

if (isset($_GET['euro'])) {

    $euro = $_GET['euro']; //deze regel laten staan


    array_push($transactions,[getBitcoinPrice(),$euro,calculateBitcoinAmount()] );


    /* SCHRIJF HIER JE CODE.
     * Schrijf hieronder de code om de gekochte bitcoin aan de array $transactions toe te voegen.
     * Je voegt een bitcoinprijs toe, de prijs in euro's en het aantal gekochte bitcoins.
     */
}



/******************************************* OPDRACHT 4 doe je hierboven *******************************************/
/*******************************************************************************************************************/




/*******************************************************************************************************************/
/************************* De functies hieronder heb je nodig en hoef je niet aan te passen ************************/

// Deze functie geeft de laatste prijs van bitcoin in euro's terug
function getBitcoinPrice()
{

    $bitcoinData = getBitcoinData();

    $price = str_replace('#', ',', str_replace(',', '', $bitcoinData->bpi->EUR->rate));

    return number_format((float)$price, 2, '.', '');
}

// Deze functie geeft de vereiste Coindesk API disclaimer terug
function getDisclaimer()
{
    $bitcoinData = getBitcoinData();
    return $bitcoinData->disclaimer;
}

// Deze functie geeft de laatste timestamp van de bitcoin prijs terug
function getTime()
{
    $bitcoinData = getBitcoinData();
    return $bitcoinData->time->updateduk;
}


// Deze functie maakt gebruik van de Coindesk API. Met deze gratis API kun je de huidge Bitcoin prijs ophalen naar je applicatie
// Vereiste is wel dat je de naam van Coindesk noemt in je applicatie.
function getBitcoinData()
{

    // create curl resource
    $ch = curl_init();

    // set url
    curl_setopt($ch, CURLOPT_URL, "https://api.coindesk.com/v1/bpi/currentprice.json");

    //return the transfer as a string
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

    // $output contains the output string
    $output = curl_exec($ch);

    // close curl resource to free up system resources
    curl_close($ch);

    $bitcoinInstance = json_decode($output);

    return $bitcoinInstance;
}

/************************* De functies hierboven heb je nodig en hoef je niet aan te passen ************************/
/*******************************************************************************************************************/
