<?php
include ('connect.php');
if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];
    $sql = "DELETE FROM `maintenance_schedule` WHERE `id`='$id'";
    $result = $conn->query($sql);
    if ($result == TRUE) {

        
        header('location:maintenance-schedules.php');

    }else{

        echo "Error:" . $sql . "<br>" . $conn->error;

    }
}  