<?php

include_once 'database.php';
$sql = "SELECT * FROM voter";
$result = mysqli_query($conn, $sql);

 ?>

<!DOCTYPE html>
<html>
<head>
  <link rel = "stylesheet" href = "style.css">
 <title></title>
</head>
<body>
<h1> REGISTER TO VOTE </h1>

<form action = "insert.php" method = "post">
  <input type = "text" name = "first" placeholder= "First name">
  <br>
  <input type = "text" name = "last" placeholder= "Last name">
  <br>
  <input type = "text" name = "address" placeholder= "Address">
  <br>
  <input type = "text" name = "city" placeholder= "City">
  <br>
  <input type = "text" name = "party" placeholder= "Party affiliation">
  <br>
  <input type = "text" name = "dob" placeholder= "Date of birth">
  <br>
  <input type = "submit" name = "register" value= "REGISTER">
</form>

<table>

</table>

</body>

</html>
