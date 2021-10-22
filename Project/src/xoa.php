<?php
    include 'config.php';
    $id = $_GET['id'];
    $sql = "delete from CARS where vehicle_id = '$id'";
    $result = mysqli_query($conn, $sql);
    if($result > 0) {
        header("Location: index.php");

    }
    mysqli_close($conn);
?>