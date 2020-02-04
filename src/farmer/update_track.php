<?php
include_once('db.php');
if(isset($_GET["order_id"])){
    $order_id = $_GET["order_id"];
    $query = "UPDATE order_details SET order_left_from_farmer=1 WHERE order_id = $order_id";
$result = mysqli_query($connection,$query);
    $query = "UPDATE order_details SET reached_thirdparty = 1 WHERE order_id = $order_id";
$result = mysqli_query($connection,$query);
    
     $query = "UPDATE order_details SET time_order_left_from_from_farmer = NOW() WHERE order_id = $order_id";
$result = mysqli_query($connection,$query);
    
    
header('Location: ../qr.php?order_id='.$order_id);
    echo $query;
}


?>