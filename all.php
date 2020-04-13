<?php 

$database_name = "id6059040_projek";
    $con = mysqli_connect("localhost","id6059040_divairmaa","#apakabar",$database_name);
     
     if (!isset($_SESSION)) {
        session_start();
            }

            if (isset($_POST["add"])){
        if (isset($_SESSION["cart"])){
            $item_array_id = array_column($_SESSION["cart"],"product_id");
            if (!in_array($_GET["id"],$item_array_id)){
                $count = count($_SESSION["cart"]);
                $item_array = array(
                    'product_id' => $_GET["id"],
                    'item_name' => $_POST["hidden_name"],
                    'product_price' => $_POST["hidden_price"],
                    'item_quantity' => $_POST["quantity"],
                );
                $_SESSION["cart"][$count] = $item_array;
                echo '<script>window.location="detail.php"</script>';
            }else{
                echo '<script>alert("Product is already Added to Cart")</script>';
                echo '<script>window.location="detail.php"</script>';
            }
        }else{
            $item_array = array(
                'product_id' => $_GET["id"],
                'item_name' => $_POST["hidden_name"],
                'product_price' => $_POST["hidden_price"],
                'item_quantity' => $_POST["quantity"],
            );
            $_SESSION["cart"][0] = $item_array;
        }
    }

    if (isset($_GET["action"])){
        if ($_GET["action"] == "delete"){
            foreach ($_SESSION["cart"] as $keys => $value){
                if ($value["product_id"] == $_GET["id"]){
                    unset($_SESSION["cart"][$keys]);
                    echo '<script>alert("Product has been Removed...!")</script>';
                    echo '<script>window.location="detail.php"</script>';
                }
            }
        }
    } ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- start: Meta -->
  <meta charset="utf-8">
  <title>Admin || House Of Korean Skincare</title> 
  <meta name="description" content="Distro, cikarang, terlengkap, information, technology, jababeka, baru, murah"/>
  <meta name="keywords" content="Kaos, Murah, Cikarang, Baru, terlengkap, harga, terjangkau" />
  <meta name="author" content="Łukasz Holeczek from creativeLabs"/>
  <!-- end: Meta -->
  
  <!-- start: Mobile Specific -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <!-- end: Mobile Specific -->
  
  <!-- start: Facebook Open Graph -->
  <meta property="og:title" content=""/>
  <meta property="og:description" content=""/>
  <meta property="og:type" content=""/>
  <meta property="og:url" content=""/>
  <meta property="og:image" content=""/>
  <!-- end: Facebook Open Graph -->

    <!-- start: CSS --> 
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Sans:400,700">
  <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Serif">
  <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Boogaloo">
  <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Economica:700,400italic">
  <!-- end: CSS -->

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
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
         <li><a href="admin.php">Update Products</a>
          <li><a href="add.php">Add Product</a></li>
            <li ><a href="logout.php">Log Out</a>           
        </ul>
      </section>
    </nav>

  <!-- start: Table -->
            <div class="row" style="margin-top:10px;">
             <div class="large-12">
             <h3>Daftar Produk</h3></div>
<table method="post">
<tr>
          <th><center>Gambar</center></th>
          <th><center>Kode Barang</center></th>
          <th><center>Nama Barang</center></th>
          <th><center>Unit Available</center></th>
          <th><center>Price</center></th>
          <th><center>Opsi</center></th>
        </tr>
          <?php
        //MENAMPILKAN DETAIL KERANJANG BELANJA//
            $query = "SELECT * FROM products";
            $result = mysqli_query($con,$query);
            if(mysqli_num_rows($result) > 0) {

                while ($row = mysqli_fetch_array($result)) {
            ?>
                <tr>
                <td><img src="<?php echo $row["product_img_name"]; ?>" class="img-responsive"></td>
                <td><center><?php echo $row["product_code"]; ?></center></td>
                <td><center><?php echo $row["product_name"]; ?></center></td>
                <td><center><?php echo $row["qty"]; ?></center></td>
                <td><center><?php echo $row["price"]; ?></center></td>

                <td><center>
                <a href="hapus.php?id=<?php echo $row['id']; ?>" class="btn btn-xs btn-danger">Remove</a></center></td>
                </tr>
                
                
          <?php
                      
            }
              //$total += $sub;
            }?>  
                         <?php
        
        ?>

</table>


      
        
      <!-- end: Table -->

  <div class="row" style="margin-top:10px;">
          <div class="small-12">
        <footer style="margin-top:10px;">
           <p style="text-align:center; font-size:0.8em;clear:both;">&copy; House Of Korean Skincare. All Rights Reserved.</p>
        </footer>
      </div>
    </div>
<!-- start: Java Script -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery-1.8.2.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/flexslider.js"></script>
<script src="js/carousel.js"></script>
<script src="js/jquery.cslider.js"></script>
<script src="js/slider.js"></script>
<script def src="js/custom.js"></script>
<!-- end: Java Script -->

</body>
</html>