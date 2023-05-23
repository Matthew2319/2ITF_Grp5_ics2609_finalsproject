<?php
include ('connect.php');
$id = $_GET['updateid'];
$sql="Select * from `maintenance_schedule` where id=$id";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$Lab_No=$row['Lab_No'];
$ComputerNumber=$row['ComputerNumber'];
$Date_=$row['Date_'];
$Time_=$row['Time_'];
$maintenance_=$row['maintenance_'];

if(isset($_POST['submit'])){
  $Lab_No=$_POST['Lab_No'];
  $ComputerNumber=$_POST['ComputerNumber'];
  $Date_=$_POST['Date_'];
  $Time_=$_POST['Time_'];
  $maintenance_=$_POST['maintenance_'];

  $sql="update `maintenance_schedule` set  `Lab_No`='$Lab_No', `ComputerNumber`='$ComputerNumber', `Date_`='$Date_'
    , `Time_`='$Time_', `maintenance_`='$maintenance_' where `id`='$id'" ;
    $result = $conn->query($sql);
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
 
<h1>Maintenance Schedule</h1>
<div class="square">
</div>
</div>

  <form method="post">
    <label for="Lab_No">Laboratory Number:</label>
    <input type="text" id="Lab_No" name="Lab_No" required="" Value=<?php
    echo $Lab_No;?>><br>

    <label for="ComputerNumber">Computer Number:</label>
    <input type="text" id="ComputerNumber" name="ComputerNumber" required="" Value=<?php
    echo $ComputerNumber;?>><br>

    <label for="Date_">Date:</label>
    <input type="text" id="Date_" name="Date_" required ="" Value=<?php
    echo $Date_;?>><br>

    <label for="Time_">Time:</label>
    <input type="text" id="Time_" name="Time_" required ="" Value=<?php
    echo $Time_;?>><br>
    
    <label for="maintenance_">Maintenance:</label>
    <input type="text" id="maintenance_" name="maintenance_" required="" Value=<?php
    echo $maintenance_;?>><br>

    <input type="submit" name="submit" value="Update" >
    <a class="button" href="maintenance-schedules.php">Go Back</a>
  </form>
</body>
</html>