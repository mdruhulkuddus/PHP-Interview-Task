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
        <button class="btn btn-outline-primary" onclick="EditCategory(<?php echo $fetch['id'] ?>)"><i class="fa fa-pencil"></i></button>
        <button class="btn btn-outline-danger" onclick="DeleteCategory(<?php echo $fetch['id'] ?>)"><i class="fa fa-trash"></i></button>
        <?php $status = $fetch['status']; if($status){ ?>
            <button class="btn btn-outline-success" onclick="StatusCategory(<?php echo $fetch['id'] ?>)"><i class="fa-solid fa-circle-check"></i></button>
            <?php }else {?>
            <button class="btn btn-outline-warning" onclick="StatusCategory(<?php echo $fetch['id'] ?>)"><i class="fa-regular fa-circle-xmark"></i></button>
            <?php }?>
        </td>
      
    </tr>
<?php
}
?>

