<?php 
    // establish connection

    include 'config.php';
    
    // escape variables for security

    if(isset($_POST['submit'])){

        $indexNumber = mysqli_real_escape_string($conn, $_POST['indexNumber']);
        $nameOfCourse = mysqli_real_escape_string($conn, $_POST['nameOfCourse']);
        $nameOfClass = mysqli_real_escape_string($conn, $_POST['nameOfClass']);
        $nameOfHouse = mysqli_real_escape_string($conn,$_POST['nameOfHouse']);
        $roomNumber = mysqli_real_escape_string($conn,$_POST['roomNumber']);
        
        
        // submit data into database
        $sql = "INSERT INTO course (IndexNumber, CourseName, ClassName, HouseName, RoomNumber)
                 VALUES ('$indexNumber', '$nameOfCourse', '$nameOfClass', '$nameOfHouse', '$roomNumber')";
           
                if (mysqli_query($conn, $sql)){

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
<title>School Info Page</title>
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
 

<div class="h3"> School Information Form</div>

<!-- Student form starts Here ----------->

<form action ="" method="POST">
<div class="form">
        <div class="row">
            <div class="col-md-6 mt-md-0 mt-3">
                <label>Index Number</label>
                <input type="text" class="form-control" name="indexNumber" required>
            </div>
            <div class="col-md-6 mt-md-0 mt-3">
                <label>Name of Course</label>
                <input type="text" class="form-control" name="nameOfCourse" required>
            </div>
            <div class="col-md-6 mt-md-0 mt-3">
                <label>Name of Class</label>
                <input type="text" class="form-control" name="nameOfClass" required>
            </div>
            <div class="col-md-6 mt-md-0 mt-3">
                <label>Name of House</label>
                <input type="text" class="form-control" name="nameOfHouse" required>
            </div>
            <div class="col-md-6 mt-md-0 mt-3">
                <label>Room Number</label>
                <input type="text" class="form-control" name="roomNumber" required>
            </div>
            
        </div>
        <button class="btn btn-success mt-3" type="submit" name="submit">Submit</button>
        </div>

    </div>


</form>

</body>
</html>