
<?php
include ('connect.php');
if(isset($_POST['submit'])){
  $Lab_No=$_POST['Lab_No'];
  $ComputerNumber=$_POST['ComputerNumber'];
  $Date_=$_POST['Date_'];
  $Time_=$_POST['Time_'];
  $maintenance_=$_POST['maintenance_'];

  $sql="insert into `maintenance_schedule`(Lab_No,ComputerNumber,Date_,Time_,maintenance_)
  values('$Lab_No','$ComputerNumber','$Date_','$Time_','$maintenance_')";
  $result=$conn->query($sql);
  if($result == TRUE){
    header('location:maintenance-schedules.php');
  }else{
    echo "Error:" . $sql . "<br>" . $conn->error;
  }
}
?>


<!DOCTYPE html>
<html>
<head>
<title>Maintenance Schedule</title>
<link rel="stylesheet" href="home.css">
</head>
<body>

<h1>Maintenance Schedule<</h1>

<div class="square"> 
</div>
</div>

  <form method="post">
    <label for="Lab_No">Laboratory Number:</label>
    <input type="text" id="Lab_No" name="Lab_No" required><br>

    <label for="ComputerNumber">Computer Number:</label>
    <input type="text" id="ComputerNumber" name="ComputerNumber" required><br>

    <label for="Date_">Date:</label>
    <input type="text" id="Date_" name="Date_" required value="yyyy-mm-dd"><br>

    <label for="Time_">Time:</label>
    <input type="text" id="Time_" name="Time_" required value="00:00 am/pm"><br>
    
    <label for="maintenance_">Maintenance:</label>
    <input type="text" id="maintenance_" name="maintenance_" required><br>

    <input type="submit" name="submit" value="Add Entry">
    <a class="button1" href="maintenance-schedules.php">Go Back</a>

  </form>
</body>
</html> 
