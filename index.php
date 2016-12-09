<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Studiehulp</title>

    <!-- stylesheets and meta info -->
    <?php require 'partials/head.php'; ?>
    <?php require 'partials/stylesheets.php'; ?>
</head>
<body>

<!-- Sidebar -->
<?php require 'partials/sidebar.php'; ?>

<!-- Content -->
<div class="parallax-container">
    <div class="section no-pad-bot">
        <div class="container">
            <br>
            <br>
            <h1 id="fontHome" class="header center white-text">Studiehulp
                Begeleiding</h1>
            <div class="row center">
                <h5 id="fontHomeLow" class="header col s12 white-text light">Ontvang hulp van een ROC ter AA begeleider met het zoeken voor een
                    opleiding/studie die bij jou past.</h5>
            </div>
            <div class="row center">
                <?php
                    if (isset($_SESSION['id']))
                    {
                       echo '<a class="btn-large hoverable waves-effect waves-light teal darken-1" href="student.php">Naar Student</a>';
                    }
                    else
                    {
                        echo '<a class="btn-large hoverable waves-effect waves-light teal darken-1" href="login.php">Naar Login</a>';
                    }
                ?>
            </div>
            <br>
            <br>
        </div>
    </div>
    <div id="divHomeBackground" class="parallax"><img id="homeBackground" src="img/parallax1.jpg"></div>
</div>
<div class="section white">
    <br>
    <br>
    <div class="row container">
        <div class="col s12 m4">
            <div class="icon-block">
                <h2 class="center teal-text"><i class="material-icons">assignment_ind</i></h2>
                <h5 class="center">Registreer/Login</h5>

                <p class="light center">Registreer of login met je account
                    om je preferenties te bewerken of te bekijken. Begeleiders kunnen deze informatie bekijken.</p>
            </div>
        </div>

        <div class="col s12 m4">
            <div class="icon-block">
                <h2 class="center teal-text"><i class="material-icons">list</i></h2>
                <h5 class="center">Bewerk/Bekijk</h5>

                <p class="light center">Bewerk je preferenties over de 6 categorieën. Zodra de data opgeslagen is,
                kan een begeleider de preferenties bekijken en aan de hand van de informatie een afspraak in plannen.</p>
            </div>
        </div>

        <div class="col s12 m4">
            <div class="icon-block">
                <h2 class="center teal-text"><i class="material-icons">email</i></h2>
                <h5 class="center">Maak een afspraak</h5>

                <p class="light center">Aan de hand van de informatie die jij hebt ingevuld,
                    zal een begeleider een afspraak met je maken om te praten over een opleiding/studie.</p>
            </div>
        </div>
    </div>
    <br>
    <br>
</div>
<div class="parallax-container">
    <div id="divHomeBackground" class="parallax"><img id="homeBackground" src="img/parallax2.jpg"></div>
</div>

<!-- Footer -->
<?php require 'partials/footer.php'; ?>

<!-- script tags -->
<?php require 'partials/javascript.php'; ?>

</body>
</html>