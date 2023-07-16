<?php
include('dbconfig/dbconfig.php');

    $id = $_GET['id'];
   

    $query = "DELETE FROM `compress_data` WHERE id= '$id'";
    $query_run = mysqli_query($con, $query);
    header('location:history.php');
    echo "deleted";

?>
