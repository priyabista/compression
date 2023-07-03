<?php 
// session_start();
// include('dbconfig/dbconfig.php');

function getAllActive($table){
    global $con;
    $query = "SELECT * FROM $table WHERE status = '0' ";
  return  $query_run = mysqli_query($con, $query);
  }

  function getIdActive($table , $id){
    global $con;
    $query = "SELECT * FROM $table WHERE id = '$id' AND status = '0'";
  return  $query_run = mysqli_query($con, $query);
}
?>