<?php
$connect = mysqli_connect("localhost", "root", "", "bookportal");
$id = $_GET['userId'];
$select = "SELECT * FROM `bookinfo` WHERE id = $id";
$query = mysqli_query($connect, $select);

$row = mysqli_fetch_assoc($query);
$imagePath = $row['image'];
$deletePath = "uploads/" . $imagePath;
if (!empty($imagePath) && file_exists($deletePath)) {
    unlink($deletePath);
}

$delete = "DELETE FROM `bookinfo` WHERE id = $id";
$result = mysqli_query($connect, $delete);
// unlink($imagePath);
if ($result) {
    $response['message'] = 'Row is deleted.';
} else {
    $response['message'] = 'Failed to delete.';
}



echo json_encode($response);
