<?php
include_once '../dbconfig/dbconfig.php';
$value = $_POST['value'];
$sessionId = $_POST['sessionId'];


$fileName =  basename($value);


$uploadDirectory = "uploads/";


$fileUrl = $uploadDirectory . $fileName;



  $sql = "INSERT INTO compress_data (file_name, file_url, user_id, status) VALUES ('$fileName', '$fileUrl', '$sessionId', 'DE-COMPRESSED')";
  $result = mysqli_query($con, $sql);


  if ($result) {

    echo "Value inserted into the database.";
  } else {

    echo "Error inserting value into the database: " . mysqli_error($con);
  }

mysqli_close($con);

?>