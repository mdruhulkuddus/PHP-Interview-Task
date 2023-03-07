<?php
require_once('db_connect.php');

// insert data

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$fatherName = $_POST['fatherName'];
$motherName = $_POST['motherName'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$dateOfBirth = $_POST['dateOfBirth'];
$gender = $_POST['gender'];
$address = $_POST['address'];
$collegeName = $_POST['collegeName'];
$collegeMajor = $_POST['collegeMajor'];
$collegeCGPA = $_POST['collegeCGPA'];
$collegePassYear = $_POST['collegePassYear'];
$versityName = $_POST['versityName'];
$versityMajor = $_POST['versityMajor'];
$versityCGPA = $_POST['versityCGPA'];
$versityPassYear = $_POST['versityPassYear'];

$dob = date('Y-m-d', strtotime($dateOfBirth));

$insert = "INSERT INTO `reginfo`(`first_name`, `last_name`, `father_name`, `mother_name`, `email`, `phone`, `dob`, `gender`, `address`,
    `college_name`, `college_major`, `college_cgpa`, `college_pass_year`, `versity_name`, `versity_major`, `versity_cgpa`, `versity_pass_year`) 
    VALUES ('$firstName', '$lastName', '$fatherName', '$motherName', '$email', '$phone', '$dob', '$gender', '$address',
    '$collegeName', '$collegeMajor', '$collegeCGPA', '$collegePassYear', '$versityName', '$versityMajor', '$versityCGPA', '$versityPassYear')";

$query = mysqli_query($connect, $insert);
if ($query) {
    echo "data inserted successfully";
} else {
    echo "data insert failed";
}


