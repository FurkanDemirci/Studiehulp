<!DOCTYPE html>
<html>
<head>
    <title>Studiehulp</title>

    <!-- stylesheets and meta info -->
    <?php require 'partials/head.php'; ?>
    <?php require 'partials/stylesheets.php'; ?>
</head>
<body>

<!-- Sidebar -->
<?php require 'partials/sidebar.php'; ?>

<!-- Content -->
<div class="parallax-container">
    <div class="section no-pad-bot">
        <div class="container">
            <br>
            <br>
            <h1 id="fontHome" class="card-panel z-depth-5 teal lighten-1 header center white-text">StudieHulp
                begeleiding</h1>
            <div class="row center">
                <h5 id="fontHomeLow" class="header col s12 white-text light">Lorem ipsum dolor sit amet, consectetuer
                    adipiscing elit. Aenean
                    commodo ligula eget dolor. Aenean massa.</h5>
            </div>
            <div class="row center">
                <a class="btn-large z-depth-2 hoverable waves-effect waves-light teal darken-1" href="">Beginnen</a>
            </div>
            <br>
            <br>
        </div>
    </div>
    <div class="parallax"><img src="img/parallax1.jpg"></div>
</div>
<div class="section white">
    <br>
    <br>
    <div class="row container">
        <div class="col s12 m4">
            <div class="icon-block">
                <h2 class="center red-text"><i class="material-icons">list</i></h2>
                <h5 class="center">Lorem ipsum dolor sit</h5>

                <p class="light">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget
                    dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes.</p>
            </div>
        </div>

        <div class="col s12 m4">
            <div class="icon-block">
                <h2 class="center red-text"><i class="material-icons">assignment_ind</i></h2>
                <h5 class="center">Lorem ipsum dolor sit</h5>

                <p class="light">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget
                    dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur
                    ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu.</p>
            </div>
        </div>

        <div class="col s12 m4">
            <div class="icon-block">
                <h2 class="center red-text"><i class="material-icons">email</i></h2>
                <h5 class="center">Lorem ipsum dolor sit</h5>

                <p class="light">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget
                    dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur
                    ridiculus mus. Donec quam felis.</p>
            </div>
        </div>
    </div>
    <br>
    <br>
</div>
<div class="parallax-container">
    <div class="parallax"><img src="img/parallax2.jpg"></div>
</div>


<script>
    $(document).ready(function () {
        $('.parallax').parallax();
    });

</script>

<!-- Footer -->
<?php require 'partials/footer.php'; ?>

<!-- script tags -->
<?php require 'partials/javascript.php'; ?>

</body>
</html>