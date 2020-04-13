<?php
$db_host = "localhost";
$db_user = "id6059040_divairmaa";
$db_pass = "#apakabar";
$db_name = "id6059040_projek";

$mysqli = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if(mysqli_connect_error()){
	echo 'Gagal melakukan koneksi ke Database : '.mysqli_connect_error();
}
?>