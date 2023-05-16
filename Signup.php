<?php
include  ('connect.php');
if(!empty($_SESSION["id"])){
  header("Location: Home.php");
}
if(isset($_POST["submit"])){
  $username = $_POST["username"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $Confirmpassword = $_POST["Confirmpassword"];
  $duplicate = mysqli_query($conn, "SELECT * FROM employees WHERE username = '$username' OR email = '$email'");
  if(mysqli_num_rows($duplicate) > 0){
    echo
    "<script> alert('Username or Email Has Already Taken'); </script>";
  }

  else{
    
    if($password == $Confirmpassword){
    
     $pass = password_hash($password, PASSWORD_DEFAULT); 
        
         
      $query = "INSERT INTO employees VALUES('','$username','$email','$pass')";
      mysqli_query($conn, $query);
      echo
      "<script> alert('Registration Successful'); </script>";
    }
    else{
      echo
      "<script> alert('Password Does Not Match'); </script>";
    }
  }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Signup Form</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="square"></div>
<h1>Signup Form</h1>
<form action="Signup.php" method="post">
<input type="text" name="username" id= "username"  placeholder="Username" required value="" > <br> </br>
<input type="email" name="email" id= "email"  placeholder="Email" required value=""><br> </br>
<input type="password" name="password" id= "password"  placeholder="Password" required value=""><br> </br>
<input type="password" name="Confirmpassword" id="Confirmpassword" placeholder="Confirm Password" required value=""> <br> </br>
<input type="submit" value="Signup" name="submit"> <br> </br>
<a href="Login.php">Already have an account? Login!</a>
</form>
</body>
</html>
