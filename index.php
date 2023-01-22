<?php 
    // establish connection
    include 'config.php';
    // escape variables for security

    if(isset($_POST['submit'])){

        $indexnumber = mysqli_real_escape_string($conn, $_POST['indexnumber']);
        $firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
        $lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
        $othername = mysqli_real_escape_string($conn, $_POST['othername']);
        $dateofadmission = mysqli_real_escape_string($conn, $_POST['dateofadmission']);
        $nameofformerschool = mysqli_real_escape_string($conn, $_POST['nameofformerschool']);
        $dateofbirth = mysqli_real_escape_string($conn, $_POST['dateofbirth']);
        $gender = mysqli_real_escape_string($conn, $_POST['gender']);
        $religiousdenomination = mysqli_real_escape_string($conn, $_POST['religiousdenomination']);
        $phonenumber = mysqli_real_escape_string($conn, $_POST['phonenumber']);
        $hometown = mysqli_real_escape_string($conn, $_POST['hometown']);
        $placeofbirth = mysqli_real_escape_string($conn, $_POST['placeofbirth']);
        $district = mysqli_real_escape_string($conn, $_POST['district']);
        $region = mysqli_real_escape_string($conn, $_POST['region']);

        

        // submit data into database
        $sql = "INSERT INTO studenttable (IndexNumber, FirstName, LastName, OtherName, DateOfAdmission, NameOfFormerSchool, DateOfBirth, Gender, ReligiousDenomination, PhoneNumber, HomeTown, PlaceOfBirth, District, Region)
                VALUES ('$indexnumber', '$firstname', '$lastname', '$othername', '$dateofadmission', '$nameofformerschool', '$dateofbirth', '$gender', '$religiousdenomination', '$phonenumber', '$hometown', '$placeofbirth', '$district', '$region')";
        if (mysqli_query($conn, $sql)) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
         mysqli_close($conn);

    }
    
?>

<!DOCTYPE html>
<html>
<head>
<title>Student Info Page</title>
<!-- Bootstrap CSS -->
<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css'>
<!-- Font Awesome CSS -->
<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'>
<link rel="stylesheet" href="style1.css">

</head>
<body>
<ul class="nav nav-pills">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="#">Active</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled">Disabled</a>
  </li>
</ul>
<div class="wrapper rounded bg-white">

<div class="h3"> Student Information Form</div>

<!-- Student form starts Here ----------->

<form action ="" method="POST">
    <div class="form">
        <div class="row">
            <div class="col-md-6 mt-md-0 mt-3">
                <label>Index Number</label>
                <input type="text" class="form-control" name="indexnumber" required>
            </div>
            <div class="col-md-6 mt-md-0 mt-3">
                <label>First Name</label>
                <input type="text" class="form-control" name="firstname" required>
            </div>
            <div class="col-md-6 mt-md-0 mt-3">
                <label>Last Name</label>
                <input type="text" class="form-control" name="lastname" required>
            </div>
            <div class="col-md-6 mt-md-0 mt-3">
                <label>Other Name</label>
                <input type="text" class="form-control" name="othername" required>
            </div>
            <div class="col-md-6 mt-md-0 mt-3">
                <label>Date of Admission</label>
                <input type="date" class="form-control" name="dateofadmission" required>
            </div>
            <div class="col-md-6 mt-md-0 mt-3">
                <label>Name of Former School</label>
                <input type="text" class="form-control" name="nameofformerschool" required>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mt-md-0 mt-3">
                <label>Date of Birth</label>
                <input type="date" class="form-control" name="dateofbirth" required>
            </div>
            <div class="col-md-6 mt-md-0 mt-3">
                <label>Gender</label>
                <div class="d-flex align-items-center mt-2">
                    <select class="form-control" name="gender">
                        <option value="male">male</option>
                        <option value="female">female</option>
                    </select>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mt-md-0 mt-3">
                <label>Religious Denomination</label>
                <input type="text" class="form-control" name="religiousdenomination" required>
            </div>
            <div class="col-md-6 mt-md-0 mt-3">
                <label>Phone Number</label>
                <input type="tel" class="form-control" name="phonenumber" required>
            </div>
            <div class="col-md-6 mt-md-0 mt-3">
                <label>Home Town</label>
                <input type="text" class="form-control" name="hometown" required>
            </div>
            <div class="col-md-6 mt-md-0 mt-3">
                <label>Place of Birth</label>
                <input type="text" class="form-control" name="placeofbirth" required>
            </div>
            <div class="col-md-6 mt-md-0 mt-3">
                <label>District</label>
                <input type="text" class="form-control" name="district" required>
            </div>
            <div class="col-md-6 mt-md-0 mt-3">
                <label>Region</label>
                <input type="text" class="form-control" name="region" required>
            </div>
        </div>

        <button class="btn btn-success mt-3" type="submit" name="submit">Submit</button>
        </div>

    </div>


</form>

</body>
</html>