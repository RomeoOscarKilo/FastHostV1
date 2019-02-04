<?php
//here we create connection,  setup an insert
session_start();
if($_SESSION["siteuser"] === "yes"){
  //Means only this site can use the php file
}else{
  die("NotSelfWebsite"); // prevents other webpages using this php file
}

class user{

public $filepath = "../password";
public $servername = "localhost";
public $username = "phpmyadmin";
public $dbname = "fasthost_customers";

public function GetFilePass(){
  $mypass = fopen($this->filepath , "r" ) or die("Unable to Open File");
  return substr(fread($mypass,filesize("../password")) , 0, 11);
    fclose($mypass);
}

function checkIfEmailExists($inputEmail){

  $password = $this->GetFilePass();
  $conn = new mysqli($this->servername, $this->username, $password , $this->dbname);
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
  $password = $this->GetFilePass();
  $conn = new mysqli($this->servername, $this->username, $password , $this->dbname);
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

function addUser( $iEmail , $iUsername  , $iPass){
  $password = $this->GetFilePass();
  $conn = new mysqli($this->servername, $this->username, $password , $this->dbname);
  $stmt = $conn->prepare("INSERT INTO users (email , username , password) VALUES (? , ? , ?) ");
  $stmt->bind_param("sss" , $iEmail , $iUsername , $iPass );
  $stmt->execute();
  $conn->close();
}



function addInterest($iEmail , $iUsername){

  $password = $this->GetFilePass();
  $conn = new mysqli($this->servername, $this->username, $password , $this->dbname);
  $stmt = $conn->prepare("INSERT INTO registered_interest (email , username) VALUES (? , ?) ");
  $stmt->bind_param("ss" , $iEmail  , $iUsername);
  $stmt->execute();
  $conn->close();
}



function getUserPassHash($iUsername){
  $password = $this->GetFilePass();
  $conn = new mysqli($this->servername, $this->username, $password , $this->dbname);
  $stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
  $stmt->bind_param("s" , $iUsername);
  $stmt->execute();
  $result = $stmt->get_result();
  $hashResult = $result->fetch_object();
  return $hashResult->password;
  $conn->close();

}


function checkIfAdmin($iUsername){
  $password = $this->GetFilePass();
  $conn = new mysqli($this->servername, $this->username, $password , $this->dbname);
  $stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
  $stmt->bind_param("s" , $iUsername);
  $stmt->execute();
  $result = $stmt->get_result();
  $adminCheck = $result->fetch_object();
  return $adminCheck->admin;
  $conn->close();

}




function changeUserPass($iPass , $iUsername){
  $password = $this->GetFilePass();
  $conn = new mysqli($this->servername, $this->username, $password , $this->dbname);
  $stmt = $conn->prepare("UPDATE users SET password=? WHERE username=? ");
  $stmt->bind_param("ss" , $iPass , $iUsername);
  $stmt->execute();
  $conn->close();
}



function getUserToEmail($iUsername){
  $password = $this->GetFilePass();
  $conn = new mysqli($this->servername, $this->username, $password , $this->dbname);
  $stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
  $stmt->bind_param("s" , $iUsername);
  $stmt->execute();
  $result = $stmt->get_result();
  $actualEmail = $result->fetch_object();
  return $actualEmail->email;
  $conn->close();

}


function checkIfInterest($iUsername){
  $password = $this->GetFilePass();
  $conn = new mysqli($this->servername, $this->username, $password , $this->dbname);
  $stmt = $conn->prepare("SELECT * FROM registered_interest WHERE username = ?");
  $stmt->bind_param("s" , $iUsername );
  $stmt->execute();
  $result = $stmt->get_result();
  $retUser = $result->fetch_object();
  if(strcmp($retUser , $iUsername) == 0){
    return "exist";
  } else{return "notexist";}
  $conn->close();
}


function passwordHash($passtohash){
  $passtohash = password_hash($passtohash , PASSWORD_DEFAULT);
  return $passtohash;
}















}
?>
