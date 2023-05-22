<?php
include ('connect.php');
if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];
    $sql = "DELETE FROM `usage_monitoring` WHERE `id`='$id'";
    $result = $conn->query($sql);
    if ($result == TRUE) {

        
        header('location:usage-monitoring.php');
       

    }else{

        echo "Error:" . $sql . "<br>" . $conn->error;


}
}