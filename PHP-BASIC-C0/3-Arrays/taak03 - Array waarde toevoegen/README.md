# PHP-BASIC - Variabelen en Datatypes

## Taak 03 - Array waarde toevoegen

## Uitleg

Je kunt uiteraard niet alleen arrays uitlezen en/of wijzigen maar je kunt ook waardes toevoegen. Er zijn verschillende manier hiervoor. Hieronder worden er twee uitgelegd:

### Via index

Je kunt een nieuwe index `$coders[index]` gebruiken om een nieuwe waarde toe te voegen:

`$array[nieuweIndex] = nieuweWaarde;`

```php
    $coders =  ['torvalds', 'gates', 'wozniak'];
    $coders[3] =  'bos';

    //de array $coders is nu:
    // ['torvalds', 'gates', 'wozniak', 'bos'];
```

### Via ingebouwde functie

Je kunt ook gebruik maken van array functies van PHP. Met `array_push()` kun je een waarde aan het eind van je array plaatsen. Dan hoef je dus niet de _index_ te weten van de array.

```php
    $coders =  ['torvalds', 'gates', 'wozniak'];
    array_push($coders, 'bos');
    //de array $coders is nu:
    // ['torvalds', 'gates', 'wozniak', 'bos'];
```

## Leerdoelen

1. [ ] Ik voeg een waarde toe aan een array met behulp van de laatste index
2. [ ] Ik voeg een waarde toe aan een array met behulp van de array_push() functie.

## Opdracht

1. Schrijf je code in `index.php`
2. Maak een indexed array variabele `$myHeroes` en vul deze met een held. Mag fictief of echt zijn.
3. Voeg nog een held toe met behulp van de index.
4. Voeg nog een held toe met behulp van `array_push()`
5. Gebruik `print_r()` om de gehele array te tonen in je browser

## Eindresultaat

Een weergave van een array met drie helden.

## Bronnen

[W3 Schools - arrays](https://www.w3schools.com/PHP/php_arrays.asp)
[W3 Schools - array_push()](https://www.w3schools.com/Php/func_array_push.asp)

<!--- ------------ DIT COMMENTAAR LATEN STAAN AUB ------------
------------------ ------------------------------ ------------
------------------ eagle ref:29317031
------------------ ------------------------------ ------------
------------------ DIT COMMENTAAR LATEN STAAN AUB -------- -->
