# PHP-BASIC - Arithmetics

## Taak 02 - Assignment Operators

## Uitleg

Je hebt geleerd hoe je met variabelen kan rekenen door het gebruik van Arithmic Operators (+ - * /).

Naast het gebruik van `$getal1` + `$getal2` waar je twee integer- of float-variabelen bij elkaar optelt, is er ook een andere manier.

### Voorbeeld

Stel je maakt een spel waar de score steeds 10 hoger moet worden als de speler een punt scoort. Dan zou je dit kunnen doen met de volgende code:

```php
    $score = $score + 10;
```

>Een veel snellere (en makkelijkere) manier om dit te doen is:

```php
    $score += 10
```

Als je een bepaald getal (bijvoorbeeld 10):

- van een variabele wilt aftrekken, gebruik je `$variabele` -`= 10`
- met een variabele wilt vermenigvuldigen, gebruik je `$variabele` *`= 10`
- door een variabele wilt delen, gebruik je `$variabele` /`= 10`

>_er is nog een andere assignmentoperators: %= (modulus). Hier komen we later op terug._

## Leerdoelen

1. [ ] Ik weet wat assignment-operators zijn
2. [ ] Ik kan de waarde van een variabele veranderen met een assignment operator

## Opdracht

1. Schrijf je code in `index.php`
2. Maak een integer-variabele aan: _getal1_ en geef deze een zelfgekozen waarde _een getal natuurlijk!_
3. Pas de waarde van de variabele _getal1_ aan door `+=`, `-=`, `*=` en `/=` te gebruiken en toon de uitkomst op het scherm met `echo`
4. _Gebruik HTML in je `echo` statement om de uitkomst onder elkaar te tonen in plaats van naast elkaar_

## Eindresultaat

Als je de opdracht goed uitvoert wordt de volgende tekst getoond in je browser:
>De uitkomst van +=  
>De uitkomst van -=
>De uitkomst van *=  
>De uitkomst van /=  

## Bronnen

[W3 Schools - operators](https://www.w3schools.com/php/php_operators.asp)

<!--- ------------ DIT COMMENTAAR LATEN STAAN AUB ------------
------------------ ------------------------------ ------------
------------------ eagle ref:22836584
------------------ ------------------------------ ------------
------------------ DIT COMMENTAAR LATEN STAAN AUB -------- -->
