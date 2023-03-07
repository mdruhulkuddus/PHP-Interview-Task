<?php

$connect = mysqli_connect("localhost", "root","", "regisinfo");

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $insert = "INSERT INTO `registration`(`name`, `email`, `password`) 
    VALUES ('$name', '$email', '$password')";
    $query = mysqli_query($connect, $insert);
    if($query){
        echo "data inserted successfully";
    }
    else{
        echo "data insert failed";
    }

?>
