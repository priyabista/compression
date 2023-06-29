<?php 
session_start();
include('../dbconfig/dbconfig.php');
global $con;
function getAll($table){
   
    $query = "SELECT * FROM $table";
  return  $query_run = mysqli_query($con, $query);
}

function getById($table , $id){
    global $con;
    $query = "SELECT * FROM $registration WHERE id = '$userid' ";
  return  $query_run = mysqli_query($con, $query);
}


function redirect($url, $message){
    $_SESSION['message'] = $message;
    header('location: '.$url);  
    exit();
  }

?>
