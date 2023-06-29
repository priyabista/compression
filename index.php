<?php
session_start();
if(isset($_SESSION['auth_user'])){
  
    $userid = $_SESSION['auth_user']['id'];
}else{
    header('location:includes/login.php');
}
include_once 'includes/overlay.php';
include_once './includes/header.php'; 
include_once 'dbconfig/dbconfig.php';?>

<?php include_once './includes/forms.php';?>
<?php include_once './includes/navbar.php'; ?>
<div class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
            <div class="row justify-content-center " style="row-gap:40px">
            <?php
            $query = "SELECT * FROM portals WHERE userid= $userid";
            $query_run = mysqli_query($con, $query);
            if(mysqli_num_rows($query_run) > 0){
                foreach($query_run as $item){?>
                <div class="col-md-12">
                    <div class="card shadow">
                    
                    
                     <div class="card-body">
                        <h6 class="fw-bold"><?=$item['portal_name'] ?></h6>

                        <span><?=$item['portal_code']; ?></span>
                        <span class ="fw-bold">(<?=$item['portal_limit']; ?>)</span>
                        <div class="action d-flex justify-content-end">
                        <i class="fa-solid fa-trash m-2" onclick="confirmDelete(),on()" value="<?=$item['p_id']?>" style="cursor:pointer;"></i>
                        <i class="fa-solid fa-upload m-2" onclick="fileUpload(),on()" style="cursor:pointer;"></i>
                        <i class="fa-sharp fa-solid fa-pen-to-square m-2" onclick="updatePort(),on()" style="cursor:pointer;"></i>
                        </div>
                     </div>
                    </div>
                </div>
              <?php  }
            }
            ?>
        </div>
            </div>
        </div>
      
    </div>
</div>
<?php include_once './includes/footer.php'; ?>
    
