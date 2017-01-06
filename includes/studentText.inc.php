<?php
session_start();

include 'dbcon.inc.php';

$textarea1 = $_POST['textarea1'];
$textarea2 = $_POST['textarea2'];
$textarea3 = $_POST['textarea3'];
$textarea4 = $_POST['textarea4'];
$textarea5 = $_POST['textarea5'];
$textarea6 = $_POST['textarea6'];

$sql = $conn->prepare("UPDATE preference SET leuk = ?, nietleuk = ?, sterkepunt = ?, zwakkepunt = ?, sterkepunt_ander = ?, zwakkepunt_ander = ? WHERE id_preference = '" . $_SESSION['user']['fk_preference'] . "'");
$sql->bind_param("ssssss", $textarea1_stmt, $textarea2_stmt, $textarea3_stmt, $textarea4_stmt, $textarea5_stmt, $textarea6_stmt);

$textarea1_stmt = $textarea1;
$textarea2_stmt = $textarea2;
$textarea3_stmt = $textarea3;
$textarea4_stmt = $textarea4;
$textarea5_stmt = $textarea5;
$textarea6_stmt = $textarea6;

if ($sql->execute()) {
    echo '<script type="text/javascript">alert("Gelukt!");
          window.location.replace("../student");</script>';
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>