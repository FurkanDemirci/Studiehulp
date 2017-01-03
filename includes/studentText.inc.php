<?php
session_start();

include 'dbcon.inc.php';

$textarea1 = $_POST['textarea1'];
$textarea2 = $_POST['textarea2'];
$textarea3 = $_POST['textarea3'];
$textarea4 = $_POST['textarea4'];
$textarea5 = $_POST['textarea5'];
$textarea6 = $_POST['textarea6'];

$sql = "UPDATE preference SET leuk = '$textarea1', nietleuk = '$textarea2', sterkepunt = '$textarea3', zwakkepunt = '$textarea4', sterkepunt_ander = '$textarea5', zwakkepunt_ander = '$textarea6' WHERE id_preference = '" . $_SESSION['user']['fk_preference'] . "'";

if (mysqli_query($conn, $sql)) {
    echo '<script type="text/javascript">alert("Gelukt!");
          window.location.replace("../student.php");</script>';
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
//    echo $textarea1;
//    echo $textarea2;
//    echo $textarea3;
//    echo $textarea4;
//    echo $textarea5;
//    echo $textarea6;

//`id_preference`='" . $_SESSION['user']['fk_preferences'] . "',
?>