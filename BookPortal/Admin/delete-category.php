<?php
$connect = mysqli_connect("localhost", "root", "", "bookportal");
$id = $_GET['userId'];

$delete = "DELETE FROM `categoryinfo` WHERE id = $id";
$result = mysqli_query($connect, $delete);
if ($result) {
    $response['message'] = 'Category is Deleted is deleted.';
} else {
    $response['message'] = 'Failed to delete.';
}



echo json_encode($response);
