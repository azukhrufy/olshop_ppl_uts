<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
</head>
<body>
 <form action="login_action.php" method="post" onsubmit="return validasi()" class="form-group" style="margin: auto;">
    <table>
			<tr>
				<td>username</td>
				<td><input type="text" name="uname" id="uname"></td>					
			</tr>	
			<tr>
				<td>password</td>
				<td><input type="password" name="psw" id="psw"></td>					
			</tr>	
			<tr>
				<td></td>
				<td><input class="btn btn-primary" type="submit" value="Login"></td>					
			</tr>
			<tr>
				<br>
				<td><br><p>Belum punya akun ? <a href="form_signup.php">daftar disini</a></p></td>
			</tr>				
		</table>
</form> 
<script type="text/javascript">
	function validasi() {
		var uname = document.getElementById("uname").value;
		var psw = document.getElementById("psw").value;		
		if (uname != "" && psw!="") {
			return true;
		}else{
			alert('Username dan Password harus di isi !');
			return false;
		}
	}
</script>

</body>
</html> 