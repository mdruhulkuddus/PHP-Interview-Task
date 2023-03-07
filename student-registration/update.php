<?php
$connect = mysqli_connect("localhost", "root","", "regisinfo");
$name = $_GET['name'];
$email = $_GET['email'];
$password = $_GET['password'];
$id = $_GET['userId'];

$update = "UPDATE `registration` SET `name`='$name',`email`='$email',`password`='$password' WHERE id = $id";
$query = mysqli_query($connect, $update);
if($query){ 
    echo "Data updated successfully";
}
else{
    echo "Data updated failed";
}

?>