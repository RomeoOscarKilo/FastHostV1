<!DOCTYPE HTML>
<html lang="en">

<head>
<script src="../JavaScript/jQuery/jquery-3.3.1.js"></script>
</head>
<body>

<?php
$prevent = "1";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = secure_input($_POST["email"]);
  $username = secure_input($_POST["username"]);
  $age = secure_input($_POST["age"]);
  $password = secure_input($_POST["password"]);
  $passwordc = secure_input($_POST["passwordc"]);
  $prevent = "0";

}
  function secure_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
    }
  ?>










  <form name="Registration" id="Registration"  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <i id="iconA" class="fas fa-envelope"></i>Email:<input type="email" name="email" placeholder="Enter your Email" value="<?php if($prevent == "0"){echo $email;}?>" required>
    <input type="hidden"
    <br>
    <i id="iconA" class="fas fa-user"></i>Username:<input type="text" name="username" placeholder="Enter your Username" value="" required>
    <br>
    <i id="iconA" class="fas fa-sort-numeric-up"></i>Age: <input type="numeric" name="age"placeholder="Enter your Age" value="" required>
    <br>
    <i id="iconA" class="fas fa-key"></i>Password: <input type="password" name="password" placeholder="Enter your Password" value="" required>
    <br>
    <i id="iconA" class="fas fa-key"></i>Confirm Password: <input type="password" name="passwordc" placeholder="Confirm your Password" value="" required>
    <input type="submit" value="Submit">
    <p id="error" style="color:red;">
      test
    </p>
</body>

</html>
