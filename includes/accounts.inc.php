<?php
session_start();

include 'dbcon.inc.php';

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $fkPref = $_GET['id'];

    $sql = $conn->prepare("SELECT * FROM users WHERE fk_preference=?");
    $sql->bind_param("s", $fkPref_stmt);

    $fkPref_stmt = $fkPref;
    $sql->execute();

    $result = $sql->get_result();

    if (!$row = mysqli_fetch_assoc($result)) {
        header("Location: ../adminMail?not=found");
    } else {
        $_SESSION['student'] = $row;
        $sql = 'SELECT * FROM preference WHERE id_preference="' . $row['fk_preference'] . '"';
        $result = mysqli_query($conn, $sql);
        if ($row = mysqli_fetch_assoc($result)) {
            $_SESSION['preferences'] = $row;
        } else {
            echo "Probleem bij het laden...";
        }

        header("Location: ../adminPref");
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = mysqli_real_escape_string($conn, $_POST['email']);

    $sql = $conn->prepare("SELECT * FROM users WHERE email=?");
    $sql->bind_param("s", $email_stmt);

    $email_stmt = $email;
    $sql->execute();

    $result = $sql->get_result();

    if (!$row = mysqli_fetch_assoc($result)) {
        header("Location: ../adminMail?not=found");
    } else {
        $_SESSION['student'] = $row;
        $sql = 'SELECT * FROM preference WHERE id_preference="' . $row['fk_preference'] . '"';
        $result = mysqli_query($conn, $sql);
        if ($row = mysqli_fetch_assoc($result)) {
            $_SESSION['preferences'] = $row;
        } else {
            echo "Probleem bij het laden...";
        }

        header("Location: ../adminPref");
    }
}
?>