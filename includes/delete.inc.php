<?php
session_start();

include 'dbcon.inc.php';

$id = $_SESSION['student']['id_users'];
$fkId = $_SESSION['student']['fk_preference'];

$sql = "DELETE FROM users WHERE id_users=$id";

if (mysqli_query($conn, $sql)) {
    $sql = "DELETE FROM preference WHERE id_preference=$fkId";
    if (mysqli_query($conn, $sql)) {
        header("Location: ../adminList?acc=del");
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}




