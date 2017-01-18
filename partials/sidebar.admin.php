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
                            echo '<li><a class="waves-effect white-text" href="adminMail"><i class="material-icons white-text">assignment</i>Specifiek zoeken op email</a></li>';
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