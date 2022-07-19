<?php

if (isset($_POST["submit"])){
 
    //echo "it works";
   // header("location: ../land.html");
   
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $password = $_POST['password'];


    require_once "connect.php";

    $stmt = $conn->prepare("insert into userdetail(name,surname,email,password) values(?,?,?,?)");
    $stmt->bind_param("ssss",$name,$surname,$email,$password);
    $stmt->execute();
   
    $stmt->close();
    $conn->close();
    header("location: ../land.html");


}
else{
    //echo "error";
    header("location: ../register.php");
}