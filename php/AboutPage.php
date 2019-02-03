<!doctype html>

<html lang="en">
<?php
session_start();
$_SESSION["siteuser"] = "yes";
  ?>



<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=0.5">
  <title> Fasthost's About Page </title>
  <link href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans|Ubuntu" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>
  <script src="../JavaScript/ImageToggle.js"></script>


  <!-- https://fontawesome.com/get-started/web-fonts-with-css
      https://fontawesome.com/how-to-use/web-fonts-with-css
  -->
  <?php
  $Cookie_Name = "EOA";
    if ($_COOKIE[$Cookie_Name] === "1") {
        echo '<link rel="stylesheet" href="../css/EOAaboutPage.css">';

    } else {

        echo '<link rel="stylesheet" href="../css/aboutPage.css">';
    }
    ?>
  <script type="text/javascript" src="../JavaScript/EaseOfAccess.js"></script>
  <script type="text/javascript" src="../JavaScript/AgeValidate.js"></script>
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
        <li><a href="../" title="Takes you to the welcome page"><i id="iconA" class="fas fa-home"></i>Home</a></li>
        <li><a href="RegPage.php" title="Takes you to the registration page"><i id="iconA" class="fas fa-user-plus"></i>Register</a></li>
        <li><a href="LogPage.php" title="Takes you to the login page"><i id="iconA" class="fas fa-sign-in-alt"></i>Login </a></li>
        <li><a href="AboutPage.php" title="Takes you to the login page">About</a></li>
        <li title="This button changes css file" id="csschange"><a href="" id="EaseButton" onclick="EaseCookieManNew();"> Ease of access </a> </li>
        <?php if($_SESSION["auth"] == "yes") {echo '<li><a href="user.php" >You are logged in as ' . $_SESSION["username"] . '</a></li> ' . '<li><a href="logout.php" title="Logs you out">Log out</a></li>';}?>
      </ul>
    </nav>
    <div id="CentreBox">
      <section id="mainsection">
        <div id="SlideshowContainer" class="slideshow-container" >
          <div id="team1" >Click here to see the server rooms</div>
          <br />
          <div id="limit">
            <div id="pane1"><img id="teamimage" src="../Images/team1.png" /><p id="teamimage" class="imagetext">Our server rooms provide a reliable and high-performance capability to your business</p></div>
        </div>

        <div id="team2" >Click here to see our team</div>
        <br />
        <div id="limit">
          <div id="pane2"><img id="teamimage2" src="../Images/team2.png" width="60%" /><p id="teamimage2" class="imagetext">Our team makes sure we are using the latest technology and domains.</p> </div>

      </div>

      <div id="team3" >Click here to see our engineers</div>
      <br />
      <div id="limit">
        <div id="pane3"><img id="teamimage3" src="../Images/team3.png" width="60%" /><p id="teamimage2" class="imagetext">Our engineers are constantly working round the clock to ensure there are no outages</p> </div>

      </div>




      </div>







    </div>
    <footer id="footer">
      All rights belong to Fasthosts ltd. Contact fake@email.com for any details
    </footer>
  </div>


</body>

</html>
