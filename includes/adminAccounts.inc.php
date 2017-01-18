<?php

include 'dbcon.inc.php';

$sql = 'SELECT * FROM users';
$result = mysqli_query($conn, $sql);

?>