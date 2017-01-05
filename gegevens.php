<?php
session_start();

if (!isset($_SESSION['student'])) {
    header("Location: begeleider.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Studiekeuze Begeleiding</title>
    <link rel="shortcut icon" href="img/titleIcon.ico"/>

    <!-- stylesheets and meta info -->
    <?php require 'partials/head.php'; ?>
    <?php require 'partials/stylesheets.php'; ?>
</head>
<body class="teal">

<!-- Sidebar -->
<?php require 'partials/sidebar.php'; ?>

<!-- Content -->
<div class="container">
    <br>
    <h4 id="fontHome" class="header center white-text">
        <?php
        echo $_SESSION['student']['firstname'];
        echo " " . $_SESSION['student']['lastname'];
        ?>
    </h4>
    <br>
</div>
<div class="container">
    <div class="row center">
        <div class="col s12 m2"></div>
        <div class="col s12 m8">
            <div class="card blue-grey darken-1">
                <div class="card-content white-text">
                    <p>
                        <?php
                        echo $_SESSION['student']['email'];
                        ?>
                    </p>
                </div>
            </div>
            <ul class="collapsible card" data-collapsible="accordion">
                <li>
                    <div class="collapsible-header active"><i class="material-icons">thumb_up</i>Wat je leuk vind</div>
                    <div class="collapsible-body">
                        <div class="container">
                            <div class="row">
                                <div class="input-field col s12">
                                    <textarea disabled name="textarea1"
                                              class="materialize-textarea black-text"><?php
                                        echo $_SESSION['preferences']['leuk'];
                                        ?></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="collapsible-header"><i class="material-icons">thumb_down</i>Wat je niet leuk vind</div>
                    <div class="collapsible-body">
                        <div class="container">
                            <div class="row">
                                <div class="input-field col s12">
                                    <textarea disabled name="textarea2"
                                              class="materialize-textarea black-text"><?php
                                        echo $_SESSION['preferences']['nietleuk'];
                                        ?></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="collapsible-header"><i class="material-icons">trending_up</i>Sterke punten</div>
                    <div class="collapsible-body">
                        <div class="container">
                            <div class="row">
                                <div class="input-field col s12">
                                    <textarea disabled name="textarea3"
                                              class="materialize-textarea black-text"><?php
                                        echo $_SESSION['preferences']['sterkepunt'];
                                        ?></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="collapsible-header"><i class="material-icons">trending_down</i>Zwakke punten</div>
                    <div class="collapsible-body">
                        <div class="container">
                            <div class="row">
                                <div class="input-field col s12">
                                    <textarea disabled name="textarea4"
                                              class="materialize-textarea black-text"><?php
                                        echo $_SESSION['preferences']['zwakkepunt'];
                                        ?></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="collapsible-header"><i class="material-icons">whatshot</i>Sterke punten volgens anderen
                    </div>
                    <div class="collapsible-body">
                        <div class="container">
                            <div class="row">
                                <div class="input-field col s12">
                                    <textarea disabled name="textarea5"
                                              class="materialize-textarea black-text"><?php
                                        echo $_SESSION['preferences']['sterkepunt_ander'];
                                        ?></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="collapsible-header"><i class="material-icons">invert_colors_off</i>Zwakke punten volgens
                        anderen
                    </div>
                    <div class="collapsible-body">
                        <div class="container">
                            <div class="row">
                                <div class="input-field col s12">
                                    <textarea disabled name="textarea6"
                                              class="materialize-textarea black-text"><?php
                                        echo $_SESSION['preferences']['zwakkepunt_ander'];
                                        ?></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div class="col s12 m2"></div>
</div>
<div class="row center">
    <a class="waves-effect waves-light btn red darken-4" href="begeleider.php">Andere student</a>
</div>

<div class="fixed-action-btn click-to-toggle">
    <a class="btn-floating btn-large red">
        <i class="large material-icons">mode_edit</i>
    </a>
    <ul>
        <li><a href="includes/delete.inc.php" class="btn-floating green"><i class="material-icons">delete</i></a></li>
        <li><a class="btn-floating blue"><i class="material-icons">email</i></a></li>
    </ul>
</div>
<br>

<!-- Footer -->
<?php require 'partials/footer.php'; ?>

<!-- script tags -->
<?php require 'partials/javascript.php'; ?>


<?php
//session_destroy();
?>
</body>
</html>