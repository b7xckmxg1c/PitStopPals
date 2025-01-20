<?php
  echo "Database ?.. ";

  $servername = "localhost";
  $username = "root";
  $password = "";
  $database = "psp";

  $conn = new mysqli($servername, $username, $password, $database);
    if ($conn->connect_error) {
      die("🔴" . $conn->connect_error);
    }
  echo "🟢";
?>