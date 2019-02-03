<?php
session_start();
if($_SESSION["siteuser"] === "yes"){
  //Means only this site can use the php file
}else{
  die("NotSelfWebsite"); // prevents other webpages using this php file
}
require "Validate.php";
require "db_conn.php";
$user = new user();
$validation = new validation();
$email = $validation->html_secure_input($_POST["email"]);
if(strcmp($email , $user->getUserToEmail($_SESSION["username"])) === 0 ){
$user->addInterest($email , $_SESSION["username"]);
$_SESSION["regInError"] = "You have succsesfully registerd";
header("Location: user.php");
}else {
  $_SESSION["regInError"] = "The email was not for this acount";
  header("Location: user.php");
}
?>
