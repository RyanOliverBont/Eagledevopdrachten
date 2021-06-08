# PHP-BASIC - Conditional Statements

## Taak 02 - Conditional statement - if

## Uitleg

Je hebt geleerd wat comparison operators zijn en dat je met `var_dump();` op het scherm kan tonen of een vergelijking tussen twee variabelen true (waar) of false (onwaar) is.
>
Behalve om te checken wat een waarde is heb je aan `var_dump();` niet zoveel als je een applicatie maakt, je maakt namelijk een vergelijking om daarna te bepalen welke code er uitgevoerd moet worden

Stel je maakt een spel en je moet bepalen of de speler het juiste antwoord heeft gegeven. Dan gaat dat als volgt:

* Heeft de gebruiker het juiste antwoord gegeven dan komt er 1 bij zijn score.
* Heeft de gebruiker niet het juiste antwoord gegeven dan gebeurt er niks.

>_In PHP gebruik je conditional statements om waardes te vergelijken_  

In PHP heb je twee verschillende soorten conditional statements namelijk:

* `if, elseif, else`  
  * Gebruik je om èèn of meerdere waardes te vergelijken
  * De uitkomst van de vergelijking (true, false) bepaalt welk stuk code er uitgevoerd moet worden
* `switch`  
  * Gebruik je om èèn waarde te vergelijken tegenover meerdere mogelijke overeenkomsten

We beginnen simpel met een `if` statement:

**In PHP zijn dit de regels voor het opschrijven van een if statement:**

### Syntax

```php
if(condition){
  //code die uitgevoerd worden als de conditie TRUE is.
}
```

>\Nu gaan we vergelijken of `$variabele1` gelijk (==) is aan `$variabele2` als de vergelijking waar (true) is tonen we de volgende tekst op het scherm _`de vergelijking is waar!`_.

Eerst moeten we de variabelen aanmaken:

```php
    $variabele1 = 10;
    $variabele2 = 10;
```

* Schrijf voor de vergelijking eerst `if()` op -> _PHP begrijpt nu dat je een vergelijking wil maken_
* Schrijf tussen de `()` de vergelijking die je wilt maken op:  
`$variabele1 == $variabele2` -> _PHP verwacht de vergelijking tussen de `()` na de if, anders snapt hij het niet!_  
>
Dit is hoe de code er dan uit komt te zien:

```php
if($variabele1 == $variabele2)
```

* PHP zal als de vergelijking true (waar) is doorgaan en verwacht een `{`
* Op de regel daarna verwacht PHP de code die hij moet uitvoeren:  
`echo "de vergelijking is waar!";`
* Om aan PHP te vertellen dat we aan het einde gekomen zijn van de code die hij moet uitvoeren als de vergelijking waar is sluiten we af met een `}`  
>
Dit is hoe de gehele code er uit moet zien:

```php
$variabele1 = 10;
$variabele2 = 10;

if($variabele1 == $variabele2) {
    echo "de vergelijking is waar!";
}
```

_De meest gemaakte fout bij een `if` statement is dat de vergelijking met èèn `=` wordt geschreven `($variabele1 = $variabele2)` in plaats van `($variabele1 == $variabele2)`. Let daar goed op want je code gaat niet werken als je het fout doet!_

## Leerdoelen

1. [ ] Ik weet wat de verschillende conditional statements zijn
2. [ ] ik weet wat een if statement is
3. [ ] Ik maak een if statement met verschillende vergelijkingen
4. [ ] Ik volg de juiste regels voor het schrijven van een if statement

## Opdracht

1. Schrijf je code in `index.php`
2. Maak de volgende variabelen aan  
   * _test1_ met de waarde: 10
   * _test2_ met de waarde: 6
3. Maak de volgende vergelijkingen in een `if` statement en toon de bijbehorende tekst met `echo` op het scherm als de voorwaarde waar is.
   * is test1 gelijk aan test2?  - _echo "gelijk"_
   * is test1 ongelijk aan test2? - _echo "ongelijk"_
   * is test1 identiek aan test2? - _echo "identiek"_
   * is test1 groter dan test2? - _echo "test1 is groter dan test2"_
   * is test1 kleiner dan test2? - _echo "test1 is kleiner dan test2"_
   * is test1 groter of gelijk aan test2? - _echo "test1 is groter of gelijk aan test2"_
   * is test1 kleiner of gelijk aan test2? - _echo "test1 is kleiner of gelijk aan test2"_
4. _Gebruik HTML in je `echo` statement om de uitkomst onder elkaar te tonen in plaats van naast elkaar_

## Eindresultaat

Als je de opdracht goed uitvoert, wordt de volgende tekst getoond in je browser:
>ongelijk  
>identiek  
>test1 is groter dan test2  
>test1 is groter of gelijk aan test2  

## Bronnen

[Jaap vd Veen - statements](https://phpbasis.jaapvdveen.nl/basiscursus-php/les-2-inleiding-statements/)  
[W3 Schools - operators](https://www.w3schools.com/php/php_operators.asp)  
[W3 Schools - if else](https://www.w3schools.com/php/php_if_else.asp)

<!--- ------------ DIT COMMENTAAR LATEN STAAN AUB ------------
------------------ ------------------------------ ------------
------------------ eagle ref:74665567
------------------ ------------------------------ ------------
------------------ DIT COMMENTAAR LATEN STAAN AUB -------- -->
