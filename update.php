<?php
include  ('connect.php');

// Get the ID of the entry to be updated from the GET request.
$id = $_GET['updateid'];

// Run the query to select the entry from the database.
$sql="Select * from `entries` where id=$id";
$result=mysqli_query($conn,$sql);

// Get the values from the row.
$row=mysqli_fetch_assoc($result);
$labNumber=$row['labNumber'];
$compNumber=$row['compNumber'];
$Tools=$row['Tools'];
$status=$row['status'];
$maintenance=$row['maintenance'];

// Check if the submit button has been clicked.
if(isset($_POST['submit'])){

  // Retrieve the values from the form.
  $labNumber=$_POST['labNumber'];
  $compNumber=$_POST['compNumber'];
  $Tools=$_POST['Tools'];
  $status=$_POST['status'];
  $maintenance=$_POST['maintenance'];

  // Update the entry in the database.
  $sql="update `entries` set  `labNumber`='$labNumber', `compNumber`='$compNumber'
    , `Tools`='$Tools',`status`='$status', `maintenance`='$maintenance' where `id`='$id'" ;
  $result = $conn->query($sql);

  // Check if the query was successful.
  if($result == TRUE){

    // Redirect the browser to the inventory-management.php page.
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

    <label for="Tools">Tools:</label>
    <input type="text" id="Tools" name="Tools" required="" Value=<?php
    echo $Tools;?>><br>

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
