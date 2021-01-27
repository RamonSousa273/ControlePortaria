<?php
session_start();
require_once("Login.php");

$userName = $_POST['userName'];
$userPassword = $_POST['userPassword'];

$login = new Login($userName, $userPassword);

if ($login->validateUser()) {
  header("Location: ./../home.html");
}else{
  header("Location: ./../userNotFound.html");
}

 ?>
