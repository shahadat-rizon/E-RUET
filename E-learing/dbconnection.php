<?php
$db_host = "localhost";
$db_user = "root";
$db_password ="";
$db_name ="lms_db";

//create conection
$conn = new mysqli($db_host,$db_user,$db_password,$db_name);

//cheak connection

if($conn->connect_error){
    die("connection failed");
}
else{
    echo "connected";
}
?>