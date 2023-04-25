<?php
include_once '../bd.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  global $conn;
  $nombre = $_POST['username'];
  $email = $_POST['email'];
  $age = $_POST['age'];

  $sql = "INSERT INTO users (username, email, age) VALUES ('$nombre', '$email', '$age')";
  $result = $conn->query($sql);
  if ($result) {
    echo "Creado correctamente👍";
  } else {
    echo "Error: " . $conn-> errorInfo()[2];
  }
}
