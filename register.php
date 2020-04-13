<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}


?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register || House Of Korean Skincare</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <script src="js/vendor/modernizr.js"></script>
    <style type="text/css">
    ul.sub{display: none;}
    ul.right li:hover ul.sub{
                display : block;
                transition: all 1s ease;
                position: absolute;} 
    ul.sub li{display: block;
            text-align: center;}
    body{
      width: 100%;
      height: 100%;
      background-image: url(images/bg.jpg);
      background-repeat: all;
      position: fixed;
      background-size: 100%}
    </style>
    <link rel="stylesheet" type="text/css" href="css/style.css">
  </head>
  <body>
<nav class="top-bar" data-topbar role="navigation">
      <ul class="title-area">
        <li class="name">
          <h1><a href="index.html">House Of Korean Skincare</a></h1>
        </li>
        <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
      </ul>

      <section class="top-bar-section">
      <!-- Right Nav Section -->
        <ul class="right">
            <li class='active'><a href="register.php">Register</a></li> 
             <li><a href="">Log In</a>
          <ul class="sub">
            <li><a href="login.php">User</a></li>
            <li><a href="loginadmin.php">Admin</a></li>
            </ul></li>
         </ul>
      </section>
    </nav>


    <form method="POST" action="" style="margin-top:30px;">
      <div class="row">
        <div class="small-8">
          <div class="row">
            <div class="small-4 columns">
              <label for="right-label" class="right inline">First Name</label>
            </div>
            <div class="small-8 columns">
              <input type="text" name="dfname" id="fname" placeholder="First Name" required/>
            </div>
          </div>
          <div class="row">
            <div class="small-4 columns">
              <label for="right-label" class="right inline">Last Name</label>
            </div>
            <div class="small-8 columns">
              <input type="text" name="lname" id="lname" placeholder="Last Name" required/>
            </div>
          </div>
          <div class="row">
            <div class="small-4 columns">
              <label for="right-label" class="right inline">Address</label>
            </div>
            <div class="small-8 columns">
              <input type="text" name="address" id="address"  placeholder="Address" required/>
            </div>
          </div>
          <div class="row">
            <div class="small-4 columns">
              <label for="right-label" class="right inline">City</label>
            </div>
            <div class="small-8 columns">
              <input type="text" name="city" id="city"  placeholder="City" required/>
            </div>
          </div>
          <div class="row">
            <div class="small-4 columns">
              <label for="right-label" class="right inline">Email</label>
            </div>
            <div class="small-8 columns">
              <input type="text" name="email" id="email" placeholder="Enter your email" required/>
            </div>
          </div>
          <div class="row">
            <div class="small-4 columns">
              <label for="right-label" class="right inline">Password</label>
            </div>
            <div class="small-8 columns">
              <input type="password" name="pwd" id="pwd" placeholder="Password" required/>
            </div>
          </div>
          <div class="row">
            <div class="small-4 columns">

            </div>
            <div class="small-8 columns">
              <input name="submit" action="login.php" type="submit" id="right-label" value="Register" style="background: #0078A0; border: none; color: #fff; font-family: 'Helvetica Neue', sans-serif; font-size: 1em; padding: 10px;">
              <input name="reset" type="reset" id="right-label" value="Reset" style="background: #0078A0; border: none; color: #fff; font-family: 'Helvetica Neue', sans-serif; font-size: 1em; padding: 10px;">
            </div>
          </div>
        </div>
      </div>
    </form>

<?php
if(isset($_POST["submit"])){
$servername = "localhost";
$username = "id6059040_divairmaa";
$password = "#apakabar";
$dbname = "id6059040_projek";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO users (fname, lname, address, city, email, pwd)
VALUES ('".$_POST["dfname"]."','".$_POST["lname"]."','".$_POST["address"]."','".$_POST["city"]."','".$_POST["email"]."','".$_POST["pwd"]."')";
if ($conn->query($sql) === TRUE) {
echo "<script type= 'text/javascript'>alert('New record created successfully, you can login now.');</script>";
echo '<script>window.location="login.php"</script>';
} else {
echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $conn->error."');</script>";
}
$conn->close();
}

?>

    <div class="row" style="margin-top:990px;">
      <div class="small-12">

        <footer>
           <p style="text-align:center; font-size:0.8em;">&copy; House Of Korean Skincare. All Rights Reserved.</p>
        </footer>

      </div>
    </div>
    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
