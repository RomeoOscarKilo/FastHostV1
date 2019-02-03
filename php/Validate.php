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
          return "true";
        }else{ return "false";}}



    function is_empty_null($data){
      if(empty($data))
      {
        return "true";
      }else{
        return "false";
      }
    }


    function must_Match($pass1 , $pass2){
      if($pass1 === $pass2)
      {
        return "false";
      }else {
        return "true";
      }

    }

    function age_valid($data){
      if((18 <= $value) && ($value <= 99)){
        return "true";
      }else { return "false";}
    }

    function check_user($data){
      if(strlen($data) < 3){
        return "true";
      }else {return "false";}
    }


    function check_pass_length($data){
      if(strlen($data) < 5){
        return "true";
      }else return "false";

    }

}?>
