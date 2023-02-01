<?php 
    // establish connection
    include 'config.php';
    // escape variables for security

    if(isset($_POST['submit'])){

        $cindexnumber = mysqli_real_escape_string($conn, $_POST['cindexnumber']);
        $mname = mysqli_real_escape_string($conn, $_POST['mname']);
        $mooccupation = mysqli_real_escape_string($conn, $_POST['mooccupation']);
        $mcontact = mysqli_real_escape_string($conn, $_POST['mcontact']);
        $fname = mysqli_real_escape_string($conn, $_POST['fname']);
        $faoccupation = mysqli_real_escape_string($conn, $_POST['faoccupation']);
        $facontact = mysqli_real_escape_string($conn, $_POST['facontact']);
        $hoaddress = mysqli_real_escape_string($conn, $_POST['hoaddress']);
        $postaddress = mysqli_real_escape_string($conn ,$_POST['postaddress']);

        
        
        // submit data into database
        $sql_1 = "INSERT INTO parentinfo (indexNumber, motherName, motherOccupation, motherContactNumber, fatherName, fatherOccupation, fatherContactNumber, houseAddress, postalAddress)
                VALUES ('$cindexnumber', '$mname', '$mooccupation', '$mcontact', '$fname', '$faoccupation', '$facontact', '$hoaddress', '$postaddress')";
        if (mysqli_query($conn, $sql_1)){        
            echo "New record created successfully";
            header('location: schoolinfo.php');
        } else {
            echo "Error: " . $sql_1 . "<br>" . mysqli_error($conn);
        }
         mysqli_close($conn);

    }
    
?>

<!DOCTYPE html>
<html>
<head>
<title>Parent Info Page</title>
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
    <a class="nav-link active" aria-current="page" href="#">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Info</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Contact Us</a>
  </li>
  <li class="nav-item">
    <a class="nav-link ">Logout</a>
  </li>
</ul>

<div class="wrapper rounded bg-white"> 
 

<div class="h3"> Parent Information Form</div>

<!-- Student form starts Here ----------->

<form action ="" method="POST">
<div class="form">
        <div class="row">
            <div class="col-md-6 mt-md-0 mt-3">
                <label>Child Index Number</label>
                <input type="text" class="form-control" name="cindexnumber" required>
            </div>
            <div class="col-md-6 mt-md-0 mt-3">
                <label>Mother's Name</label>
                <input type="text" class="form-control" name="mname" required>
            </div>
            <div class="col-md-6 mt-md-0 mt-3">
                <label>Mother's Occupation</label>
                <input type="text" class="form-control" name="mooccupation" required>
            </div>
            <div class="col-md-6 mt-md-0 mt-3">
                <label>Contact Number</label>
                <input type="text" class="form-control" name="mcontact" required>
            </div>
            <div class="col-md-6 mt-md-0 mt-3">
                <label>Father's Name</label>
                <input type="text" class="form-control" name="fname" required>
            </div>
            <div class="col-md-6 mt-md-0 mt-3">
                <label>Father's Occupation</label>
                <input type="text" class="form-control" name="faoccupation" required>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mt-md-0 mt-3">
                <label>Father's Contact</label>
                <input type="text" class="form-control" name="facontact" required>
            </div>
            <div class="col-md-6 mt-md-0 mt-3">
                <label>House Address</label>
                <div class="d-flex align-items-center mt-2">
                <input type="text" class="form-control" name="hoaddress">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mt-md-0 mt-3">
                <label>Postal Address</label>
                <input type="text" class="form-control" name="postaddress" required>
            </div>
        </div>

        <button class="btn btn-success mt-3" type="submit" name="submit">Submit</button>
        </div>

    </div>


</form>

</body>
</html>