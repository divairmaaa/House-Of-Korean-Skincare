<?php
    session_start();
    $database_name = "id6059040_projek";
    $con = mysqli_connect("localhost","id6059040_divairmaa","#apakabar",$database_name);
            
?>


<!doctype html>
<html class="no-js" lang="en">
  <head>
  <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <style>
        @import url('https://fonts.googleapis.com/css?family=Titillium+Web');

        *{
            font-family: 'Titillium Web', sans-serif;
        }
        .product{
            border: 1px solid #eaeaec;
            margin: -1px 19px 3px -1px;
            padding: 10px;
            text-align: center;
            background-color: #efefef;
        }
        table, th, tr{
            text-align: center;
        }
        .title2{
            text-align: center;
            color: #66afe9;
            background-color: #efefef;
            padding: 2%;
        }
        h2{
            text-align: center;
            color: #66afe9;
            background-color: #efefef;
            padding: 2%;
        }
        table th{
            background-color: #efefef;
        }
    </style>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Update Products || House Of Korean Skincare</title>
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

          <li class='active'><a href="">Update Products</a>
          <li><a href="add.php">Add Product</a></li>
            <li ><a href="logout.php">Log Out</a>
         
        </ul>
      </section>
    </nav>

  <div class="container" style="width: 85%">
        <h2></h2>
        <?php
            $query = "SELECT * FROM products";
            $result = mysqli_query($con,$query);
            if(mysqli_num_rows($result) > 0) {

                while ($row = mysqli_fetch_array($result)) {

                    ?>
                    <div class="col-md-3">

                        <form action="prosesupdate.php?&id=<?php echo $row["id"]; ?>" method="post" enctype="multipart/form-data" style="margin-top: 30px" name="form1" id="form1">

                            <div class="product">
                                 <p><input type='file' name='filegbr' id='Filegambar'></p>
                                 <p>Product Code : <input type="text" name="code" class="form-control" value="<?php echo $row["product_code"]; ?>"></p>
                                <p>Product Name : <input type="text" name="nama" class="form-control" value="<?php echo $row["product_name"]; ?>"></p>
                                <p>Unit Available : <input type="number" name="unit" class="form-control" value="<?php echo $row["qty"]; ?>"></p>
                                <p>Price : <input type="number" name="price" class="form-control" value="<?php echo $row["price"]; ?>"></p>
                                <input type="submit" style="margin-top: 5px;" class="btn btn-success"
                                       value="Update Product">

                         </div>
                        </form>
                    </div>

                    <?php
                }
            }
        ?>



               <div class="row" style="margin-top:10px;">
          <div class="small-12">
        <footer style="margin-top:10px;">
           <p style="text-align:center; font-size:0.8em;clear:both;">&copy; House Of Korean Skincare. All Rights Reserved.</p>
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
