<?php
/**
 * Created by PhpStorm.
 * User: tuan
 * Date: 17/09/2018
 * Time: 13:04
 */
require_once "database.php";

if (isset($_POST['name'])) {
    $name = $_POST['name'];
}

if (isset($_POST['code'])) {
    $code = $_POST['code'];
}

if (isset($_POST['prince'])) {
    $prince = $_POST['prince'];
}

if (isset($_POST['whereId'])){
    $id = $_POST['whereId'];
}

$insert = "UPDATE products SET name='$name',code='$code',price= $prince WHERE id = $whereId";

if (mysqli_query($conn, $insert)) {
    include "index.php";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_query($conn);
}
global $conn;
?>