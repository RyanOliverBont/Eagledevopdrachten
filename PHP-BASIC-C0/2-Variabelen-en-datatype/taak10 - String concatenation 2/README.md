# PHP-BASIC - Variabelen en Datatype

## Taak 10 - String operators - concatenation

## Uitleg

Je hebt geleerd hoe je tekst en variabelen met elkaar kan verbinden door de string operator `.` te gebruiken.

Naast het gebruik van `.` om tekst en variabelen aan elkaar te rijgen is er ook een andere manier.

>Voorbeeld:  
Stel je maakt een spel waar de speler steeds een item aan een lijst moet toevoegen dan kun je dit in code doen met:

```php
    $item = "<li>tas</li>";
    $item = $item . "<li>bal</li>";
```

>_Het spel moet voor een lijst ook de oude waarde van de variabele onthouden daarom staat er twee keer $item_.  
>
>Een veel snellere (en makkelijkere) manier om dit te doen is:

```php
    $item = "<li>tas</li>";
    $item .= "<li>bal</li>";
```
>
## Leerdoelen

>1. [ ] Ik weet wat stringoperators zijn
>2. [ ] Ik kan een extra tekstwaarde aan een stringvariabele toevoegen

## Opdracht

>1. Schrijf je code in `index.php`
>2. Maak een stringvariabele aan: _item_ en geef deze een zelfgekozen waarde _een string natuurlijk!_
>3. Voeg nog twee items toe aan de variabele _item_ door `.=` te gebruiken en toon de uitkomst in een unordered list op het scherm met `echo`
>4. _Gebruik HTML in je `echo`-statement om de uitkomst onder elkaar te tonen in plaats van naast elkaar_

## Eindresultaat

Als je de opdracht goed uitvoert, wordt de volgende tekst getoond in je browser:

>* item 1
>* item 2
>* item 3

__Waar hierboven item 1, item 2, item 3 staat moet natuurlijk de waarde staan die jij aan de variabele hebt gegeven!__

## Bronnen

>[W3 Schools - operators](https://www.w3schools.com/php/php_operators.asp)

<!--- ------------ DIT COMMENTAAR LATEN STAAN AUB ------------
------------------ ------------------------------ ------------
------------------ eagle ref:88708730
------------------ ------------------------------ ------------
------------------ DIT COMMENTAAR LATEN STAAN AUB -------- -->
