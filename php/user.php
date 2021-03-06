<?php
session_start(); //for secure php session
$_SESSION["siteuser"] = "yes";
session_regenerate_id(); //prevents session fixation attacks
require "db_conn.php";
$user = new user();
if($_SESSION["auth"] === "yes"){

}else {
  $_SESSION["error"] = "Please login to access the user page";
  header("Location: LogPage.php");
}

?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=0.9">


  <title > Fasthost's User Page </title>
  <link href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans|Ubuntu" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>
  <?php

  $Cookie_Name = "EOA";
    if ($_COOKIE[$Cookie_Name] === "1") {
        echo '<link rel="stylesheet" href="../css/EOAuser.css">';

    } else {

        echo '<link rel="stylesheet" href="../css/user.css">';
    }
    ?>
  <script type="text/javascript" src="../JavaScript/EaseOfAccess.js"></script>
</head>
<body>
  <div id="completewrap">
    <header id="topheader">
      <h1 id="EOATEXT"  >Welcome to Fasthost
        <a href="index.php">
          <img id="logo" src="../Images/Fathost_logo.png" title="Click to return home" alt="Fasthost logo">
        </a>
      </h1>
    </header>
    <Nav id="topmenu">
      <ul>
        <li><a href="../index.php" id="EOATEXT" title="Takes you to the welcome page"><i  class="fas fa-home"></i>Home</a></li>
        <li><a href="RegPage.php" id="EOATEXT" title="Takes you to the registration page"><i class="fas fa-user-plus"></i>Register</a></li>
        <li><a href="LogPage.php" id="EOATEXT" title="Takes you to the login page"><i  class="fas fa-sign-in-alt"></i>Login </a></li>
        <li><a href="AboutPage.php" title="Takes you to the login page">About</a></li>
        <li title="This button changes css file" id="csschange"><a href="" id="EOATEXT"   onclick="EaseCookieManNew();"> Ease of access </a> </li>
        <?php if($_SESSION["auth"] === "yes") {echo '<li><a href="user.php" >You are logged in as ' . $_SESSION["username"] . '</a></li> ' . '<li><a href="logout.php" title="Logs you out">Log out</a></li>';}?>
                <?php if($_SESSION["auth"] === "yes") {echo '<li><a href="AdminPage.php" >Admin Page ' . '</a></li>';} ?>
      </ul>
    </nav>
    <div id="MainInfo">
      <section id="mainsection">
        <article>
          <header>
            <hgroup>
              <h1 id="EOATEXT" id="Firstpost" class='noCopy'><?php if ($user->checkIfInterest($_SESSION["username"]) === "exist"){ echo "You have already registerd an interest";}else{echo "Sign up to show interest in our brand new Top Level Domains";} ?></h1>
              <h2 class='noCopy'>Please enter your email to register an interest</h2>
            </hgroup>
          </header>
          <p id="EOATEXT"></p>
<?php    if ($user->checkIfInterest($_SESSION["username"]) === "exist"){echo "<p class='noCopy' >You Have already registerd an interest, please check your emails regularly for further information </p>";}else echo '<form id="reginterest" action="domainRegister.php" method="post">
            <input class="submit" type="submit"  value="Submit">
            <input class="submit" id="regemail" type="email" name="email" placeholder="Email" />'; ?>
            <p class='noCopy'>You will be notified of any new Top level domains that are released.</p>
            <p  style="color:black;"> <?php echo $_SESSION["regInError"]; unset($_SESSION["regInError"]);?></p>
          </form>
          <footer>
            <p class='noCopy'>You agree for us to send emails to you</p>
          </footer>
        </article>
        <article>
          <header>
            <hgroup>
              <h1 id="EOATEXT">Change your password</h1>
              <h2>Here you can update your password </h2>
            </hgroup>
          </header>
          <form id="changePass" action="changePass.php" method="post">

            Old Password:<input class="submit" id="oldPass" type="password" name="oldPassword" placeholder="Old Password" />
            <br />
            Password:<input class="submit" id="Pass" type="password" name="newPassword" placeholder="New Password" />
            <br/>
            Confirm Password:<input class="submit" id="newPass" type="password" name="newPasswordC" placeholder="Confirm New Password" />
            <br />
            <input class="submit" type="submit"  value="Submit">
            <p>You will be notified of any new Top level domains that are released.</p>
            <p  style="color:red;"> <?php echo $_SESSION["ChangePassError"]; unset($_SESSION["ChangePassError"]);?></p>
          </form>
          <footer>
            <p>Coming soon, to fasthosts product line</p>
          </footer>
        </article>

        <article>
          <header>
            <hgroup>
              <h1 id="EOATEXT">We are here to provide you the best service possible</h1>
              <h2>So contact us!</h2>
            </hgroup>
          </header>
          <p id="EOATEXT">We have 24/7 356 day support to cover all your needs and problems, You matter to us as a customer and as a business so we want to keep your users, visters and customers flinding your websites with easy domains.</p>



          <footer>
            <p>Coming soon, to fasthosts product line</p>
          </footer>
        </article>





      </section>

    </div>
    <footer id="footer">
      All rights belong to Fasthosts ltd. Contact fake@email.com for any details
    </footer>
  </div>
</body>

</html>
