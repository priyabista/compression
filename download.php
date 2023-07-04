<?php
session_start();
if(isset($_SESSION['auth_user'])){
  
    $userid = $_SESSION['auth_user']['id'];
}else{
    header('location:login.php');
}

include_once 'includes/overlay.php';
include_once './includes/header.php'; 
include_once 'dbconfig/dbconfig.php';
require_once 'functions/func.php';?>



<div class="py-5">
    <div class="container d-flex justify-content-center">

        <table class="table table-striped table-bordered w-100"  >
        <tr  class="table-dark">
        <th scope="col">Id</th>
        <th scope="col">Fullname</th>
        <th scope="col">filename</th>
        <th scope="col">download</th>

        </tr>
        <tbody>
        <?php
        $portal_id = $_GET['p_id'];
        $q = "SELECT * FROM file_upload WHERE p_id ='$portal_id'";

        $query = mysqli_query($con, $q);
        while($res = mysqli_fetch_array($query)){
        ?>


        <tr>
        <td><?php echo $res['id'] ?></td>
        <td><?php echo $res['fullname'] ?></td>
        <td><?php echo $res['filename'] ?></td>
        <!-- <td><a href="download.php?id=<?php// echo $res['id']; ?>">Download</a></td> -->

        <?php
        }
        ?>

        </tr>


        </tbody>
        </table>
       
      
    </div>
</div>

<?php include_once './includes/footer.php'; ?>
    
