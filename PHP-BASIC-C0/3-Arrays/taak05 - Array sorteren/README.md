# PHP-BASIC - Variabelen en Datatypes

## Taak 03 - Array sorteren

## Uitleg

Behalve array_push(), waarme je items kunt toevoegen aan een array kun je ook arrays sorteren. Er zijn meerdere soorten functies die je kunt gebruiken (zie bronnen):

- asort() --> Sorteer de functie op volgorde van laag naar hoog op basis van de `waarde`
- arsort() --> Sorteer de functie op volgorde van hoog naar laag op basis van de `waarde`

Een voorbeeld van laag naar hoog sortering:

```php
    $coders =  ['torvalds', 'gates', 'wozniak', 'bos'];
    asort($coders);

    //de array $coders is nu:
    // ['bos', 'gates', 'torvalds', 'wozniak'];
```

Een voorbeeld van hoog naar laag sortering:

```php
    $coders =  ['torvalds', 'gates', 'wozniak', 'bos'];
    arsort($coders);

    //de array $coders is nu:
    // [ 'wozniak',  'torvalds',  'gates', 'bos'];
```

## Leerdoelen

1. [ ] Ik sorteer een functie van laag naar hoog met asort()
2. [ ] Ik sorteer een functie van hoog naar laag met arsort()

## Opdracht

1. Schrijf je code in `index.php`
2. Maak een indexed array variabele $getallen met de volgende getallen: 676,5345,78657,3,46,21,47,
3. Sorteer de array van laag naar hoog en zet het resultaat in een nieuwe array genaamd: $laag_hoog
4. Maak gebruik van `print_r($laag_hoog)` om de array op je scherm in je browser te tonen.
5. Sorteer de array van hoog naar laag en zet het resultaat in een nieuwe array genaamd: $hoog_laag
6. Maak gebruik van `print_r($hoog_laag)` om de array op je scherm in je browser te tonen.

## Eindresultaat

Twee keer een gesorteerde array op het scherm.

## Bronnen

[PHP - Array Sorting](https://www.php.net/manual/en/array.sorting.php)

<!--- ------------ DIT COMMENTAAR LATEN STAAN AUB ------------
------------------ ------------------------------ ------------
------------------ eagle ref:29317031
------------------ ------------------------------ ------------
------------------ DIT COMMENTAAR LATEN STAAN AUB -------- -->
