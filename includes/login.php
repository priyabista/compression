<?php
session_start();
?>


<?php include_once 'header.php'; 
include('../authentication/userfunctions.php');
include '../dbconfig/dbconfig.php'?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Contact Keeper</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
  <div class="container col-md-6 mt-2 p-5">
     <div class="card p-3 mt-5 mb-2 ">
     <h1 class="text-center">Login </h1>
       <div class="col-md-6 offset-3 p-2 mb-10">
       <form action="../authentication/authcode.php" method="POST">
         <div class="form-group mb-2">
        <label>Email</label>
         <input type="email" name="email" class="form-control mb-2 mt-2">
        </div>
        <div class="form-group mb-2">
        <label>Password</label>
         <input type="password" name="password" class="form-control mb-2 mt-2">
        </div>
        <input type="submit" name="login_btn" class="btn btn-sm btn-primary col-12 mt-2" value="Login">
          Not registered yet? <a href="signup.php" class="mt-2">Click here</a>
  </form>
  </div>
  </div>
  </div>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>




<?php include_once 'footer.php'; ?>
