<?php
session_start();
require "Validate.php";
require "db_conn.php";
$user = new user();
$validation = new validation();


$username = $validation->html_secure_input($_POST["username"]);
$password = $validation->html_secure_input($_POST["password"]);
$token = $_POST["csrf"];



if(strcmp($token , $_SESSION["token"]) == 0){
  if(($validation->is_empty_null($username) == "true") || ($validation->is_empty_null($password) == "true")){
    $error = "Please include a username";
    fail_login();
  }else{ echo "2";
    if($user->checkIfUsernameExists($username) == "notexist"){
      $error = "This user does not exist";
      fail_login();
    }else{
      if(password_verify($password , $user->getUserPassHash($username))){
        session_regenerate_id();
        $_SESSION["auth"] = "yes";
        $_SESSION["username"] = $username;
        header("Location: user.php");
        die();
      }else{
        $error = "The password is incorrect";
        fail_login();
      }
    }
  }
}else {
  $error = "CSRF ERROR";
  fail_login();
}




?>

<form name='fr' action='LogPage.php' method='POST'>
<input type="hidden" name="error" value="<?php echo $error; ?>" >

</form>


<?php
function fail_login(){ //needs to be in file to work
  echo"
  <script src='../JavaScript/jQuery/jquery-3.3.1.js'></script>
  <script>
  $( document ).ready(function() {
      document.fr.submit();});
 </script>";



}




?>
