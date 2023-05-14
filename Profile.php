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
<link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Profile</h1>
<p>Username: <?php echo ($row ["username"]); ?></p>
<p>Email: <?php echo ($row ["email"]); ?></p>
<p>Password: <?php echo ($row ["password"]); ?></p>
<a href="home.php">Back to Home</a>
</body>
</html>
