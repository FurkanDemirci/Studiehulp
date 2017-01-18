<?php
session_start();

require 'includes/adminAccounts.inc.php';

if (isset($_SESSION['user'])) {
    if ($_SESSION['user']['type'] == 0) {
        header("Location: ../../studiehulp");
    }
} else {
    header("Location: ../../studiehulp");
}
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

    <style>
        nav, header, main, footer {
            padding-left: 300px;
        }

        @media only screen and (max-width: 992px) {
            nav, header, main, footer {
                padding-left: 0;
            }
        }
    </style>
</head>
<body class="teal">

<!-- Sidebar -->
<div class="navbar">
    <nav class="teal darken-4" role="navigation">
        <div class="nav-wrapper container"><a id="logo-container" href="../studiehulp"
                                              class="brand-logo"><b>Admin</b></a>
            <ul class="right hide-on-med-and-down">
                <?php
                if (isset($_SESSION['user'])) {
                    switch ($_SESSION['user']['type']) {
                        case "0":
                            echo '<li><a href="student">Student</a></li>';
                            break;
                        case "1":
                            echo '<li><a href="adminList">Admin Pagina</a></li>';
                            break;
                        default:
                            echo '<h1>SOMETHING IS NOT QUITE RIGHT</h1>';
                    }
                } else {
                    echo '';
                }
                ?>
            </ul>

            <ul id="nav-mobile" class="side-nav fixed grey darken-4">
                <li>
                    <div class="userView">
                        <div class="background">
                            <img style="width: 100%; filter: blur(2px);" src="img/parallax1.jpg">
                        </div>
                        <a href="#"><img class="circle" src="img/titleIcon.ico"></a>
                        <a href="#"><span class="white-text name"><?php
                                if (isset($_SESSION['user'])) {
                                    echo $_SESSION['user']['firstname'] . " ";
                                    echo $_SESSION['user']['lastname'];
                                } else {
                                    echo "";
                                    echo "";
                                }
                                ?></span></a>
                        <a href="#"><span class="white-text email"><?php
                                if (isset($_SESSION['user'])) {
                                    echo $_SESSION['user']['email'];

                                } else {
                                    echo "Niet ingelogd";
                                }
                                ?></span></a>
                    </div>
                </li>
                <li><a class="waves-effect white-text" href="../studiehulp"><i
                            class="material-icons white-text">store</i>Home</a></li>
                <?php
                if (isset($_SESSION['user'])) {
                    switch ($_SESSION['user']['type']) {
                        case "0":
                            echo '<li><a class="waves-effect white-text" href="student"><i class="material-icons white-text">subject</i>Student</a></li>';
                            break;
                        case "1":
                            echo '<li><a class="waves-effect white-text" href="adminList"><i class="material-icons white-text">view_list</i>Account lijst</a></li>';
                            echo '<li><a class="waves-effect white-text grey" href="adminMail"><i class="material-icons white-text">assignment</i>Specifiek zoeken op mail</a></li>';
                            break;
                        default:
                            echo '<h1>SOMETHING IS NOT QUITE RIGHT</h1>';
                    }
                } else {
                    echo '';
                }
                ?>
                <li>
                    <div class="divider grey"></div>
                </li>
                <li><a class="subheader white-text">Account</a></li>
                <?php
                if (isset($_SESSION['user'])) {
                    echo '<li><a class="waves-effect red-text" href="includes/logout.inc.php"><i class="material-icons white-text">supervisor_account</i>Logout</a></li>';
                } else {
                    echo '<li><a class="waves-effect white-text" href="login"><i class="material-icons white-text">supervisor_account</i>Login</a></li>';
                }
                ?>
            </ul>
            <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
        </div>
    </nav>
</div>

<!-- Content -->
<main>
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
                    <h6 class="header center white-text">Zoek hier naar student via mail, bekijk daarna zijn
                        preferenties en
                        verstuur email naar
                        student.</h6>
                </div>
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

    <br>
    <br>
</main>

<!-- Footer -->
<?php require 'partials/footer.php'; ?>

<?php
$url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
if (strpos($url, 'not=found') !== false) {
    echo '<script>notFound();</script>';
}
?>

</body>
</html>