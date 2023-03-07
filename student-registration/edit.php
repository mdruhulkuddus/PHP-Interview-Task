<?php

$connect = mysqli_connect("localhost", "root","", "regisinfo");
    $id = $_GET['userId'];
    $select = "SELECT * FROM registration WHERE id = $id";
    $query = mysqli_query($connect, $select);
    $fetch_std = mysqli_fetch_array($query);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" />
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container-fluid p-0">
        <section class=" mt-5 p-0-135">
            <div class="row c-mr-0">
                <div class="col-md-12">
                    <div class="card">
                        <h3 class="card-title mt-3 mx-auto ">Edit Info</h3>
                        <div class="card-body">
                            <!-- <form action=""> -->
                            <div class="mb-3">
                                <label for="examplename" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" value="<?php echo $fetch_std['name']; ?>" >
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="email" value="<?php echo $fetch_std['email']; ?>">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" value="<?php echo $fetch_std['password']; ?>">
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary" onclick="Update(<?php echo $fetch_std['id']; ?>)">Update</button>
                                <button type="submit" class="btn btn-success" onclick="Home()">Home</button>
                            </div>
                            <!-- </form> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="relod"></div>
        </section>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="js/ajax.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>