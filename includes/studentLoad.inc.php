<?php

include 'dbcon.inc.php';

$sql = "SELECT leuk, nietleuk, sterkepunt, zwakkepunt, sterkepunt_ander, zwakkepunt_ander FROM preference WHERE id_preference = '" . $_SESSION['user']['fk_preference'] . "'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while ($row = mysqli_fetch_assoc($result)) {
        $textarea1 = $row["leuk"];
        $textarea2 = $row["nietleuk"];
        $textarea3 = $row["sterkepunt"];
        $textarea4 = $row["zwakkepunt"];
        $textarea5 = $row["sterkepunt_ander"];
        $textarea6 = $row["zwakkepunt_ander"];
    }
} else {
    $textResults = "Geen resultaat";
}
?>