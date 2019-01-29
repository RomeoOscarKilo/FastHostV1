



<form name="Registration" id="Registration"  method="POST" action="registration.php">
  <i id="iconA" class="fas fa-envelope"></i>Email:<input type="text" name="email" placeholder="Enter your Email" value="<?php if($prevent == "0"){echo $email;}?>" >
  <br>
  <i id="iconA" class="fas fa-user"></i>Username:<input type="text" name="username" placeholder="Enter your Username" value="<?php if($prevent == "0"){echo $username;}?>" >
  <br>
  <i id="iconA" class="fas fa-sort-numeric-up"></i>Age: <input type="numeric" name="age"placeholder="Enter your Age" value="<?php if($prevent == "0"){echo $age;}?>" >
  <br>
  <i id="iconA" class="fas fa-key"></i>Password: <input type="password" name="password" placeholder="Enter your Password" >
  <br>
  <i id="iconA" class="fas fa-key"></i>Confirm Password: <input type="password" name="passwordc" placeholder="Confirm your Password" >
  <input type="submit" value="Submit">
  <p id="error" style="color:red;">

  </p>
