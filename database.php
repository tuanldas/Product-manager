<?php
/**
 * Created by PhpStorm.
 * User: tuan
 * Date: 16/09/2018
 * Time: 17:14
 */
global $conn;
$conn = mysqli_connect('localhost', 'root', '123456', '123') or die ('Không thể kết nối tới database');
if (!$conn) {
    die("Kết nối thất bại: " . mysqli_connect_error());
}
?>