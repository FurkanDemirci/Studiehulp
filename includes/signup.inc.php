<?php

include 'dbcon.inc.php';

$firstname  = $_POST['first_name'];
$lastname   = $_POST['last_name'];
$email      = $_POST['email'];
$password   = $_POST['password'];

$sql = "INSERT INTO users (email, password, firstname, lastname) 
VALUES ('$firstname', '$lastname', '$email', '$password')";
$result = mysqli_query($conn, $sql);

header(
    "Location: ../index.php"
);