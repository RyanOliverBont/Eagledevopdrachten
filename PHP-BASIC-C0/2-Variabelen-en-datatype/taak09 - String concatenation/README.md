# PHP-BASIC - Variabelen en Datatype

## Taak 09 - String operators - concatenation

## Uitleg

Je hebt geleerd dat je variabelen en tekst (gewone tekst of HTML-code) samen via `echo` op het scherm kan tonen door ze samen tussen quotes (") te zetten. In sommige gevallen krijg je niet het gewenste resultaat en moet je de verschillende stukken aan elkaar rijgen (concatenation). dit doe je door de string operator `.` te gebruiken

**In PHP zijn dit de regels voor het gebruik van de `.` string operator:**

- Alles wat tekst (of HTML) is, moet je tussen quotes (") zetten.
- Waar je een spatie in je tekst wilt krijgen, type je ook een spatie.
- Je variabelen moet je _niet_ tussen quotes zetten.
- Verbind de verschillende onderdelen tekst en variabelen met elkaar door er een `.` tussen te zetten.

_Voorbeeld:_

> Je hebt twee variabelen `$voornaam` en `$leeftijd`. Op het scherm moet de volgende tekst komen te staan: Jouw naam is Tom en je bent 19 jaar oud. Dan ziet de code er als volgt uit:

```php
    $voornaam = "Tom";
    $leeftijd = 19;
    echo "Jouw naam is " . $voornaam . " en je bent " . $leeftijd . " jaar oud.";
```

> _Bekijk bovenstaande code eens goed! Zie je dat er hier en daar spaties tussen de tekst en de " staan zoals na het woordje is? Als je dit niet doet, komt alle tekst tegen elkaar te staan en krijg je niet het gewenste resultaat!_

## Leerdoelen

> 1. [ ] Ik weet wat de string operator: concatenation is
> 2. [ ] Ik kan variabelen en tekst op het scherm tonen met de echo statement en het gebruik de string operator: `.`

## Opdracht

> 1. Schrijf je code in `index.php`
> 2. Maak 2 variabelen aan: _leeftijd_ en _voornaam_ geef als waarde jouw naam en leeftijd.
> 3. Toon de volgende tekst op het scherm (met het gebruik van concatenation) _Jouw naam is xxx en je bent je xxx jaar oud._
>
> _Waar hierboven xxx staat moet natuurlijk jouw echte naam en leeftijd staan!_

## Eindresultaat

Als je de opdracht goed uitvoert, wordt de volgende tekst getoond in je browser:

> Jouw naam is xxx en je bent je xxx jaar oud.
>
> _Waar hierboven xxx staat moet natuurlijk jouw echte naam en leeftijd staan!_

## Bronnen

> [W3 Schools - echo](https://www.w3schools.com/php/php_echo_print.asp)

<!--- ------------ DIT COMMENTAAR LATEN STAAN AUB ------------
------------------ ------------------------------ ------------
------------------ eagle ref:6352652
------------------ ------------------------------ ------------
------------------ DIT COMMENTAAR LATEN STAAN AUB -------- -->
