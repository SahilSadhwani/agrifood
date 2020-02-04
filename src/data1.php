<?php
//setting header to json
header('Content-Type: application/json');

//database
include_once('includes/db.php');

//query to get data from the table
$query = sprintf("SELECT order_details.quantity,farmer_crop.crop_id,order_details.crop_id,farmer_crop.month FROM order_details,farmer_crop WHERE farmer_crop.crop_id=order_details.crop_id ");

//execute query
$result = mysqli_query($connection,$query);

//loop through the returned data
$data = array();
foreach ($result as $row) {
  $data[] = $row;
}

//free memory associated with result
//$result->close();
//
////close connection
//$mysqli->close();

//now print the data
print json_encode($data);