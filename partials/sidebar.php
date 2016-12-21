<div class="navbar">
    <nav class="teal lighten-1" role="navigation">
        <div class="nav-wrapper container"><a id="logo-container" href="index.php" class="brand-logo"><b>ROC Ter
                    AA</b></a>
            <ul class="right hide-on-med-and-down">
                <li><a href="index.php">Home</a></li>
                <?php

                if (isset($_SESSION['user'])) {
                    switch ($_SESSION['user']['type']) {
                        case "0":
                            echo '<li><a href="student.php">Student</a></li>';
                            break;
                        case "1":
                            echo '<li><a href="begeleider.php">Begeleider</a></li>';
                            break;
                        default:
                            echo '<h1>SOMETHING IS NOT QUITE RIGHT</h1>';
                    }
//                    if ($_SESSION['user']['type'] == 0) {
//
//                    }
                } else {
                    echo '';
                }
                ?>

                <?php
                if (isset($_SESSION['user'])) {
                    echo '<li><a class="teal darken-1 waves-effect waves-light btn" href="includes/logout.inc.php">Logout</a></li> ';
//                    echo '<li><form action="includes/logout.inc.php"><button class="teal darken-1 waves-effect waves-light btn">Logout</button></form></li>';
                } else {
                    echo '<li><a class="modal-trigger teal darken-1 waves-effect waves-light btn" href="#modal1">Login</a></li>';
                }
                ?>
                <!--                <li><a class="teal darken-1 waves-effect waves-light btn" href="login.php">Login</a></li>-->
            </ul>

            <ul id="nav-mobile" class="side-nav">
                <li>
                    <div class="userView">
                        <div class="background">
                            <img src="">
                        </div>
                        <a href="#"><img class="circle" src=""></a>
                        <a href="#"><span class="white-text name">Admin</span></a>
                        <a href="#"><span class="white-text email">Admin@test.test</span></a>
                    </div>
                </li>
                <li><a class="waves-effect" href="index.php"><i class="material-icons">store</i>Home</a></li>
                <li><a class="waves-effect" href="student.php"><i class="material-icons">subject</i>Student</a>
                </li>
                <li><a class="waves-effect" href="begeleider.php"><i class="material-icons">assignment</i>Begeleider</a>
                </li>
                <li>
                    <div class="divider"></div>
                </li>
                <li><a class="subheader">Account</a></li>
                <?php
                if (isset($_SESSION['user'])) {
                    echo '<li><a class="waves-effect" href="includes/logout.inc.php"><i class="material-icons">supervisor_account</i>Logout</a></li>';
//                    echo '<li><form action="includes/logout.inc.php"><button class="waves-effect btn">Logout</button></form></li>';
                } else {
                    echo '<li><a class="waves-effect" href="#modal1"><i class="material-icons">supervisor_account</i>Login</a></li>';
                }
                ?>
                <!--                <li><a class="waves-effect" href="#modal1"><i class="material-icons">supervisor_account</i>Login</a></li>-->
            </ul>
            <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
        </div>
    </nav>
</div>

<div id="modal1" class="modal">
    <div class="modal-content">
        <div class="container">
            <div class="section no-pad-bot" id="index-banner">
                <div class="container">
                    <div class="row center">
                        <h4 class="header center black-text">Inloggen</h4>
                    </div>
                </div>
            </div>

            <?php
            if (isset($_SESSION['user'])) {
                echo $_SESSION['user']['id_users'];
            } else {
                echo "You are not logged in";
            }
            ?>


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
                    <div class="modal-footer">
                        <div class="row">
                            <div class="row right">
                                <button class="btn waves-effect waves-light teal darken-1" type="submit">Inloggen
                                    <i class="material-icons right">send</i>
                                </button>
                            </div>
                            <div class="row left">
                                <a class="btn-floating btn-large waves-effect waves-light teal darken-1"
                                   onclick="$('#modal1').modal('close');" href="#modal2"><i
                                            class="material-icons">add</i></a>
                            </div>
                        </div>
                        <!--                        <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Agree</a>-->
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div id="modal2" class="modal">
    <div class="modal-content">
        <div class="container">
            <div class="section no-pad-bot" id="index-banner">
                <div class="container">
                    <div class="row center">
                        <h4 class="header center black-text">Registreren</h4>
                    </div>
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
</div>

<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script>
    $(document).ready(function () {
        // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
        $('.modal').modal();
    });
</script>
