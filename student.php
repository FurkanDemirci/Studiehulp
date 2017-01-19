<?php
session_start();

include 'includes/studentLoad.inc.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Studiehulp</title>
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
                if (isset($textResults)) {
                    echo "<p class='white-text'>$textResults</p>";
                } else {
                    echo "<p class='white-text'>Data opgehaald</p>";
                }
                ?>
                <h6 class="header center white-text">Vul hier je preferenties in, aan de hand van deze gegevens zal er
                    een afspraak gemaakt worden.</h6>
                <br>
            </div>
        </div>
    </div>

    <div class="container">
        <form action="includes/studentText.inc.php" method="POST">
            <ul class="collapsible card" data-collapsible="accordion">
                <li>
                    <div class="collapsible-header active"><i class="material-icons">thumb_up</i>Wat je leuk vind</div>
                    <div class="collapsible-body">
                        <div class="container">
                            <div class="row">
                                <div class="input-field col s12">
                                    <textarea name="textarea1"
                                              class="materialize-textarea" length="1000"><?php
                                        if (isset($textarea1)) {
                                            echo $textarea1;
                                        } else {
                                            echo "";
                                        }
                                        ?></textarea>
                                    <label for="textarea1">Vul in</label>
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
                                    <textarea name="textarea2"
                                              class="materialize-textarea" length="1000"><?php
                                        if (isset($textarea2)) {
                                            echo $textarea2;
                                        } else {
                                            echo "";
                                        }
                                        ?></textarea>
                                    <label for="textarea1">Vul in</label>
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
                                    <textarea name="textarea3"
                                              class="materialize-textarea" length="1000"><?php
                                        if (isset($textarea3)) {
                                            echo $textarea3;
                                        } else {
                                            echo "";
                                        }
                                        ?></textarea>
                                    <label for="textarea1">Vul in</label>
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
                                    <textarea name="textarea4"
                                              class="materialize-textarea" length="1000"><?php
                                        if (isset($textarea4)) {
                                            echo $textarea4;
                                        } else {
                                            echo "";
                                        }
                                        ?></textarea>
                                    <label for="textarea1">Vul in</label>
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
                                    <textarea name="textarea5"
                                              class="materialize-textarea" length="1000"><?php
                                        if (isset($textarea5)) {
                                            echo $textarea5;
                                        } else {
                                            echo "";
                                        }
                                        ?></textarea>
                                    <label for="textarea1">Vul in</label>
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
                                    <textarea name="textarea6"
                                              class="materialize-textarea" length="1000"><?php
                                        if (isset($textarea6)) {
                                            echo $textarea6;
                                        } else {
                                            echo "";
                                        }
                                        ?></textarea>
                                    <label for="textarea1">Vul in</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
            <br>
            <div class="row center">
                <button class="btn waves-effect waves-light teal darken-4" type="submit" name="action">Opslaan
                    <i class="material-icons right">send</i>
                </button>
            </div>
        </form>
    </div>
</div>
<br><br>

<!-- Footer -->
<?php require 'partials/footer.php'; ?>

<?php
$url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
if (strpos($url, 'prfs=gelukt') !== false) {
    echo '<script>preferenciesGelukt();</script>';
}
?>

</body>
</html>