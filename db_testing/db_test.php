<?php
$servername = "localhost";
$username = "phpmyadmin";
$filepath = "../password";
$dbname = "fasthost_customers";
$mypass = fopen($filepath , "r" ) or die("Unable to Open File");
$password = substr(fread($mypass,filesize("../password")) , 0, 11);
fclose($mypass);
$conn = new mysqli($servername, $username, $password , $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";



$test = "' ; DROP TABLE users -- -";
$sql = "INSERT INTO users (email , username , password) VALUES ('$test' , 'alllyboi' , 'yolo') ";



echo " " . $test . " ";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}





$conn->close();




?>
