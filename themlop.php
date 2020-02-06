<?php
session_start();

if (!isset($_SESSION["user"])) {
	header("Location: login.php");
}

require "connection.php";

if (isset($_POST['btnAdd'])) {
	$txtMaLop = $_POST['txtMaLop'];
	$txtTenLop = $_POST['txtTenLop'];

	//Cap nhat vao CSDL
	$sql = "INSERT INTO lop(MaLop, TenLop) VALUES('". $txtMaLop . "', '". $txtTenLop. "')";
	if (mysqli_query($conn, $sql)) {
		header('Location: dslop.php?status=add_success');
	} else {
		header('Location: dslop.php?status=add_fail');
	}
}
?>

<html>
<head>
	<title>Them lop</title>
</head>
<body>
<form method="post">
<table border="0" width="100%" align="center"> 
<tr>
	<td align="center">Thêm lớp</td>
</tr>
<tr>
	<td>
	  <table border="0" width="50%" align="center">
		<tr>
		  <td width="100">Mã lớp: </td>
		  <td><input type="text" name="txtMaLop" value=""></td>
		</tr>
		<tr>
		  <td>Tên lớp: </td>
		  <td><input type="text" name="txtTenLop" value=""></td>
		</tr>
		<tr>
		  <td align="center" colspan="2"><input type="submit" name="btnAdd" value="Thêm">&nbsp;<input type="button" name="btnCancel" value="Bỏ" onclick="history.back(1)"></td>
		</tr>
	  </table>
	</td>
</tr>
</table>
</form>
</body>
</html>