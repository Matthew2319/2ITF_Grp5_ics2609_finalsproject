<?php
include ('connect.php');
if(!empty($_SESSION["id"])){
  $id = $_SESSION["id"];
  $result = mysqli_query($conn, "SELECT * FROM employees WHERE id = $id");
  $row = mysqli_fetch_assoc($result);
}
else{
  header("Location: Login.php");
}
?>


<!DOCTYPE html>
<html>
<head>
<title>Usage Monitoring</title>
<link rel="stylesheet" href="home.css">
<script src="script.js" defer></script>
</head>
<body>
<div class="square">  
<h1>Usage Monitoring</h1>
<!-- <span class="space"><input type="button" value="Create new record" onclick="" class="bttn"></span> -->
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

<form method="post" action="display3.php">
    <label for="computer_no">Computer Number:</label>
    <input type="text" id="computer_no" name="computer_no" required><br>

    <label for="date">Date:</label>
    <input type="text" id="date" name="date" required value="yyyy-mm-dd"><br>

    <label for="time_duration">Time Duration:</label>
    <input type="text" id="time_duration" name="time_duration" required><br>
    
    <label for="action">Action:</label>
    <input type="text" id="action" name="action" required><br>

    <input type="submit" name="submit" value="Add Entry">
  </form>
</body>
</html>