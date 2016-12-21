<?php
session_start();

include 'includes/studentLoad.inc.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Studiehulp</title>
    <link rel="shortcut icon" href="img/titleIcon.ico"/>

    <?php require 'partials/head.php'; ?>
    <?php require 'partials/stylesheets.php'; ?>
</head>
<body>

<!-- Sidebar -->
<?php require 'partials/sidebar.php'; ?>

<!-- Content -->
<div class="container">
    <div class="section no-pad-bot" id="index-banner">
        <div class="container">
            <div class="row center">
                <br>
                <?php
                echo '<h4 class="header center black-text">';
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
                    echo $textResults;
                } else {
                    echo "Data opgehaald";
                }
                ?>
                <h6 class="header center black-text">Vul hier je preferenties in, aan de hand van deze gegevens zal er
                    een afspraak gemaakt worden.</h6>
                <br>
            </div>
        </div>
    </div>

    <div class="container">
        <form action="includes/studentText.inc.php" method="POST">
            <ul class="collapsible" data-collapsible="accordion">
                <li>
                    <div class="collapsible-header active"><i class="material-icons">thumb_up</i>Wat je leuk vind</div>
                    <div class="collapsible-body">
                        <div class="container">
                            <div class="row">
                                <div class="input-field col s12">
                                    <textarea name="textarea1"
                                              class="materialize-textarea"><?php
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
                                              class="materialize-textarea"><?php
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
                                              class="materialize-textarea"><?php
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
                                              class="materialize-textarea"><?php
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
                                              class="materialize-textarea"><?php
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
                                              class="materialize-textarea"><?php
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
                <button class="btn waves-effect waves-light teal darken-1"
                        onclick="Materialize.toast('Succesvol bijgewerkt!', 3000, 'rounded')" type="submit"
                        name="action">Opslaan
                    <i class="material-icons right">send</i>
                </button>
            </div>
        </form>
    </div>
</div>
<br><br>

<!-- Footer -->
<?php require 'partials/footer.php'; ?>

<!-- script tags -->
<?php require 'partials/javascript.php'; ?>

</body>
</html>