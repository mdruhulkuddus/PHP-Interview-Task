<?php
$connect = mysqli_connect("localhost", "root", "", "regisinfo");

if (!$connect) {
    die('Connection failed: ' . mysqli_connect_error());
}
?>