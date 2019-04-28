<?php
session_start();
if($_SESSION['status'] !="login"){
	header("location:form_login.php");
}
$penjual = $_SESSION['username'];
// echo "username $penjual" ;
// print_r($_SESSION['username']);
?>
<?php
$servername = "localhost";
$database = "onlineshop";
$username = "root";
$password = "";
// Create connection
$conn = new mysqli($servername, $username, $password, $database);
// Check connection
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
 
// echo "Connected successfully";
 $id = $_GET['id'];
// Fetech user data based on id
$sql = "SELECT * FROM barang where id='$id'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

    $id = $row['id'];
    $foto = $row['foto'];
    $namabarang = $row['namabarang'];
    $penjual = $row['penjual'];
    $deskripsi = $row['deskripsi'];
    $harga = $row['harga'];
?>


<html>
<head>
<title>Online Shop</title>
<link rel="stylesheet" type="text/css" href="bootstrap.css">
</head>
<body>
<header>
<h1 style="text-align: center;">Nama Online Shop</h1>

<table  width="100%" style="text-align: center;">

	<tr>
		<td  style="text-align: left;"><h12>Nama Online Shop</h12></td>
		<td ><a href="?page=tampilanawal">tampilan_awal</a> </td>
		<td ><a href="?page=listbarang">List Barang</a></td>
		<td ><a href="?page=inputdata">input data</a></td>
		<td ><a href="?page=Logout">Logout</a></td>
	</tr>

	<tr>
		<td colspan="7">
		<?php
		if(!isset($_GET['page'])){
			echo "<br><br><br>";
			?>
	<div class="col-lg-12">
    	<div class="row">
    		<div class="col-lg-4">
    			<img src="<?php echo "file/".$row["foto"]?>" width='250' height='250'>
    		</div>
    		<div class="col-lg-8">
    			<h2 align="left"><?php echo $row["namabarang"];?></h2>
    			<br>
    			<h3 align="left">Penjual : <?php echo $row["penjual"];?></h2>
    			<br>
    			<h3 align="left">Harga : <?php echo $row["harga"];?></h2>
    		</div>
    	</div>
    </div>
    <br><br><br>
    <div class="col-lg-12">
    	<p align="justify">
    		<?php echo str_replace('  ', '<br />', $row["deskripsi"]);?>
    	</p>
    </div>

		<?php
		}else{
			switch ($_GET['page']) {
			case 'tampilanawal':
				header("location:template.php?page=tampilanawal");
				break;
			case 'listbarang':
				header("location:template.php?page=listbarang");
				break;
			case 'inputdata':
				header("location:template.php?page=inputdata");
				break;
			case 'Logout':
				include "destroy_session.php";
				header("location:form_login.php");
				break;
			}
		}
		?>
		</td>
	</tr>
	<tr>
		<td colspan="7">
		<br>
			<h1>FOOTER</h1>	
		<br>	
		</td>
	</tr>
</table>
</header>
   


 <!--    <form name="update_user" method="post" action="edit.php" enctype="multipart/form-data">
        <table border="0">
            <tr> 
                <td>Nim</td>
                <td><input type="text" name="nim" value=<?php echo $row["nim"] ?>></td>
            </tr>
            <tr> 
                <td>nama</td>
                <td><input type="text" name="nama" value=<?php echo $row["nama"] ?>></td>
            </tr>
            <tr> 
                <td>umur</td>
                <td><input type="text" name="umur" value=<?php echo $row["umur"] ?>></td>
            </tr>
            <tr>
                <td>
                    Pilih Foto
                </td>
                <td>
                    <input type="file" name="foto" value=<?php echo $row["foto"] ?>>                                      
                </td>
                
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['nim'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form> -->
	<!-- <td><input type="hidden" name="id" value=<?php echo $row["id"] ?>></td> -->
    

</body>
</html>