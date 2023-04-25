<?php
include_once '../bd.php';
include_once '../templates/header.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  global $conn;
  $nombre = $_POST['username'];
  $email = $_POST['email'];
  $age = $_POST['age'];

  $sql = "INSERT INTO users (username, email, age) VALUES ('$nombre', '$email', '$age')";
  $result = $conn->query($sql);
  if ($result) {
    echo "Creado correctamente👍";
    echo '<a name="" id="" class="btn btn-primary" href="../user/index.php" role="button">Volver</a>';
  } else {
    echo "Error: " . $conn->errorInfo()[2];
  }
}

include_once '../templates/footer.php';