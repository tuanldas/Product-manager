<link type="text/css" rel="stylesheet" href="add.css">
<?php
/**
 * Created by PhpStorm.
 * User: tuan
 * Date: 17/09/2018
 * Time: 13:04
 */
require_once "database.php";
$id = $_GET['id'];

if (isset($_POST['name'])) {
    $name = $_POST['name'];
}

if (isset($_POST['code'])) {
    $code = $_POST['code'];
}

if (isset($_POST['prince'])) {
    $prince = $_POST['prince'];
}

$insert = "UPDATE products SET `name`='$name',`code`='$code',price=$prince WHERE id = '$id'";
if (mysqli_query($conn, $insert)) {
    include "index.php";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_query($conn);
}
?>
<div style="text-align: center">
    <form method="post" >
        <input type="text" placeholder="Eit name" name="name" class="123"><br>
        <input type="text" placeholder="Edit code" name="code" class="123"><br>
        <input type="text" placeholder="Edit price" name="prince" class="123"><br>
        <h1>Thay đổi</h1>
        <input type="submit" value="Edit data in the database" style="background-color: darkgray">
    </form>
</div>