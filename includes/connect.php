<?php

$conn = new mysqli('localhost','root','','newworld');

if( $conn->connect_error ){
    die('connection failed:'. $conn->connect_error);
}
else
{
    //echo "successs";
 
}