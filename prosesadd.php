<?php
//koneksi ke database
include "config.php";

//menangkap posting dari field input form
$code     = $_POST['code'];
$nama    = $_POST['nama'];
$unit     = $_POST['unit'];
$price    = $_POST['price'];

$namafolder="gambar/"; //folder tempat menyimpan file
if (!empty($_FILES["filegbr"]["tmp_name"]))
{
$jenis_gambar=$_FILES['filegbr']['type']; //memeriksa format gambar
if($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/gif" || $jenis_gambar=="image/png")
{
$lampiran = basename($_FILES['filegbr']['name']);

//mengupload gambar dan update row table database dengan path folder dan nama image
if (move_uploaded_file($_FILES['filegbr']['tmp_name'], $lampiran)) {

$query_insert = "INSERT INTO products (product_code, product_name, product_img_name, qty, price)
VALUES ('$code','$nama','$lampiran', '$unit','$price')";
$insert = mysqli_query($mysqli,$query_insert);

 echo '<script>window.location="add.php"</script>';     
 
//Jika gagal upload, tampilkan pesan Gagal
} else {
echo "Gambar gagal dikirim";
}
} else {
echo "Jenis gambar yang anda kirim salah. Harus .jpg .gif .png";
}
} else {
echo "Anda belum memilih gambar";
}
?>
