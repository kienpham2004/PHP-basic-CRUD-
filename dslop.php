<?php
session_start();

if (!isset($_SESSION["user"])) {
	header("Location: login.php");
}
?>




<html>

<head>
	<title>Danh sach lop</title>
</head>

<body>

	<form method="post">
		<p>
			Tìm lớp: <input type="text" name="txtSearch"> <input type="submit" name="btnSearch" value="Tìm"> &nbsp; &nbsp; &nbsp; &nbsp; <a href="themlop.php">Thêm lớp</a>
		</p>
	</form>

	<?php
	require "connection.php";

	if (isset($_GET['lopid'])) {
		$lopid = $_GET['lopid'];

		//Cap nhat vao CSDL
		$sql = "DELETE FROM lop WHERE LopID = '" . $lopid . "'";
		if (mysqli_query($conn, $sql)) {
			$status = 'del_success';
		} else {
			$status = 'del_fail';
		}
	}

	$status = isset($_GET["status"]) ? $_GET["status"] : "";
	if ($status == 'add_success') {
		echo '<div style="color: green">Thêm thành công!</div>';
	} else if ($status == 'add_fail') {
		echo '<div style="color: red">Thêm thất bại!</div>';
	} else if ($status == 'del_success') {
		echo '<div style="color: green">Xóa thành công!</div>';
	} else if ($status == 'del_fail') {
		echo '<div style="color: red">Xóa thất bại!</div>';
	} else if ($status == 'update_success') {
		echo '<div style="color: green">Cập nhật thành công!</div>';
	} else if ($status == 'update_fail') {
		echo '<div style="color: red">Cập nhật thất bại!</div>';
	}

	if (isset($_POST["btnSearch"])) {
		$sql = "SELECT * FROM Lop WHERE TenLop LIKE N'%" . $_POST["txtSearch"] . "%'";
	} else {
		$sql = 'SELECT * FROM Lop';
	}

	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) {
		echo '<table border="1">';
		echo '<tr>';
		echo '<th>Mã lớp</th>';
		echo '<th>Tên lớp</th>';
		echo '<th>Chức năng</th>';
		echo '</tr>';

		// output data of each row
		while ($row = mysqli_fetch_assoc($result)) {
			echo '<tr>';
			echo '<td>' . $row['MaLop'] . '</td>';
			echo '<td>' . $row["TenLop"] . '</td>';
			echo '<td style="text-align: center"><a href="sualop.php?lopid=' . $row['LopID'] . '">Sửa</a> &nbsp; <a href="dslop.php?lopid=' . $row['LopID'] . '">Xóa</a></td>';
			echo '</tr>';
		}

		echo '</table>';
	}

	mysqli_close($conn);
	?>

</body>

</html>