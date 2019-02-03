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
  failChangePass("Please fill in all feilds");
}else{

  if($validation->check_pass_length($newPass) == "true"){
    failChangePass("Please include a valid password that is more then 5 chars");
  }else{
    if($validation->must_Match($newPass , $newPassc) === "true"){
      failChangePass("Please make sure that the passwords match");
    }else{
      if(password_verify($oldPass , $user->getUserPassHash($_SESSION["username"]))){
          $user->changeUserPass($user->passwordSalt($newPass) , $_SESSION["username"] );
          $_SESSION["ChangePassError"] = "Your password has been changed";
          header("Location: user.php");
          die();
      }else {
        failChangePass("The password is invalid");
      }
    }
  }
}
function failChangePass($reason){
  $_SESSION["ChangePassError"] = $reason;
  header("Location: user.php");
}?>
