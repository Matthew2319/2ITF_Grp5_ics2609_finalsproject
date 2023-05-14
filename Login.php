<?php
include  ('connect.php');
if(!empty($_SESSION["id"])){
  header("Location: home.php");
}
if(isset($_POST["submit"])){
  $username = $_POST["username"];
  $password = $_POST["password"];
  $result = mysqli_query($conn, "SELECT * FROM employees WHERE username = '$username' OR password = '$password'");
  $row = mysqli_fetch_assoc($result);
  if(mysqli_num_rows($result) > 0){
    if($password == $row['password']){
      $_SESSION["login"] = true;
      $_SESSION["id"] = $row["id"];
      header("Location: home.php");
    }
    else{
      echo
      "<script> alert('Wrong Password'); </script>";
    }
  }
  else{
    echo
    "<script> alert('User Not Registered'); </script>";
  }
}
?>


<!DOCTYPE html>
<html>
<head>
<title>Login Form</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Login Form</h1>
<form action="login.php" method="post">
<input type="text" name="username"  id= "username" placeholder="Username">
<input type="password" name="password" id= "password" placeholder="Password">
<input type="submit" value="login" name="submit">
<a href="Signup.php">Don't have an account? Sign up!</a>
</form>
</body>
</html>
