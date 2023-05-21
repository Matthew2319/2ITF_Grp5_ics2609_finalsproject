<?php
include  ('connect.php');
if(!empty($_SESSION["id"])){
  header("Location: Home.php");
}
if(isset($_POST["submit"])){
  $username = $_POST["username"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $result = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username' OR email = '$email'");
  $row = mysqli_fetch_assoc($result);
  if(mysqli_num_rows($result) > 0){
    if($password == $row['password']){
      $_SESSION["login"] = true;
      $_SESSION["id"] = $row["id"];
      header("Location: Home.php");
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
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>UUC WEB</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>
   
    <div class="wrapper">
        <img src="UUC.png" alt="UST UNESCO CLUB" width="330" height="150" align="center">
        <div class="title-text">

            <div class="title login">Login Form</div>

        </div>
        <div class="form-inner">

            <form action="" method="POST" class="" autocomplete="off">
                <div class="field">
                    <input type="text" name="username" id="username" placeholder="Enter your username" required
                        value="">
                </div>
                <div class="field">
                    <input type="email" name="email" id="email" placeholder="Enter your email" required value="">
                </div>
                <div class="field">
                    <input type="password" name="password" id="password" placeholder="Password" required value="">
                </div>
                <div class="field btn">
                    <div class="btn-layer"></div>
                    <input type="submit" name="submit" value="Login">
                </div>
                <div class="signup-link">Not a member? <a href="Signup.php">Signup now</a></div>
            </form>
        </div>



</body>

</html>