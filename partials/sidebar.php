<div class="navbar">
    <nav class="teal darken-4" role="navigation">
        <div class="nav-wrapper container"><a id="logo-container" href="../studiehulp" class="brand-logo"><b>ROC Ter
                    AA</b></a>
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

                <?php
                if (isset($_SESSION['user'])) {
                    echo '<li><a class="red darken-4 waves-effect waves-light btn" href="includes/logout.inc.php">Logout</a></li> ';
                } else {
                    echo '<li><a class="teal darken-1 waves-effect waves-light btn" href="login">Login</a></li>';
                }
                ?>
            </ul>

            <ul id="nav-mobile" class="side-nav">
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
                <li><a class="waves-effect" href="../studiehulp"><i class="material-icons">store</i>Home</a></li>
                <?php
                if (isset($_SESSION['user'])) {
                    switch ($_SESSION['user']['type']) {
                        case "0":
                            echo '<li><a class="waves-effect" href="student"><i class="material-icons">subject</i>Student</a></li>';
                            break;
                        case "1":
                            echo '<li><a class="waves-effect" href="adminList"><i class="material-icons">assignment</i>Admin Pagina</a></li>';
                            break;
                        default:
                            echo '<h1>SOMETHING IS NOT QUITE RIGHT</h1>';
                    }
                } else {
                    echo '';
                }
                ?>
                <li>
                    <div class="divider"></div>
                </li>
                <li><a class="subheader">Account</a></li>
                <?php
                if (isset($_SESSION['user'])) {
                    echo '<li><a class="waves-effect red-text" href="includes/logout.inc.php"><i class="material-icons">supervisor_account</i>Logout</a></li>';
                } else {
                    echo '<li><a class="waves-effect" href="login"><i class="material-icons">supervisor_account</i>Login</a></li>';
                }
                ?>
            </ul>
            <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
        </div>
    </nav>
</div>
