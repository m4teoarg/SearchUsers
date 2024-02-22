<?php

  $server = "localhost";
  $username = "mateo";
  $password = "mateo123";
  $database = "OffSec";
  
  error_reporting(E_ALL);
  ini_set('display_errors', 1);
  	
  $conn = new mysqli($server, $username, $password, $database);

  if ($conn->connect_error){
	die ("Error de conexión: " . $conn->connect_error);
  }

  $id = mysqli_real_escape_string($conn, $_GET['id']);

  $data = mysqli_query($conn, "select username from users where id = $id") or die(mysqli_error($conn));
  $response = mysqli_fetch_array($data);
    
  echo $response['username'];	
  
?>
