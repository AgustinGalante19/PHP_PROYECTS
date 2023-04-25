<?php
include_once "../bd.php";
header("location: ../index.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $id = $_POST["id"];
  $sql = "DELETE FROM users WHERE id = $id";
  $result = $conn->query($sql);
  if ($result) {
    echo "Usuario eliminado";
    http_response_code(200);
  } else {
    echo "Error al eliminar usuario";
  }
}
