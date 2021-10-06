<?php
$servername = "mysql:dbname=crud_empleados;host=127.0.0.1";
$username = "root";
$password = "";

try {
  $conn = new PDO($servername,$username, $password,array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
  // set the PDO error mode to exception
 // echo "Conecting...";
 
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>