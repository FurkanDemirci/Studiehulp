<script src="../dist/sweetalert.min.js"></script>

<?php
session_start();

include 'dbcon.inc.php';

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
$result = mysqli_query($conn, $sql);

if (!$row = mysqli_fetch_assoc($result)) {
    echo '<script type="text/javascript">alert("Foute Gegevens");
          window.location.replace("../login.php");</script>';

//        echo    "<script type='text/javascript'>
//                $('#modal1').modal('open');
//                </script>
//                ";
//    echo '<img src="../img/wrong.gif">';
//    echo '</img>';
} else {
    $_SESSION['user'] = $row;
    $sql = 'SELECT * FROM preferences WHERE id="' . $row['fk_preferences'] . '"';
    $result = mysqli_query($conn, $sql);
    if ($row = mysqli_fetch_assoc($result)) {
        $_SESSION['user']['preferences'] = $row;
    } else {

    }

    switch ($_SESSION['user']['type']) {
        case "0":
            header("Location: ../student.php");
            break;
        case "1":
            header("Location: ../begeleider.php");
            break;
        default:
            echo '<h1>SOMETHING IS NOT QUITE RIGHT</h1>';
    }
}
?>