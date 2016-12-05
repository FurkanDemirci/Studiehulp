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
    <div class="parallax"><img src="img/parallax1.jpg"></div>
</div>
<div class="section white">
    <div class="row container">
        <div class="section no-pad-bot" id="index-banner">
            <div class="container">
                <br><br>
                <h1 class="header center black-text">Studiehulp Begeleiding</h1>
                <div class="row center">
                    <h5 class="header col s12 light"></h5>
                </div>
                <div class="row center">
                    <a href="#" id="download-button"
                       class="btn-large waves-effect waves-light teal darken-1">Beginnen!</a>
                </div>
                <br><br>
            </div>
        </div>
    </div>
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