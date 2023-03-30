<?php

$db = mysqli_connect("localhost", "root", "", "bookportal");

if (!empty($_POST['title']) || !empty($_POST['price'])) {

    $id = $_POST['id'];
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

    //File upload folder 
    $uploadDir = 'uploads/';

    // Allowed file types 
    $allowTypes = array('jpg', 'png', 'jpeg', 'pdf');
    $uploadedFile = '';
    $select = "SELECT * FROM `bookinfo` WHERE id = $id";
    $sqlSelect = mysqli_query($db, $select);
    $row = mysqli_fetch_assoc($sqlSelect);
    $preImagePath = $row['image'];

    if (!empty($_FILES["file"]["name"])) {

        // if have previous image 
        $deletePath = "uploads/" . $preImagePath;
        if (!empty($preImagePath) && file_exists($deletePath)) {
            unlink($deletePath);
        }

        // code for update image
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
    else{
        $uploadedFile = $preImagePath;
    }

    // Insert form data in the database 
    // $uploadedFile = $uploadDir.$uploadedFile;
    $sqlQ = "UPDATE `bookinfo` SET `title`='$title',`author`='$author',`category`='$category',
    `publisher`='$publisher',`edition`='$edition',`language`='$language',`price`='$price',
    `pages`='$pages',`book_summary`='$book_summary',`status`='$status',`image`='$uploadedFile' WHERE id = $id";
    $update = mysqli_query($db, $sqlQ);
    // $stmt = $db->prepare($sqlQ);
    // $stmt->bind_param("ssssssiisis", $title, $author, $category, $publisher, $edition, $language, $price, $pages, $book_summary, $status, $uploadedFile);       
    // $insert = $stmt->execute();

    if ($update) {
        $response['status'] = 1;
        $response['message'] = 'Updated successfully!';
        $response['id'] = $id;
    } else {
        $response['message'] = 'Updated Failed.';
    }
} else {
    $response['message'] = 'Please fill all the mandatory fields (Title and Price)).';
}


// Return response 
echo json_encode($response);
