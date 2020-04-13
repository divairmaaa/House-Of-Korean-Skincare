<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

include("loginadmserv.php");

?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login || House Of Korean Skincare</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css">
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
                      
             <li><a href="register.php">Register</a></li> 
             <li ><a href="">Log In</a>
          <ul class="sub">
            <li ><a href="login.php">User</a></li>
            <li class='active'><a href="loginadmin.php">Admin</a></li>
            </ul></li>
         </ul>
      </section>
    </nav>


<form method="POST" action="" style="margin-top:60px;">
      <div class="row">
        <div class="small-8">
          <div class="row">
            <div class="small-4 columns">
              <label for="right-label" class="right inline">Email</label>
            </div>
            <div class="small-8 columns">
              <input type="email" id="email" placeholder="Enter your email" name="email" required>
            </div>
          </div>
          <div class="row">
            <div class="small-4 columns">
              <label for="right-label" class="right inline">Password</label>
            </div>
            <div class="small-8 columns">
              <input type="password" placeholder="Password" id="pwd" name="pwd" required>
            </div>
          </div>

          <div class="row">
            <div class="small-4 columns">

            </div>
            <div class="small-8 columns">
              <span  style="font-size: 15px;margin-left: 150px""><?php echo $error; ?></span><br>              
              <input type="submit" name="submit" id="right-label" value="Login" style="background: #0078A0; border: none; color: #fff; font-family: 'Helvetica Neue', sans-serif; font-size: 1em; padding: 10px;">
              <input type="reset" name="reset" id="right-label" value="Reset" style="background: #0078A0; border: none; color: #fff; font-family: 'Helvetica Neue', sans-serif; font-size: 1em; padding: 10px;"><br>
               <br>
             </div>
          </div>
         
        </div>
      </div>
     </form>

    <div class="row" style="margin-top:510px;">
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
