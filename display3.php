<!DOCTYPE html>
<html>
<head>
  <title>Usage-Monitoring  - Entries</title>
  <link rel="stylesheet" href="home.css">
  
  <div class="button-container">

  <a class="button" href="usage-monitoring.php">Create New Record</a>

</head>
<body>
  <h1>Usage-Monitoring - Entries</h1>

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
      echo "New entry added successfully.";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
  }
  ?>

  <h2>Entries:</h2>
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

    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['computer_no'] . "</td>";
        echo "<td>" . $row['date'] . "</td>";
        echo "<td>" . $row['time_duration'] . "</td>";
        echo "<td>" . $row['action'] . "</td>";
        echo "</tr>";
      }
    } else {
      echo "No entries found.";
    }

    $conn->close();
    ?>

  </table>

   <!-- <button onclick="location.href='index.php'">Create New Record</button>  -->
</body>
</html>
