<?php
$host = "localhost:8889";
$dbname = "kutuphane_db";
$user = "root";
$pass = "root"; // MAMP default

try {
  $db = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $pass);
} catch (PDOException $e) {
  die("Bağlantı hatası");
}
?>
