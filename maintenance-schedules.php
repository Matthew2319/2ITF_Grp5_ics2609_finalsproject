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
<title>Maintenance Schedule</title>
<link rel="stylesheet" href="home.css">
<script src="script.js" defer></script>
</head>
<body>
<div class="square"> 
<h1>Maintenance Schedule</h1>
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


  
  <form method="post" action="display2.php">
    <label for="ComputerNumber">Computer Number:</label>
    <input type="text" id="ComputerNumber" name="ComputerNumber" required><br>

    <label for="Date_">Date:</label>
    <input type="text" id="Date_" name="Date_" required value="yyyy-mm-dd"><br>

    <label for="Time_">Time:</label>
    <input type="text" id="Time_" name="Time_" required value="00:00 am/pm"><br>
    
    <label for="maintenance_">Maintenance:</label>
    <input type="text" id="maintenance_" name="maintenance_" required><br>

    <input type="submit" name="submit" value="Add Entry">
  </form>
</body>
</html>