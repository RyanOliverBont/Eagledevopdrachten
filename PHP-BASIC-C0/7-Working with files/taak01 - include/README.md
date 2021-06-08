# PHP-BASIC - Working with files

## Taak 01 - Include

## Uitleg

In een website heeft elke pagina hetzelfde hoofdmenu en dezelfde footer. Tot nu toe hebben jullie dit steeds op elke pagina in een website neer moeten zetten.  
Dit is best onhandig want als er wat aan het menu aangepast moest worden dan moest dat op elke pagina en dat kan voor fouten zorgen in het menu.

Hier is in PHP een handige oplossing voor! Het is namelijk mogelijk om een php (of html) file te laden in een andere php file. zo Kan je dus een php file voor je menu of voor je functies maken welke je in elke pagina kan invoegen. Zo heb je dus maar 1 file nodig voor je menu of je functies.

_Je kan een PHP file invoegen in een andere PHP file met de `include` statement_

Met `include` vertel je PHP dat hij de file mag invoegen, wordt de file niet gevonden _-omdat je het verkeerde pad hebt opgegeven of omdat de file niet bestaat-_ dan krijg je een **_waarschuwing_** maar de rest van het script wordt gewoon uitgevoerd.

```php
Warning: include(xxx): failed to open stream: No such file or directory in xxx on line xx
```

**In PHP zijn dit de regels voor het opschrijven van een include (of require):**

De syntax van include

`include "voorbeeld.php";`  

* Als je een PHP file maakt met alleen een html menu hoef je alleen de html van een menu neer te zetten `<body>` en `<head>` etc._ tags etc zijn niet nodig!
* Zorg dat het pad waar je naar verwijst klopt, staat de file bijvoorbeeld in een map _includes_ verwijs dan ook naar deze map, bijvoorbeeld: _includes/functions.php_.
* Include de file op de regel waar je de code wilt hebben.

```html
<html>
<head></head>
<body>

    <div class="menu">
        <?php include 'menu.php';?>
    </div>

</body>
</html>
```

* Include je een PHP file met functies voeg deze dan toe binnen de `<head></head>` tags.

```html
<html>
<head>
     <title></title>
     <?php include 'includes/functions.php';?>
</head>
```

## Leerdoelen

1. [ ] Ik weet wat include is

## Opdracht

1. Schrijf je code in `index.php`
2. Maak een nieuwe file `menu.php` aan en zet deze in een map _includes_
3. Maak een menu met een unordered list en 3 menu-items in `menu.php`
4. Het is aan jou om ervoor te zorgen dat als index.php ingeladen wordt in de browser dat je het menu kunt zien. (_Tip: staat een bestand in een subfolder dan include je deze zo: `include 'mapnaam/bestand.php`

## Eindresultaat

Als je de opdracht goed uitvoert, wordt de volgende tekst getoond in je browser:

* menu-item 1
* menu-item 2
* menu-item 3

## Bronnen

>[W3 Schools - includes](https://www.w3schools.com/php/php_includes.asp)

<!--- ------------ DIT COMMENTAAR LATEN STAAN AUB ------------
------------------ ------------------------------ ------------
------------------ eagle ref:25213464
------------------ ------------------------------ ------------
------------------ DIT COMMENTAAR LATEN STAAN AUB -------- -->
