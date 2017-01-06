<?php
session_start();

include 'dbcon.inc.php';

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE email='$email'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$hash_pwd = $row['password'];
$hash = password_verify($password, $hash_pwd);

if ($hash == 0) {
    echo '<script type="text/javascript">alert("Foute Gegevens");
          window.location.replace("../login");</script>';
} else {
    $sql = "SELECT * FROM users WHERE email='$email' AND password='$hash_pwd'";
    $result = mysqli_query($conn, $sql);

    $row = mysqli_fetch_assoc($result);
    $_SESSION['user'] = $row;
    $sql = 'SELECT * FROM preferences WHERE id="' . $row['fk_preferences'] . '"';
    $result = mysqli_query($conn, $sql);
    if ($row = mysqli_fetch_assoc($result)) {
        $_SESSION['user']['preferences'] = $row;
    } else {
        echo "Geen preferences connectie?";
    }

    switch ($_SESSION['user']['type']) {
        case "0":
            header("Location: ../student");
            break;
        case "1":
            header("Location: ../begeleider");
            break;
        default:
            echo '<h1>SOMETHING IS NOT QUITE RIGHT</h1>';
    }
}
?>