<?php
session_start();
include('../dbconfig/dbconfig.php');

if (isset($_POST['deleteBtn'])){
    $p_id = $_POST['deletevalue'];
    $userid = $_SESSION['auth_user']['id'];

    $query = "DELETE FROM portals WHERE p_id= '$p_id' AND userid='$userid'";
    $query_run = mysqli_query($con, $query);
    header('location:../index.php');
}
?>
