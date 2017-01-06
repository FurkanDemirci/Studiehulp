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

        <h4 class="white-text">Inloggen</h4>
        <div class="section"></div>

        <div class="container">
            <div class="z-depth-1 grey lighten-4 row"
                 style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE;">

                <form class="col s12" action="includes/login.inc.php" method="POST">
                    <div class='row'>
                        <div class='col s12'>
                        </div>
                    </div>

                    <div class='row'>
                        <div class='input-field col s12'>
                            <input class='validate' type='email' name='email' id='email'/>
                            <label for='email'>Enter your email</label>
                        </div>
                    </div>

                    <div class='row'>
                        <div class='input-field col s12'>
                            <input class='validate' type='password' name='password' id='password'/>
                            <label for='password'>Enter your password</label>
                        </div>
                        <label style='float: right;'>
                            <a class='pink-text' href='#!'><b>Forgot Password?</b></a>
                        </label>
                    </div>

                    <br/>
                    <center>
                        <div class='row'>
                            <button type='submit' class='col s12 btn btn-large waves-effect teal darken-4'>
                                Login
                            </button>
                        </div>
                    </center>
                </form>
            </div>
        </div>
        <a class="btn waves-effect red darken-4" href="../studiehulp">Terug</a>
        <a class="btn waves-effect teal darken-4" href="signup">Geen account?</a>
    </center>

    <div class="section"></div>
    <div class="section"></div>
</main>

<div id="modal1" class="modal">
    <div class="modal-content">
        <h4>Modal Header</h4>
        <p>A bunch of text</p>
    </div>
    <div class="modal-footer">
        <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
    </div>
</div>

</body>

</html>

<!-- script tags -->
<?php require 'partials/javascript.php'; ?>

</body>
</html>