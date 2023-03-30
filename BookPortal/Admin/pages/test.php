<div class="statusMsg"></div>

<!-- File upload form -->
<div class="col-lg-12">
    <form id="fupForm" enctype="multipart/form-data">
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" name="name" placeholder="Enter name" required />
        </div>
        <div class="form-group">
        <label for="email">Email:</label>
            <input type="email" class="form-control" name="email" placeholder="Enter email" required />
        </div>
        <div class="form-group">
            <label for="file">File:</label>
            <input type="file" class="form-control" id="file" name="file" required />
        </div>
        
        <input type="submit" name="submit" class="btn btn-primary submitBtn" value="SUBMIT"/>
    </form>
</div>