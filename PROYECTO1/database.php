<?php
$sv = 'localhost';
$bd = 'proyectosphp';
$user = 'root';
$pass = '';

try {
  $conn = new PDO("mysql:host=$sv;dbname=$bd;", $user, $pass);
} catch (PDOException $e) {
  die('Connection Failed: ' . $e->getMessage());
}
?>