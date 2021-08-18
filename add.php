<?php
require_once "database.php";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($_POST['id'])){
        $id = $_POST['id'];
    }
    if (isset($_POST['name'])) {
        $name = $_POST['name'];
    }

    if (isset($_POST['code'])) {
        $code = $_POST['code'];
    }

    if (isset($_POST['prince'])) {
        $prince = $_POST['prince'];
    }

    $insert = "INSERT INTO `products` (`id`, `name`, `code`, `price`) VALUES ($id,'$name','$code',$prince)";

    if (mysqli_query($conn, $insert)) {
        include "index.php";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_query($conn);
    }
    global $conn;

}
?>