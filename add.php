<?php

?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Add Product || House Of Korean Skincare</title>
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
  
    </style>
    <link rel="stylesheet" type="text/css" href="css/style.css">
  </head>
  <body>
<nav class="top-bar" data-topbar role="navigation">
      <ul class="title-area">
        <li class="name">
          <h1><a href="all.php">House Of Korean Skincare</a></h1>
        </li>
        <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
      </ul>

      <section class="top-bar-section">
      <!-- Right Nav Section -->
        <ul class="right">
        <li ><a href="">Update Products</a>
          <li class='active'><a href="add.php">Add Product</a></li>
            <li ><a href="logout.php">Log Out</a>
         </ul>
      </section>
    </nav>


   <form action="prosesadd.php" method="post" enctype="multipart/form-data" style="margin-top: 30px" name="form1" id="form1">   <div class="row">
        <div class="small-8">
          <div class="row">
            <div class="small-4 columns">
              <label for="right-label" class="right inline">Product Code</label>
            </div>
            <div class="small-8 columns">
              <input type="text" name="code" id="fname" placeholder="Product Code"/>
            </div>
          </div>
          <div class="row">
            <div class="small-4 columns">
              <label for="right-label" class="right inline">Product Name</label>
            </div>
            <div class="small-8 columns">
              <input type="text" name="nama" id="lname" placeholder="Product Name"/>
            </div>
          </div>
          <div class="row">
            <div class="small-4 columns">
              <label for="right-label" class="right inline">Stock</label>
            </div>
            <div class="small-8 columns">
              <input type="number" name="unit" id="address"  placeholder="Stock">
            </div>
          </div>
          <div class="row">
            <div class="small-4 columns">
              <label for="right-label" class="right inline">Price</label>
            </div>
            <div class="small-8 columns">
              <input type="number" name="price" id="city"  placeholder="Price"/>
            </div>
          </div>


          <div class="row">
            <div class="small-4 columns">
              <label for="right-label" class="right inline">Image File</label>
            </div>
            <div class="small-8 columns">
             <input type='file' name='filegbr' id='Filegambar'>
            </div>
          </div>

           <div class="row">
            <div class="small-4 columns">

            </div>
            <div class="small-8 columns">
              <input name="Submit" type="submit" id="right-label" value="Upload" style="background: #0078A0; border: none; color: #fff; font-family: 'Helvetica Neue', sans-serif; font-size: 1em; padding: 10px;">
              </div>
          </div>
        </div>
      </div>
    </form>


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
