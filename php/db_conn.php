<?php
//here we create connection,  setup an insert


class user{









function checkIfEmailExists($inputEmail){
  $servername = "localhost";
  $username = "phpmyadmin";
  $filepath = "../password";
  $dbname = "fasthost_customers";
  $mypass = fopen($filepath , "r" ) or die("Unable to Open File");
  $password = substr(fread($mypass,filesize("../password")) , 0, 11);
  fclose($mypass);
  $conn = new mysqli($servername, $username, $password , $dbname);
  $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
  $stmt->bind_param("s" , $inputEmail );
  $stmt->execute();
  $result = $stmt->get_result();
  $returnemail = $result->fetch_object();
  $conn->close();
  if(strcmp($returnemail , $inputEmail) == 0){
    return "exist";
  } else{return "notexist";}

}



function checkIfUsernameExists($inputUsername){
  $servername = "localhost";
  $username = "phpmyadmin";
  $filepath = "../password";
  $dbname = "fasthost_customers";
  $mypass = fopen($filepath , "r" ) or die("Unable to Open File");
  $password = substr(fread($mypass,filesize("../password")) , 0, 11);
  fclose($mypass);
  $conn = new mysqli($servername, $username, $password , $dbname);
  $stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
  $stmt->bind_param("s" , $inputUsername );
  $stmt->execute();
  $result = $stmt->get_result();
  $returnUsername = $result->fetch_object();
  if(strcmp($returnUsername , $inputUsername) == 0){
    return "exist";
  } else{return "notexist";}
  $conn->close();
}



function addUser($iUsername , $iEmail , $iPass){
  $servername = "localhost";
  $username = "phpmyadmin";
  $filepath = "../password";
  $dbname = "fasthost_customers";
  $mypass = fopen($filepath , "r" ) or die("Unable to Open File");
  $password = substr(fread($mypass,filesize("../password")) , 0, 11);
  fclose($mypass);
  $conn = new mysqli($servername, $username, $password , $dbname);
  $stmt = $conn->prepare("INSERT INTO users (email , username , password) VALUES (? , ? , ?) ");
  $stmt->bind_param("sss" , $iUsername , $iEmail , $iPass );
  $stmt->execute();
  $conn->close();




}



function passwordSalt($passtohash){
  $passtohash = password_hash($passtohash , PASSWORD_DEFAULT);
  return $passtohash;
}















}
?>
