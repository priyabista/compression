<?php
session_start();
?>


<?php
include_once 'includes/header.php';
include_once 'authentication/userfunctions.php';
include 'dbconfig/dbconfig.php';
?>


 
     <div class=" position-absolute top-50 start-50 translate-middle p-3 bg-white text-dark col-md-3 border border-secondary ">
     <h6 class="text-center text-secondary p-2">Login </h6>
     <hr>
      
       <form action="authentication/authcode.php" method="POST">
         <div class="form-group mt-4">
          <label for="">Email</label>
         <input type="email" name="email" class="form-control " placeholder="eg:example@gmail.com">
        </div>
        <div class="form-group mt-4">
        <label>Password</label>
         <input type="password" name="password" class="form-control ">
        </div>
        <input type="submit" name="login_btn" class="btn  btn-dark col-md-12 mt-4 mb-2" value="Login">
         <span class="text-center  text-secondary mt-5" style="font-size:1em; margin-left:30px;">Not registered yet? <a href="signup.php" class="mt-2 text-decoration-none">Click here</a></span> 
  </form>
 
  </div>

 




<?php include_once 'includes/footer.php'; ?>
