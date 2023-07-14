<?php

$servername = "localhost";
$usename =  "root";
$password = "";

$conn = mysqli_connect($servername, $usename, $password);

if (!$conn){
    die("sorry we failed to connect : " . mysqli_connect_error());
}
else{
    echo"connection was successful </br>";
}

$sql = "CREATE DATABASE dbSDP";
$result = mysqli_query($conn, $sql);

if($result){
    echo"The db was created successfully!</br>";
}
else{
    echo"The db was not created successfully because of this error: " . mysqli_error($conn);
}
?>