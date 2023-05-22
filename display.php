<!-- <!DOCTYPE html>
<html>
<head>
  <title>Inventory Management - Entries</title>
  <link rel="stylesheet" href="home.css">

  <div class="button-container">

  <a class="button" href="inventory-management.php">Create New Record</a>
  <a class="button" href="inventory-management.php">Go Back</a>

</head>
<body>
  <h1>Inventory Management</h1> -->

  <?php
  // if ($_SERVER["REQUEST_METHOD"] == "POST") {
  //   // Retrieve form inputs
  //   $labNumber = $_POST["labNumber"];
  //   $compNumber = $_POST["compNumber"];
  //   $status = $_POST["status"];
  //   $maintenance = $_POST["maintenance"];

  //   // Connect to the database
  //   $servername = "localhost";
  //   $username = "root";
  //   $password = "";
  //   $dbname = "laboratory";
  //   $conn = new mysqli($servername, $username, $password, $dbname);
  //   if ($conn->connect_error) {
  //     die("Connection failed: " . $conn->connect_error);
  //   }

  //   // Insert the new entry into the database
  //   $sql = "INSERT INTO entries (labNumber, compNumber, status, maintenance)
  //           VALUES ('$labNumber', '$compNumber', '$status', '$maintenance')";
  //   if ($conn->query($sql) === TRUE) {
  //     echo "<h2><center>New entry added successfully</center></h2>.";
  //   } else {
  //     echo "Error: " . $sql . "<br>" . $conn->error;
  //   }

  //   $conn->close();
  // }
  ?>
    
  <!-- <table class="table">
    <thead>
    <tr>
      <th scope="col">Laboratory Number</th>
      <th scope="col">Computer Number</th>
      <th scope="col">Status</th>
      <th scope="col">Maintenance Required</th>
      <th scope="col">Operations</th>
    </tr>
</thead>
<tbody> -->
    <?php
    // include ('connect.php');

    // $sql = "SELECT * FROM entries";
    // $result = $conn->query($sql);

    // if ($result) {
    //   while ($row = mysqli_fetch_assoc($result)) {
    //     $id=$row['id'];
    //     $labNumber=$row['labNumber'];
    //     $compNumber=$row['compNumber'];
    //     $status=$row['status'];
    //     $maintenance=$row['maintenance'];
    //     echo '<tr>
        
    //     <th scope=$row>'.$labNumber.'</th>
    //     <th scope=$row>'.$compNumber.'</th>
    //     <th scope=$row>'.$status.'</th>
    //     <th scope=$row>'.$maintenance.'</th>    
    //     <td>
    //   <button class="btn btn-primary"><a href="update.php? updateid='.$id.'" class="text-light">Update</a></button>
    //   <button class="btn btn-danger"><a href="delete.php? deleteid='.$id.'" class="text-light">Delete</a></button>
    // </td>

    //      </tr>';
    //   }
    // } else {
    //   echo "No entries found.";
    // }

    // $conn->close();
    ?>

  <!-- </tbody> 
  </table>

</body>
</html> -->

<?php
include ('connect.php');
if(isset($_POST['submit'])){
  $labNumber=$_POST['labNumber'];
  $compNumber=$_POST['compNumber'];
  $status=$_POST['status'];
  $maintenance=$_POST['maintenance'];

  $sql="insert into `entries`(labNumber,compNumber,status,maintenance)
  values('$labNumber','$compNumber','$status','$maintenance')";
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

    <label for="status">Status:</label>
    <input type="text" id="status" name="status" required><br>

    <label for="maintenance">Maintenance Required:</label>
    <input type="text" id="maintenance" name="maintenance" required><br>

    <input type="submit" name="submit" value="Add Entry">
    <a class="button1" href="inventory-management.php">Go Back</a>
  </form>
</body>
</html> 