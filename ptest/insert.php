<?php

  include_once 'database.php';

  if(isset($_POST['register'])) {

    $first = $_POST['first'];
    $last = $_POST['last'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $party = $_POST['party'];
    $dob = $_POST['dob'];

    $sql = "INSERT INTO voter (firstname, lastname, addr, city, party, dob) VALUES ('$first', '$last', '$address', '$city', '$party', '$dob')";

    if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    mysqli_query($conn, $sql);

    mysqli_close($conn);
  }

 ?>
