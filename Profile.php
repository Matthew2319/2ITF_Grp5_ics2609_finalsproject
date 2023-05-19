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
<a href="home.php">Back to Home</a>
</div>
</body>
</html>
