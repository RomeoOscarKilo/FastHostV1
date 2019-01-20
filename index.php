<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=0.9">
  <title > Fasthost's New TLD </title>
  <link href="https://use.fontawesome.com/releases/v5.0.2/css/all.css" rel="stylesheet">
  <?php
  $Cookie_Name = "EOA";
    if ($_COOKIE[$Cookie_Name] == 0) {
        echo '<link rel="stylesheet" href="main.css">';
    } elseif ($_COOKIE[$Cookie_Name] == 1) {
        echo '<link rel="stylesheet" href="EOA.css">';
    }?>
  <script type="text/javascript" src="/JavaScript/EaseOfAccess.js"></script>
</head>
<body>
  <div id="completewrap">
    <header id="topheader">
      <h1 id="EOATEXT" id="mainheader" >Welcome to Fasthost
        <a href="index.php">
          <img id="logo" src="Images/Fathost_logo.png" title="Click to return home" alt="Fasthost logo">
        </a>
      </h1>
    </header>
    <Nav id="topmenu">
      <ul>
        <li><a href="index.php" id="EOATEXT" title="Takes you to the welcome page"><i  class="fas fa-home"></i>Home</a></li>
        <li><a href="php\RegPage.php" id="EOATEXT" title="Takes you to the registration page"><i class="fas fa-user-plus"></i>Register</a></li>
        <li><a href="php\LogPage.php" id="EOATEXT" title="Takes you to the login page"><i  class="fas fa-sign-in-alt"></i> Login </a></li>
        <li title="This button changes css file" id="csschange"><a href="" id="EOATEXT" id="EaseButton"  onclick="EaseCookieMan();"> Ease of access </a> </li>
      </ul>
    </nav>
    <div id="MainInfo">
      <section id="mainsection">
        <article>
          <header>
            <hgroup>
              <h1 id="EOATEXT" id="Firstpost">New Top level Domains!</h1>
              <h2>They are new, secure and highspeed</h2>
            </hgroup>
          </header>
          <p id="EOATEXT"> Fan of .com .org and .uk? well were are fan of .you! So register to show interest for our new TLD's</p>
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
      <aside id="sidenews">
        <div id="news">
          <h4>New TLD's </h4> New range of top level domains out for purchase
        </div>
      </aside>
    </div>
    <footer id="footer">
      All rights belong to Fasthosts ltd. Contact fake@email.com for any details
    </footer>
  </div>
</body>

</html>
