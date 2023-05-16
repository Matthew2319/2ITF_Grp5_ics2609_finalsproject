<!DOCTYPE html>
<html>
<head>
    <title>Usage Monitoring</title>
    <link rel="stylesheet" href="home.css">
</head>
<body>
<div class="square"></div>
    <h1>Usage Monitoring</h1>
   
    
    <?php
session_start();



    // Database credentials
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "laboratory";

    // Establish database connection
    $connection = mysqli_connect($host, $username, $password, $database);

    // Check connection
    if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Check if form is submitted
    if (isset($_POST['submit'])) {
        // Get form inputs
        $labNo = $_POST['laboratory_no'];
        $compNo = $_POST['computer_no'];
        $date = $_POST['usage_date'];
        $duration = $_POST['time_duration'];
        $action = $_POST['action'];

        // Prepare the SQL statement
        $query = "INSERT INTO usage_monitoring (laboratory_no, computer_no, usage_date, time_duration, action) VALUES ('$labNo', '$compNo', '$date', '$duration', '$action')";

        // Execute the SQL statement
        if (mysqli_query($connection, $query)) {
            echo "Data inserted successfully.";
        } else {
            echo "Error: " . mysqli_error($connection);
        }
    }
    ?>

    <form method="POST">
        <label for="laboratory_no">Laboratory no.:</label>
        <input type="number" name="laboratory_no" required><br>

        <label for="computer_no">Computer no.:</label>
        <input type="number" name="computer_no" required><br>

        <label for="usage_date">Date:</label>
        <input type="date" name="usage_date" required><br>

        <label for="time_duration">Time Duration:</label>
        <input type="time" name="time_duration" required><br>

        <label for="action">Action:</label>
        <input type="text" name="action" required><br>

        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>
