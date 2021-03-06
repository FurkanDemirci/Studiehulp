<?php
session_start();

include 'dbcon.inc.php';

$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

$sql = $conn->prepare("SELECT * FROM users WHERE email=?");
$sql->bind_param("s", $email_stmt);

$email_stmt = $email;
$sql->execute();

$result = $sql->get_result();
//$rowNum = $result->num_rows;

$row = mysqli_fetch_assoc($result);
$hash_pwd = $row['password'];
$hash = password_verify($password, $hash_pwd);

if ($hash == 0) {
    header("Location: ../login?fout=gvns");
} else {
    $sql = "SELECT * FROM users WHERE email='$email' AND password='$hash_pwd'";
    $result = mysqli_query($conn, $sql);

    $row = mysqli_fetch_assoc($result);
    $_SESSION['user'] = $row;
    $sql = 'SELECT * FROM preferences WHERE id="' . $row['fk_preferences'] . '"';
    $result = mysqli_query($conn, $sql);
    if ($row = mysqli_fetch_assoc($result)) {
        $_SESSION['user']['preferences'] = $row;
    } else {
        echo "Geen preferences connectie?";
    }

    switch ($_SESSION['user']['type']) {
        case "0":
            header("Location: ../student");
            break;
        case "1":
            header("Location: ../adminList");
            break;
        default:
            echo '<h1>SOMETHING IS NOT QUITE RIGHT</h1>';
    }
}
?>