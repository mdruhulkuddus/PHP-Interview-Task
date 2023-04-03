<?php

 //var_dump($_FILES); 
 //print_r($_POST); 
// // // if(!$_POST['status']) echo "st = 0";
// // // else echo "st = 1";

$conn = mysqli_connect("localhost", "root", "", "bookportal");

$title = $_POST['title'];
$author = $_POST['author'];
$category = $_POST['category'];
$publisher = $_POST['publisher'];
$edition = $_POST['edition'];
$language = $_POST['language'];
$price = $_POST['price'];
$pages = $_POST['pages'];
// $book_summary = $_POST['editor1'];
$book_summary = $_POST['book_summary'];
$status = empty($_POST['status']) ? '0' : '1';

// // for image
// //$file = $_FILES['image']['name'];
// $image_name = $_FILES['image']['name'];
// $temp_name = $_FILES['image']['tmp_name'];
// $uploads_dir = 'uploads/'; // Replace with your desired upload directory
// $target_path = $uploads_dir . $image_name;
// move_uploaded_file($temp_name, $target_path);

$sql  = "INSERT INTO `bookinfo`(`title`, `author`, `category`, `publisher`, `edition`, `language`, `price`, `pages`, `book_summary`, `status`) 
VALUES ('$title', '$author', '$category', '$publisher', '$edition', '$language', '$price', '$pages', '$book_summary', '$status')";

$query = mysqli_query($conn, $sql);
if ($query) 
{
    // echo "data inserted";
    $response = array('status' => 'success', 'message' => 'Data inserted successfully.');
} 
else 
{
    // echo "data not inserted";
    $response = array('status' => 'error', 'message' => 'Data inserting failed.');
}
echo json_encode($response);

// exit;
mysqli_close($conn);
?>