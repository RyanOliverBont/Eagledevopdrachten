# FRONTEND-BASIC

## BASIS JAVASCRIPT-TAAK-03

### Variabelen 1

Je hebt bij de vorige opdracht code gemaakt die een bepaalde __ouput__ genereerde. Je codeerde, afhankelijk van het type popup-box, een bepaalde __input__ van de gebruiker. Bij prompt() kon de gebruiker naast Oké-knop ook iets invullen.

Maar met deze tekst input werd nog niks gedaan. Dat ga je bij deze opdracht coderen.

Om de input van zo'n _tekstveld_ te krijgen gebruiken we bij deze opdracht een __variabele__. Dat is een soort doosje waar je data in kan opslaan om later weer te gebruiken. In alle programmeertalen bestaan variabelen.

Het heet variabele omdat de inhoud kan veranderen. De inhoud varieert.

Om een variabele te maken gebruiken we uiteraard Javascript met de volgende schrijfwijze:

```html
<script>
    let mijnVoornaam = "David";
</script>
```

Zie dat het woordje `let` is gebruikt? Dit is het woordje waarmee je een variabele kunt maken.
Met deze code staat er `David` in de variabele `mijnVoornaam`. Je kunt ook zeggen: _mijnVoornaam bevat de waarde "David"_

Ook hier is een specifieke schrijfwijze gebruikt:

- `let` gebruiken we om te zeggen: dit is een __nieuwe__ variabele.
- de naam van de variabele begint met een kleine letter
- het tweede woord in een variabele is een hoofdletter __mijn`V`oornaam__
- een `=` teken wordt gebruikt om de variable te 'vullen'
- een woord of zin zet je tussen `"` en `"`
- een getal hoef je niet tussen aanhalingstekens te zetten
- een regel eindigt met een `;`

Leuk hoor zo'n variabele, maar wat kun je ermee?

Stel je bent buschauffeur. Er zitten 3 mensen in de bus die ongeveer 45 km/uur rijdt. De bus stopt: er stappen 2 mensen in en 1 iemand uit. Daarna rijdt de bus verder met 30 km/uur, bij de volgende halte stapt er niemand uit maar er stappen 4 mensen in. De bus rijdt weer verder met 80 km/uur en bij de volgende halte stappen 3 mensen uit en 1 iemand stapt in. De volgende halte stappen er 2 mensen in en 1 mens uit.

De volgende vragen kun je nu stellen?

- Hoeveel mensen zitten er nog in de bus (`aantalMensenInBus`)?
- Hoe vaak is de bus gestopt (`aantalBezochteHaltes`)?
- Hoe hard reed de bus gemiddeld (`gemiddeldeSnelheid`)?

Deze vragen kun je zelf alleen beantwoorden als je gaat rekenen en papier gaat gebruiken. Deze vragen kun je op elk moment beantwoorden tijdens dit verhaal. Dus na halte 1, of halte 2 enzovoort. De getallen zullen steeds veranderen. Dit zijn dus waardes die variabel zijn. Ze veranderen steeds.

Kijk eens naar de volgende twee voorbeelden:

```html
<script>
    let mijnVoornaam = "Homer";
    alert(mijnVoornaam);
</script>
```

```html
<script>
    alert("Homer");
</script>
```

In beide voorbeelden komt de naam Homer op het scherm via een alert()-box. Waarom gebruik je dan een variabele?

Het handige aan variabele is dat je data (gegevens) tijdelijk opslaat. Dus als het eenmaal is opgeslagen dan maakt het niet uit wanneer je het weer gaat gebruiken in je code. Check eens de volgende code

```html
<script>
    let prijsProduct = 399;
    let zomerKorting = 15; //percentages
    let ledenKorting = 10; //percentages
    let totaalPrijs = prijsProduct - (prijsProduct * ledenKorting /100) - (prijsProduct * zomerKorting/100);

    alert(totaalPrijs); // 229.25

</script>
```

De laatste regel is ingewikkeld. Deze berekent een `totaalPrijs`. Stel de prijs (prijsProduct) wordt hoger, maar de kortingen blijven staan. Het mooie van zo'n variabele is dat je dan alleen dat cijfer (399) hoeft te veranderen en de code doet de rest. Kijk maar eens als we de prijs met 100 verhogen.

```html
<script>
    let prijsProduct = 499; // 399 + 100
    let zomerKorting = 15; //percentages
    let ledenKorting = 10; //percentages
    let totaalPrijs = prijsProduct - (prijsProduct * ledenKorting /100) - (prijsProduct * zomerKorting/100);

    alert(totaalPrijs); // 374.25

</script>
```

### OPDRACHT

1. Open `index.html` in je browser.
2. Verander `prijsProduct` eens en kijk naar het resultaat.
3. Bestudeer de code eens.

### RESULTAAT

![Variabele](images/variabele.png)


<!--- ------------ DIT COMMENTAAR LATEN STAAN AUB ------------
------------------ ------------------------------ ------------
------------------ eagle ref:25141402
------------------ ------------------------------ ------------
------------------ DIT COMMENTAAR LATEN STAAN AUB -------- -->