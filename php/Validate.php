<?php
class validation{

  function html_secure_input($data){
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }



    function email_validate($email){
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          $emailErr = "Invalid email format";
          return "false";
        }else{ return "true";}}



    function is_empty_null($data){
      if(empty($data))
      {
        return "true";
      }else{
        return "false";
      }
    }








}?>
