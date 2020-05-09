<?php
  $conn = new mysqli("192.168.13.141", "webserver", "ui$ekTes!s2O20", "phplogin");
  
  if ($conn->connect_error) {
    die("ERROR: Unable to connect: " . $conn->connect_error);
  } 

  echo 'Connected to the database.<br>';

  $result = $conn->query("SELECT name FROM employee");

  echo "Number of rows: $result->num_rows";

  $result->close();

  $conn->close();
?>