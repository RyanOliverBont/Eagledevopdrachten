# PHP-BASIC - Conditional Statements

## Taak 01 - Comparison Operators

## Uitleg

Bij het programmeren maken we vaak gebruik van het vergelijken van twee waardes. Bijvoorbeeld als je in spel wil bepalen of iemand wel of geen punt krijgt (is het antwoord wel of niet goed?) of als je wilt bepalen wie er gewonnen heeft (heeft speler1 meer punten dan speler2?)

>_Compararison operators gebruik je om waardes te vergelijken_

In PHP heb je verschillende soorten comparison operators namelijk:

>* is gelijk aan: `==`
>* is identiek aan _(zelfde waarde en zelfde datatype)_: `===`
>* is ongelijk aan: `!=`
>* is groter dan: `>`
>* is kleiner dan: `<`
>* is ongelijk aan: `<>`
>* is groter of gelijk aan: `>=`
>* is kleiner of gelijk aan: `<=`
>* spaceship: `<=>` - _deze wordt in een latere taak uitgelegd_

**In PHP zijn dit de regels voor het opschrijven van een comparison operator:**

* Je wilt `$variabele1` en `$variabele2` met elkaar vergelijken:
* Schrijf eerst `$variabele1` op
* Daarna schrijf je de operator op die je wilt gebruiken zoals is gelijk aan `==`
* Schrijf daarna `$variabele2` op
* Om de waarde op het scherm te tonen gebruiken we `var_dump();`  

Dit is hoe de code er dan uit komt te zien:

```php
    $variabele1 = 10;
    $variabele2 = "hallo";

    var_dump($variabele1 == $variabele2);
```

>**_De output zal altijd van het datatype boolean (true of false) zijn. Een vergelijking is namelijk altijd waar of niet waar!_**

## Leerdoelen

1. [ ] Ik weet wat de verschillende comparison operators zijn
2. [ ] Ik toon een vergelijking op het scherm met var_dump()
3. [ ] Ik volg de juiste regels voor het vergelijken van variabelen

## Opdracht

1. Schrijf je code in `index.php`
2. Maak de volgende variabelen aan  
   * _test1_ met de waarde: 12
   * _test2_ met de waarde: "gewoon tekst"
3. Maak een vergelijking met de volgende comparison operators
   * is gelijk aan: `==`
   * is identiek aan _(zelfde waarde en zelfde datatype)_: `===`
   * is ongelijk aan: `!=`
   * is groter dan: `>`
   * is kleiner dan: `<`
   * is ongelijk aan: `<>`
   * is groter of gelijk aan: `>=`
   * is kleiner of gelijk aan: `<=`
4. Toon de waarde (true/false) van de vergelijking op het scherm met `var_dump();`

## Eindresultaat

Als je de opdracht goed uitvoert, wordt de volgende tekst getoond in je browser:
>bool(false)  
>bool(false)  
>bool(true)  
>bool(true)  
>bool(false)  
>bool(false)  
>bool(true)  
>bool(false)  

## Bronnen

[W3 Schools - operators](https://www.w3schools.com/php/php_operators.asp)  
[W3 Schools - var_dump](https://www.w3schools.com/php/func_var_var_dump.asp)

<!--- ------------ DIT COMMENTAAR LATEN STAAN AUB ------------
------------------ ------------------------------ ------------
------------------ eagle ref:59471555
------------------ ------------------------------ ------------
------------------ DIT COMMENTAAR LATEN STAAN AUB -------- -->
