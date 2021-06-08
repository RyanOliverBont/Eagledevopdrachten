# PHP-BASIC - Conditional Statements

## Taak 06 - Logical Operators

## Uitleg

Je hebt geleerd hoe je twee waardes kan vergelijken en hoe je `if elseif else` en `switch` moet gebruiken.

Soms wil je meer dan één vergelijking maken, bijvoorbeeld als je wilt vergelijken of een getal groter dan 5 is, maar kleiner dan 10. Dat lukt niet als je alleen kleiner dan 10 (`$x < 10`) gebruikt. Je wil ook nog weten of het getal groter is dan 5 (`$x > 5`). Hiervoor kun je logical operators gebruiken

>_Met logical operators kun je vergelijkingen (conditional statements) combineren!_

In PHP heb je verschillende soorten logical operators namelijk:

>* `&&`: True als beide waardes waar zijn
>* `||`: True als een of beide van de twee waardes waar zijn
>* `xor`: True als een van de twee waardes waar is maar niet beide
>* `!`: (staat voor Not) True als de vergelijking niet waar is

**In PHP zijn dit de regels voor het opschrijven van een logical operator:**

* Zet eerst de eerste vergelijking neer zoals `$x < 10`
* Gevolgd door de logical operator die je wilt gebruiken, bijvoorbeeld `&&`
* Gevolgd door de tweede vergelijking `$x > 5`  
>
Dus als we willen checken of een variabele groter is dan 5 maar kleiner dan 10 dan ziet dat er in code zo uit:

```php
$var1 = 3;

if($var1 < 10 && $var1 > 5) {
    echo "het getal zit tussen de 10 en de 5!";
} else {
    echo "het getal is groter dan 10 of kleiner dan 5!";
}
```
>
## Leerdoelen

1. [ ] ik weet wat logical operators zijn
2. [ ] Ik gebruik logical operators in een conditional statement
3. [ ] Ik volg de juiste regels voor het schrijven van een logical operator

## Opdracht

1. Schrijf je code in `index.php`
2. Maak twee variabelen aan
3. Maak vier `if else` statements en gebruik voor elke statement een andere logical operator. Gebruik voor de vergelijking de twee variabelen die je hebt aangemaakt.
4. Toon voor elke vergelijking een logische tekst op het scherm

## Eindresultaat

Als je de opdracht goed uitvoert, wordt de volgende tekst getoond in je browser:
>Een vergelijking met &&  
>Een vergelijking met ||  
>Een vergelijking met xor  
>Een vergelijking met !  

## Bronnen

[Jaap vd Veen - statements](https://phpbasis.jaapvdveen.nl/basiscursus-php/les-2-inleiding-statements/)  
[W3 Schools - operators](https://www.w3schools.com/php/php_operators.asp)  
[W3 Schools - if else](https://www.w3schools.com/php/php_if_else.asp)

<!--- ------------ DIT COMMENTAAR LATEN STAAN AUB ------------
------------------ ------------------------------ ------------
------------------ eagle ref:5827063
------------------ ------------------------------ ------------
------------------ DIT COMMENTAAR LATEN STAAN AUB -------- -->
