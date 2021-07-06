<?php
$dsn = 'mysql:dbname=exam;host=localhost:3306';
$user = 'root';
$password = '';

try {
	$conn = new PDO($dsn, $user, $password);
	// echo "connection established";
} catch (PDOException $e) {
	echo 'Connection failed: ' . $e->getMessage();
}
