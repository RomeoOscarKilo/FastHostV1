<?php
session_start();

if($_SESSION["auth"] == "yes"){
  echo "validated";
  echo $_SESSION["auth"];
}else{
echo "you are not validated";
}



?>
