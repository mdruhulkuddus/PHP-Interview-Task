// insert data

$("#btn-insert").click(function () {
    var firstName = $("#first-name").val();
    var lastName = $("#last-name").val();
    var fatherName = $("#father-name").val();
    var motherName = $("#mother-name").val();
    var email = $("#email").val();
    var phone = $("#phone").val();
    var dateOfBirth = $("#date-of-birth").val();
    var gender = $('input[name="gender"]:checked').val();
    var address = $("#address").val();
    var collegeName = $("#college-name").val();
    var collegeMajor = $("#college-major").val();
    var collegeCGPA = $("#college-cgpa").val();
    var collegePassYear = $("#college-pass-year").val();
    var versityName = $("#versity-name").val();
    var versityMajor = $("#versity-major").val();
    var versityCGPA = $("#versity-cgpa").val();
    var versityPassYear = $("#versity-pass-year").val();

    $.ajax({
        method: "POST",
        url: "database/sql.php",
        data:{
            firstName: firstName, lastName: lastName, fatherName: fatherName, motherName: motherName,
            email: email, phone: phone, dateOfBirth: dateOfBirth, address: address, gender: gender,
            collegeName: collegeName, collegeMajor: collegeMajor, collegeCGPA: collegeCGPA, collegePassYear: collegePassYear,
            versityName: versityName, versityMajor: versityMajor, versityCGPA: versityCGPA, versityPassYear: versityPassYear,
        },
        success: function (data) {
           show()
        }
    }); 
});

