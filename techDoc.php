<!DOCTYPE html>
<html>
<head>
    <title>Studiehulp</title>
    <link rel="shortcut icon" href="img/titleIcon.ico"/>

    <!-- stylesheets and meta info -->
    <?php require 'partials/head.php'; ?>
    <?php require 'partials/stylesheets.php'; ?>
</head>
<body>

<!-- Content -->
<div class="container">
    <div class="row center" style="padding-top: 15px;">
        <div class="col s12 m4 l2"></div>
        <div id="docStyle" class="col s12 m4 l8 grey lighten-4">
            <div class="divider"></div>
            <div class="section">
                <h5>What is the goal of the website?</h5>
                <p>Het doel van de website is om studenten die moeilijkheden hebben met het zoeken naar een opleiding
                    die
                    bij hun
                    past. Studenten die hun huidige opleiding niet leuk genoeg vinden, kunnen ook gebruik maken van de
                    website. De
                    Student maakt een account aan en vullen preferenties in die de begeleiding van Studiehulp kan
                    bekijken.
                    Aan de
                    hand van de gegevens een afspraak maken met de student om een gesprek aan te gaan over de gegevens
                    om zo
                    een
                    passende opleiding te vinden.</p>
            </div>
            <div class="divider"></div>
            <div class="section">
                <h5>How does it achieve this goal?</h5>
                <p>De gebruiker begint met het maken van een account. Zodra het account is aangemaakt worden de gegevens
                    die
                    ingevuld zijn door de gebruiker opgeslagen in de database. De gebruiker kan deze gegevens gebruiken
                    om
                    in te loggen en de functies van de website te gebruiken. De student kan via het TAB student zijn of
                    haar
                    preferenties invullen in de daarvoor bestemde velden en de gegevens opslaan in de database. De
                    begeleider kan via het TAB begeleider geregistreerde studenten opzoeken en per student de informatie
                    die
                    de student heeft ingevuld bekijken. De begeleider kan ook een email naar de desbetreffende student
                    sturen om een afspraak te maken of informatie te delen. Zoals hierboven beschreven hebben we twee
                    account types: Student en Begeleider. Als Student kan de gebruiker de student pagina bezoeken om
                    daar de
                    preferenties in te vullen. Begeleiders kunnen de begeleider pagina bezoeken om informatie van de
                    studenten op te zoeken. Student kan dus niet Begeleider bezoeken en Begeleider kan Student niet
                    bezoeken.</p>
            </div>
            <div class="divider"></div>
            <div class="section">
                <h5>What problems have arisen?</h5>
                <p>Het eerste probleem was dat de website te ingewikkeld ingedeeld was om met een framework te werken.
                    Het
                    was te moeilijk om de website die we voor ogen hadden. Dus de beslissing is gemaakt om Procedural de
                    website te maken.
                    Onze webserver MAMP veranderden de Server port van onze connectie en de database, dus het was
                    onmogelijk
                    om verder te werken MAMP. We gebruiken nu de webserver XAMPP.
                </p>
            </div>
            <div class="divider"></div>
            <div class="section">
                <h5>What problems could arise?</h5>
                <p>Problemen waar we tegenaan kunnen lopen zijn bijvoorbeeld: Bugs. Met Bugs kan een persoon de website
                    gebruiken in een vorm waarvoor de website eigenlijk niet gebruikt hoort te worden. We proberen allen
                    Bugs te waarnemen en te verwijderen voordat de website compleet kan zijn.

                    SQL injecties: met SQL injecties kan een persoon een bepaalde lijn code in het login veld plaatsen
                    en
                    daarmee de gebruikte database compleet verwijderen. Dit proberen we ook te voorkomen omdat dit veel
                    problemen voor de website kan veroorzaken.
                </p>
            </div>
            <div class="divider"></div>
            <div class="section">
                <h5>What could be expanded upon?</h5>
                <p>Uiteindelijk als de website helemaal af is, willen we een applicatie maken die helpt de website te
                    openen
                    op mobiele telefoons. Zo ben je met een druk op een knop op de website en hoef je niet het adres in
                    te
                    vullen in de browser. </p>
            </div>
            <div class="divider"></div>
            <div class="section">
                <h5>What problems could expansion cause?</h5>
                <p>De website is niet compatible met een app applicatie. Een voorbeeld kan zijn dat het formaat niet
                    meer
                    past op het scherm. </p>
            </div>
            <div class="divider"></div>
            <div class="section">
                <h5>What naming/formatting conventions should be followed?</h5>
                <p>Alles staat in het Nederlands. HTML, PHP, CSS, Javascript, Jquery en SQL. Website is responsive voor
                    elk
                    formaat. User Friendly.</p>
            </div>
            <!--        <h4>What is the goal of the website?</h4><br>-->
            <!--        Het doel van de website is om studenten die moeilijkheden hebben met het zoeken naar een opleiding die bij hun-->
            <!--        past. Studenten die hun huidige opleiding niet leuk genoeg vinden, kunnen ook gebruik maken van de website. De-->
            <!--        Student maakt een account aan en vullen preferenties in die de begeleiding van Studiehulp kan bekijken. Aan de-->
            <!--        hand van de gegevens een afspraak maken met de student om een gesprek aan te gaan over de gegevens om zo een-->
            <!--        passende opleiding te vinden.-->
        </div>
        <div class="col s12 m4 l2"></div>
        <div class="col s12 center" style="padding-top: 10px;">
            <a class="btn waves-effect" href="index.php">Back</a>
        </div>
    </div>
</div>

<!-- script tags -->
<?php require 'partials/javascript.php'; ?>

</body>
</html>