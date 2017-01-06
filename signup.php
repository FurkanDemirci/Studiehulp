<!DOCTYPE html>
<html>
<head>
    <title>Studiekeuze Begeleiding</title>
    <link rel="shortcut icon" href="img/titleIcon.ico"/>

    <!-- stylesheets and meta info -->
    <?php require 'partials/head.php'; ?>
    <?php require 'partials/stylesheets.php'; ?>

    <style>
        body {
            display: flex;
            min-height: 100vh;
            flex-direction: column;
        }

        main {
            flex: 1 0 auto;
        }

        body {
            background: #fff;
        }

        .input-field input[type=date]:focus + label,
        .input-field input[type=text]:focus + label,
        .input-field input[type=email]:focus + label,
        .input-field input[type=password]:focus + label {
            color: #e91e63;
        }

        .input-field input[type=date]:focus,
        .input-field input[type=text]:focus,
        .input-field input[type=email]:focus,
        .input-field input[type=password]:focus {
            border-bottom: 2px solid #e91e63;
            box-shadow: none;
        }
    </style>
</head>


<!-- Content -->
<body class="teal">
<div class="section"></div>
<main>
    <center>
        <img src="img/loginIcon.png" style="width: 100px;">
        <div class="section"></div>

        <h4 class="white-text">Registreren</h4>
        <?php
        $url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
        if (strpos($url, 'error=empty') !== false) {
            echo '<h5>Niet alles is ingevuld!</h5>';
        }
        ?>
        <div class="section"></div>

        <div class="container">
            <div class="z-depth-1 grey lighten-4 row"
                 style="display: inline-block; padding: 32px 55px 0px 55px; border: 1px solid #EEE;">

                <form id="regform" class="col s12" action="includes/signup.inc.php" method="POST">
                    <div class='row'>
                        <div class='col s12'>
                        </div>
                    </div>

                    <div class='row'>
                        <div class='input-field col s12'>
                            <input class='validate' type='text' name='first_name'/>
                            <label for='email'>Voornaam</label>
                        </div>
                    </div>
                    <div class='row'>
                        <div class='input-field col s12'>
                            <input class='validate' type='text' name='last_name'/>
                            <label for='email'>Achternaam</label>
                        </div>
                    </div>
                    <div class='row'>
                        <div class='input-field col s12'>
                            <input class='validate' type='email' name='email'/>
                            <label for='email'>Email</label>
                        </div>
                    </div>

                    <div class='row'>
                        <div class='input-field col s12'>
                            <input class='validate' type='password' name='password'/>
                            <label for='password'>Password</label>
                        </div>
                        <label style='float: right;'>
                            <b class="pink-text">Alvast bedankt!</b>
                        </label>
                    </div>

                    <br/>
                    <center>
                        <div class='row'>
                            <button type="submit" class='col s12 btn btn-large waves-effect teal darken-4'>
                                Registreren
                                <i class="material-icons right">send</i>
                            </button>
                        </div>
                    </center>
                </form>
            </div>
        </div>
        <a class="btn waves-effect red darken-4" href="../studiehulp">Terug</a>
        <a class="btn waves-effect teal darken-4" href="login">Al een account?</a>
    </center>

    <div class="section"></div>
    <div class="section"></div>
</main>


</body>

</html>

<!-- script tags -->
<?php require 'partials/javascript.php'; ?>

</body>
</html>