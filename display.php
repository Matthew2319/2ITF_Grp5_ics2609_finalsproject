<!DOCTYPE html>
<html>
<head>
  <title>Inventory Management - Entries</title>
  <link rel="stylesheet" href="home.css">
  <style>
    table {
      border-collapse: collapse;
      width: 100%;
    }

    th, td {
      border: 1px solid #ccc;
      padding: 8px;
      text-align: left;
    }

    th {
      background-color: #f2f2f2;
    }
  </style>
  <div class="button-container">

  <a class="button" href="usage-monitoring.php">Create New Record</a>

</head>
<body>
  <h1>Inventory Management - Entries</h1>

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
      <th>Laboratory Number</th>
      <th>Computer Number</th>
      <th>Status</th>
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

    $sql = "SELECT * FROM entries";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['labNumber'] . "</td>";
        echo "<td>" . $row['compNumber'] . "</td>";
        echo "<td>" . $row['status'] . "</td>";
        echo "<td>" . $row['maintenance'] . "</td>";
        echo "</tr>";
      }
    } else {
      echo "No entries found.";
    }

    $conn->close();
    ?>

  </table>

  <!-- <button onclick="location.href='index.php'">Create New Record</button> -->
</body>
</html>
