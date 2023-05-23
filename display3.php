
<?php
include ('connect.php');
if(isset($_POST['submit'])){
  $computer_no=$_POST['computer_no'];
  $date=$_POST['date'];
  $time_duration=$_POST['time_duration'];
  

  $sql="insert into `usage_monitoring`(computer_no, date, time_duration)
  values('$computer_no','$date','$time_duration')";
  $result=$conn->query($sql);
  if($result == TRUE){
    header('location: usage-monitoring.php');
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
<form method="post">
    <label for="computer_no">Computer Number:</label>
    <input type="text" id="computer_no" name="computer_no" required><br>

    <label for="date">Date:</label>
    <input type="text" id="date" name="date" required value="yyyy-mm-dd"><br>

    <label for="time_duration">Time Duration:</label>
    <input type="text" id="time_duration" name="time_duration" required><br>

    <input type="submit" name="submit" value="Add Entry">
    <a class="button1" href="usage-monitoring.php">Go Back</a>
  </form>
</body>
</html> 