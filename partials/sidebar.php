<div class="navbar-fixed">
    <nav class="teal lighten-1" role="navigation">
        <div class="nav-wrapper container"><a id="logo-container" href="../index.php" class="brand-logo"><b>ROC Ter AA</b> <i>studiehulp</i></a>
            <ul class="right hide-on-med-and-down">
                <li><a href="../index.php">Home</a></li>
                <li><a href="../tabs/student.php">Test1</a></li>
                <li><a href="../tabs/begeleider.php">Test2</a></li>
                <li><a class="teal darken-1 waves-effect waves-light btn" href="../tabs/login.php">Login</a></li>
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
                <li><a href="#"><i class="material-icons">cloud</i>First Link With Icon</a></li>
                <li><a href="#">Second Link</a></li>
                <li>
                    <div class="divider"></div>
                </li>
                <li><a class="subheader">Subheader</a></li>
                <li><a class="waves-effect" href="#">Third Link With Waves</a></li>
            </ul>
            <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
        </div>
    </nav>
</div>

<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript">
    $('.button-collapse').sideNav({
            menuWidth: 300, // Default is 240
            edge: 'right', // Choose the horizontal origin
            closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
            draggable: true // Choose whether you can drag to open on touch screens
        }
    );
</script>