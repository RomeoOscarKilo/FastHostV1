
<!doctype html>





</form>

<?php

$email = $_POST["email"];
$username = $_POST["username"];
$age = $_POST["age"];
$password = $_POST["password"];
$passwordc = $_POST["passwordc"];



echo $email;




function secure_input($data){
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
  }


//echo "<script type='text/javascript'>
// document.fr.submit();
//</script>";


?>



<form name='fr' action='RegPage.php' method='POST'>
<input type='hidden' name='email' value="<?php echo $email;?>">
<input type='hidden' name='username' value="<?php echo $username;?>">
<input type='hidden' name='age' value="<?php echo $age;?>">
<input type='hidden' name='password' value="123">
<input type='hidden' name='passwordc' value="123">
<input type="submit" value="Submit">
