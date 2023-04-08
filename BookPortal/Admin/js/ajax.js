// add book page

$(document).ready(function (e) {
  // Submit form data via Ajax
  $("#bookForm").on('submit', function (e) {
    e.preventDefault();
    $.ajax({
      type: 'POST',
      url: "insert.php",
      data: new FormData(this),
      dataType: 'json',
      contentType: false,
      cache: false,
      processData: false,
      beforeSend: function () {
        $('.submitBtn').attr("disabled", "disabled");
        $('#bookForm').css("opacity", ".5");
      },
      success: function (response) {
        // alert(response);
        $('.statusMsg').html('');
        if (response.status == 1) {
          $('#bookForm')[0].reset();
          $('.statusMsg').html('<p class="alert alert-success">' + response.message + '</p>');
        } else {
          $('.statusMsg').html('<p class="alert alert-danger">' + response.message + '</p>');
        }
        $('#bookForm').css("opacity", "");
        $(".submitBtn").removeAttr("disabled");
      }
    });
  });
});

$(document).ready(function () {
  $('#add-book-link').click(function (event) {
    event.preventDefault(); // 
    $.ajax({
      url: 'add-book.php',
      type: 'GET',
      success: function (response) {
        $('#content-container').html(response);
      }
    });
  });
});

// open on click view page
$(document).ready(function () {
  $('#manage-book-link').click(function (event) {
    event.preventDefault();
    $.ajax({
      url: 'view-book.php',
      type: 'GET',
      success: function (response) {
        $('#content-container').html(response);
        read();
      }
    });
  });
});

// view or read data
function read() {
  $.ajax({
    url: "manage-book.php",
    method: "POST",
    success: function (response) {
      $("#tbody").html(response);
    },
    error: function () {
      alert("Error fetching products.");
    }
  });
}

// delete data

function Delete(userId) {
  $confirm = confirm("Are you sure to delete?");
  if ($confirm == true) {
    $.ajax({
      url: "delete.php",
      method: "GET",
      dataType: 'json',
      data: {
        userId: userId
      },
      success: function (response) {
        // console.log(response);
        $('.statusMsg').html('');
        $('.statusMsg').html('<p class="alert alert-success">' + response.message + '</p>');
        read();
      }
    });
  }
}

// status

function Status(id) {
  $.ajax({
    url: "status.php",
    method: "GET",
    dataType: 'json',
    data: {
      userId: id,
      page: "book",
    },
    success: function (response) {
      // console.log(response);
      $('.statusMsg').html('');
      $('.statusMsg').html('<p class="alert alert-success">' + response.message + '</p>');
      read();
    }
  });
}

//edit data

function Edit(id) {
  $.ajax({
    url: "edit.php",
    type: 'GET',
    data: {
      userId: id
    },
    success: function (response) {
      $('#content-container').html(response);
    }
  });
}


$(document).ready(function (e) {
  // Submit form data via Ajax
  $("#updateBookForm").on('submit', function (e) {
    e.preventDefault();
    $.ajax({
      type: 'POST',
      url: "update.php",
      data: new FormData(this),
      dataType: 'json',
      contentType: false,
      cache: false,
      processData: false,
      success: function (response) {
          $('.statusMsg').html('<p class="alert alert-success">' + response.message + '</p>');
          read();
      }
    });
  });
});


// category page

// open page
$(document).ready(function () {
  $('#add-category-link').click(function (event) {
    event.preventDefault(); // 
    $.ajax({
      url: 'add-category.php',
      type: 'GET',
      success: function (response) {
        $('#content-container').html(response);
      }
    });
  });
});

// submit form
$(document).ready(function (e) {
  // Submit form data via Ajax
  $("#categoryForm").on('submit', function (e) {
    e.preventDefault();
    $.ajax({
      type: 'POST',
      url: "insert-category.php",
      data: new FormData(this),
      dataType: 'json',
      contentType: false,
      cache: false,
      processData: false,
      success: function (response) {
        $('.statusMsg').html('');
        if (response.status == 1) {
          $('#categoryForm')[0].reset();
          $('.statusMsg').html('<p class="alert alert-success">' + response.message + '</p>');
        } else {
          $('.statusMsg').html('<p class="alert alert-danger">' + response.message + '</p>');
        }
      }
    });
  });
});

// open on click view manage category page
$(document).ready(function () {
  $('#manage-category-link').click(function (event) {
    event.preventDefault();
    $.ajax({
      url: 'view-category.php',
      type: 'GET',
      success: function (response) {
        $('#content-container').html(response);
        viewCategories();
      }
    });
  });
});

// view or read data
function viewCategories() {
  $.ajax({
    url: "manage-category.php",
    method: "POST",
    success: function (response) {
      $("#tbody").html(response);
    },
    error: function () {
      alert("Error fetching products.");
    }
  });
}

// delete category

function DeleteCategory(userId) {
  $confirm = confirm("Are you sure to delete?");
  if ($confirm == true) {
    $.ajax({
      url: "delete-category.php",
      method: "GET",
      dataType: 'json',
      data: {
        userId: userId
      },
      success: function (response) {
        // console.log(response);
        $('.statusMsg').html('');
        $('.statusMsg').html('<p class="alert alert-success">' + response.message + '</p>');
        viewCategories();
      }
    });
  }
}

// category status 

function StatusCategory(id) {
  $.ajax({
    url: "status.php",
    method: "GET",
    dataType: 'json',
    data: {
      userId: id,
      page: "category",
    },
    success: function (response) {
      // console.log(response);
      $('.statusMsg').html('');
      $('.statusMsg').html('<p class="alert alert-success">' + response.message + '</p>');
      viewCategories();
    }
  });
}

//edit data

function EditCategory(id) {
  $.ajax({
    url: "edit-category.php",
    type: 'GET',
    data: {
      userId: id
    },
    success: function (response) {
      $('#content-container').html(response);
    }
  });
}

$(document).ready(function (e) {
  // Submit form data via Ajax
  $("#updateCategory").on('submit', function (e) {
    e.preventDefault();
    $.ajax({
      type: 'POST',
      url: "update-category.php",
      data: new FormData(this),
      dataType: 'json',
      contentType: false,
      cache: false,
      processData: false,
      success: function (response) {
          $('.statusMsg').html('<p class="alert alert-success">' + response.message + '</p>');
          viewCategories();
      }
    });
  });
});