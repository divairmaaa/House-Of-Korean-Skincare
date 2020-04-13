<?php
$error=''; //Variable to Store error message;
if(isset($_POST['submit'])){
 if(empty($_POST['email']) || empty($_POST['pwd'])){
 $error = "Username or Password is Invalid";
 }
 else
 {
 //Define $user and $pass
 $email=$_POST['email'];
 $pwd=$_POST['pwd'];
 //Establishing Connection with server by passing server_name, user_id and pass as a patameter
 $conn = mysqli_connect("localhost", "id6059040_divairmaa", "#apakabar");
 //Selecting Database
 $db = mysqli_select_db($conn, "id6059040_projek");
 //sql query to fetch information of registerd user and finds user match.
 $query = mysqli_query($conn, "SELECT * FROM admin WHERE pwd='$pwd' AND email='$email'");
 
 $rows = mysqli_num_rows($query);
 if($rows == 1){
 header("location: all.php"); // Redirecting to other page
 }
 else
 {
 $error = "Email of Password is Invalid";
 }
 mysqli_close($conn); // Closing connection
 }
}
 
?>