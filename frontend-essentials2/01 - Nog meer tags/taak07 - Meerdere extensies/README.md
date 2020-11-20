# FRONTEND-ESSENTIALS

## NOG MEER TAGS

## taak06 - Meerdere Extensies

### Introductie

Elke website maakt gebruik van styling, en dus van CSS. Tot dusver heb je geleerd om styling te doen op de volgende wijze:

```html
<!doctype html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <title>Meedere bestanden en extenties</title>
    <style>
        h1{
            color: red;
        }
    </style>
    </head>
    <body>
        <h1>Hello world!</h1>
    </body>
</html>
```

Dit noemen we block-styling. De CSS staat tussen `<style>`-tags. Maar omdat grote projecten nogal complex kunnen worden, stoppen we elk soort code: HTML, CSS of Javascript in een eigen bestand:

- HTML:        index.html
- CSS:         style.css
- Javascript:  script.js

Dan ziet je code er zo uit:

```html
<!doctype html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <title>Meedere bestanden en extenties</title>
    <link rel="stylesheet" href="style.css"> <!-- het bestand is een extern CSS bestand -->
    </head>
    <body>
        <h1>Hello world!</h1>
    </body>
</html>
```

En als je Javascript wilt linken dan doe je dat zo:

```html
<!doctype html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <title>Meedere bestanden en extenties</title>
    </head>
    <body>
        <h1>Hello world!</h1>
        <script src="script.js"></script> <!-- het bestand is een extern JS bestand -->
    </body>
</html>
```

### OPDRACHT

1. Maak een index.html bestand in deze map
2. Codeer de standaard tags op elke pagina (weet je ze even niet kijk dan bij FRONTEND-BASIC => 03-Basis HTML => taak 02)
3. Schrijf CSS code in `style.css` en maak de achtergrond kleur `#daa420`
4. Schrijf Javascript code in `script.js`. De code activeert een `alert('De links werkt!')`-box.
