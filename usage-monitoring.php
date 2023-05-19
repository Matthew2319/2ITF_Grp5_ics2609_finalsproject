<!DOCTYPE html>
<html>
<head>
  <title>Inventory Management</title>
  <link rel="stylesheet" href="home.css">
  <style>
    table {
      border-collapse: collapse;
      width: 100%;
    }

    th, td {
      border: 1px solid #ccc;
      padding: 8px;
      text-align: left;
    }

    th {
      background-color: #f2f2f2;
    }
  </style>
</head>
<body>
  <h1>Usage Monitoring</h1>
  
  <form method="post" action="display.php">
    <label for="labNumber">Laboratory Number:</label>
    <input type="text" id="labNumber" name="labNumber" required><br>

    <label for="compNumber">Computer Number:</label>
    <input type="text" id="compNumber" name="compNumber" required><br>

    <label for="status">Status:</label>
    <input type="text" id="status" name="status" required><br>

    <label for="maintenance">Maintenance Required:</label>
    <input type="text" id="maintenance" name="maintenance" required><br>

    <input type="submit" name="submit" value="Add Entry">
  </form>
</body>
</html>
