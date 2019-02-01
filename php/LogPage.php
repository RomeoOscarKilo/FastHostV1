

<?php
session_start();
require "Validate.php";
$validation = new validation();
$length = 32;
$_SESSION['token'] = substr(base_convert(sha1(uniqid(mt_rand())), 16, 36), 0, $length);
if(isset($_SESSION["JustReg"])){
	$error = "Your account was created, please login";
	unset($_SESSION["JustReg"]);
}
if(isset($_SESSION["error"])){
	$error = $_SESSION["error"];
	unset($_SESSION["error"]);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$error =  $validation->html_secure_input($_POST["error"]);
}
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title> Fasthost's Login Page </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans|Ubuntu" rel="stylesheet">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>

	<!-- https://fontawesome.com/get-started/web-fonts-with-css
      https://fontawesome.com/how-to-use/web-fonts-with-css
  -->

	<?php
	$Cookie_Name = "EOA";
	if ($_COOKIE[$Cookie_Name] == 0) {
			echo '<link rel="stylesheet" href="../css/EOALogPage.css">';
	} else {
			echo '<link rel="stylesheet" href="../css/LogPage.css">';
	}
		?>

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
				<li><a href="../" title="Takes you to the welcome page"><i id="iconA" class="fas fa-home"></i>Home</a></li>
				<li><a href="RegPage.php" title="Takes you to the registration page"><i id="iconA" class="fas fa-user-plus"></i>Register</a></li>
				<li><a href="LogPage.php" title="Takes you to the login page"><i id="iconA" class="fas fa-sign-in-alt"></i>Login</a></li>
				<li><a href="AboutPage.php" title="Takes you to the login page">About</a></li>
				<li title="This button changes css file" id="csschange"><a href="" id="EaseButton" onclick="EaseCookieManNew();"> Ease of access </a> </li>
        <?php if($_SESSION["auth"] == "yes") {echo '<li><a href="user.php" >You are logged in as ' . $_SESSION["username"] . '</a></li> ' . '<li><a href="logout.php" title="Logs you out">Log out</a></li>';}?>
			</ul>

		</nav>
		<div id="CentreBox">
			<section id="mainsection">
				<div id="Loginbox">
					<h4 id="boxtitle">Login to your dashboard</h4>
					<form id="Login" action="login.php" method="post">
						 <i id="iconA" class="fas fa-user"></i>Username: <input type="text" placeholder="Enter your Username" name="username" required>
						<br>
						<i id="iconA" class="fas fa-key"></i>Password: <input type="password" placeholder="Enter your Password" name="password" required>
						<input type="hidden" name="csrf" value="<?php echo $_SESSION['token']?>">
						<input type="submit" value="Submit">
						<p id="error" style="color:red;">
							<?php echo $error;?>
						</p>
					</form>
				</div>
		</div>
		<footer id="footer">
			All rights belong to Fasthosts ltd. Contact fake@email.com for any details
		</footer>
	</div>
</body>
</html>
