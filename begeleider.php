<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Studiehulp</title>
    <link rel="shortcut icon" href="img/titleIcon.ico"/>

    <?php require 'partials/head.php'; ?>
    <?php require 'partials/stylesheets.php'; ?>
</head>
<body class="teal">

<!-- Sidebar -->
<?php require 'partials/sidebar.php'; ?>

<!-- Content -->
<div class="container">
    <div class="section no-pad-bot" id="index-banner">
        <div class="container">
            <div class="row center">
                <br>
                <?php
                echo '<h4 class="header center white-text">';
                echo 'Welkom ';
                echo '<b>';
                if (isset($_SESSION['user'])) {
                    echo $_SESSION['user']['firstname'];
                } else {
                    echo "Admin";
                }
                echo '</b>';
                echo '</h4>';
                ?>
                <h6 class="header center white-text">Zoek hier naar student via mail, bekijk daarna zijn preferenties en
                    verstuur email naar
                    student.</h6>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col s12">
                <div class="row">
                    <form class="col s12" action="includes/accounts.inc.php" method="POST">
                        <div class="row card z-depth-4" style="padding-left: 20px; padding-right: 20px;">
                            <div class='row'>
                                <div class='col s12'>
                                </div>
                            </div>
                            <div class='row'>
                                <div class='input-field col s12'>
                                    <input class='validate' type='email' name='email'/>
                                    <label for='email'>Email</label>
                                </div>
                            </div>
                        </div>
                        <br/>
                        <div class='row'>
                            <button type="submit" class='col s12 btn btn-large waves-effect teal darken-4'>
                                Zoeken
                                <i class="material-icons right">send</i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <br><br>

    <!-- Modal Structure -->
    <div id="modal" class="modal">
        <div class="modal-content">
            <div class="row center">
                <h4><?php

                    ?></h4>
                <p>Gegevens</p>
            </div>
            <div class="row">
                <div class="col s6">
                    <blockquote>
                        <h4>Email:</h4> <?php
                        echo "email";
                        ?>
                    </blockquote>
                </div>
                <div class="col s6">

                </div>
            </div>
        </div>
        <div class="modal-footer">
            <div class="fixed-action-btn horizontal">
                <a class="btn-floating btn-large red">
                    <i class="large material-icons">mode_edit</i>
                </a>
                <ul>
                    <li><a class="btn-floating green"><i class="material-icons">library_books</i></a></li>
                    <li><a class="btn-floating blue"><i class="material-icons">email</i></a></li>
                </ul>
            </div>
        </div>
    </div>

</div>
<br><br>

<!-- JavaScript en Jquery -->
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
        $('.modal').modal();
    });
</script>

<!-- Footer -->
<?php require 'partials/footer.php'; ?>

<!-- script tags -->
<?php require 'partials/javascript.php'; ?>

</body>
</html>