<?php
$servername = "localhost";
$username = "yassine";
$password = "22220000";

try {
  $opt = array(
      PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC);

  $conn = new PDO("mysql:host=$servername;dbname=projectphp", $username, $password,$opt);
  // set the PDO error mode to exception

} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>

