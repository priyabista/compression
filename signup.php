<?php
include_once 'includes/header.php';
include_once 'authentication/userfunctions.php';
?>


     <div class="position-absolute top-50 start-50 translate-middle p-3 bg-white text-dark col-md-4 border border-secondary">
     <h6 class="text-center text-secondary p-2" >Register </h6>
     <hr>
      
       <form action="authentication/authcode.php" method="POST">
       <div class="form-group mt-4">
        <label>First Name</label>
         <input type="text" name="firstname" class="form-control ">
        </div>
        <div class="form-group mt-4">
        <label>Last Name</label>
         <input type="text" name="lastname" class="form-control ">
        </div>
        <div class="form-group mt-4">
        <label>email</label>
         <input type="email" name="email" class="form-control">
        </div>
         <div class="form-group mt-4">
        <label>Username</label>
         <input type="text" name="username" class="form-control ">
        </div>
        <div class="form-group mt-4">
        <label>Password</label>
         <input type="password" name="password" class="form-control ">
        </div>
     
          <input type="submit" name="register_btn" class="btn  btn-dark col-md-12 mt-4 mb-2" value="Register">
    
          <span class="text-center  text-secondary mt-5" style="font-size:1em; margin-left:70px;">Already registered? <a href="index.php" class="mt-2 text-decoration-none">Click here</a></span> 

          </div>
        </div>
          
        
        
          
  </form>
  
  </div>
 
<?php 
include_once 'includes/footer.php';
?>