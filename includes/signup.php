<?php
include '../authentication/userfunctions.php';
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Registration</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
  <div class="container col-md-6 ">
     <div class="card p-2 mt-5 mb-2">
     <h1 class="text-center" >Register you account here</h1>
       <div class="col-md-6 offset-3 p-2">
       <form action="../authentication/authcode.php" method="POST">
       <div class="form-group mb-2">
        <label>First Name</label>
         <input type="text" name="firstname" class="form-control mb-2 mt-2">
        </div>
        <div class="form-group mb-2">
        <label>Last Name</label>
         <input type="text" name="lastname" class="form-control mb-2 mt-2">
        </div>
        <div class="form-group mb-2">
        <label>email</label>
         <input type="email" name="email" class="form-control mb-2 mt-2">
        </div>
         <div class="form-group mb-2">
        <label>Username</label>
         <input type="text" name="username" class="form-control mb-2 mt-2">
        </div>
        <div class="form-group mb-2">
        <label>Password</label>
         <input type="password" name="password" class="form-control mb-2 mt-2">
        </div>
        <div class="row mt-3">
          <div class="col-6">
          <input type="submit" name="register_btn" class="btn btn-success d-flex justify-content-center" value="Register">
          </div>
          <div class="col-6">
         <a href="../index.php" class="">Cancel</a> 
          </div>
        </div>
        
        
        
          
  </form>
  </div>
  </div>
  </div>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>