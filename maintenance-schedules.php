
<!DOCTYPE html>
<html>
<head>
  <title>Maintenance Schedules - Entries</title>
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

  <a class="button" href="display2.php">Create New Record</a>
</div>

</head>
</body>
  <h1>Maintenance-Schedules</h1>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form inputs
    $ComputerNumber = $_POST["ComputerNumber"];
    $Date_ = $_POST["Date_"];
    $Time_ = $_POST["Time_"];
    $maintenance_ = $_POST["maintenance_"];
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
    $sql = "INSERT INTO maintenance_schedule (ComputerNumber, Date_, Time_, maintenance_)
            VALUES (' $ComputerNumber', '$Date_', ' $Time_', '$maintenance_')";
    if ($conn->query($sql) === TRUE) {
      echo "<p2><center>New entry added successfully</center></p2>.";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
  }
  ?>

  
<table class="table">
    <thead>
    <tr>
      <th scope="col">Computer Number</th>
      <th scope="col">Date</th>
      <th scope="col">Time</th>
      <th scope="col">Maintenance</th>
      <th scope="col">Operations</th>
    </tr>
</thead>
<tbody>
    <?php
    include ('connect.php');
    $sql = "SELECT * FROM maintenance_schedule";
    $result = $conn->query($sql);

    if ($result) {
      while ($row = mysqli_fetch_assoc($result)) {
        $id=$row['id'];
        $ComputerNumber=$row['ComputerNumber'];
        $Date_=$row['Date_'];
        $Time_=$row['Time_'];
        $maintenance_=$row['maintenance_'];
        echo '<tr>;
        
        <th scope=$row>'.$ComputerNumber.'</th>
        <th scope=$row>'.$Date_.'</th>
        <th scope=$row>'.$Time_.'</th>
        <th scope=$row>'.$maintenance_.'</th>

        <td>
        <button class="btn btn-primary"><a href="update2.php? updateid='.$id.'" class="text-light">Update</a></button>
      <button class="btn btn-danger"><a href="delete2.php? deleteid='.$id.'" class="text-light">Delete</a></button>
    </td>
         </tr>';
      }
    } else {
      echo "No entries found.";
    }

    $conn->close();
    ?>

  </table>

   
</body>
</html>
