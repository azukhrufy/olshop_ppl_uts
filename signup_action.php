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
// $umur = $_POST['umur'];

// mysql_query("INSERT INTO mahasiswa VALUES('$nim','$nama','$umur')");
$sql = "INSERT INTO user (username, password) VALUES ('$username','$password')";
if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);

header("location:form_login.php");
?>