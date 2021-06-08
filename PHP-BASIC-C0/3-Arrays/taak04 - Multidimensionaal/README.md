# PHP-BASIC - Variabelen en Datatypes

## Taak 04 - Multidimensionaal

## Uitleg

Zoals je bij de vorige opdrachten hebt gezien kun je meerdere datatypes in een array stoppen. Bijvoorbeeld string, of integer. Maar je kunt ook boolean (true of false) en decimale getallen kwijt.

Je kunt allemaal hetzelfde type in een array stoppen zoals bij de vorige opdrachten. De `$movies`-array bevatte alleen maar string-typen.

Je kunt natuurlijk ook verschillende typen toevoegen:

```php
    $lijstDerDingen = [true,"true", 1, 0 "false", false, 5.5];
```

Echter kunnen we een array nog complexer maken. Een array is namelijk ook een soort datatype en die kun je ook in een array plaatsen:

```php
    $complexeLijst = [ [1,2,3], ["een", "twee", "drie"], true, false  ];
```

Maar hoe lees je dan een waarde van zo'n array uit? Kijk eens naar het volgende voorbeeld:

```php
    $complexeLijst = [ [1,2,3], ["een", "twee", "drie"], true, false  ];

    echo $complexeLijst[0][1];
```

Het resultaat van deze echo is: __2__. Namenlijk de __2__ uit deze array: `[1,2,3]`

De code `$complexeLijst[0]` spreekt de eerste plek aan van de array `$complexeLijst` aan. Echter staat op deze plek geen string of nummer maar weer een array `[1,2,3]` . Om de waardes van deze array uit te lezen kun je weer opnieuw tellen en je begint altijd met __0__. En dan krijg je dit: `$complexeLijst[0][1];`

```php
    $complexeLijst  [0]     [1];
```

## Leerdoelen

1. [ ] Ik kan een multidimensionale array maken
2. [ ] Ik lees een multidimensionale array en kan waardes eruit op het scherm tonen.

## Opdracht

1. Schrijf je code in `index.php`
2. Maak een indexed array variabele `$abcGetallen`
3. Voeg een array toe met de eerste 4 letters van het alfabet.
4. Voeg nog een array toe met de volgende getallen 24,56,78,90
5. Gebruik `print_r()` om de gehele array te tonen in je browser
6. Gebruik echo om de volgende waardes te tonen: `a56` en `c90`

## Eindresultaat

De waardes uit `$abcGetallen` worden getoond

## Bronnen

[W3 Schools - arrays](https://www.w3schools.com/PHP/php_arrays.asp)
[W3 Schools - array_push()](https://www.w3schools.com/Php/func_array_push.asp)

<!--- ------------ DIT COMMENTAAR LATEN STAAN AUB ------------
------------------ ------------------------------ ------------
------------------ eagle ref:29317031
------------------ ------------------------------ ------------
------------------ DIT COMMENTAAR LATEN STAAN AUB -------- -->
