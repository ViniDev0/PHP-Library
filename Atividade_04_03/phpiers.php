<?php 
$username = $_POST['username'];
$password = $_POST['password'];

$userValidation = "admin01";
$keyValidation = "8080A443";

if ($username == $userValidation && $password == $keyValidation) {
  print("<h1 class='result Show'>");
}



?>