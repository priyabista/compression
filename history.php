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
    <table class="table table-striped  table-bordered ">
  <thead>
    <tr>
      <th scope="col" class="text-center">S.no</th>
      <th scope="col" class="text-center">Filename</th>
      <th scope="col" class="text-center">File Size</th>

      <th scope="col" class="text-center">Status</th>
      <th scope="col" class="text-center">Date</th>
      <th scope="col" class="text-center">Delete</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    $sql = "SELECT * FROM compress_data WHERE user_id = '".$_SESSION['auth_user']['id']."'";
    $query_run = mysqli_query($con, $sql);
    if(mysqli_num_rows($query_run) > 0){
        foreach($query_run as $item){ ?>
                <tr>
                <th scope="row"><?=$item['id'];?></th>
                <td class="text-center"><?=$item['file_name']; ?></td>
                <td class="text-center"><?=$item['file_size']; if($item['file_size'] > 100){echo "mb";}else if($item['file_size'] == NULL){echo "N.A";}else{echo "bytes";};  ?></td>

                <td class="<?=$item['status']=="COMPRESSED" ?'text-success':'text-danger'; ?> text-center "><?=$item['status']; ?></td>
                <td class="text-center"><?=$item['date'];?></td>
                <td class="text-center"><a href="<?php echo "delete.php?id=".$item['id']; 
                ?>" style="color: white; background-color: #f44336; text-decoration:none; padding: 6px;">Delete</td>
                </tr>
     <?php   }
    }
    ?>

  </tbody>
</table>
    </div>
</div>
      

<?php include_once './includes/footer.php'; ?>
    
