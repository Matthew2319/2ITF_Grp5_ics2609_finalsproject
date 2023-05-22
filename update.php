<?php
include ('connect.php');
$id = $_GET['updateid'];
$sql="Select * from `entries` where id=$id";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$labNumber=$row['labNumber'];
$compNumber=$row['compNumber'];
$status=$row['status'];
$maintenance=$row['maintenance'];

if(isset($_POST['submit'])){
    $labNumber=$_POST['labNumber'];
    $compNumber=$_POST['compNumber'];
    $status=$_POST['status'];
    $maintenance=$_POST['maintenance'];

    $sql="update `entries` set  `labNumber`='$labNumber', `compNumber`='$compNumber'
    , `status`='$status', `maintenance`='$maintenance' where `id`='$id'" ;
    $result = $conn->query($sql);
    if($result == TRUE){
        
        header('location:inventory-management.php');
    }else{
        echo "Error:" . $sql . "<br>" . $conn->error;
    }
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Inventory-Management</title>
<link rel="stylesheet" href="home.css">
</head>
<body>
 
<h1>Inventory-Management</h1>
<div class="square"> 
</div>


  <form method="post">
    <label for="labNumber">Laboratory Number:</label>
    <input type="text" id="labNumber" name="labNumber" required="" Value=<?php
    echo $labNumber;?>><br>

    <label for="compNumber">Computer Number:</label>
    <input type="text" id="compNumber" name="compNumber" required="" Value=<?php
    echo $compNumber;?>><br>

    <label for="status">Status:</label>
    <input type="text" id="status" name="status" required="" Value=<?php
    echo $status;?>><br>

    <label for="maintenance">Maintenance Required:</label>
    <input type="text" id="maintenance" name="maintenance" required="" Value=<?php
    echo $maintenance;?>><br>

    <input type="submit" name="submit" value="Update">
    <a class="button" href="inventory-management.php">Go Back</a>
  </form>
</body>
</html>
