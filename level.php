<?php

$userrole = ['admin','klant'];

include("./connect_db.php");
include("./security.php");

$id = $_SESSION["id"];
    $sql = "SELECT * FROM `login`";
    $result = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($result);

if ($row['calorien'] >= 1000) {
    $level = 2;
} else if($row['calorien'] >= 500) {
    $level = 1;
} else {
    $level = 0;
}

echo $level;

?>