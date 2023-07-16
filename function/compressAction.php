<?php
include_once '../dbconfig/dbconfig.php';
$value = $_POST['value'];
$sessionId = $_POST['sessionId'];
$file_size = $_POST['original_size'];
// $compression_ratio = $_POST['compression_ratio'];

$fileName =  basename($value);


$uploadDirectory = "uploads/";


$fileUrl = $uploadDirectory . $fileName;



  $sql = "INSERT INTO compress_data (file_name, file_url,file_size, user_id, status) VALUES ('$fileName', '$fileUrl','$file_size', '$sessionId', 'COMPRESSED')";
  $result = mysqli_query($con, $sql);


  if ($result) {

    echo "Value inserted into the database.";
  } else {

    echo "Error inserting value into the database: " . mysqli_error($con);
  }

mysqli_close($con);

?>