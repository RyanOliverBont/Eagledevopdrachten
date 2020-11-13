# FRONTEND-BASIC

## BASIS CSS-TAAK-02

### CSS BLOCK

Je kunt de achtergrond van een webpagina een kleur geven door de volgende code te schrijven: `background-color`. Daarnaast kun je ook tekst een kleur geven door `color` te gebruiken.

Hier volgt een voorbeeld

```CSS
body{
    background-color: green;
    color: purple
}
```

CSS kun je op verschillende manieren 'aan de pagina koppelen':

1. Inline
2. Blok
3. Extern

Op dit moment gebruiken we alleen nog de blok-manier. Deze begin je met een `<style>` tag en sluit je af met `</style>` sluit tag

```html
<style>
    /* hier komt je css te staan */
    body{
        background-color: green;
        color: purple
    }
</style>
```

Je plaatst je CSS-blok tussen de  `<head>` tags van je pagina.

```html
<!DOCTYPE html>
<html>
    <head><!-- Hier begint de head -->
        <title>Mijn eerste CSS</title>
        <style>
            /* hier komt je css te staan */
            body{
                background-color: green;
                color: purple
            }
        </style>
    </head><!-- Hier eindigt de head -->
    <body>
    <!-- Je codeert je plaatje onder deze regel -->
    </body>
</html>
```

### OPDRACHT

1. Maak gebruik van index.html bij deze taak
2. Zet tussen de `<head>` en de `</head>` tags het CSS-blok met de   `<style>` en `</style>` tags (zoals in het voorbeeld hierboven)
3. Maar in de body een `<h1>`-tag en een `</h1>`-sluit tag met daarin de volgende tekst: `"De meeste mensen deugen"`
4. Geef de achtergrond van de gehele pagina een __rode__ kleur
5. Geef de tekst een __gele__ kleur

### BRONNEN

- [CSS leren schrijven - Les 2](https://www.youtube.com/watch?v=X58h-d5sHsE)


<!--- ------------ DIT COMMENTAAR LATEN STAAN AUB ------------
------------------ ------------------------------ ------------
------------------ eagle ref:9670319
------------------ ------------------------------ ------------
------------------ DIT COMMENTAAR LATEN STAAN AUB -------- -->