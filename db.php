<?php

  $dbname = "localhost";
  $dbuser = "jordo1704";
  $dbpass = "Dottie1704";

  // Create connection
  $conn = new mysqli($servername, $username, $password);

  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . mysqli_connect_error());
  }



 ?>
