<?php
session_start();

include 'dbcon.inc.php';

$firstname = $_POST['first_name'];
$lastname = $_POST['last_name'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql = 'INSERT INTO `preference` (`id_preference`, `leuk`, `nietleuk`, `sterkepunt`, `zwakkepunt`, `sterkepunt_ander`, `zwakkepunt_ander`) VALUES (NULL, NULL, NULL, NULL, NULL, NULL, NULL)';
 if ( mysqli_query($conn, $sql) ) {
     $id = mysqli_insert_id($conn);
    /* die( "New record created successfully. Last inserted ID is: " . $id);*/
 } else {
     die( "Error: " . $sql . "<br>" . mysqli_error($conn));
 }
/* echo $id;
die();*/

//$sql = "INSERT INTO users (email, password, firstname, lastname, fk_preferences)
//VALUES ('$email', '$password', '$firstname', '$lastname', '$id')";
$query = 'INSERT INTO `users` (`id_users`, `email`, `password`, `firstname`, `lastname`, `fk_preference`, `type`) VALUES (NULL, "'. $email .'", "'. $password .'", "'. $firstname .'", "'. $lastname .'", "'. $id .'", 0);';
//$result = mysqli_query($conn, $query);
if ( mysqli_query($conn, $query) ) {
    header("Location: ../index.php");
} else {
    die( "Error: " . $sql . "<br>" . mysqli_error($conn));
}
?>