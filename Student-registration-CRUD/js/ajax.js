// insert data

$("#btn-insert").click(function () {
    var name = $("#name").val();
    alert(name);
    var email = $("#email").val();
    var password = $("#password").val();
    $.ajax({
        method: "POST",
        url: "insert.php",
        data: {
            name: name,
            email: email,
            password: password
        },
        success: function (data) {
            read()
        }
    });
});

// read data

function read() {
    var read = "";
    $.ajax({
        url: "read.php",
        method: "POST",
        data: {
            read: read
        },
        success: function (data) {
            $("#tbody").html(data);
        }
    });
}

// delete data

function Delete(userId){
    $confirm = confirm("Are you sure to delete?");
    if($confirm == true)
    {
        $.ajax({
            url: "delete.php",
            method: "POST",
            data: {
                userId: userId
            },
            success: function () {
                read()
            }
        });
    }
}

//edit data
function Edit(userId){
    var name = $("#name").val();
    var email = $("#email").val();
    var password = $("#password").val();
    $.ajax({
        method: "GET",
        url: "edit.php",
        data: {
            userId: userId,
            name: name,
            email: email,
            password: password
        },
        success: function (data) {
           $("body").html(data)
        }
    });
}

function Update(userId)
{
    var name = $("#name").val();
    var email = $("#email").val();
    var password = $("#password").val();
    $.ajax({
        method: "GET",
        url: "update.php",
        data: {
            name: name,
            email: email,
            password: password,
            userId: userId
        },
        success: function (data) {
           alert(data);
        }
    });
}

$(".read").click(function(){
    var read = "";
    $.ajax({
        url: "read.php",
        method: "POST",
        data: {
            read: read
        },
        success: function (data) {
            $("#tbody").html(data);
        }
    });
});
function Home()
{
    var read = "";
    $.ajax({
        url: "index.php",
        method: "POST",
        data: {
            read: read
        },
        success: function (data) {
            $("body").html(data);
        }
    });
}   