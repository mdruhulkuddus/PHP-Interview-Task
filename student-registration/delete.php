<?php
$connect = mysqli_connect("localhost", "root", "", "regisinfo");
$id = $_POST['userId'];
$delete = "DELETE FROM `registration` WHERE id = $id";
$query = mysqli_query($connect, $delete);
if($query)
{
    echo "Row is deleted";
}
else{
    echo "Failed to delete";
}

?>