# PHP-BASIC - Conditional Statements

## Taak 05 - Conditional statement - Switch

## Uitleg

Je hebt geleerd wat de conditional statement `if, elseif, else` is
>
Als je maar een waarde wilt vergelijken met een lijst van mogelijke waardes is het vaak handiger om `switch` te gebruiken.

**In PHP zijn dit de regels voor het opschrijven van een `switch` statement:**

>_De syntax van een `switch` statement:_  

```php
switch(voornaam){

case 'lotte':
        echo 'Lotte is erg goed in rugby';
    break;

    case 'abdel':
        echo 'Abdel is een toffe gozer';
    break;

    case 'muhammed':
        echo 'Muhammed is altijd op tijd';
    break;

    case 'bas':
        echo 'Bas kan zich goed focusen';
    break;
}
```

Stel je maakt een applicatie waar je bij iedere score een andere waarde moet tonen, dan kun je dit doen met de `switch` statement.

Eerst moeten we de variabelen aanmaken:

```php
    $score = 10;
```

* Schrijf voor de vergelijking eerst `switch()` op -> _PHP begrijpt nu dat je een vergelijking wilt maken_
* Schrijf tussen de `()` de variabele die je wilt testen op:  
* PHP verwacht nu een `{` om het begin van het codeblok aan te geven
* Daarna schrijf je het woord `case` met daarachter de waarde die je wilt checken _let op: doe dit volgens de regels van de datatype: strings tussen quotes, getallen niet!_
* Daarna verwacht PHP een `:`
* Op de regel daarna verwacht PHP de code die hij moet uitvoeren
* Voor je weer een nieuwe `case` begint, zet je `break;` neer
* Om aan PHP te vertellen dat we aan het einde gekomen zijn van het `switch` codeblok, sluiten we af met een `}`
* Net als bij `if, elseif, else` kun je als alles niet waar is een andere waarde terug laten komen. Zet in dit geval in plaats van `case waarde` het woord `default:` neer.
>
Dit is hoe de gehele code er uit moet zien:

```php
$score = 10;

switch($score) {
    case 10:
    echo "Wow wat een fantastische score!";
    break;
    case 9:
    echo "Wow bijna alle punten nog 1 te gaan!";
    break;
    case 8:
    echo "Goed bezig, bijna alle punten!";
    break;
    case 7:
    echo "Ga zo door!";
    break;
    default:
    echo "Nog even oefenen dan haal je vast alle punten!";
}
```

>_De meest gemaakte fout bij een `if` statement is dat de vergelijking met één `=` wordt geschreven: `($variabele1 = $variabele2)` in plaats van `($variabele1 == $variabele2)`. Let daar goed op, want je code werkt niet als je het fout doet!_
>
## Leerdoelen

1. [ ] ik weet wat een switch statement is
2. [ ] Ik maak een een switch statement is
3. [ ] Ik volg de juiste regels voor het schrijven van een switch statement

## Opdracht

1. Schrijf je code in `index.php`
2. Gebruik bovenstaande code
3. Verander de waarde van de variabele `$score` en toon de bijbehorende melding met `echo` op het scherm. Zorg dat elke vergelijking een keer waar is

## Eindresultaat

Als je de opdracht goed uitvoert, wordt de volgende tekst getoond in je browser:
Wow wat een fantastische score!  
Wow bijna alle punten nog 1 te gaan!  
Goed bezig, bijna alle punten!  
Ga zo door!  
Nog even oefenen dan haal je vast alle punten!  

>_de volgorde van de output kan ook anders zijn. Dat hangt af van wat jij per keer hebt ingevuld als waarde van de $variabele score_

## Bronnen

[Jaap vd Veen - statements](https://phpbasis.jaapvdveen.nl/basiscursus-php/les-2-inleiding-statements/)  
[W3 Schools - operators](https://www.w3schools.com/php/php_operators.asp)  
[W3 Schools - switch](https://www.w3schools.com/php/php_switch.asp)

<!--- ------------ DIT COMMENTAAR LATEN STAAN AUB ------------
------------------ ------------------------------ ------------
------------------ eagle ref:30692987
------------------ ------------------------------ ------------
------------------ DIT COMMENTAAR LATEN STAAN AUB -------- -->
