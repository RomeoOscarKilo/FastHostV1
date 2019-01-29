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


$test = $conn->real_escape_string("alexander.seddon@ymail.com");

$sql = "INSERT INTO users (email , username , password) VALUES ('$test' , 'alllyboi' , 'yolo') ";





echo " " . $test . " ";

//if ($conn->query($sql) === TRUE) {
//    echo "New record created successfully";
//} else {
//    echo "Error: " . $sql . "<br>" . $conn->error;
//}
echo "<br>";
$sql = "SELECT * FROM users ";

$results = $conn->query($sql);

if($results->num_rows > 0) {
    while($row = $results->fetch_assoc()) {
        echo "email: " . $row["email"]. " || Username: " . $row["username"]. " || Password: " . $row["password"]. "<br>";
    }
}
  echo " " . "successfully";





$conn->close();




?>
