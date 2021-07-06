<?php
include "connection.php";
if (isset($_POST['submit'])) {
  $username = $_POST['username'];
  $usertele = $_POST['usertele'];

  $sql = "select * from login where username = '$username' and usertele = '$usertele'";
  $row_exist = $conn->query($sql);
  $row_count = $row_exist->fetch();

  if ($row_count) {
    $_SESSION['username'] = $username;
    echo '<script>
  alert("' . $username . ',you are welcome");
  window.location.href="home.html";
  </script>';
  } else {
    echo '<script>
  alert("Sorry, the user does not exists");
  window.location.href="home.html";

   </script>';
  }
}
