<?php

// print_r($_POST);
// var_dump($_FILES);
$db = mysqli_connect("localhost", "root", "", "bookportal");
// File upload folder 
$uploadDir = 'uploads/';

// Allowed file types 
$allowTypes = array('jpg', 'png', 'jpeg', 'pdf');

if (!empty($_POST['title']) || !empty($_POST['price'])) {
   
    $title = $_POST['title'];
    $author = $_POST['author'];
    $category = $_POST['category'];
    $publisher = $_POST['publisher'];
    $edition = $_POST['edition'];
    $language = $_POST['language'];
    $price = $_POST['price'];
    $pages = $_POST['pages'];
    $book_summary = $_POST['book_summary'];
    $status = empty($_POST['status']) ? '0' : '1';

    $uploadedFile = '';
    if (!empty($_FILES["file"]["name"])) {
        $fileName = basename($_FILES["file"]["name"]);
        $targetFilePath = $uploadDir . $fileName;
        $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

        if (in_array($fileType, $allowTypes)) {
            // Upload file to the server 
            if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)) {
                $uploadedFile = $fileName;
            } else {
                $response['message'] = 'Sorry, there was an error uploading your file.';
            }
        } else {
            $response['message'] = 'Sorry, only ' . implode('/', $allowTypes) . ' files are allowed to upload.';
        }
    }

    // Insert form data in the database 
    // $uploadedFile = $uploadDir.$uploadedFile;
    $sqlQ = "INSERT INTO `bookinfo`(`title`, `author`, `category`, `publisher`, `edition`, `language`, `price`, `pages`, `book_summary`, `status`, `image`) 
    VALUES (?,?,?,?,?,?,?,?,?,?,?)";
    $stmt = $db->prepare($sqlQ);
    $stmt->bind_param("ssssssiisis", $title, $author, $category, $publisher, $edition, $language, $price, $pages, $book_summary, $status, $uploadedFile);       
    $insert = $stmt->execute();

    if ($insert) {
        $response['status'] = 1;
        $response['message'] = 'Form data submitted successfully!';
    } else {
        $response['message'] = 'Insert Failed.';
    }
} else {
    $response['message'] = 'Please fill all the mandatory fields (Title and Price)).';
}


// Return response 
echo json_encode($response);
mysqli_close($db);
