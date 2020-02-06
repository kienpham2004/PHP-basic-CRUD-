<?php
require "connection.php";

$lopid = $_GET['lopid'];
$malop = '';
$tenlop = '';

if (isset($_POST['btnUpdate'])) {
	$txtMaLop = $_POST['txtMaLop'];
	$txtTenLop = $_POST['txtTenLop'];

	//Cap nhat vao CSDL
	$sql = "UPDATE lop SET MaLop = '" . $txtMaLop . "', TenLop = '". $txtTenLop. "' WHERE LopID = " . $lopid;

	if (mysqli_query($conn, $sql)) {
		header('Location: dslop.php?status=update_success');
	} else {
		header('Location: dslop.php?status=update_fail');
	}
}

$sql = "SELECT * FROM Lop WHERE LopID = '" . $lopid . "'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
	$row = mysqli_fetch_assoc($result);
	$malop = $row["MaLop"];
	$tenlop = $row["TenLop"];
}
?>

<html>
<head>
	<title>Sua lop</title>
</head>
<body>
<form method="post" action="sualop.php?lopid=<?php echo $lopid; ?>">
<table border="0" width="100%" align="center"> 
<tr>
	<td align="center">Sửa lớp</td>
</tr>
<tr>
	<td>
	  <table border="0" width="50%" align="center">
		<tr>
		  <td width="100">Mã lớp: </td>
		  <td>
		  	<input type="text" name="txtMaLop" value="<?php echo $malop; ?>"></td>
		</tr>
		<tr>
		  <td>Tên lớp: </td>
		  <td><input type="text" name="txtTenLop" value="<?php echo $tenlop; ?>"></td>
		</tr>
		<tr>
		  <td align="center" colspan="2"><input type="submit" name="btnUpdate" value="Sửa">&nbsp;<input type="button" name="btnCancel" value="Bỏ" onclick="history.back(1)"></td>
		</tr>
	  </table>
	</td>
</tr>
</table>
</form>
</body>
</html>