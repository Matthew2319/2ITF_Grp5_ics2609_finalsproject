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
<title>Inventory Management</title>
<link rel="stylesheet" href="home.css">
<script src="script.js" defer></script>
</head>
<body>
<div class="square">  
<h1>Inventory Management</h1>
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

<div class="tab-content">
    <div id="home" data-tab-content class="active">
      </div>

      <div id="usage-monitoring" data-tab-content>
      <a href="usage-monitoring.php"></a>
    </div>

    <div id="maintenance-schedules" data-tab-content>
      <a href="maintenance-schedules.php"></a>
    </div>

    <div id="inventory-management" data-tab-content>
      <a href="inventory-management.php"></a>
    </div>

    <div id="profile" data-tab-content>
      <a href="profile.php"></a>
    </div>
   
    <div id="logout" data-tab-content>
      <a href="logout.php"></a>
    </div>
    </div>
</body>
</html>