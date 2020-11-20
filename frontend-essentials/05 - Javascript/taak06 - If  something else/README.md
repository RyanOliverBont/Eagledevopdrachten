# FRONTEND-ESSENTIALS

## Javascript

## taak06 - if something else

We gaan verder met de if-statement. Een if-statement heeft een voorwaarde. Als die voorwaarde TRUE is dan wordt het blokje code uitgevoerd. Als het FALSE is dan wordt de code niet uitgevoerd. Dat is de regel.

Wat krijg je met onderstaande code in de console te zien?

```js
    let x = 5;
    let y = 5;

    if(x == y){
        console.log("De twee getallen zijn gelijk.");
    }
    console.log("Welke taak is het moeilijkst?");
```

Antwoord:

> - De twee getallen zijn gelijk.
> - Welke taak is het moeilijkst?

Uitleg:

> - De if-statement bevat een TRUE voorwaarde en dus wordt de code binnen dat code-blokje uitgevoerd.
> - Maar de code NA de if-statement wordt ALTIJD uitgevoerd.

```js
    let x = 8;
    let y = 5;

    if(x == y){
        console.log("De twee getallen zijn gelijk.");
    }
    console.log("Welke taak is het moeilijkst?");
```

Wat krijg je met onderstaande code in de console te zien?

Antwoord:

> - Welke taak is het moeilijkst?

Uitleg:

> - De if-statement bevat een FALSE voorwaarde en dus wordt de code binnen dat code-blokje NIET uitgevoerd.
> - Maar de code NA de if-statement wordt ALTIJD uitgevoerd.

Ok. Leuk allemaal. Maar stel nou dat je de volgende zin zou moeten omzetten in code:

> Als de spoorbomen omlaag zijn dan stop ik met mijn auto, anders rijd ik gewoon door.

![Spoorboom](images/spoorboom.jpg)

```js
    let spoorBomenOmlaag = true;

    if(spoorBomenOmlaag == true){
        console.log("Ik moet helaas even wachten");
    }
    else{
        console.log("Haha, Ik rijd lekker door");
    }
```

Je ziet hier een `if-else statement`.

> - Als de if-statement gelijk is aan __true__ dan wordt net als bij taak05 de code in het if-code-blok uitgevoerd.
> - Als de if-statement een __false__ voorwaarde heeft dan wordt het codedeel in de `else` uitgevoerd.

Dit werkt dus net even anders dan bij alleen een if-statement

### Opdracht

1. Maak een index.html met de gebruikelijke tags en daarbij ook een script tag. (je kunt de index.html van taak01 nemen ;)
2. Maak de volgende variabele
   - stopLichtKleur = "rood";
3. Maak een if-else statement die de waarde van stopLichtKleur vergelijkt met "rood";
4. Codeer een alert("Jij moet stoppen voor het stoplicht")-box met het resultaat. Anders mag je doorrijden.

### Bronnen

- [Programmeren in Javascript/Conditionele statements](https://nl.wikibooks.org/wiki/Programmeren_in_JavaScript/Conditionele_statements)
  