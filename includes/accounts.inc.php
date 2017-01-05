<?php
session_start();

include 'dbcon.inc.php';

$email = $_POST['email'];

$sql = 'SELECT * FROM users WHERE email="' . $email . '"';
$result = mysqli_query($conn, $sql);

if (!$row = mysqli_fetch_assoc($result)) {
    echo '<script type="text/javascript">alert("Niet gevonden!");
          window.location.replace("../begeleider.php");</script>';
} else {
    $_SESSION['student'] = $row;
    $sql = 'SELECT * FROM preference WHERE id_preference="' . $row['fk_preference'] . '"';
    $result = mysqli_query($conn, $sql);
    if ($row = mysqli_fetch_assoc($result)) {
        $_SESSION['preferences'] = $row;

        $firstname = $_SESSION['student']['firstname'];

        $test = $_SESSION['preferences']['leuk'];
    } else {

    }

    header("Location: ../gegevens.php");
}

//$sql = 'SELECT * FROM users';
//$result = mysqli_query($conn, $sql);

?>