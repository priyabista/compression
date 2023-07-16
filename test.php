<?php


header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type');


include_once 'dbconfig/dbconfig.php';
if(isset($_SESSION['auth_user'])){
$userid = $_SESSION['auth_user']['id'];
} 

$query = sprintf("SELECT id, user_id FROM compress_data ORDER BY id");

//execute query
$result = $con->query($query);

//loop through the returned data
$data = array();
foreach ($result as $row) {
  $data[] = $row;
}

//free memory associated with result
$result->close();

//close connection
$con->close();

//now print the data
print json_encode($data);
    
