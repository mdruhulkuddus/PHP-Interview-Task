<?php
// print_r($_POST);
// var_dump($_FILES);
$db = mysqli_connect("localhost", "root", "", "bookportal");
// File upload folder 
$uploadDir = 'uploads/';

// Allowed file types 
$allowTypes = array('jpg', 'png', 'jpeg', 'pdf');

if (isset($_POST['name']) || isset($_POST['email'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
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
    $sqlQ = "INSERT INTO form_data (name,email,file_name,submitted_on) VALUES (?,?,?,NOW())";
    $stmt = $db->prepare($sqlQ);
    $stmt->bind_param("sss", $name, $email, $uploadedFile);
    $insert = $stmt->execute();

    if ($insert) {
        $response['status'] = 1;
        $response['message'] = 'Form data submitted successfully!';
    } else {
        $response['message'] = 'Insert Failed.';
    }
} else {
    $response['message'] = 'Please fill all the mandatory fields (name and email).';
}


// Return response 
echo json_encode($response);
