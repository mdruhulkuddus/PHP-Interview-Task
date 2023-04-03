<?php
$connect = mysqli_connect("localhost", "root", "", "bookportal");

$select = "SELECT * FROM categoryinfo ORDER BY id DESC;";
$query = mysqli_query($connect, $select);

while ($fetch = mysqli_fetch_array($query)) {
?>
    <tr>
        <td><?php echo $fetch['id'] ?></td>
        <td><?php echo $fetch['category'] ?></td>
        <td>
            <button class="btn btn-sm btn-outline-secondary"><?php echo $fetch['status'] != '1' ? '<span style = "color:red">'.'Inactive'.'</span>' : "Active" ?> </button></td>
        <td>
            btn
        </td>
      
    </tr>
<?php
}
?>

