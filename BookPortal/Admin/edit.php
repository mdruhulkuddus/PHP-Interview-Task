<?php
$connect = mysqli_connect("localhost", "root", "", "bookportal");
$id = $_GET['userId'];
$select = "SELECT * FROM `bookinfo` WHERE id = $id";
$query = mysqli_query($connect, $select);
$fetch_book = mysqli_fetch_array($query);


?>

<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
  <div class="breadcrumb-title pe-3">BookPortal</div>
  <div class="ps-3">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb mb-0 p-0">
        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">Edit Book</li>
      </ol>
    </nav>
  </div>
</div>

<div class="container">
  <div class="col-lg-8 mx-auto">
    <div class="card">
      <div class="card-header py-3 bg-transparent">
        <h5 class="mb-0">Edit Book</h5> <span class="bg-light-success text-capitalize"></span>
      </div>
      
      <div class="card-body">
        <div class="border p-3 rounded">
          
            <!-- my form  --> 
            <!-- <form class="row" method="post" enctype="multipart/form-data" id="bookForm"> -->
            <div class="statusMsg"></div>
            <form id="updateBookForm" enctype="multipart/form-data" >
            <div class="row">
           
            <div class="col-md-9 mt-2">
              <label class="form-label">Images for update</label>
              <input class="form-control" type="file" id="file" name="file">
              <!-- <input class="form-control" type="file" id="image" name="image"> -->
            </div>
            <div class="col-md-3 mt-2">
              <label class="form-label">Previous Images</label>
              <img src="uploads/<?php echo $fetch_book['image'] ?>" class="rounded" width="44" height="44" alt="img">
            </div>
            <div class="col-md-12">
              <label class="form-label">Book title</label>
              <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $fetch_book['id']; ?>">
              <input type="text" class="form-control" id="title" name="title" value="<?php echo $fetch_book['title']; ?>" placeholder="Book title">
            </div>
            <div class="col-md-6 mt-2">
              <label class="form-label">Author Name</label>
              <select class="form-select" id="author" name="author">
                <option value="<?php echo $fetch_book['author']; ?>" selected><?php echo $fetch_book['author']; ?></option>
                <option value="Arif Azad">Arif Azad</option>
                <option value="Mizanur Rahman Azhari">Mizanur Rahman Azhari</option>
                <option value="Ayman Sadik">Ayman Sadik</option>
              </select>
            </div>
            <div class="col-md-6 mt-2">
              <label class="form-label">Category</label>
              <select class="form-select" id="category" name="category">
              <?php
                  $select = "SELECT * FROM categoryinfo ORDER BY id DESC;";
                  $query = mysqli_query($connect, $select);
                  while ($fetch_category = mysqli_fetch_array($query)) {
                  ?>
                    <option value="<?php echo $fetch_category['id'];?>" <?php echo $fetch_category['id'] == $fetch_book['category'] ? "selected" : "";?>><?php echo $fetch_category['category'];?></option>
                  <?php } ?>
              </select>
            </div>
            <div class="col-md-6 mt-2">
              <label class="form-label">Publisher</label>
              <select class="form-select" id="publisher" name="publisher">
              <option value="<?php echo $fetch_book['publisher']; ?>" selected><?php echo $fetch_book['publisher']; ?></option>
                <option value="Gardiun">Gardiun</option>
                <option value="Somokalin">Somokalin</option>
              </select>
            </div>
            <div class="col-md-6 mt-2">
              <label class="form-label">Edition</label>
              <select class="form-select" id="edition" name="edition">
              <option value="<?php echo $fetch_book['edition']; ?>" selected><?php echo $fetch_book['edition']; ?></option>
                <option value="1st">1st</option>
                <option value="2nd">2nd</option>
                <option value="3rd">3rd</option>
                <option value="4th">4th</option>
              </select>
            </div>
            <div class="col-md-12 mt-2">
              <label class="form-label">Language</label>
              <select class="form-select" id="language" name="language">
              <option value="<?php echo $fetch_book['language']; ?>" selected><?php echo $fetch_book['language']; ?></option>
                <option value="Bangla">Bangla</option>
                <option value="English">English</option>
                <option value="Arabic">Arabic</option>
                <option value="Bangla and English">Bangla and English</option>
                <option value="Bangla and Arabic">Bangla and Arabic</option>
              </select>
            </div>
            <div class="col-md-6 mt-2">
              <label class="form-label">Price</label>
              <input type="number" class="form-control" id="price" name="price" value="<?php echo $fetch_book['price']; ?>"  placeholder="Book Price">
            </div>
            <div class="col-md-6 mt-2">
              <label class="form-label">Number Of Page</label>
              <input type="number" class="form-control" id="pages" name="pages" value="<?php echo $fetch_book['pages']; ?>" placeholder="Number Of Page">
            </div>
          
            <div class="col-md-12 mt-2">
              <label class="form-label">Book Summary or description</label>
              <!-- <textarea class="form-control" name="book_summary" placeholder="Book Summary" rows="4" cols="4" id="editor1"></textarea> -->
              <textarea class="form-control" name="book_summary" placeholder="Book Summary" rows="4" cols="4"><?php echo $fetch_book['book_summary']; ?></textarea>
            </div>
            <div class="col-md-12 mt-2">
              <div class="form-check">

                <input class="form-check-input" type="checkbox" value="1" id="status" name="status" id="flexCheckDefault" <?php echo $fetch_book['status'] == '1' ? "checked" : "" ?>>
                <label class="form-check-label" for="flexCheckDefault">
                  Publish on website
                </label>
              </div>
            </div>
            <div class="col-md-12 mt-2">
              <!-- <button type="submit" name="submit" class="btn btn-primary px-4 submitBtn">Submit Book Info</button> -->
              <input type="submit" name="submit" class="btn btn-primary updateBtn" value="Update Info" />
            </div>
            </div>
          </form>
         
        </div>

      </div>
    </div>
  </div>
</div><!--end row-->

<script src="js/ajax.js"></script>