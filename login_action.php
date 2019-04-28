<?php
$servername = "localhost";
$database = "onlineshop";
$username = "root";
$password = "";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

$username = $_POST['uname'];
$password = md5($_POST['psw']);

$login = mysqli_query($conn,"select * from user where username='$username' and password='$password'");
$cek = mysqli_num_rows($login);

if($cek > 0){
	session_start();
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	header("location:template.php");
}else{
	header("location:form_login.php");	
}
?>