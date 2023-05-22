<?php
include ('connect.php');
$id = $_GET['updateid'];
$sql="Select * from `usage_monitoring` where id=$id";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$computer_no=$row['computer_no'];
$date=$row['date'];
$time_duration=$row['time_duration'];


if(isset($_POST['submit'])){
  $computer_no=$_POST['computer_no'];
  $date=$_POST['date'];
  $time_duration=$_POST['time_duration'];

  $sql="update `usage_monitoring` set  `computer_no`='$computer_no', `date`='$date'
    , `time_duration`='$time_duration', where `id`='$id'" ;
    $result = $conn->query($sql);
    if($result == TRUE){
        
        header('location:usage-monitoring.php');
    }else{
        echo "Error:" . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Usage Monitoring</title>
<link rel="stylesheet" href="home.css">

</head>
<body>
 
<h1>Usage Monitoring</h1>
<div class="square">
</div>
</div>

<form method="post" action="display3.php">
    <label for="computer_no">Computer Number:</label>
    <input type="text" id="computer_no" name="computer_no" required="" Value=<?php
    echo $computer_no;?>><br>

    <label for="date">Date:</label>
    <input type="text" id="date" name="date" required="" Value=<?php
    echo $date;?>><br>

    <label for="time_duration">Time Duration:</label>
    <input type="text" id="time_duration" name="time_duration" required="" Value=<?php
    echo $time_duration;?>><br>

    <input type="submit" name="submit" value="Update">
    <a class="button" href="usage-monitoring.php">Go Back</a>
  </form>
</body>
</html>