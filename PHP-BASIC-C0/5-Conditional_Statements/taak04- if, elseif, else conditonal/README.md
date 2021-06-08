# PHP-BASIC - Conditional Statements

## Taak 04 - Conditional statement - If, elseif, else

## Uitleg

We hebben gekeken naar de codeblokken voor `if` en `else` Er is nog een blok dat je kan toevoegen en dat is `elseif`
>
>Stel je maakt een applicatie waarin de gebruiker een product kan kopen. De prijs van het product hangt af van het aantal producten dat er gekocht wordt.
>
Dus als de klant:

* minder dan 10 producten koopt is de prijs per product €1.50
* minder dan 20 producten koopt is de prijs per product €1.25
* meer dan 20 producten koopt is de prijs per product €1.00

_Je zou bovenstaande kunnen doen met 3 if statements maar de snellere manier is `elseif` te gebruiken. Met `elseif` kan je namelijk een tweede conditie testen als de eerste false is!_

**In PHP zijn dit de regels voor het opschrijven van een if statement:**  
_De syntax van een if elseif else statement:_  

```php
    if(condition){
        //als de eerste condition TRUE is dan wordt dit blokje code uitgevoerd en het tweede blokje code niet.
    }
    elseif(condition){
        //als de eerste condition FALSE is en de tweede condition TRUE is dan wordt dit blokje code uitgevoerd.
    }
```

* De volgorde waarin je een `if elseif else` statement schrijft is belangrijk!
Je moet altijd beginnen met `if` gevolgd door `elseif` en als laatste `else`
* `if` en `elseif` moeten worden gevolgd door `()` met daartussen de vergelijking
* `else` mag _NOOIT_ worden gevolgd door een vergelijking
* `elseif` codeblokken kunnen zoveel voorkomen binnen een blok als nodig `if` en `else` mogen maar èèn keer voorkomen binnen een blok.
>
Hieronder de code op de prijs van een product te bepalen, maak eerst een variabele aan die onthoud hoeveel producten de klant besteld heeft.

```php
$prod_besteld = 12;

if($prod_besteld < 10) {
    $prijs = 1.50;
} elseif($prod_besteld < 20) {
    $prijs = 1.25;
} else {
    $prijs = 1.00;
}
```

_Let goed op de schrijfwijze, waar staan haakjes en wat staat er tussen de haakjes? Als je niet de juiste syntax gebruikt, weet PHP echt niet wat het moet doen!_

## Leerdoelen

1. [ ] ik weet wat een if elseif else statement is
2. [ ] Ik maak een if elseif else statement met verschillende vergelijkingen
3. [ ] Ik volg de juiste regels voor het schrijven van een if elseif else statement

## Opdracht

1. Schrijf je code in `index.php`
2. Gebruik bovenstaande code
3. Verander de waarde van de variabele `$prod_besteld` en toon de prijs met `echo` op het scherm. Zorg dat elke vergelijking een keer waar is

## Eindresultaat

Als je de opdracht goed uitvoert, wordt de volgende tekst getoond in je browser:
>1.50
>1.25
>1.00  
>  
>_De volgorde van de output kan ook anders zijn. Dat hangt af van wat jij per keer hebt ingevuld als waarde van de variabele $prod_besteld_

## Bronnen

>[Jaap vd Veen - statements](https://phpbasis.jaapvdveen.nl/basiscursus-php/les-2-inleiding-statements/)  
>[W3 Schools - operators](https://www.w3schools.com/php/php_operators.asp)  
>[W3 Schools - if else](https://www.w3schools.com/php/php_if_else.asp)

<!--- ------------ DIT COMMENTAAR LATEN STAAN AUB ------------
------------------ ------------------------------ ------------
------------------ eagle ref:20110759
------------------ ------------------------------ ------------
------------------ DIT COMMENTAAR LATEN STAAN AUB -------- -->
