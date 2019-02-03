<?php
session_start();

if($_SESSION["auth"] === "yes"){
  echo "validated";
  echo $_SESSION["auth"];
  echo $_SESSION["token"];
}else{
echo "you are not validated";
}



?>
