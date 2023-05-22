<!DOCTYPE html>
<html>
<head>
  <title>Inventory Management - Entries</title>
  <link rel="stylesheet" href="home.css">

  <div class="button-container">

  <a class="button" href="inventory-management.php">Create New Record</a>
  <a class="button" href="inventory-management.php">Go Back</a>

</head>
<body>
  <h1>Inventory Management</h1>

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
   <div class="container"> 
  <table>
    
    <tr>
      <th>Laboratory Number</th>
      <th>Computer Number</th>
      <th>Status</th>
      <th>Maintenance Required</th>
    </tr>
</div>
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

    if ($result) {
      while ($row = mysqli_fetch_assoc($result)) {
        $labNumber=$row['labNumber'];
        $compNumber=$row['compNumber'];
        $status=$row['status'];
        $maintenance=$row['maintenance'];
        echo '<tr>;
        
        <th scope=$row>'.$labNumber.'</th>
        <th scope=$row>'.$compNumber.'</th>
        <th scope=$row>'.$status.'</th>
        <th scope=$row>'.$maintenance.'</th>
         </tr>';
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
