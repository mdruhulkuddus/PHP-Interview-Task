<?php

$connect = mysqli_connect("localhost", "root","", "regisinfo");

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $insert = "INSERT INTO `registration`(`name`, `email`, `password`) 
    VALUES ('$name', '$email', '$password')";
    $query = mysqli_query($connect, $insert);
    if($query){
        $message = "Data added successfully!";
        echo json_encode(array('message' => $message));
    }
    else{
        $message = "Data insert failed!";
        echo json_encode(array('message' => $message));
    }

?>
