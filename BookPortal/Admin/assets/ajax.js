
// $('#add-book-link').click(function (event) {
//    event.preventDefault();
//    $.ajax({
//       url: 'pages/add-book.php',
//       type: 'GET',
//       success: function (response) {
//          $('#content').html(response);
//          CKEDITOR.replace('editor1');
//       }
//    });
// });


// $('#add-book-link').click(function (event) {
//    event.preventDefault();
//    $.ajax({
//       url: 'pages/add-book.php',
//       type: 'GET',
//       success: function (response) {
//          $('#content').html(response);
//          CKEDITOR.replace('editor1');
//       }
//    });
// });

// $.ajax({
//     url: "pages/add-book.php",
//     success: function(result){
//        $("#content").html(result);
//        // added ckeditor
//        CKEDITOR.replace('editor1');
//        // added ajax
//        var script = document.createElement('script');
//        script.src = 'js/ajax.js';
//        document.head.appendChild(script);
//     }
//  });


// function readData() {
//    // do something 
//   var title = $("#title").val();
// var author = $("#author").val();
// var category = $("#category").val();
// var publisher = $("#publisher").val();
// var edition = $("#edition").val();
// var language = $("#language").val();
// var price = $("#price").val();
// var pages = $("#pages").val();
// var language = $("#language").val();
// var editor1 = $("#editor1").val();
// var status = $("#status").val();

// }


// $(document).on('click', function () {
//    $('#bookForm').submit( function (e) {
//       e.preventDefault();
// var formData = new FormData(this);

// $("#btn-book-insert").click(function (e) {
//    e.preventDefault();
// var formData = $('#bookForm').serialize();
$("#btn-book-insert").click(function () {
   $('#bookForm').submit(function (e) {
      e.preventDefault();
      // var formData = new FormData($('#bookForm')[0]);
      var formData = $('#bookForm').serialize();
      $.ajax({
         url: 'classes/saveBook.php',
         type: 'POST',
         data: formData,
         // data:{title:title, category:category, author:author, publisher:publisher, edition:edition, language:language, price:price,
         //    pages:pages, editor1:editor1, status:status},
         dataType: 'json',
      //    cache: false,
      //    processData: false,
      // contentType: false,
         success: function (data) {
            // alert(data.message);
            // alert(data);
            // console.log(data);
            console.log(data.message);
            // $('#bookForm').prop('disabled', true);
            // alert(data);
         },

      });
   });
});


//       // collected
//   $(document).on('click', function(){
//     $('#uploadForm').submit(function(e){
//        e.preventDefault();
//        var formData = new FormData(this);
//        $.ajax({
//           url: 'pages/upload.php',
//           type: 'POST',
//           data: formData,
//           cache: false,
//           contentType: false,
//           processData: false,
//           success: function(data){
//              // handle success response
//              alert(data);
//           },
//           error: function(xhr, textStatus, errorThrown){
//              // handle error response
//           }
//        });
//     });
//  });
