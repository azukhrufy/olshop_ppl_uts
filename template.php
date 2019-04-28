<?php
session_start();
if($_SESSION['status'] !="login"){
	header("location:form_login.php");
}
$penjual = $_SESSION['username'];
// echo "username $penjual" ;
// print_r($_SESSION['username']);
?>
<!DOCTYPE html>
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
		}else{
			switch ($_GET['page']) {
				case 'tampilanawal':
				include "tampilanawal.php";
				break;
			case 'listbarang':
				include "listbarang.php";
				break;
			case 'inputdata':
				include "inputdata.php";
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
</body>
</html>