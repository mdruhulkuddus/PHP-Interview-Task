<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
  <div class="breadcrumb-title pe-3">BookPortal</div>
  <div class="ps-3">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb mb-0 p-0">
        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">Add Book</li>
      </ol>
    </nav>
  </div>
</div>

<div class="container">
  <div class="col-lg-8 mx-auto">
    <div class="card">
      <div class="card-header py-3 bg-transparent">
        <h5 class="mb-0">Add New Book</h5> <span class="bg-light-success text-capitalize"></span>
      </div>
      
      <div class="card-body">
        <div class="border p-3 rounded">
          
            <!-- my form  --> 
            <!-- <form class="row" method="post" enctype="multipart/form-data" id="bookForm"> -->
            <div class="statusMsg"></div>
            <form id="bookForm" enctype="multipart/form-data" >
            <div class="row">
           
            <div class="col-md-12 mt-2">
              <label class="form-label">Images</label>
              <input class="form-control" type="file" id="file" name="file">
              <!-- <input class="form-control" type="file" id="image" name="image"> -->
            </div>
            <div class="col-md-12">
              <label class="form-label">Book title</label>
              <input type="text" class="form-control" id="title" name="title" placeholder="Book title" >
            </div>
            <div class="col-md-6 mt-2">
              <label class="form-label">Author Name</label>
              <select class="form-select" id="author" name="author">
                <option value="">Select Author</option>
                <option value="Arif Azad">Arif Azad</option>
                <option value="Mizanur Rahman Azhari">Mizanur Rahman Azhari</option>
                <option value="Ayman Sadik">Ayman Sadik</option>
              </select>
            </div>
            <div class="col-md-6 mt-2">
              <label class="form-label">Category</label>
              <select class="form-select" id="category" name="category">
                <option value="">Select A Category</option>
                <option value="Fiction">Fiction</option>
                <option value="Non-fiction">Non-fiction</option>
                <option value="Islamic">Islamic</option>
              </select>
            </div>
            <div class="col-md-6 mt-2">
              <label class="form-label">Publisher</label>
              <select class="form-select" id="publisher" name="publisher">
                <option value="">Select A Publisher</option>
                <option value="Gardiun">Gardiun</option>
                <option value="Somokalin">Somokalin</option>
              </select>
            </div>
            <div class="col-md-6 mt-2">
              <label class="form-label">Edition</label>
              <select class="form-select" id="edition" name="edition">
                <option value="">Select Edition</option>
                <option value="1st">1st</option>
                <option value="2nd">2nd</option>
                <option value="3rd">3rd</option>
                <option value="4th">4th</option>
              </select>
            </div>
            <div class="col-md-12 mt-2">
              <label class="form-label">Language</label>
              <select class="form-select" id="language" name="language">
                <option value="">Select Language</option>
                <option value="Bangla">Bangla</option>
                <option value="English">English</option>
                <option value="Arabic">Arabic</option>
                <option value="Bangla and English">Bangla and English</option>
                <option value="Bangla and Arabic">Bangla and Arabic</option>
              </select>
            </div>
            <div class="col-md-6 mt-2">
              <label class="form-label">Price</label>
              <input type="number" class="form-control" id="price" name="price" placeholder="Book Price" >
            </div>
            <div class="col-md-6 mt-2">
              <label class="form-label">Number Of Page</label>
              <input type="number" class="form-control" id="pages" name="pages" placeholder="Number Of Page">
            </div>
          
            <div class="col-md-12 mt-2">
              <label class="form-label">Book Summary or description</label>
              <!-- <textarea class="form-control" name="book_summary" placeholder="Book Summary" rows="4" cols="4" id="editor1"></textarea> -->
              <textarea class="form-control" name="book_summary" placeholder="Book Summary" rows="4" cols="4"></textarea>
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
              <!-- <button type="submit" name="submit" class="btn btn-primary px-4 submitBtn">Submit Book Info</button> -->
              <input type="submit" name="submit" class="btn btn-primary submitBtn" value="Submit Book Info" />
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