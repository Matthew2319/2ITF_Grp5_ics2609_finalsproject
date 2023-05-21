
<!DOCTYPE html>
<html>
<head>
<title>Inventory-Management</title>
<link rel="stylesheet" href="home.css">
<div class="square"> 
<h1>Inventory-Management</h1>
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

  
  <form method="post" action="display.php">
    <label for="labNumber">Laboratory Number:</label>
    <input type="text" id="labNumber" name="labNumber" required><br>

    <label for="compNumber">Computer Number:</label>
    <input type="text" id="compNumber" name="compNumber" required><br>

    <label for="status">Status:</label>
    <input type="text" id="status" name="status" required><br>

    <label for="maintenance">Maintenance Required:</label>
    <input type="text" id="maintenance" name="maintenance" required><br>

    <input type="submit" name="submit" value="Add Entry">
  </form>
</body>
</html>
