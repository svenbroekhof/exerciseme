<?php
    include ("./connect_db.php");

    $id = $_GET['id'];

    $sql = "DELETE FROM `contact` WHERE `id` = $id";

    mysqli_query($conn, $sql);

    header("Location: ./index.php?content=berichten");
?>