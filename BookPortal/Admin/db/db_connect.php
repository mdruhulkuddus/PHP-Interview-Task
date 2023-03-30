<?php
$conn = mysqli_connect("localhost", "root", "", "bookportal");

if (!$conn) {
    die('Connection failed: ' . mysqli_connect_error());
}
?>  