<?php
session_start();
include_once 'dbconfig/dbconfig.php';
require_once 'functions/func.php';

include_once 'includes/overlay.php';
include_once 'includes/header.php'; 
include_once 'dbconfig/dbconfig.php';
if(isset($_SESSION['auth_user'])){
  
    $userid = $_SESSION['auth_user']['id'];
}else{
    header('location:login.php');
}
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $result = mysqli_query($con, "SELECT * FROM file_upload WHERE id=$id");
    $data = mysqli_fetch_array($result);
    $save_url = download_file($data['encoded_data']);
    echo "Your file has been successfully download to : $save_url";

}else{ ?>

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
        if (isset($_GET['p_id'])) {
        $p_id = $_GET['p_id'];
        
        $q = "SELECT * FROM file_upload WHERE p_id ='$p_id'";

        $query = mysqli_query($con, $q);
        
        while($res = mysqli_fetch_array($query)){
         ?>


         <tr>
           <td><?php echo $res['id'] ?></td>
            <td><?php echo $res['fullname'] ?></td>
            <td><?php echo $res['filename'] ?></td>
         <td><a href="download.php?id=<?php echo $res['id']; ?>">Download</a></td> 

        <?php
        
        }
    }
        ?>
          
        </tr>


        </tbody>
        </table>
       
      
    </div>
</div>

<?php }

?>





<?php include_once './includes/footer.php'; ?>
    
