<?php
include ('connect.php');
if(!empty($_SESSION["id"])){
  $id = $_SESSION["id"];
  $result = mysqli_query($conn, "SELECT * FROM employees WHERE id = $id");
  $row = mysqli_fetch_assoc($result);
}


?>
<!DOCTYPE html>
<html>
<head>
<title>Profile</title>
<link rel="stylesheet" href="home.css">
</head>
<body>

<div class="square"> 
<h2>Profile Page</h2>
<p2>Username: <?php echo ($row ["username"]); ?></p2>
<p2>Email: <?php echo ($row ["email"]); ?></p2>
<p2>Password: <?php echo ($row ["password"]); ?></p2>
</div>

<ul class="tabs">
<li  data-tab-target="#home" class="active tab"><a href="home.php"><img src="Box.svg" alt="Icon description"></li>
<li data-tab-target="#usage-monitoring" class=" tab"><a href="usage-monitoring.php">Usage Monitoring</a></li>
<li data-tab-target="#maintenance-schedules" class="tab"><a href="maintenance-schedules.php">Maintenance Schedules</a></li>
<li data-tab-target="#inventory-management" class="tab"><a href="inventory-management.php">Inventory Management</a></li>
<li data-tab-target="#profile" class="tab"><a href="profile.php">Profile</a></li>
<li data-tab-target="#logout" class="tab"><a href="logout.php">Log Out</a></li>
</ul>

</body>
</html>
