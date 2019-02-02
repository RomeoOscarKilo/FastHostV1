<?php
session_start();
session_regenerate_id(); //prevents session fixiation on password change
if($_SESSION["siteuser"] === "yes"){
  //Means only this site can use the php file
}else{
  die("NotSelfWebsite"); // prevents other webpages using this php file
}

require "Validate.php";
require "db_conn.php";
$user = new user();
$validation = new validation();

$oldPass = $validation->html_secure_input($_POST["oldPassword"]);
$newPass = $validation->html_secure_input($_POST["newPassword"]);
$newPassc = $validation->html_secure_input($_POST["newPasswordC"]);



if( ($validation->is_empty_null($oldPass) === "true") ||  ($validation->is_empty_null($newPass) === "true") || ($validation->is_empty_null($newPassc) === "true")       ){
  $_SESSION["ChangePassError"] = "Please make sure all feilds are filled in";
  header("Location: user.php");
}








?>
