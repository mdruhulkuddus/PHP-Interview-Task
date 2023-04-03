$(document).ready(function(e){
    // Submit form data via Ajax
    $("#fupForm").on('submit', function(e){
        e.preventDefault();
        $.ajax({
            type: 'POST',
            url: "submit.php",
            data: new FormData(this),
            dataType: 'json',
            contentType: false,
            cache: false,
            processData:false,
            beforeSend: function(){
                $('.submitBtn').attr("disabled","disabled");
                $('#fupForm').css("opacity",".5");
            },
            success: function(response){
                // alert(response);
                // console.log(response);
                $('.statusMsg').html('');
                if(response.status == 1){
                    $('#fupForm')[0].reset();
                    $('.statusMsg').html('<p class="alert alert-success">'+response.message+'</p>');
                }else{
                    $('.statusMsg').html('<p class="alert alert-danger">'+response.message+'</p>');
                }
                $('#fupForm').css("opacity","");
                $(".submitBtn").removeAttr("disabled");
            }
        });
    });
});









// function Update(userId)
// {
//     var name = $("#name").val();
//     var email = $("#email").val();
//     var password = $("#password").val();
//     $.ajax({
//         method: "GET",
//         url: "update.php",
//         data: {
//             name: name,
//             email: email,
//             password: password,
//             userId: userId
//         },
//         success: function (data) {
//            alert(data);
//         }
//     });
// }



// $(document).ready(function(e){
//     // Submit form data via Ajax
//     $("#bookForm").on('submit', function(e){
//         e.preventDefault();
//         $.ajax({
//             type: 'POST',
//             url: "insert.php",
//             data: new FormData(this),
//             dataType: 'json',
//             contentType: false,
//             cache: false,
//             processData:false,
//             beforeSend: function(){
//                 $('.submitBtn').attr("disabled","disabled");
//                 $('#bookForm').css("opacity",".5");
//             },
//             success: function(response){
//                 // alert(response);
//                 $('.statusMsg').html('');
//                 if(response.status == 1){
//                     $('#bookForm')[0].reset();
//                     $('.statusMsg').html('<p class="alert alert-success">'+response.message+'</p>');
//                 }else{
//                     $('.statusMsg').html('<p class="alert alert-danger">'+response.message+'</p>');
//                 }
//                 $('#bookForm').css("opacity","");
//                 $(".submitBtn").removeAttr("disabled");
//             }
//         });
//     });
// });