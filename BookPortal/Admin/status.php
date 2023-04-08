<?php
$connect = mysqli_connect("localhost", "root", "", "bookportal");
$id = $_GET['userId'];
$page = $_GET['page'];
if ($page == 'category') {
    $select = "SELECT * FROM `categoryinfo` WHERE id = $id";
    $query = mysqli_query($connect, $select);

    $row = mysqli_fetch_assoc($query);
    $preStatus = $row['status'];
    if ($preStatus == '1') {
        $sql = "UPDATE `categoryinfo` SET `status`='0'  WHERE id = $id";
    } else {
        $sql = "UPDATE `categoryinfo` SET `status`='1'  WHERE id = $id";
    }

    $result = mysqli_query($connect, $sql);

    if ($result && $preStatus == '1') {
        $response['message'] = 'Category Info Unpublished.';
    } else {
        $response['message'] = 'Category Info Published.';
    }
} else {
    $select = "SELECT * FROM `bookinfo` WHERE id = $id";
    $query = mysqli_query($connect, $select);

    $row = mysqli_fetch_assoc($query);
    $preStatus = $row['status'];
    if ($preStatus == '1') {
        $sql = "UPDATE `bookinfo` SET `status`='0'  WHERE id = $id";
    } else {
        $sql = "UPDATE `bookinfo` SET `status`='1'  WHERE id = $id";
    }
    $result = mysqli_query($connect, $sql);
    if ($result && $preStatus == '1') {
        $response['message'] = 'Book Info Unpublished.';
    } else {
        $response['message'] = 'Book Info Published.';
    }
}


echo json_encode($response);
