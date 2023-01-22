<?php
include 'config.php';


if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $created_at = date('Y-m-d H:i:s');

  
    
    $sql = "INSERT INTO users (username, password, created_at)
            VALUES ('$username', '$password', '$created_at')";
    $result = mysqli_query($conn, $sql);
    
    if ($result) {
       // $_SESSION['username'] = $username;
        echo"You are now registered";
        header('location: loginpage.php');
    }
}
?>


<!DOCTYPE html>
<html>
<head>
<title>Ayisec Registration App</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="style.css">

</head>
<body>
  
<div class="container">
  <div class="row">
    <div class="col-sm-6 col-md-4 col-md-offset-4">
      <h1 class="text-center login-title">Register </h1>
      <div class="account-wall">
        <img class="profile-img" src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=120"
            alt="">

            <!----- Form Start Here -------->
        <form class="form-signin" method="POST">
        <input type="text" class="form-control" placeholder="Email" name="username" required autofocus>
        <input type="password" class="form-control" placeholder="Password" name="password" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">
            Register</button>
        <label class="checkbox pull-left">
            <input type="checkbox" value="remember-me">
            Remember me
        </label>
        <a href="#" class="pull-right need-help">Need help? </a><span class="clearfix"></span>
        </form>
      </div>
      
    </div>
  </div>
</div>

</body>
</html>