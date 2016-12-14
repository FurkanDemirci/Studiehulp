<?php
session_start();

include 'dbcon.inc.php';

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
$result = mysqli_query($conn, $sql);

if (!$row = mysqli_fetch_assoc($result)) {
    echo '<img src="../img/wrong.gif">';
    echo '</img>';
} else {
    $_SESSION['user'] = $row;
    $sql = 'SELECT * FROM preferences WHERE id="'. $row['fk_preferences'] .'"';
    $result = mysqli_query($conn, $sql);
    if ($row = mysqli_fetch_assoc($result)) {
        $_SESSION['user']['preferences'] = $row;
    } else {

    }
    header("Location: ../student.php");
}
?>