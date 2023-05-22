<?php
// include ('connect.php');
// if(isset($_POST['submit'])){
//   $labNumber=$_POST['labNumber'];
//   $compNumber=$_POST['compNumber'];
//   $status=$_POST['status'];
//   $maintenance=$_POST['maintenance'];

//   $sql="insert into `entries`(labNumber,compNumber,status,maintenance)
//   values('$labNumber','$compNumber','$status','$maintenance')";
//   $result=$conn->query($sql);
//   if($result == TRUE){
//     header('location:display.php');
//   }else{
//     echo "Error:" . $sql . "<br>" . $conn->error;
//   }
// }
?>
<!-- <!DOCTYPE html>
<html>
<head>
<title>Inventory-Management</title>
<link rel="stylesheet" href="home.css">
<div class="square"> 
<h1>Inventory-Management</h1>
<div class="square2"> 
</div>
</div>

<ul class="tabs">
<li  data-tab-target="#home" class="active tab"><a href="home.php"><img src="Box.svg" alt="Icon description"></li>
<li data-tab-target="#usage-monitoring" class=" tab"><a href="usage-monitoring.php">Usage Monitoring</a></li>
<li data-tab-target="#maintenance-schedules" class="tab"><a href="maintenance-schedules.php">Maintenance Schedules</a></li>
<li data-tab-target="#inventory-management" class="tab"><a href="inventory-management.php">Inventory Management</a></li>
<li data-tab-target="#profile" class="tab"><a href="profile.php">Profile</a></li>
<li data-tab-target="#logout" class="tab"><a href="logout.php">Log Out</a></li>
</ul>

  
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
  </form>
</body>
</html> -->
<!DOCTYPE html>
<html>
<head>
  <title>Inventory Management - Entries</title>
  <link rel="stylesheet" href="home.css">
  <script src="script.js" defer></script>
</head>
<body>
 

<div class="square2"> 

</div>
  <ul class="tabs">
<li  data-tab-target="#home" class="active tab"><a href="home.php"><img src="Box.svg" alt="Icon description"></li>
<li data-tab-target="#usage-monitoring" class=" tab"><a href="usage-monitoring.php">Usage Monitoring</a></li>
<li data-tab-target="#maintenance-schedules" class="tab"><a href="maintenance-schedules.php">Maintenance Schedules</a></li>
<li data-tab-target="#inventory-management" class="tab"><a href="inventory-management.php">Inventory Management</a></li>
<li data-tab-target="#profile" class="tab"><a href="profile.php">Profile</a></li>
<li data-tab-target="#logout" class="tab"><a href="logout.php">Log Out</a></li>
</ul>
  <div class="button-container">

  <a class="button" href="display.php">Create New Record</a>
</div>

</head>
</body>
  <h1>Inventory-Management</h1>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form inputs
    $labNumber = $_POST["labNumber"];
    $compNumber = $_POST["compNumber"];
    $status = $_POST["status"];
    $maintenance = $_POST["maintenance"];

    // Connect to the database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "laboratory";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    // Insert the new entry into the database
    $sql = "INSERT INTO entries (labNumber, compNumber, status, maintenance)
            VALUES ('$labNumber', '$compNumber', '$status', '$maintenance')";
    if ($conn->query($sql) === TRUE) {
      echo "<h2><center>New entry added successfully</center></h2>.";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
  }
  ?>
    
  <table class="table">
    <thead>
    <tr>
      <th scope="col">Laboratory Number</th>
      <th scope="col">Computer Number</th>
      <th scope="col">Status</th>
      <th scope="col">Maintenance Required</th>
      <th scope="col">Operations</th>
    </tr>
</thead>
<tbody>
    <?php
    include ('connect.php');

    $sql = "SELECT * FROM entries";
    $result = $conn->query($sql);

    if ($result) {
      while ($row = mysqli_fetch_assoc($result)) {
        $id=$row['id'];
        $labNumber=$row['labNumber'];
        $compNumber=$row['compNumber'];
        $status=$row['status'];
        $maintenance=$row['maintenance'];
        echo '<tr>
        
        <th scope=$row>'.$labNumber.'</th>
        <th scope=$row>'.$compNumber.'</th>
        <th scope=$row>'.$status.'</th>
        <th scope=$row>'.$maintenance.'</th>    
        <td>
      <button class="btn btn-primary"><a href="update.php? updateid='.$id.'" class="text-light">Update</a></button>
      <button class="btn btn-danger"><a href="delete.php? deleteid='.$id.'" class="text-light">Delete</a></button>
    </td>

         </tr>';
      }
    } else {
      echo "No entries found.";
    }

    $conn->close();
    ?>

  </tbody> 
  </table>

</body>
</html>