
<!doctype html>



<form name='fr' action='RegPage.php' method='POST'>
<input type='hidden' name='email' value="<?php echo $user['email'];?>">
<input type='hidden' name='username' value="<?php echo $user['username'];?>">
<input type='hidden' name='age' value="<?php echo $user['age'];?>">



</form>

<?php

$email = secure_input($_POST["email"];
$username = secure_input($_POST["username"];
$age = secure_input($_POST["age"];
$password = secure_input($_POST["password"];
$passwordc = secure_input($_POST["passwordc"];







function secure_input($data){
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
  }


echo "<script type='text/javascript'>
 document.fr.submit();
</script>";












?>
