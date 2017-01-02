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
                    echo '<li><a class="teal darken-1 waves-effect waves-light btn" href="login.php">Login</a></li>';
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
                    echo '<li><a class="waves-effect" href="login.php"><i class="material-icons">supervisor_account</i>Login</a></li>';
                }
                ?>
            </ul>
            <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
        </div>
    </nav>
</div>
