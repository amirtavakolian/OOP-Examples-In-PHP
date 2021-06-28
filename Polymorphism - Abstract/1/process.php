<?php
if($_SERVER['REQUEST_METHOD'] != 'POST'){
  header("location: http://127.0.0.1/oop-practice/poly.php");
}
session_start();


$class = $_POST['type'];

if (!file_exists($class . ".php")){
  $_SESSION['errorMsg'] = "File type error or file not found";
  header("location: http://127.0.0.1/oop-practice/poly.php");
}

require $class . ".php"; 
$obj = new $class();
$obj->export($_POST);
