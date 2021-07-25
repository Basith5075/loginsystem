<?php

$username ="root";
$password = "Trimax@123";
$servername = "localhost";
$db = "users";

$conn = mysqli_connect($servername,$username,$password,$db);

if($conn){

    echo "success";
}
else{

    die ("connection failed".mysqli_connect_error($conn));
}


?>