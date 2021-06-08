# PHP-BASIC - Conditional Statements

## Taak 03 - Conditional statement - if, else

## Uitleg

In de vorige taak hebben we een `if` statement gemaakt. Bij de opdracht heb je als het goed is de volgende vergelijkingen gemaakt:

* is test1 gelijk aan test2?  - _echo "gelijk"_
* is test1 ongelijk aan test2? - _echo "ongelijk"_
* is test1 identiek aan test2? - _echo "identiek"_
* is test1 groter dan test2? - _echo "test1 is groter dan test2"_
* is test1 kleiner dan test2? - _echo "test1 is kleiner dan test2"_
* is test1 groter of gelijk aan test2? - _echo "test1 is groter of gelijk aan test2"_
* is test1 kleiner of gelijk aan test2? - _echo "test1 is kleiner of gelijk aan test2"_

Als alles goed is gegaan was dit je output:
>ongelijk  
>identiek  
>test1 is groter dan test2  
>test1 is groter of gelijk aan test2  

_Dus als je goed kijkt waren 4 van de 7 vergelijkingen waar (true)._ Als dat het enige is wat je wilt testen dan is het goed maar misschien wil je ook wel code uitvoeren als de waarde niet waar is (false). Dit doen we door `else` aan de `if` statement toe te voegen.

_De syntax van een if else statement:_  

```php
    if(condition){
        //dit blokje code wordt uitgevoerd als de condition true is
    }else{
        //dit blokje code wordt uitgevoerd als de condition false is
    }
```

Je weet hoe je het eerste gedeelte van de code schrijven:

```php
$variabele1 = 10;
$variabele2 = 6;

if($variabele1 == $variabele2) {
    echo "de vergelijking is waar!";
}
```

Om nu ook een output te laten zien als de vergelijking false is moeten we onder het `if` codeblok een codeblok toevoegen welke we beginnen met `else` de gehele code komt er dan zo uit te zien:

```php
$variabele1 = 10;
$variabele2 = 6;

if($variabele1 == $variabele2) {
    echo "de vergelijking is waar!";
}
else {
    echo "de vergelijking is niet waar!";
}
```

_Let goed op de schrijfwijze, waar staan haakjes en wat staat er tussen de haakjes, als je niet de juiste syntax gebruikt weet PHP echt niet wat het moet doen!_

## Leerdoelen

1. [ ] ik weet wat een if else statement is
2. [ ] Ik maak een if else statement met verschillende vergelijkingen
3. [ ] Ik volg de juiste regels voor het schrijven van een if else statement

## Opdracht

1. Schrijf je code in `index.php`
2. Maak de volgende variabelen aan  
   * _test1_ met de waarde: 3
   * _test2_ met de waarde: 6
3. Maak de volgende vergelijkingen in een `if else` statement en toon de bijbehorende tekst met `echo` op het scherm.
   * is test1 gelijk aan test2?  - true: _echo "gelijk"_ - false: echo _"niet gelijk"_
   * is test1 ongelijk aan test2? - _bedenk zelf de tekst voor true en false_
   * is test1 identiek aan test2? - _bedenk zelf de tekst voor true en false_
   * is test1 groter dan test2? - _bedenk zelf de tekst voor true en false_
   * is test1 kleiner dan test2? -_bedenk zelf de tekst voor true en false_
   * is test1 groter of gelijk aan test2? - _bedenk zelf de tekst voor true en false_
   * is test1 kleiner of gelijk aan test2? - _bedenk zelf de tekst voor true en false_
4. _Gebruik HTML in je `echo` statement om de uitkomst onder elkaar te tonen in plaats van naast elkaar_

## Eindresultaat

Als je de opdracht goed uitvoert, wordt de volgende tekst getoond in je browser:
>niet gelijk  
>ongelijk
>identiek  
>de tekst die je zelf hebt bedacht  
>test1 is kleiner dan test2  
>de tekst die je zelf hebt bedacht  
>test1 is kleiner of gelijk aan test2

## Bronnen

>[Jaap vd Veen - statements](https://phpbasis.jaapvdveen.nl/basiscursus-php/les-2-inleiding-statements/)  
>[W3 Schools - operators](https://www.w3schools.com/php/php_operators.asp)  
>[W3 Schools - if else](https://www.w3schools.com/php/php_if_else.asp)

<!--- ------------ DIT COMMENTAAR LATEN STAAN AUB ------------
------------------ ------------------------------ ------------
------------------ eagle ref:5387306
------------------ ------------------------------ ------------
------------------ DIT COMMENTAAR LATEN STAAN AUB -------- -->
