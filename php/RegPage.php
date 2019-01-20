<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> Fasthost's Login Page </title>
  <link href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" rel="stylesheet">
  <!-- https://fontawesome.com/get-started/web-fonts-with-css
      https://fontawesome.com/how-to-use/web-fonts-with-css
  -->
  <?php
  $Cookie_Name = "EOA";
    if ($_COOKIE[$Cookie_Name] == 0) {
        echo '<link rel="stylesheet" href="../css/RegPage.css">';
    } elseif ($_COOKIE[$Cookie_Name] == 1) {
        echo '<link rel="stylesheet" href="no.css">';
    }?>
  <script type="text/javascript" src="../JavaScript/EaseOfAccess.js"></script>
</head>
<body>
  <div id="completewrap">
    <header id="topheader">
      <h1 id="mainheader">Welcome to Fasthost
        <a href="../">
          <img id="logo" src="../Images/Fathost_logo.png" title="Click to return home" alt="Fasthost logo">
        </a>
      </h1>
    </header>
    <Nav id="topmenu">
      <ul>
        <li><a href="../" title="Takes you to the welcome page">Home</a></li>
        <li><a href="RegPage.php" title="Takes you to the registration page">Register</a></li>
        <li><a href="LogPage.php" title="Takes you to the login page">Login </a></li>
          <li title="This button changes css file" id="csschange"><a href="" id="EaseButton" onclick="EaseCookieMan();"> Ease of access </a> </li>
      </ul>
    </nav>
    <div id="CentreBox">
      <section id="mainsection">
        <div id="RegBox">
          <h4 id="boxtitle">Register an account</h4>
          <form id="Registration">
            Email:<br>
            <i class="fas fa-envelope"></i> <input type="email" placeholder="Enter your Email" required> Username:
            <br>
            <i class="fas fa-user"></i> <input type="text" placeholder="Enter your Username" required> Password:
            <br>
            <i class="fas fa-key"></i> <input type="password" placeholder="Enter your Password" required> Confirm Your Password<br>
            <i class="fas fa-key"></i> <input type="password" placeholder="Confirm your Password" required>
            <input type="submit" value="Submit">
          </form>
        </div>
    </div>
    <footer id="footer">
      All rights belong to Fasthosts ltd. Contact fake@email.com for any details
    </footer>
  </div>
</body>

</html>
