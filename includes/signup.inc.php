<?php
session_start();

include 'dbcon.inc.php';

$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['password']);
$firstname = mysqli_real_escape_string($conn, $_POST['first_name']);
$lastname = mysqli_real_escape_string($conn, $_POST['last_name']);


if (empty($firstname)) {
    header("Location: ../signup?error=empty");
    exit();
} elseif (empty($lastname)) {
    header("Location: ../signup?error=empty");
    exit();
} elseif (empty($email)) {
    header("Location: ../signup?error=empty");
    exit();
} elseif (empty($password)) {
    header("Location: ../signup?error=empty");
    exit();
}

$sql = 'SELECT email FROM users';
$result = mysqli_query($conn, $sql);

if ($row = mysqli_fetch_assoc($result)) {
    if ($email == $row['email']) {
        echo '<script type="text/javascript">alert("Email bestaat al!");
          window.location.replace("../signup");</script>';
    } else {
        $sql = 'INSERT INTO `preference` (`id_preference`, `leuk`, `nietleuk`, `sterkepunt`, `zwakkepunt`, `sterkepunt_ander`, `zwakkepunt_ander`) VALUES (NULL, NULL, NULL, NULL, NULL, NULL, NULL)';
        if (mysqli_query($conn, $sql)) {
            $id = mysqli_insert_id($conn);
            /* die( "New record created successfully. Last inserted ID is: " . $id);*/
        } else {
            die("Error: " . $sql . "<br>" . mysqli_error($conn));
        }

        $encrypted_pwd = password_hash($password, PASSWORD_DEFAULT);
        $query = $conn->prepare("INSERT INTO users (id_users, email, password, firstname, lastname, fk_preference, type) VALUES (NULL, ?, ?, ?, ?, $id, 0)");
        $query->bind_param("ssss", $email_stmt, $encrypted_pwd_stmt, $firstname_stmt, $lastname_stmt);

        $email_stmt = $email;
        $encrypted_pwd_stmt = $encrypted_pwd;
        $firstname_stmt = $firstname;
        $lastname_stmt = $lastname;

        if ($query->execute()) {
            echo '<script type="text/javascript">alert("Account Aangemaakt!");
          window.location.replace("../login");</script>';
        } else {
            die("Error: " . $sql . "<br>" . mysqli_error($conn));
        }
    }
} else {
    echo "Niet kunnen selecteren uit database. Heb altijd 1 row (gebruiker, alles mag leeg zijn) in je database staan zodat die kan zoeken naar email.";
}
?>