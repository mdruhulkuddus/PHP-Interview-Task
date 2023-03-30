<?php
if(isset($_FILES['image'])){
   $errors= array();
   $file_name = $_FILES['image']['name'];
   $file_size =$_FILES['image']['size'];
   $file_tmp =$_FILES['image']['tmp_name'];
   $file_type=$_FILES['image']['type'];
   $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));

   $extensions= array("jpeg","jpg","png");

   if(in_array($file_ext,$extensions)=== false){
      $errors[]="extension not allowed, please choose a JPEG or PNG file.";
   }

   if($file_size > 2097152){
      $errors[]='File size must be less than 2 MB';
   }

   if(empty($errors)==true){
      move_uploaded_file($file_tmp,"../uploads/".$file_name);
      echo "Success";
   }else{
      print_r($errors);
   }
}


/*
<?php

//  var_dump($_FILES); 
// print_r($_POST); 
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

// for image

$file = $_FILES['image']['name'];

$sql  = "INSERT INTO `bookinfo`(`title`, `author`, `category`, `publisher`, `edition`, `language`, `price`, `pages`, `book_summary`, `status`) 
VALUES ('$title', '$author', '$category', '$publisher', '$edition', '$language', '$price', '$pages', '$book_summary', '$status')";

// $sql  = "INSERT INTO `bookinfo`(`title`, `author`, `category`, `publisher`, `edition`, `language`, `price`, `pages`, `book_summary`, `image`,`status`) 
// VALUES ('$title', '$author', '$category', '$publisher', '$edition', '$language', '$price', '$pages', '$book_summary', '$file', '$status')";

$query = mysqli_query($conn, $sql);
if ($query) 
{  
    //  move_uploaded_file($_FILES['image']['tmp_name'], '$file');
    // echo "data inserted";
    $response = array('status' => 'success', 'message' => 'Data inserted successfully.', 'imgSMS' => 'Image uploaded.');
} 
else 
{
    // echo "data not inserted";
    $response = array('status' => 'error', 'message' => 'Data inserting failed.', 'imgSMS' => 'Error Image uploaded.');
}
echo json_encode($response);

// exit;
mysqli_close($conn);
?>

*/
?>
