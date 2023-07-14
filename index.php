<?php
include_once './includes/header.php'; 

include_once 'includes/overlay.php';
include_once 'dbconfig/dbconfig.php';
if(isset($_SESSION['auth_user'])){
$userid = $_SESSION['auth_user']['id'];
}
?>


<?php include_once './includes/navbar.php'; ?>
<div class="py-5">
    <div class="container">
      <?php
     
      if(isset($userid)){ ?>
<h6>Hello <?=$_SESSION['auth_user']['username']; ?>!!!</h6>

     <?php }else{ ?>
<h6>Login to perform Action!</h6>
     <?php }
      ?>
    </div>
</div>
      

<?php include_once './includes/footer.php'; ?>
    
