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
<h1> REGISTERED VOTERS </h1>
<table>
  <tr>
    <th>Voter ID</th>
    <th>First name</th>
    <th>Last name</th>
    <th>Address</th>
    <th>City</th>
    <th>Party affiliation</th>
    <th>Date of birth</th>
    <th>Delete? D:</th>
  </tr>

  <?php

  while ($row = mysqli_fetch_array($result)) {
    echo "<tr><td>" . $row['id'] . "</td>";
    echo "<td>" . $row['firstname'] . "</td>";
    echo "<td>" . $row['lastname'] . "</td>";
    echo "<td>" . $row['addr'] . "</td>";
    echo "<td>" . $row['city'] . "</td>";
    echo "<td>" . $row['party'] . "</td>";
    echo "<td>" . $row['dob'] . "</td>";
    echo "<td><a href ='delete.php?id=$row[id]'> Delete! </a></td></tr>";
  } echo "</table>";

   ?>

</table>

</body>

</html>
