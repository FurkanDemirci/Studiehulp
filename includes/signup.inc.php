<?php
session_start();

include 'dbcon.inc.php';

$firstname = $_POST['first_name'];
$lastname = $_POST['last_name'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "INSERT INTO users (email, password, firstname, lastname) 
VALUES ('$email', '$password', '$firstname', '$lastname')";
$result = mysqli_query($conn, $sql);

header("Location: ../index.php");


?>