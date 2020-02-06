<?php
require('connection.php');

//Xây dựng và thực hiện truy vấn
$sql = 'SELECT * FROM sinhvien';
$data = mysqli_query($conn, $sql) or die('Không thực hiện được SQL');

echo '<a href="themsinhvien.php">Thêm sinh viên mới</a> <br> <br>';

echo '<table border="1" cellspacing="1" cellpadding="5">';
echo '<tr>';
echo '<th>Ma sinh vien</th>';
echo '<th>Ho va ten</th>';
echo '<th>Thao tac</th>';
echo '<tr>';


//Hiển thị dữ liệu của truy vấn trên
while ($r = mysqli_fetch_array($data))
{
	echo '<tr>';
	echo '<td>'. $r['MaSinhVien'] . '</td>';
	echo '<td>' . $r['TenSinhVien'] . '</td>';
	echo '<td><a href="php03-3-edit.php?makh='. $r['MaSinhVien']. '">Sửa</a></td>';
	echo '</tr>';
}

echo '</table>';

mysqli_close($conn);
?>