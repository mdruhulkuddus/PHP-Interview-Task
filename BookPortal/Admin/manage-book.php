<?php
$connect = mysqli_connect("localhost", "root", "", "bookportal");

$select = "SELECT * FROM bookinfo ORDER BY id DESC;";
$query = mysqli_query($connect, $select);

while ($fetch_book = mysqli_fetch_array($query)) {
?>
    <tr>
        <td><?php echo $fetch_book['id'] ?></td>
        <td><?php echo $fetch_book['title'] ?></td>
        <td><img src="uploads/<?php echo $fetch_book['image'] ?>" class="rounded" width="44" height="44" alt="img"> </td>
        <td><?php echo $fetch_book['author'] ?></td>
        <td><?php echo $fetch_book['category'] ?></td>
        <td><?php echo $fetch_book['price'] ?></td>
        <td>
            <button class="btn btn-sm btn-outline-secondary"><?php echo $fetch_book['status'] != '1' ? '<span style = "color:red">'.'Inactive'.'</span>' : "Active" ?> </button></td>
        <td>
            <button class="btn btn-outline-primary" onclick="Edit(<?php echo $fetch_book['id'] ?>)"><i class="fa fa-pencil"></i></button>
            <button class="btn btn-outline-danger" onclick="Delete(<?php echo $fetch_book['id'] ?>)"><i class="fa fa-trash"></i></button>
            <?php $status = $fetch_book['status']; if($status){ ?>
            <button class="btn btn-outline-success" onclick="Status(<?php echo $fetch_book['id'] ?>)"><i class="fa-solid fa-circle-check"></i></button>
            <?php }else {?>
            <button class="btn btn-outline-warning" onclick="Status(<?php echo $fetch_book['id'] ?>)"><i class="fa-regular fa-circle-xmark"></i></button>
            <?php }?>
        </td>
      
    </tr>
<?php
}
?>

