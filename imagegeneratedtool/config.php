<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "imagegeneratedtool";

$connection = mysqli_connect($server, $username, $password, $database);

if(!$connection){
die("Connection Failed". mysqli_connect_error());
}
else{
    // echo "Connected Successfully";
}
session_start()
?>
