<!DOCTYPE html>
<html>
<head>
    <title>Studiehulp</title>
    <link rel="shortcut icon" href="img/titleIcon.ico"/>

    <!-- stylesheets and meta info -->
    <?php require 'partials/head.php'; ?>
    <?php require 'partials/stylesheets.php'; ?>
</head>
<body class="teal">

<!-- Content -->
<div class="container">
    <div class="row center">
        <div class="col s12">
            <div class="card">
                <?php
                $to = "somebody@example.com";
                $subject = "My subject";
                $txt = "Hello world!";
                $headers = "From: webmaster@example.com" . "\r\n" .
                    "CC: somebodyelse@example.com";

                mail($to,$subject,$txt,$headers);
                ?>
            </div>
        </div>
    </div>
</div>

<!-- script tags -->
<?php require 'partials/javascript.php'; ?>

</body>
</html>