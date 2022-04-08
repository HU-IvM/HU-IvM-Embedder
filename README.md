# HU-IvM-Embedder
Plugin voor het embedden van diverse externe media op onze eigen WordPress installaties, geschreven voor HU-IvM.

Hieronder een overzicht hoe je per extern platform hier gebruik van kan maken:

## HU MAM
Plaats in het artikel de volgende embedcode:

Voor Audio producties:
```
[MAM id=xyz123abc type=audio]
```
Voor Video producties:
```
[MAM id=xyz123abc type=video]
```
Het ID heb je per e-mail ontvangen na het uploaden van jouw mediabestand.

## Flourish
Plaats in het artikel de volgende embedcode:
```
[flourish id=ABCXYZ]
```
Vervang de `ABCXYZ` met de visualisatie ID uit de URL.

Voorbeeld
De URL: `https://public.flourish.studio/visualisation/2253288/` geeft als embedcode:
```
[flourish id=2253288]
```

## Localfocus
Plaats in het artikel de volgende embedcode:
```
[localfocus id=ABCXYZ]
```
Vervang de `ABCXYZ` met de widget-ID uit de URL.

Voorbeeld
De URL: `https://localfocuswidgets.net/5ee7706228e28` geeft als embedcode:
```
[localfocus id=5ee7706228e28]
```

## Knightlab
Plaats in het artikel de volgende embedcode:
```
[knightlab id=ABCXYZ]
```
Vervang de `ABCXYZ` met de source ID uit de URL.

Voorbeeld
De URL: `https://cdn.knightlab.com/libs/timeline3/latest/embed/index.html?source=1xuY4upIooEeszZ_lCmeNx24eSFWe0rHe9ZdqH2xqVNk&font=Default&lang=en&initial_zoom=2&height=100% `geeft als embedcode:
```
[knightlab id=1xuY4upIooEeszZ_lCmeNx24eSFWe0rHe9ZdqH2xqVNk]
```
