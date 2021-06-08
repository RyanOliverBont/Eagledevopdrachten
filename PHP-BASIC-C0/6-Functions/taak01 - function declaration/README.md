# PHP-BASIC - Functions

## Taak 01 - Functions

## Uitleg

Tot nu toe hebben we steeds losse PHP code geschreven. Maar vaak genoeg wil je een stukje code schrijven en deze in het geheugen bewaren om zo later aan te roepen. Eigenlijk net als een variabele. Maar dan bijvoorbeeld een stukje code dat niet alleen een stukje data opslaat maar ook een berekening maakt en de uitkomst opslaat of _teruggeeft_ net als bij een rekenmachine. Maar het kan ook zijn dat de functie een stuk tekst (string) pakt en hier kunstjes mee uithaald, zoals zoeken in een stuk tekst of alle letters wijzigen in een hoofdletter. Maar natuurlijk kan een functie ook andere dingen. Jij bent de programmeur. Verzin het maar.
Sommige functies zijn al gemaakt voor jou, die zitten in de programmeertaal gebakken. Zo is dat ook bij PHP. `Echo` is eigenlijk ook een functie.

## Syntax

Hoe maak je nou zo'n functie? Zie hieronder.

1. Je begint met het woord function
2. Dan schrijf je een woord die de handeling omschrijft. Wat gaat de functie doen? Dit woord begint altijd met een kleine letter en dan camelCasing voor de andere woorden. Dan zet je achter het woord
3. Dan schrijf je tegen dat gekozen woord twee `()`
4. Dan open je de functie met een `{`
5. En je sluit je functie met een `}`

De ruimte tussen de `{ }` gebruik je om het _doen_ van de functie te coderen. Dus de berekening of de code die gaat zoeken enzovoort.

```php
 function zoekLetterInAlfabet(){
     //je code hierzo...
     // en hier
     // en hier
 }
```

Mooi zo'n functie maar we doen er nog helemaal niks mee. De functie wacht eigenlijk op een commando om te gaan runnen of geactiveerd te worden. Maar zo lang we de functie niet _aanroepen_ of _activeren_ gaat het niks doen.
Dus laten we de functie aanroepen:

```php
 zoekLetterInAlfabet();
```

That's it! De functie roep je aan op dezelfde wijze als stap 2 en stap 3 bij elkaar: `zoekLetterInAlfabet()` met daarachter een `;`

Nu gaat de functie doen waarvoor ie in het leven is geroepen. En we kunnen de functie vaker aanroepen als we dat willen. Dat maakt het zo handig. En nu mag je zelf een functie schrijven.

## Leerdoelen

1. [ ] Ik weet wat functies zijn
2. [ ] Ik volg de juiste regels bij het schrijven van functies
3. [ ] Ik kan een functie aanroepen

## Opdracht

1. Schrijf je code in `index.php`
2. Maak een functie `zetTweeWoordenAanElkaar()`
3. Zorg ervoor dat je twee variabelen maakt: `$woordje` en `$zinnetje` binnen in de functie
4. Geef waarde aan beide variabelen: `'Hallo'` en `'mooie blauwe planeet!'`
5. Maak nog een variable `$heleZin` die bestaat uit de twee eerder gemaakte variabelen en echo de variabele `$heleZin` op het scherm.
6. Roep de functie `zetTweeWoordenAanElkaar()` aan zodat je de volgende zin op het scherm krijgt: "Hallo mooie blauwe planeet!"

## Eindresultaat

> "Hallo mooie blauwe planeet!"

## Bronnen

> [W3 Schools - syntax](https://www.w3schools.com/PHP/php_syntax.asp)  
> [W3 Schools - functies](https://www.w3schools.com/php/php_functions.asp)  
> [Jaap vd Veen - functies](https://phpbasis.jaapvdveen.nl/basiscursus-php/les-3-inleiding-functies/)

<!--- ------------ DIT COMMENTAAR LATEN STAAN AUB ------------
------------------ ------------------------------ ------------
------------------ eagle ref:79860862
------------------ ------------------------------ ------------
------------------ DIT COMMENTAAR LATEN STAAN AUB -------- -->
