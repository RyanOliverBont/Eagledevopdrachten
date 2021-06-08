# PHP-BASIC - Variabelen en Datatype

## Taak 11 - Variabelen - type en waarde op het scherm tonen met var_dump()

## Uitleg

Je hebt geleerd dat je met `gettype()` het datatype van een variabele kan opvragen.

Er zijn gevallen (bijvoorbeeld bij het testen op fouten) dat je niet alleen het datatype van een variabele wil weten, maar ook zijn waarde.
>
>_Met de ingebouwde PHP-functie `var_dump()` kun je het datatype en de waarde van een variabele op het scherm tonen._
>
**In PHP zijn dit de regels voor het gebruik van gettype():**

* Om PHP te vertellen dat je het datatype van een variabele op het scherm wilt tonen begin je met `var_dump`.  
* De naam van de variabele waarvan je de waarde en het datatype wilt tonen zet je tussen `()`.
>
>_de syntax is: `var_dump(var1, var2, ...);`_
>
Stel we hebben een variabele $voornaam met de waarde Tom en we willen weten wat het datatype van deze variabele is dan ziet de code er zo uit:

```php
    $voornaam = "Tom";
    var_dump($voornaam);
```

>De output van de code hierboven is: string(3) "Tom"  
>
>Dus wat je terug krijgt bij een str# PHP-BASIC
ing is:  
>_datatype(aantal karakters) waarde van de stringvariabele_
>
>Bij een integervariabele met de waarde 12 krijg je dit terug:  
>_int(12)_
>
## Leerdoelen

>1. [ ] Ik kan via var_dump() het datatype en de waarde van een variabele op het scherm tonen

## Opdracht

>1. Schrijf je code in `index.php`
>2. Maak een variabele _test_ aan en geef deze een door jou gekozen waarde
>3. Toon de waarde en het datatype van de variabele _test_ op het scherm met `var_dump();`

## Eindresultaat

Als je de opdracht goed uitvoert wordt de volgende tekst getoond in je browser:
>datatype(de waarde of het aantal karakters) de waarde als het een string is

## Bronnen

>[W3 Schools - datatypes](https://www.w3schools.com/php/php_datatypes.asp)  
>[W3 Schools - var_dump](https://www.w3schools.com/php/func_var_var_dump.asp)

<!--- ------------ DIT COMMENTAAR LATEN STAAN AUB ------------
------------------ ------------------------------ ------------
------------------ eagle ref:35237
------------------ ------------------------------ ------------
------------------ DIT COMMENTAAR LATEN STAAN AUB -------- -->
