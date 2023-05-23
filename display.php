<?php
include ('connect.php');
//These lines of code check the variable $_POST['submit']. If it is set, 
//the values of the form fields are stored in the variables $labNumber, $compNumber, $status, and $maintenance
if(isset($_POST['submit'])){
  $labNumber=$_POST['labNumber'];
  $compNumber=$_POST['compNumber'];
  $status=$_POST['status'];
  $maintenance=$_POST['maintenance'];
 //This line of code creates the SQL statement that will be used to insert the values of the form fields into the database.
  $sql="insert into `entries`(labNumber,compNumber,status,maintenance)
  values('$labNumber','$compNumber','$status','$maintenance')";

  //This line of code executes the SQL statement using the query() method of the mysqli object $conn
  $result=$conn->query($sql);
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
</div>
<form method="post" >
    <label for="labNumber">Laboratory Number:</label>
    <input type="text" id="labNumber" name="labNumber" required><br>

    <label for="compNumber">Computer Number:</label>
    <input type="text" id="compNumber" name="compNumber" required><br>

    <label for="Tools">Tools:</label>
    <input type="text" id="Tools" name="Tools" required><br>

    <label for="status">Status:</label>
    <input type="text" id="status" name="status" required><br>

    <label for="maintenance">Maintenance Required:</label>
    <input type="text" id="maintenance" name="maintenance" required><br>

    <input type="submit" name="submit" value="Add Entry">
    <a class="button1" href="inventory-management.php">Go Back</a>
  </form>
</body>
</html> 