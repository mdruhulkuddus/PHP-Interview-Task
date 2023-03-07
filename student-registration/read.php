<?php
$connect = mysqli_connect("localhost", "root", "", "regisinfo");
$select = "SELECT * FROM registration ORDER BY id DESC;";
$query = mysqli_query($connect, $select);
while ($fetch_std = mysqli_fetch_array($query)) {
?>
    <tr>
        <td><?php echo $fetch_std['id'] ?></td>
        <td><?php echo $fetch_std['name'] ?></td>
        <td><?php echo $fetch_std['email'] ?></td>
        <td><?php echo $fetch_std['password'] ?></td>
        <td>
            <button class="btn btn-primary" onclick="Edit(<?php echo $fetch_std['id'] ?>)">Edit</button>
            <button class="btn btn-danger" onclick="Delete(<?php echo $fetch_std['id'] ?>)">Delete</button>
            
        </td>
      
    </tr>
<?php
}
?>