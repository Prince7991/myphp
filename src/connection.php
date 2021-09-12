<?php
$hostname = "localhost";
$username = "root";
$db = "notes";
$password = "";
$conn = mysqli_connect($hostname, $username, $password, $db);
if(!$conn){
    echo "Can't connect to db : <br>".mysqli_connect_error();
    exit;
}else{
    // echo"connect";
}