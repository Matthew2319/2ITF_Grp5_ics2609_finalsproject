<?php
include ('connect.php');
if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];

    $sql = "DELETE FROM `entries` WHERE `id`='$id'";
    $result = $conn->query($sql);
    if ($result == TRUE) {

        
        header('location:inventory-management.php');
    }else{

        echo "Error:" . $sql . "<br>" . $conn->error;
    }
}



   

