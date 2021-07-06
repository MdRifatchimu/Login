<?php
include "connection.php";
if (isset($_POST['submit'])) {
	$username = $_POST['user_name'];
	$usertele = $_POST['usertele'];

	$sql = "select count(*) from login where username = '$username'";
	$row_exist = $conn->query($sql);
	$row_count = $row_exist->fetch()[0];

	if ($row_count == 0) {
		$sql = "INSERT INTO `login`(`username`, `usertele`) VALUES ('$username','$usertele')";
		$result = $conn->query($sql);
		if ($result) {
			echo '<script>
			alert("your account has been created");
			window.location.href="login.html";
			</script>';
		} else {
			echo '<script>
			alert("username already exists");
			window.location.href="login.html";
			</script>';
		}
	}
}
