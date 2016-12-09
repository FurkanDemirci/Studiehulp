<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Studiehulp</title>

    <?php require 'partials/head.php'; ?>
    <?php require 'partials/stylesheets.php'; ?>
</head>
<body>

<!-- Sidebar -->
<?php require 'partials/sidebar.php'; ?>

<!-- Content -->
<div class="container">
    <!-- Inloggen -->
    <div class="section no-pad-bot" id="index-banner">
        <div class="container">
            <div class="row center">
                <br><br>
                <h4 class="header center black-text">Inloggen</h4>
            </div>
        </div>
    </div>

    <?php
    if (isset($_SESSION['id'])) {
        echo $_SESSION['id'];
    } else {
        echo "You are not logged in";
    }
    ?>

    <div class="container">
        <div id="loginform" class="row">
            <form class="col s12" action="includes/login.inc.php" method="POST">
                <div class="row">
                    <div class="input-field col s12">
                        <input name="email" type="email" class="validate">
                        <label for="email">Email</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input name="password" type="password" class="validate">
                        <label for="password">Password</label>
                    </div>
                </div>
                <div class="row right">
                    <button class="btn waves-effect waves-light teal darken-1" type="submit">Inloggen
                        <i class="material-icons right">send</i>
                    </button>
                </div>
            </form>
        </div>

        <!-- Registreren -->
        <div class="container">
            <div class="row center">
                <h4 class="header center black-text">Registreren</h4>
            </div>
        </div>
        <div id="loginform" class="row">
            <form id="regform" class="col s12" action="includes/signup.inc.php" method="POST">
                <div class="row">
                    <div class="input-field col s6">
                        <input name="first_name" type="text" class="validate">
                        <label for="first_name">Voornaam</label>
                    </div>
                    <div class="input-field col s6">
                        <input name="last_name" type="text" class="validate">
                        <label for="last_name">Achternaam</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input name="email" type="email" class="validate">
                        <label for="email">Email</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input name="password" type="password" class="validate">
                        <label for="password">Password</label>
                    </div>
                </div>
                <div class="row right">
                    <a class="btn waves-effect waves-light teal darken-1" id="submitbtn">
                        Registreren
                        <i class="material-icons right">send</i>
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
<br><br>

<!-- Footer -->
<?php require 'partials/footer.php'; ?>

<!-- script tags -->
<?php require 'partials/javascript.php'; ?>

</body>
</html>