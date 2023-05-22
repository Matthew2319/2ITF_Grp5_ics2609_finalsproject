<!DOCTYPE html>
<html>
<head>
  <title>Usage-Monitoring  - Entries</title>
  <link rel="stylesheet" href="home.css">
  
  <div class="button-container">

  <a class="button" href="usage-monitoring.php">Create New Record</a>
  <a class="button" href="usage-monitoring.php">Go Back</a>
  

</head>
<body>
  <h1>Usage-Monitoring</h1>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form inputs
    $computer_no = $_POST["computer_no"];
    $date = $_POST["date"];
    $time_duration = $_POST["time_duration"];
    $action = $_POST["action"];
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
    $sql = "INSERT INTO usage_monitoring (computer_no, date, time_duration, action)
            VALUES (' $computer_no', '$date', ' $time_duration', '$action')";
    if ($conn->query($sql) === TRUE) {
      echo "<p2><center>New entry added successfully</center></p2>.";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
  }
  ?>

 
  <table>
    <tr>
      <th>Computer Number</th>
      <th>Date</th>
      <th>Time Duration</th>
      <th>Action</th>

    </tr>

    <?php
    // Retrieve all entries from the database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "laboratory";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM usage_monitoring";
    $result = $conn->query($sql);

    if ($result) {
      while ($row = mysqli_fetch_assoc($result)) {
        $computer_no=$row['computer_no'];
        $date=$row['date'];
        $time_duration=$row['time_duration'];
        $action=$row['action'];
        echo '<tr>;
        
        <th scope=$row>'.$computer_no.'</th>
        <th scope=$row>'.$date.'</th>
        <th scope=$row>'.$time_duration.'</th>
        <th scope=$row>'.$action.'</th>
         </tr>';
      }
      }
    else {
      echo "No entries found.";
    }

    $conn->close();
    ?>

  </table>

   <!-- <button onclick="location.href='index.php'">Create New Record</button>  -->
</body>
</html>
