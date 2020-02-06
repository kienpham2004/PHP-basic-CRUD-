<?php
session_start();

$txtUser = trim($_POST["txtUser"]);
$txtPwd = trim($_POST["txtPwd"]);

if ($txtUser == "" || $txtPwd == "") {
	header('Location: login.php?status=empty');
	return;
}

if ($txtUser == "phamkien20041998@gmail.com" && $txtPwd == "123456") {
	// thanh cong
	$name = 'Pham Van Kien';
	$_SESSION["user"] = $txtUser;
	header('Location: dslop.php');
} else {
	header('Location: login.php?status=fail&txtUser=' . $txtUser);
}
