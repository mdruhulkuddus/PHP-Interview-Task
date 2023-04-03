<?php

// print_r($_POST);
// var_dump($_POST);
$db = mysqli_connect("localhost", "root", "", "bookportal");

if (!empty($_POST['category'])) {

    $category = $_POST['category'];
    $status = empty($_POST['status']) ? '0' : '1';

    $search = "SELECT * FROM categoryinfo WHERE category='$category'";
    $result = mysqli_query($db, $search);
    if (mysqli_num_rows($result) > 0) {
        $response['message'] = 'This Category Already taken!';
    }else{
        $sqlQ = "INSERT INTO `categoryinfo`(`category`, `status`) VALUES ('$category','$status ')";
        $insert = mysqli_query($db, $sqlQ);
    
        if ($insert) {
            $response['status'] = 1;
            $response['message'] = 'Category Added successfully!';
        } else {
            $response['message'] = 'Insert Failed.';
        }
    }
} else {
    $response['message'] = 'Please fill category field.';
}


// Return response 
echo json_encode($response);
mysqli_close($db);
