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




$sql = "INSERT INTO users (email , username , password) VALUES ('alex@seddon.com' , 'alllyboi' , 'yolo') ";



if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}






$conn->close();




?>
