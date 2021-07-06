<?php
require_once("db.php");
$sql = "DELETE FROM username WHERE username='" . $_GET["username"] . "'";
mysqli_query($conn,$sql);
header("Location:home.html");
