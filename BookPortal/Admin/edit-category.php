<?php
$connect = mysqli_connect("localhost", "root", "", "bookportal");
$id = $_GET['userId'];
$select = "SELECT * FROM `categoryinfo` WHERE id = $id";
$query = mysqli_query($connect, $select);
$fetch_cat = mysqli_fetch_array($query);
?>

<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
  <div class="breadcrumb-title pe-3">BookPortal</div>
  <div class="ps-3">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb mb-0 p-0">
        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">Edit Category</li>
      </ol>
    </nav>
  </div>
</div>

<div class="container">
  <div class="col-lg-8 mx-auto">
    <div class="card">
      <div class="card-header py-3 bg-transparent">
        <h5 class="mb-0">Edit Category</h5> <span class="bg-light-success text-capitalize"></span>
      </div>
      
      <div class="card-body">
        <div class="border p-3 rounded">
          
            <!-- my form  --> 
            <!-- <form class="row" method="post" enctype="multipart/form-data" id="bookForm"> -->
            <div class="statusMsg"></div>
            <form id="updateCategory" enctype="multipart/form-data" >
            <div class="row">
           
            <div class="col-md-12">
              <label class="form-label">Category Name</label>
              <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $fetch_cat['id']; ?>">
              <input type="text" class="form-control" id="category" name="category" value="<?php echo $fetch_cat['category']; ?>" >
            </div>

           
            <div class="col-md-12 mt-2">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="1" id="status" name="status" id="flexCheckDefault" checked>
                <label class="form-check-label" for="flexCheckDefault">
                  Publish on website
                </label>
              </div>
            </div>
            <div class="col-md-12 mt-2">
              <input type="submit" name="submit" class="btn btn-primary submitBtn" value="Update Category" />
            </div>
            </div>
          </form>
         
        </div>

      </div>
    </div>
  </div>
</div><!--end row-->

<script>
        // CKEDITOR.replace('editor1');
</script>
<script src="js/ajax.js"></script>