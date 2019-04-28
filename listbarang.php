
<br>
<br>

<table class ="table-striped" border="1" width="80%" style="text-align: center; margin: auto;">
	<tr>
		<td>Foto</td>
		<td>Nama Barang</td>
		<td>Harga</td>
		<td colspan="2"></td>
		<!-- <td colspan="2">OPSI</td> -->
	</tr>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "onlineshop";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql ="SELECT * FROM barang";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
?>
	
		<tr>
			<td><img src="<?php echo "file/".$row["foto"]?>" width='100' height='100'></td>
			<td><?php echo $row["namabarang"] ?></td>
			<td><?php echo $row["harga"] ?></td>
			<!-- <td><?php echo $row["umur"] ?></td> -->
			<td><a href="deskripsi.php?id=<?php echo $row['id']?>">Deskripsi</a></td>
			<input type="hidden" name="id" value=<?php echo $row["id"] ?>>
		</tr>
	
	<?php
		}
} 
$conn->close();
// header("location:template.php");
	?>


</table>