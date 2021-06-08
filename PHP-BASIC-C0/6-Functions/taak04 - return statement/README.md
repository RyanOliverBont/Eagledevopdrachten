# PHP-BASIC - Functions

## Taak 04 - Return Statement

## Uitleg

Functies zijn heel erg handig om specifieke blokjes code uit te voeren. Een `var_dump()` of `berekenTotaal()` bevatten stukjes code die we laten kunnen aanroepen als we dat nodig hebben.

Soms is de laatste regel van zo'n functie een `echo`: het resultaat wordt op het scherm getoond. Mooi. Maar stel dat je nou net dat laatste niet wilt. Je wilt het resultaat niet op het scherm tonen maar elders in je code gebruiken. Dan is zo'n echo niet handig. Eigenlijk willen we dat de functie het eindresultaat berekent/bepaald/uitvoerd en aan ons __teruggeeft__ zodat wij er iets anders mee kunnen doen.

De functie strtoupper() is eigenlijk zo'n functie, die maakt van alle letters in een string een hoofdletter. Maar deze functie toont het resultaat daarvan niet op het scherm. Daarvoor moet je nog een echo gebruiken. Dus de functie strtoupper() geeft een string terug.

Nog een voorbeeld:

```php

function maakBerekening(){
    $x = 45;
    $y = 66;
    $z = 767;

    return $x + $y + $z;
}  
```

De bovenstaande functie maakt een berekening en geeft het resultaat aan ons terug. Wij kunnen daar weer gebruik van maken in bijvoorbeeld:

```php
    function zetAllesGroot(){
        echo '<h1>' . maakBerekening() . `</h1>`;
    }
```

Zodra de functie `zetAllesGroot()`  aangeroepen wordt en dus uitgevoerd wordt dan wordt eerst de functie `maakBerekening()` uitgevoerd om daarna het gehele resultaat `<h1>878</h1>` in de browser te tonen.

> Als een return statement wordt uitgevoerd in de functie dan stopt de functie met de code uit te voeren. Er wordt dan een resultaat teruggegeven ongeacht of er nog code onder staat.

## Leerdoelen

1. [ ] Ik codeer een functie met een return statement
2. [ ] Ik roep een functie met een return statement aan die het resultaat teruggeeft

## Opdracht

1. Schrijf je code in `index.php`
2. Maak een functie `geefTienProcent()`
3. Maak een variabele `$koopPrijs;` en geef deze de waarde 75;
4. Maak een variabele `$korting` en geef deze de waarde 10;
5. Codeer dat je een berekening maakt van de aankoopprijs - 10% korting.
6. Return het resultaat op het scherm. De echo staat dus niet in de functie.

## Eindresultaat

> Het totaalbedrag is 67.50 euro.

## Bronnen

[W3 Schools - syntax](https://www.w3schools.com/PHP/php_syntax.asp)  
[W3 Schools - functies](https://www.w3schools.com/php/php_functions.asp)  
[Jaap vd Veen - functies](https://phpbasis.jaapvdveen.nl/basiscursus-php/les-3-inleiding-functies/)

[google](https://google.nl)

<!--- ------------ DIT COMMENTAAR LATEN STAAN AUB ------------
------------------ ------------------------------ ------------
------------------ eagle ref:93252457
------------------ ------------------------------ ------------
------------------ DIT COMMENTAAR LATEN STAAN AUB -------- -->
