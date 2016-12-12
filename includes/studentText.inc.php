<?php

include 'dbcon.inc.php';

    $textarea1 = $_POST['textarea1'];
    $textarea2 = $_POST['textarea2'];
    $textarea3 = $_POST['textarea3'];
    $textarea4 = $_POST['textarea4'];
    $textarea5 = $_POST['textarea5'];
    $textarea6 = $_POST['textarea6'];

$sql = "INSERT INTO preference (leuk, nietleuk, sterkepunt, zwakkepunt, sterkepunt_ander, zwakkepunt_ander)
VALUES ('$textarea1', '$textarea2', '$textarea3', '$textarea4', '$textarea5', '$textarea6')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
//    echo $textarea1;
//    echo $textarea2;
//    echo $textarea3;
//    echo $textarea4;
//    echo $textarea5;
//    echo $textarea6;
?>