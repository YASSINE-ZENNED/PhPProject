<?php
$servername = "localhost";
$username = "yassine";
$password = "22220000";

try {
  $conn = new PDO("mysql:host=$servername;dbname=projectphp", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>

