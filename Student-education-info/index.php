<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sudent Reg</title>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container">
        <section class=" mt-3">
            <div class="row">
                <label class="badge badge-primary">
                    <p>fdsf</p>
                </label>
                <form class="row g-3 border p-3">
                    <h3 class="main-label">Personal Information</h3>
                    <div class="col-md-6">
                        <label class="form-label">First name</label>
                        <input type="text" class="form-control" id="first-name" placeholder="Enter First Name">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Last name</label>
                        <input type="text" class="form-control" id="last-name" placeholder="Enter Last Name">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Father name</label>
                        <input type="text" class="form-control" id="father-name" placeholder="Enter Father Name">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Mother name</label>
                        <input type="text" class="form-control" id="mother-name" placeholder="Enter Mother Name">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Email Address</label>
                        <input type="text" class="form-control" id="email" placeholder="Enter Email Address">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Phone</label>
                        <input type="text" class="form-control" id="phone" placeholder="Enter Phone Number">
                    </div>

                    <div class="col-md-6">
                        <label for="date-of-birth" class="form-label">Date of Birth</label>
                        <input type="text" class="form-control" id="date-of-birth" id="date-of-birth" placeholder="MM-DD-YYYY" data-provide="datepicker">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Gender</label> <br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="male" value="male">
                            <label class="form-check-label" for="male">Male</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="female" value="female">
                            <label class="form-check-label" for="female">Female</label>
                        </div>

                    </div>
                    <div class="col-md-12 mb-3">
                        <label class="form-label">Address</label>
                        <textarea class="form-control" rows="2" id="address"></textarea>
                    </div>

                    <h3 class="main-label">Educational Information</h3>
                    <div class="col-md-3">
                        <label class="form-label">College</label>
                        <input type="text" class="form-control" id="college-name" placeholder="College Name">
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">Major</label>
                        <input type="text" class="form-control" id="college-major" placeholder="College Major">
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">CGPA</label>
                        <input type="text" class="form-control" id="college-cgpa" placeholder="Enter CGPA">
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">Passed Year</label>
                        <select class="form-select" aria-label="Default select example" id="college-pass-year">
                            <option selected>Select Year</option>
                            <option value="2018">2018</option>
                            <option value="2019">2019</option>
                            <option value="2020">2020</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">University</label>
                        <input type="text" class="form-control" id="versity-name" placeholder="Versity Name">
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">Major</label>
                        <input type="text" class="form-control" id="versity-major" placeholder="Versity Major">
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">CGPA</label>
                        <input type="text" class="form-control" id="versity-cgpa" placeholder="Enter CGPA">
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">Passed Year</label>
                        <select class="form-select" aria-label="Default select example" id="versity-pass-year">
                            <option selected>Select Year</option>
                            <option value="2018">2018</option>
                            <option value="2019">2019</option>
                            <option value="2020">2020</option>
                        </select>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-primary" id="btn-insert" type="submit">Submit form</button>
                    </div>
                </form>
        </section>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="js/ajax.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

</body>

</html>