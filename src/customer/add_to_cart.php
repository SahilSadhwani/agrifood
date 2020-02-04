<?php
require_once("../includes/db.php");
require_once("../includes/functions.php");
    $user_id = $_GET['user_id'];
    $crop_id = $_GET['crop_id'];
    $quantity = $_GET['quantity'];
    $cost = $_GET['crop_rate'];
    echo $cost;
    echo $quantity;
    echo $user_id;
    echo $crop_id;
$total_cost = $quantity * $cost;
echo $total_cost;
 $query = "Insert into order_details (crop_id,user_id,quantity, total_amount,farmer_details_id)  values($crop_id, $user_id, $quantity, $total_cost,1)";
$result = mysqli_query($connection,$query);
//echo $query;
$id = mysqli_insert_id($connection);

//$query = "Update farmer_details set quantity = "
//header("Location: customer-dashboard.php");
header("Location: http://localhost:3000/test3.html?order_id=".$id."&crop_id=".$crop_id."&user_id=".$user_id."&quantity=".$quantity."&total_amount=".$total_cost."&farmer_details_id=1");


?>