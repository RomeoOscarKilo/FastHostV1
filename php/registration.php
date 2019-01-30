<!doctype html>
<?php
session_start();
require "Validate.php";
require "db_conn.php";
$user = new user();
$validation = new validation();
$email = $validation->html_secure_input($_POST["email"]);
$username = $validation->html_secure_input($_POST["username"]);
$age = $validation->html_secure_input($_POST["age"]);
$password = $validation->html_secure_input($_POST["password"]);
$passwordc = $validation->html_secure_input($_POST["passwordc"]);



  if(($validation->is_empty_null($username) == "true") || ($validation->check_user($username) == "true")  ){
    $error = "Please inculde a valid username";
    fail_validate();
  }else {

    if(($validation->is_empty_null($age) == "true") || ($validation->age_valid($age) == "true") ){
      $error = "Please inculde a valid age";
      fail_validate();
    }else{

      if(($validation->is_empty_null($password) == "true") || ($validation->check_pass_length($password) == "true")  ){
        $error = "Please inculde a valid password";
        fail_validate();
      }else{
        if (($validation->email_validate($email) == "true") || ($validation->is_empty_null($email) == "true")){
          $error = "Email is invalid";
          fail_validate();
        }else{
          if($validation->must_Match($password , $passwordc) == "true"){
            $error = "The passwords do not match";
            fail_validate();
          }else{
          if(($user->checkIfEmailExists($email) == "exist") || ($user->checkIfUsernameExists($username) == "exist")){
            $error = "This email or username already exists";
            fail_validate();
          }else{

            //can safley now add user to the database
            $user->addUser($email , $username , $user->passwordSalt($password) );
            $_SESSION["JustReg"] = "yes";
            header("Location: LogPage.php?");
            die();
          }




          }
        }
      }
    }
  }










?>



<form name='fr' action='RegPage.php' method='POST'>
<input type='hidden' name='email' value="<?php echo $email;?>">
<input type='hidden' name='username' value="<?php echo $username;?>">
<input type='hidden' name='age' value="<?php echo $age;?>">
<input type='hidden' name='password' value="123">
<input type='hidden' name='passwordc' value="123">
<input type="hidden" name="error" value="<?php echo $error; ?>" >

</form>



<?php
function fail_validate(){ //needs to be in file to work
  echo"
  <script src='../JavaScript/jQuery/jquery-3.3.1.js'></script>
  <script>
  $( document ).ready(function() {
      document.fr.submit();});
 </script>";



}




?>
