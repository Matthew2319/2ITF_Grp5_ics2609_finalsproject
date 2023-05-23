

<!DOCTYPE html>
<html>
<head>
  <title>Usage Monitoring - Entries</title>
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
  <h1>Usage Monitoring</h1>
  <a class="button" href="display3.php">Create New Record</a>
</div>

</head>
</body>
 

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form inputs
    $computer_no = $_POST["computer_no"];
    $date = $_POST["date"];
    $time_duration = $_POST["time_duration"];
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
    $sql = "INSERT INTO usage_monitoring (computer_no, date, time_duration)
            VALUES (' $computer_no', '$date', ' $time_duration')";
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
      <th scope="col">Time Duration</th>
      <th scope="col">Action</th>
    </tr>
</thead>
<tbody>
    <?php
    include ('connect.php');
    $sql = "SELECT * FROM usage_monitoring";
    $result = $conn->query($sql);

    if ($result) {
      while ($row = mysqli_fetch_assoc($result)) {
        $id=$row['id'];
        $computer_no=$row['computer_no'];
        $date=$row['date'];
        $time_duration=$row['time_duration'];
        echo '<tr>; 
        <th scope=$row>'.$computer_no.'</th>
        <th scope=$row>'.$date.'</th>
        <th scope=$row>'.$time_duration.'</th>
        <td>
        <button class="btn btn-primary"><a href="update3.php? updateid='.$id.'" class="text-light"><img src="pencil-create.svg" alt="Icon description"></a></button>
      <button class="btn btn-danger"><a href="delete3.php? deleteid='.$id.'" class="text-light"><img src="trash.svg" alt="Icon description"></a></button>
    </td>
         </tr>';
      }
      }
    else {
      echo "No entries found.";
    }

    $conn->close();
    ?>
  </tbody>
  </table>

   
</body>
</html>