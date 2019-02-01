<?php
session_start(); //for secure php session
session_regenerate_id(); //prevents session fixation attacks

if($_SESSION["auth"] === "yes"){

}else {
  $_SESSION["error"] = "Please login to access the user page"
  header("Location: LogPage.php");
}

?>
