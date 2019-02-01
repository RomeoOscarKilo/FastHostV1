<?php
session_start(); //for secure php session
$_SESSION["siteuser"] = "yes";
session_regenerate_id(); //prevents session fixation attacks

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
<script src="JavaScript/jQuery/jquery-3.3.1.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <title > Fasthost's New TLD </title>
  <link href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans|Ubuntu" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>
  <?php
  $Cookie_Name = "EOA";
    if ($_COOKIE[$Cookie_Name] === 0) {
        echo '<link rel="stylesheet" href="EOA.css">';

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
        <?php if($_SESSION["auth"] == "yes") {echo '<li><a href="user.php" >You are logged in as ' . $_SESSION["username"] . '</a></li> ' . '<li><a href="logout.php" title="Logs you out">Log out</a></li>';}?>
      </ul>
    </nav>
    <div id="MainInfo">
      <section id="mainsection">
        <article>
          <header>
            <hgroup>
              <h1 id="EOATEXT" id="Firstpost">Sign up to show interest in our brand new Top Level Domains</h1>
              <h2>Please enter your email to register an interest</h2>
            </hgroup>
          </header>
          <p id="EOATEXT"></p>
          <form id="reginterest" action="domainRegister.php" method="post">
            <input class="submit" type="submit"  value="Submit">
            <input calss="submit" id="regemail" type="email" name="email" placeholder="Email" />
            <p>You will be notified of any new Top level domains that are released.</p>
            <p  style="color:red;"> <?php echo $_SESSION["regInError"];    unset($_SESSION["regInError"]);  ?>      </p>

          </form>

          <footer>
            <p>You agree for us to send emails to you</p>
          </footer>
        </article>
        <article>
          <header>
            <hgroup>
              <h1 id="EOATEXT">New login and registration page's!</h1>
              <h2>Secure and safe login for all users</h2>
            </hgroup>
          </header>
          <p id="EOATEXT">We have deployed and optimised a new login and registration page for users looking to control and explore our new product</p>
          <footer>
            <p>Coming soon, to fasthosts product line</p>
          </footer>
        </article>

        <article>
          <header>
            <hgroup>
              <h1 id="EOATEXT">New login and registration page's!</h1>
              <h2>Secure and safe login for all users</h2>
            </hgroup>
          </header>
          <p id="EOATEXT">We have deployed and optimised a new login and registration page for users looking to control and explore our new product</p>
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
