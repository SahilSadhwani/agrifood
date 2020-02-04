<?php

require_once("../includes/db.php");
require_once("../includes/functions.php");

if(isset($_GET["order_id"])){
    $order_id = $_GET["order_id"];
    
    $query = "UPDATE order_details SET processed_by_thirdparty = 1 WHERE order_id = $order_id";
    $result = mysqli_query($connection, $query);
    
    $query = "UPDATE order_details SET time_reached_thirdparty = NOW() WHERE order_id = $order_id";
$result = mysqli_query($connection,$query);
    
}



?>