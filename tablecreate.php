<?php

$servername = "localhost";
$usename =  "root";
$password = "";
$database = "dbSDP";

$conn = mysqli_connect($servername, $usename, $password, $database);

if (!$conn){
    die("sorry we failed to connect : " . mysqli_connect_error());
}
else{
    echo"connection was successful </br>";
}

$sql = "CREATE TABLE `php` ( `sno` INT(6) NOT NULL AUTO_INCREMENT, `name` VARCHAR(12) NOT NULL, `dest` VARCHAR(6) NOT NULL, PRIMARY KEY (`sno`))";
$result = mysqli_query($conn, $sql);

if($result){
    echo"The db was created successfully!</br>";
}
else{
    echo"The db was not created successfully because of this error___> " . mysqli_error($conn);
}
?>