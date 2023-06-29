<?php
session_start();
include('../dbconfig/dbconfig.php');
$userid = $_GET['userid'];
$q= " DELETE FROM `portals` WHERE p_id= $userid ";
$query= mysqli_query($con, $q);
?>