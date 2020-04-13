<?php require_once("config.php"); 

if(isset($_POST["finish"])){
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

$name = $value["item_name"];
$unit = $value["item_quantity"];
          $price = $value["product_price"];
          $total = ($value["item_quantity"] * $value["product_price"]);

$sql = "INSERT INTO orders (product_name, units, price, total,)
VALUES ('$name', '$unit', '$price','$total')";
if ($conn->query($sql) === TRUE) {
} else {
echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $conn->error."');</script>";
}
$conn->close();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- start: Meta -->
  <meta charset="utf-8">
  <title>Form Order || House Of Korean Skincare</title> 
  <meta name="description" content="Distro, cikarang, terlengkap, information, technology, jababeka, baru, murah"/>
  <meta name="keywords" content="Kaos, Murah, Cikarang, Baru, terlengkap, harga, terjangkau" />
  <meta name="author" content="Hakko Bio Richard"/>
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

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Product || House Of Korean Skincare</title>
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
        <li> <a href="">Products</a>
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
  
  <!--start: Wrapper-->
  <div id="wrapper">
        
    <!-- start: Container -->
    <div class="container">

      <!-- start: Table -->
                 <div class="table-responsive">
                 <br><br><div class="hero-unit"><p>Harap isi form dibawah ini dengan lengkap dan benar sesuai idenditas anda!</p>
                <p>Total Belanja Anda Rp. <?php echo abs((int)$_GET['total']); ?>,-</p></div>

    <form id="formku" action="selesai.php" method="post">
    <table class="table table-condensed">
    <input type="hidden" name="total" value="<?php echo abs((int)$_GET['total']); ?>">
    <tr>
        <td><label for="nm_usr">Name : </label></td>
        <td><input name="nm_usr" type="text" class="required" id="nm_usr" size="200" placeholder="Name" /></td>
      </tr>
      <tr>
        <td><label for="almt_usr">Address : </label></td>
        <td><input name="almt_usr" type="text" class="required" id="almt_usr" placeholder="Address" /></td>
      </tr>
      <tr>
        <td><label for="kp_usr">Kode Pos : </label></td>
        <td><input name="kp_usr" type="number" class="required number" minlength="5" maxlength="5" id="kp_usr" placeholder="Kode Pos"/></td>
      </tr>
      <tr>
        <td><label for="kota_usr">City : </label></td>
        <td><input name="kota_usr" type="text" class="required" id="kota_usr" placeholder="City" /></td>
      </tr>
      <tr>
        <td><label for="tlp">No HP : </label></td>
        <td><input name="tlp" type="number" class="required number" minlength="11" id="tlp" /></td>
      </tr>
      <tr>
        <td><label for="bank">Pembayaran Melalui Bank :</label></td>
        <td><select name="bank" placeholder="Bank" class="required">
        <option></option>
        <option value="Mandiri">Mandiri</option>
        <option value="BNI">BNI</option>
        <option value="CIMB">CIMB</option>
        <option value="BCA">BCA</option>
        <option value="Bank Jabar">Bank Jabar</option>
        <option value="Danamon">Danamon</option>
        <option value="BRI">BRI</option>
        <option value="Permata">Permata</option>
        </select>
        </td>
      </tr>
      <tr>
       <td><input type="submit" value="Simpan Data" name="finish"  class="btn btn-sm btn-primary"/></td>
      <td><a href="detail.php" class="btn btn-sm btn-primary">Kembali</a></td>
        </tr>
    </table>
    </form>
                   </div>
        
      <!-- end: Table -->

    </div>
    <!-- end: Container -->
        
  </div>
  <!-- end: Wrapper  -->      
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

<script src="jquery.validate.js"></script>
    <script>
    $(document).ready(function(){
        $("#formku").validate();
    });
    </script> 
    
    <style type="text/css">
    label.error {
        color: red;
        padding-left: .5em;
    }
    </style>
<!-- end: Java Script -->

</body>
</html>