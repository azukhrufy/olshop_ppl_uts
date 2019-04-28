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

$file_tmp = $_FILES['foto']['tmp_name'];

$penjual = $_POST['penjual'];
$namabarang = $_POST['namabarang'];
$deskripsi = $_POST['deskripsi'];
$harga = $_POST['harga'];
$foto = basename($_FILES['foto']['name']);
move_uploaded_file($file_tmp, 'file/'.$foto);

// mysql_query("INSERT INTO mahasiswa VALUES('$nim','$nama','$umur')");
$sql = "INSERT INTO barang (foto, namabarang, penjual, deskripsi,harga) VALUES ('$foto','$namabarang','$penjual','$deskripsi','$harga')";
if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);

header("location:template.php");
?>