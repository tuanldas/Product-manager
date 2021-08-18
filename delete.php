<?php
/**
 * Created by PhpStorm.
 * User: tuan
 * Date: 17/09/2018
 * Time: 10:43
 */
require_once "database.php";
global $conn;
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $id = $_POST['deletee'];
    var_dump($id);
    $query = "DELETE FROM products WHERE id = '$id'";
    if (mysqli_query($conn, $query)) {
        include "index.php";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_query($conn);
    }
}
?>