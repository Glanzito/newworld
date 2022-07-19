<?php
// define variables and set to empty values
$name =$surname = $email = $password = ""; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $surname = test_input($_POST["surname"]);
  $email = test_input($_POST["email"]);
  $password = test_input($_POST["password"]);
  
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>