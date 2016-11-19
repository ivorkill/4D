# 4D
Project opdracht voor het 4D team om de Makey Makey's van de Eerste jaars te kunnen beoordelen via QR-codes.

In de [Index.php](https://github.com/ivorkill/4D/blob/master/index.php) kun je zien dat er gebruik van een switch case word gemaakt.

Om te kunnen kijken of de bezoeker op een mobiel zit of op een computer gebruiken we [Mobile Detect](https://github.com/ivorkill/4D/blob/master/Mobile_Detect.php).

De mobile versie en de scorebord zijn gemaakt door Anton Kritikos en de desktop versie is gemaakt door Dave van Rossum.


Voor de [Mobile versie](https://github.com/ivorkill/4D/tree/master/Mobile-views) (waar aleen beoordeeld op kan worden) maken we gebruik van een [qr-scanner](https://github.com/ivorkill/4D/blob/master/Mobile-views/js/webcodecamjs.js).


Voor het scorebord word er `JSON` gebruikt om de data op te halen van de database, dat is the zien [hier](https://github.com/ivorkill/4D/blob/master/views/scoreboard.html) en de `ajax.php` [hier](https://github.com/ivorkill/4D/blob/master/models/ajax.php).


####Developers:  Anton Kritikos en Dave van Rossum

####Vormgevers: Barbara Stolk, Damaris Burgess en Quinty Kemper
