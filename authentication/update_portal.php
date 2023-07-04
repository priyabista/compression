 <?php
 include_once '../dbconfig/dbconfig.php';
 if(isset($_POST['updateBtn'])){
     $p_id = $_POST['p_id'];
  $updateportalname = $_POST['updateportalname'];
    $portal_limiter = $_POST['numlimiter'];
    

$q = " update portals SET  portal_name='$updateportalname',
portal_limit='$portal_limiter' WHERE p_id=$p_id ";

$query = mysqli_query($con, $q);
if($query){
    echo "updated successfully";
    header('location:../index.php');
}else{
 echo"error";
}
 
 }

// }
?>