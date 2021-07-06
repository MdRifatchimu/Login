<?php
require_once("db.php");
if (count($_POST) > 0) {
    $sql = "UPDATE users set userName='" . $_POST["userName"] . "', password='" . $_POST["password"] . "', firstName='" . $_POST["firstName"] . "', lastName='" . $_POST["lastName"] . "' WHERE userId='" . $_POST["userId"] . "'";
    mysqli_query($conn, $sql);
    $message = "Record Modified Successfully";
}
$select_query = "SELECT * FROM users WHERE userId='" . $_GET["userId"] . "'";
$result = mysqli_query($conn, $select_query);
$row = mysqli_fetch_array($result);
?>
<html>

<head>
    <title>Add New User</title>
    <link rel="stylesheet" type="text/css" href="styles.css" />
</head>

<body>
    <form name="frmUser" method="post" action="">
        <div style="width:500px;">
            <div class="message"><?php if (isset($message)) {
                                        echo $message;
                                    } ?></div>
            <div align="right" style="padding-bottom:5px;"><a href="index.php" class="link"><img alt='List' title='List' src='images/list.png' width='15px' height='15px' /> List User</a></div>
            <table border="0" cellpadding="10" cellspacing="0" width="500" align="center" class="tblSaveForm">
                <tr class="tableheader">
                    <td colspan="2">Edit User</td>
                </tr>
                <tr>
                    <td><label>username</label></td>
                    <td><input type="hidden" name="username" class="txtField" value="<?php echo $row['username']; ?>"><input type="text" name="userName" class="txtField" value="<?php echo $row['userName']; ?>"></td>
                </tr>
                <tr>
                    <td><label>usertele</label></td>
                    <td><input type="tel" name="usertele" class="txtField" value="<?php echo $row['usertele']; ?>"></td>
                </tr>

                <tr>
                    <td colspan="2"><input type="submit" name="submit" value="Submit" class="btnSubmit"></td>
                </tr>
            </table>
        </div>
    </form>
</body>

</html>
