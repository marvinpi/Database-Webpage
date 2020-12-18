<?php

include_once 'database.php';
$id = $_GET['id'];
$sql = "DELETE FROM voter WHERE id = '$id'";

mysqli_query($conn, $sql);

if ($conn->query($sql) === TRUE) {
  echo "Voter rolls purged successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

mysqli_close($conn);

 ?>
