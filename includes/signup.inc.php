<?php
session_start();

include 'dbcon.inc.php';

$firstname = $_POST['first_name'];
$lastname = $_POST['last_name'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql = 'SELECT email FROM users';
$result = mysqli_query($conn, $sql);

if ($row = mysqli_fetch_assoc($result)) {
    if ($email == $row['email']) {
        echo '<script type="text/javascript">alert("Email bestaat al!");
          window.location.replace("../signup.php");</script>';
    } else {
        $sql = 'INSERT INTO `preference` (`id_preference`, `leuk`, `nietleuk`, `sterkepunt`, `zwakkepunt`, `sterkepunt_ander`, `zwakkepunt_ander`) VALUES (NULL, NULL, NULL, NULL, NULL, NULL, NULL)';
        if (mysqli_query($conn, $sql)) {
            $id = mysqli_insert_id($conn);
            /* die( "New record created successfully. Last inserted ID is: " . $id);*/
        } else {
            die("Error: " . $sql . "<br>" . mysqli_error($conn));
        }
        /* echo $id;
        die();*/

//$sql = "INSERT INTO users (email, password, firstname, lastname, fk_preferences)
//VALUES ('$email', '$password', '$firstname', '$lastname', '$id')";
        $query = 'INSERT INTO `users` (`id_users`, `email`, `password`, `firstname`, `lastname`, `fk_preference`, `type`) VALUES (NULL, "' . $email . '", "' . $password . '", "' . $firstname . '", "' . $lastname . '", "' . $id . '", 0);';
//$result = mysqli_query($conn, $query);
        if (mysqli_query($conn, $query)) {
            echo '<script type="text/javascript">alert("Account Aangemaakt!");
          window.location.replace("../login.php");</script>';
        } else {
            die("Error: " . $sql . "<br>" . mysqli_error($conn));
        }
    }
} else {
    echo "Geen connectie huh ?";
}
?>