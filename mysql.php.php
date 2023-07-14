<?php
echo"welcome to the stage where we are ready to get connected to a database </br>";

$servername = "localhost";
$usename =  "root";
$password = "";

$conn = mysqli_connect($servername, $usename, $password);

if (!$conn){
    die("sorry we failed to connect : " . mysqli_connect_error());
}
else{
    echo"connection was successful";
}

?>