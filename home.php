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
<title>Home</title>
<link rel="stylesheet" href="home.css">
</head>
<body>
<div class="square"> </div>
<h1>Home</h1>
<nav>
<ul>
<li><img src="Box.svg" alt="Icon description"></li>
<li><a href="usage-monitoring.php">Usage Monitoring</a></li>
<li><a href="maintenance-schedules.php">Maintenance Schedules</a></li>
<li><a href="inventory-management.php">Inventory Management</a></li>
<li><a href="profile.php">Profile</a></li>
<li><a href="logout.php">Log Out</a></li>
</ul>
</nav>
</body>
</html>