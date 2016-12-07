<?php

include 'dbcon.inc.php';

$firstname  = $_POST['first_name'];
$lastname   = $_POST['last_name'];
$email      = $_POST['email'];
$password   = $_POST['password'];

echo $firstname."<br>";
echo $lastname."<br>";
echo $email."<br>";
echo $password."<br>"   ;