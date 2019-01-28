<!doctype html>
<?php
require "Validate.php";
$validation = new validation();
$email = $validation->html_secure_input($_POST["email"]);
$username = $validation->html_secure_input($_POST["username"]);
$age = $validation->html_secure_input($_POST["age"]);
$password = $validation->html_secure_input($_POST["password"]);
$passwordc = $validation->html_secure_input($_POST["passwordc"]);


if ($validation->email_validate($email) == "false"){
  $error = "Email is invalid";
  fail_validate();
}

if($validation->is_empty_null($email) == "true"){
  $error = "Please inculde an email";
  fail_validate();
}

if($validation->is_empty_null($username) == "true"){
  $error = "Please inculde a username";
  fail_validate();
}

if($validation->is_empty_null($age) == "true"){
  $error = "Please inculde an age";
  fail_validate();
}

if($validation->is_empty_null($password) == "true"){
  $error = "Please inculde a password";
  fail_validate();
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
