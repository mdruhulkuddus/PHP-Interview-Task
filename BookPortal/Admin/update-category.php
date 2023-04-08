<?php

// print_r($_POST);
// var_dump($_POST);
$db = mysqli_connect("localhost", "root", "", "bookportal");

if (!empty($_POST['category'])) {

    $category = $_POST['category'];
    $id = $_POST['id'];
    $status = empty($_POST['status']) ? '0' : '1';

    $sqlQ = "UPDATE `categoryinfo` SET `category` = '$category', `status` = '$status' WHERE id = $id";
    $update = mysqli_query($db, $sqlQ);

    if ($update) {
        $response['message'] = 'Updated successfully!';
    } else {
        $response['message'] = 'Updated Failed.';
    }
} else {
    $response['message'] = 'Please fill category field.';
}


// Return response 
echo json_encode($response);
mysqli_close($db);
