# PHP-BASIC - Arithmetics

## Taak 01 - Arithmetic Operators

## Uitleg

Een van de handelingen die je in een applicatie wil kunnen gebruiken is rekenen. Bijvoorbeeld om in een webwinkel de prijs te berekenen als iemand niet één maar twee producten heeft besteld.

Om te kunnen rekenen heb je **Arithmic Operators** nodig. Om PHP te vertellen of hij moet optellen, vermenigvuldigen of een andere berekening moet maken.

Dit zijn de wiskunde operators:

- `+`
- `*`
- `/`
- `-`
  
_Natuurlijk kun je alleen rekenen met cijfers dus moeten de variabelen waarmee je rekent van het datatype integer of float zijn!_

### Voorbeeld

Je hebt twee variabelen `$getal1` en `$getal2` en je wilt hier mee rekenen, dan geeft onderstaande code 15 op het scherm terug (want 5+10 = 15):

```php
    $getal1 = 5;
    $getal2 = 10;
    echo $getal1 + $getal2;
```

Als je de variabelen:

- van elkaar wilt aftrekken, gebruik je `$getal1` - `$getal2`
- met elkaar wilt vermenigvuldigen, gebruik je `$getal1` * `$getal2`
- door elkaar wilt delen, gebruik je `$getal1` / `$getal2`

>_er zijn nog twee arithmic operators: % (modulus) en ** (). Hier komen we later op terug._

## Leerdoelen

1. [ ] Ik weet wat arithmitc operators zijn
2. [ ] Ik kan rekenen met twee integer variabelen

## Opdracht

1. Schrijf je code in `index.php`
2. Maak twee integervariabelen aan: _getal1_ en _getal2_ geef deze een eigen gekozen waarden _getallen natuurlijk!_
3. Maak met deze variabelen een +, een -, een * en een / som en toon de uitkomst van de sommen op het scherm met `echo`

## Eindresultaat

Als je de opdracht goed uitvoert wordt de volgende tekst getoond in je browser:
>De uitkomst van je + som  
>De uitkomst van je - som  
>De uitkomst van je * som  
>De uitkomst van je / som  

## Bronnen

[W3 Schools - operators](https://www.w3schools.com/php/php_operators.asp)

<!--- ------------ DIT COMMENTAAR LATEN STAAN AUB ------------
------------------ ------------------------------ ------------
------------------ eagle ref:47863499
------------------ ------------------------------ ------------
------------------ DIT COMMENTAAR LATEN STAAN AUB -------- -->
