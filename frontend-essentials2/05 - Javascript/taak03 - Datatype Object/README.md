# FRONTEND-ESSENTIALS

## Javascript

## taak03 - Datatype Object

### Introductie

Je hebt nu kennis gemaakt met verschillende datatypes zoals String en Number. Maar er is nog een heel mooi type en dat is `Object`. Object zul je vaak en veel gaan tegenkomen in de Javscript wereld. Deze taak geeft een eerste introductie in de wereld van objecten.

#### Object

Ok. je weet nu dat je variabelen kunt maken:

```js
let naam = "Peter";
let achternaam= "Mensink";
let leeftijd = 59;
```

Deze twee variabelen hebbben niks met elkaar te maken. En soms wil je dat ze wel met elkaar te maken hebben. Dat kan je regelen met een object datatype:

```js
let persoon = {}
```

Het is een gewone variabele declaratie (aanmaken). Maar aan de rechterkant van het `=`-teken staan _accolades_ of in het Engels: __curly brackets__. Met deze code bestaat het object `persoon`. Maar persoon is nog leeg. Laten we persoon 'vullen'

```js
let persoon = {
   voornaam: "Peter",
   achternaam: "Mensink",
   leeftijd: 59
}
```

Bij dit bovenstaande voorbeeld zittende de variabelen in een andere variabele. De variabelen `voornaam`, `achternaam`, `leeftijd` in dit voorbeeld noemen we __properties__. Dit zijn eigenschappen van `persoon`.

Achter een _property_ staat een dubbele punt `:` en daarachter staat de waarde van de property.

```js
voornaam : "Peter"
```

Als je maar 1 property in je console.log wilt tonen dan doe je dat als volgt:

`object.property`

```js
console.log(persoon.voornaam);  // op het scherm komt 'Peter` te staan
```

Je ziet dat je

1. eerst het `object` noteert: _persoon_
2. dan een punt (`.`)
3. dan de `property`: _voornaam_

Stel nou eens dat in het voorbeeld hierboven de leeftijd van Peter veranderd. Dan is het natuurlijk overdreven om het hele Object opnieuw te maken. Je kunt net als bij een _normale_ variabele een `=`-teken gebruiken:

```js
persoon.leeftijd = 60;
```

### Opdracht

1. Maak een index.html met de gebruikelijke tags en daarbij ook een script tag. (je kunt de index.html van taak01 nemen ;)
2. Bij de vorige opdracht heb je variabelen aangemaakt:
   1. voornaam
   2. achternaam
   3. leeftijd
   4. ikBenStemGerechtig
   5. ikMagLegaalAlcoholKopen
   6. ikMagBrommerRijden
3. Combineer de variabelen 1 t/m 6 in een object `student`. Met de waardes die voor jou gelden!
4. Console.log het gehele object, wat zie je? `console.log(student);`
5. Console.log alleen 1 property van object, wat zie je? `console.log(student.leeftijd);`

### Bronnen

[Mozilla Developer Network - Working with objects](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Guide/Working_with_Objects)
