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
  $duplicate = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username' OR email = '$email'");
  if(mysqli_num_rows($duplicate) > 0){
    echo
    "<script> alert('Username or Email Has Already Taken'); </script>";
  }
  else{
    if($password == $Confirmpassword){
      $query = "INSERT INTO users VALUES('','$username','$email','$password')";
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
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>UUC WEB</title>
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div id="background"></div>
    <div class="wrapper">
        <img src="UUC.png" alt="UST UNESCO CLUB" width="330" height="150" align="center">
        <div class="title-text">

            <div class="title signup">Signup Form</div>
        </div>
        <div class="form-inner">
            <form action="" class="" method="POST" autocomplete="off">
                <div class="field">
                    <input type="text" name="username" id="username" placeholder="Username" required value="">
                </div>
                <div class="field">
                    <input type="email" name="email" id="email" placeholder="Email Address" required value="">
                </div>
                <div class="field">
                    <input type="password" name="password" id="password" placeholder="Password" required value="">
                </div>
                <div class="field">
                    <input type="password" name="Confirmpassword" id="Confirmpassword" placeholder="Confirm Password"
                        required value="">
                </div>
                <div class="field btn">
                    <div class="btn-layer"></div>
                    <input type="submit" name="submit" value="Signup">
                </div>
                <div class="signup-link">already have an account? <a href="Login.Php">Login now</a></div>
            </form>
        </div>
    </div>
    </div>