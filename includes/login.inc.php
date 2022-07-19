<?php
session_start();

require_once "connect.php";

if (isset ($_POST['login'])){

    $username = $_POST['username'];
    $pwd = $_POST['password'];

    $select = mysqli_query($conn, "select * from userdetail where email = '$username' and password = '$pwd'");
    $row = mysqli_fetch_array($select);

    if(is_array($row)){
        $_SESSION["username"] = $row['email'];
        $_SESSION["pwd"] = $row['password'];
    }
    else{
        echo "error";
    }
}
if(isset($_SESSION["username"])){
   // echo "welcome ";
    //echo $_SESSION["username"];
    header("location:../logged.php");
}