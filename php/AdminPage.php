<!doctype html>

<html lang="en">
<?php
session_start();

if ($_SESSION["admin"] === "yes"){}else{
  die("You are not an admin");
}
$_SESSION["siteuser"] = "yes";
  ?>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> Fasthost's Admin Page </title>
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
        echo '<link rel="stylesheet" href="EOA.css">';

    } else {

        echo '<link rel="stylesheet" href="../css/admin.css">';
    }
    ?>
  <script type="text/javascript" src="../JavaScript/EaseOfAccess.js"></script>
  <script type="text/javascript" src="../JavaScript/adminSearch.js"></script>
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
          <h2 id="TableTitle">List of registerd users</h2>
          <input id="tableSearch" type="text" placeholder="Search..">
          <table id="regTable">
          <thead>
                <tr>
                  <th class="tableHead">username</th>
                  <th class="tableHead">Email</th>
                </tr>
                </thead>
                <tbody id="interestTable">

<?php
$servername = "localhost";
$username = "phpmyadmin";
$filepath = "../password";
$dbname = "fasthost_customers";
$mypass = fopen($filepath , "r" ) or die("Unable to Open File");
$password = substr(fread($mypass,filesize("../password")) , 0, 11);
fclose($mypass);
$conn = new mysqli($servername, $username, $password , $dbname);
$sql = "SELECT * FROM registered_interest ";
$results = $conn->query($sql);
if($results->num_rows > 0) {
  while($row = $results->fetch_assoc()) {
      echo    '<tr> <td> ' . $row["username"] . '</td>
                <td>' .  $row["email"] . '</td> </tr>';
  }
}
?>
                </tbody>
          </table>
      </div>
    </div>
    <footer id="footer">
      All rights belong to Fasthosts ltd. Contact fake@email.com for any details
    </footer>
  </div>


</body>

</html>
