<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Studiekeuzebegeleiding</title>
    <link rel="shortcut icon" href="img/titleIcon.ico"/>

    <!-- stylesheets and meta info -->
    <?php require 'partials/head.php'; ?>
    <?php require 'partials/stylesheets.php'; ?>

    <!-- script tags -->
    <?php require 'partials/javascript.php'; ?>
</head>
<body class="teal">

<!-- Sidebar -->
<?php require 'partials/sidebar.php'; ?>

<!-- Content -->
<div class="section no-pad-bot">
    <div class="container">
        <div class="col s12">
            <br>
            <br>
            <h2 id="fontHome" class="header center white-text">Studiekeuze Begeleiding</h2>
            <div class="row center">
                <h5 id="fontHomeLow" class="header col s12 white-text light">Krijg hulp van een ROC Ter AA begeleider
                    met het zoeken naar een
                    opleiding/studie die bij jou past.</h5>
            </div>
            <div class="row center">
                <?php
                if (isset($_SESSION['user'])) {
                    switch ($_SESSION ['user']['type']) {
                        case "0":
                            echo '<a class="btn-large hoverable waves-effect waves-light teal darken-4" href="student">Naar Student</a>';
                            break;
                        case "1":
                            echo '<a class="btn-large hoverable waves-effect waves-light teal darken-4" href="adminList">Admin pagina</a>';
                            break;
                        default:
                            echo "SOMETHING'S NOT QUITE RIGHT";
                    }
                } else {
                    echo '<a class="btn-large hoverable waves-effect waves-light teal darken-4" href="login">Registreer / Login</a>';
                }
                ?>
            </div>
            <br>
            <br>
            <div class="divider"></div>
        </div>
    </div>
</div>


<div class="section">
    <br>
    <br>
    <div class="row container">
        <div class="col s12 m4">
            <div class="icon-block">
                <h2 class="center white-text"><i class="material-icons">assignment_ind</i></h2>
                <h5 id="indexText" class="center">Registreer/Login</h5>

                <p id="indexText" class="light center">Registreer of login met je account
                    om je preferenties te bewerken of te bekijken. Begeleiders kunnen deze informatie bekijken.</p>
            </div>
        </div>

        <div class="col s12 m4">
            <div class="icon-block">
                <h2 class="center white-text"><i class="material-icons">list</i></h2>
                <h5 id="indexText" class="center">Bewerk/Bekijk</h5>

                <p id="indexText" class="light center">Bewerk je preferenties over de 6 categorieën. Zodra de data
                    opgeslagen is,
                    kan een begeleider de preferenties bekijken en aan de hand van de informatie een afspraak maken.</p>
            </div>
        </div>

        <div class="col s12 m4">
            <div class="icon-block">
                <h2 class="center white-text"><i class="material-icons">email</i></h2>
                <h5 id="indexText" class="center">Maak een afspraak</h5>

                <p id="indexText" class="light center">Aan de hand van de informatie die jij hebt ingevuld,
                    zal een begeleider een afspraak met je maken om te praten over een opleiding/studie.</p>
            </div>
        </div>
    </div>
    <br>
    <br>
</div>

<!-- Footer -->
<?php require 'partials/footer.php'; ?>

<?php
$url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
if (strpos($url, 'acc=uitgelogd') !== false) {
    echo '<script>uitgelogd();</script>';
}
?>

</body>
</html>