# PHP-BASIC - Variabelen en Datatype

## Taak 05 - Datatypes - tonen op het scherm met gettype()

## Uitleg

Je weet nu uit welke verschillende datatypen een variabele kan bestaan.
Er zijn momenten dat je wil checken wat het datatype van een variabele is dit doe je met de ingebouwde PHP-functie `gettype();`

>_met `gettype()` kan je het datatype van een variabele opvragen_

**In PHP zijn dit de regels voor het gebruik van gettype():**

* Om PHP te vertellen dat je het datatype van een variabele op het scherm wilt tonen begin je met `gettype`.  
* De naam van de variabele waar van je het datatype wilt tonen zet je tussen `()`.
>
>_de syntax is: `gettype(variable);`_
>
Stel we hebben een variabele `$voornaam` met de waarde Tom en we willen weten wat het datatype van deze variabele is dan ziet de code er zo uit:

```php
    $voornaam = "Tom";
    echo gettype($voornaam);
```

## Leerdoelen

>1. [ ] Ik weet wat gettype() is

## Opdracht

>1. Schrijf je code in `index.php`
>2. Maak een variabele _voornaam_ aan en geef deze de waarde Tom
>3. Toon het datatype van de variabele _voornaam_ op het scherm met `gettype();`

## Eindresultaat

Als je de opdracht goed uitvoert wordt de volgende tekst getoond in je browser:
>string

## Bronnen

>[W3 Schools - datatypes](https://www.w3schools.com/php/php_datatypes.asp)  
>[W3 Schools - gettype](https://www.w3schools.com/php/func_var_gettype.asp)

<!--- ------------ DIT COMMENTAAR LATEN STAAN AUB ------------
------------------ ------------------------------ ------------
------------------ eagle ref:4372545
------------------ ------------------------------ ------------
------------------ DIT COMMENTAAR LATEN STAAN AUB -------- -->
