<?php

$sv = "localhost";
$bd = "proyecto0";
$user = "root";
$pass = "";

try {
  return $conn = new PDO("mysql:host=$sv;dbname=$bd", $user, $pass);
} catch(Exception $e) {
  echo "Error: " . $e->getMessage();
}
?>