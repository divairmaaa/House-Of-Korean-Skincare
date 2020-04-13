<?php require_once("config.php");
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
  <title>Cart || House Of Korean Skincare</title> 
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
          <h1><a href="index2.php">House Of Korean Skincare</a></h1>
        </li>
        <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
      </ul>

      <section class="top-bar-section">
      <!-- Right Nav Section -->
        <ul class="right">
          <li><a href="">Products</a>
          <ul class="sub">
            <li><a href="benton.php">Benton</a></li>
            <li><a href="cosrx.php">Cosrx</a></li>
            <li><a href="innisfree.php">Innisfree</a></li>         
            <li><a href="liptint.php">Liptint</a></li>
            <li><a href="natrep.php">Nature Republic</a></li>
            <li><a href="powder.php">Powder</a></li> 
            <li><a href="serum.php">Serum</a></li>
            </ul></li>
          <li class="active"><a href="detail.php">View Cart</a></li>
         
         <li><a href="">Contact</a>
          <ul class="sub">
            <li><a href="https://www.instagram.com/divairmaa/">Instagram</a></li>
            <li><a href="https://www.twitter.com/divairmaa/">Twitter</a></li> 
            </ul></li> 
          <li><a href="logout.php">Log Out</a></li>             
        </ul>
      </section>
    </nav>

  <!-- start: Table -->
            <div class="row" style="margin-top:10px;">
             <div class="large-12">
             <h3>Shopping Cart Details</h3></div>
<table>
<tr>
          <th><center>Nama Barang</center></th>
          <th><center>Jumlah</center></th>
          <th><center>Harga Satuan</center></th>
          <th><center>Total Price</center></th>
          <th><center>Opsi</center></th>
        </tr>
          <?php
        //MENAMPILKAN DETAIL KERANJANG BELANJA//
                
    $total = 0;
    //mysql_select_db($database_conn, $conn);
   if (isset($_SESSION['cart'])) {
        foreach ($_SESSION['cart'] as $key => $value) {
          
            ?>
                <tr>
                <td><center><?php echo $value["item_name"]; ?></center></td>
                <td><center><?php echo $value["item_quantity"]; ?></center></td>
                <td><center><?php echo $value["product_price"];?></center></td>
                <td><center><?php echo number_format($value["item_quantity"] * $value["product_price"], 2); ?></center></td>


                <td><center>
                 <a href="detail.php?action=delete&id=<?php echo $value["product_id"]; ?>" class="btn btn-xs btn-danger">Hapus</a></center></td>
                </tr>
                
                
          <?php
                    //mysql_free_result($query); 
                    $total = $total + ($value["item_quantity"] * $value["product_price"]);      
            }
              //$total += $sub;
            }?>  
                         <?php
        if($total == 0){
          echo '<tr><td colspan="4" align="center">Ups, Keranjang kosong!</td></tr></table>';
          echo '<p><div align="right">
            <a href="index2.php" class="btn btn-info btn-lg">&laquo; Continue Shopping</a>
            </div></p>';
        } else {
          echo '
            <tr style="background-color: #DDD;">
            <td><center><b>Total :</b></td>
            <td></td>
            <td></td>
            <td><center><b>Rp. '.number_format($total,2,",",".").'</b></td>
            <td></td>
            </tr>
            </table>

            <p><div align="right">
            <a href="index2.php" class="btn btn-info">&laquo; CONTINUE SHOPPING</a>
            <a href="checkout.php?total='.$total.'" class="btn btn-success" ><i class="glyphicon glyphicon-shopping-cart icon-white"></i> CHECK OUT &raquo;</a>
            </div></p>
          ';

          $name = $value["item_name"];
          $unit = $value["item_quantity"];
          $price = $value["product_price"];
          $total = ($value["item_quantity"] * $value["product_price"]);
        }
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