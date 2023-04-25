<?php
include_once "../bd.php";
$id = $_POST["id"];
$username = $_POST["username"];
$email = $_POST["email"];
$age = $_POST["age"];

$sql = "UPDATE users SET USERNAME = '$username', EMAIL = '$email', AGE = $age WHERE ID = $id";
$result = $conn->query($sql);
try {
  echo "Usuario editado correctamente 👍";
} catch (Exception $e) {
  echo $e->getMessage();
}
