<!DOCTYPE html>
<html>
<head>
  <title>maintenance-schedules - Entries</title>
  <link rel="stylesheet" href="home.css">
  
  <div class="button-container">

  <a class="button" href="maintenance-schedules.php">Create New Record</a>

</head>
<body>
  <h1>maintenance-schedules - Entries</h1>

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
      <th>Time</th>
      <th>Maintenance Required</th>

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

    $sql = "SELECT * FROM maintenance_schedule";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['ComputerNumber'] . "</td>";
        echo "<td>" . $row['Date_'] . "</td>";
        echo "<td>" . $row['Time_'] . "</td>";
        echo "<td>" . $row['maintenance_'] . "</td>";
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
