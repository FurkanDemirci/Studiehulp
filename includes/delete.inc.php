<?php
session_start();

include 'dbcon.inc.php';

$id = $_SESSION['student']['id_users'];

$sql = "DELETE FROM users WHERE id_users=$id";
$result = mysqli_query($conn, $sql);

if (!$row = mysqli_fetch_assoc($result)) {
    echo '<script type="text/javascript">alert("Gelukt!");
          window.location.replace("../begeleider");</script>';
} else {
    echo "wel gelukt";
}

session_destroy();
