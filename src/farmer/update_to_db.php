<?php
require_once("../includes/db.php");
require_once("../includes/functions.php");
$user_id = 1;
if (isset($_POST['update_product'])){
    $crop_id = $_POST['crop_id'];
    echo $crop_id;
    $crop_rate = $_POST['crop_rate'];
     //echo $crop_rate;
    $quantity = $_POST['quantity'];
    //echo $quantity;
    $rate_reason = $_POST['rate_reason'];
    if($rate_reason == 1){
        $reason = "normal";
    }elseif($rate_reason == 2){
        $reason = "Weather Condition";
        $query = "UPDATE farmer_details SET land_weather_condition = 'not proper' ";
        echo $query;
        $result = mysqli_query($connection, $query);
    }elseif($rate_reason == 3){
        $reason = "Land Condition";
        $query = "UPDATE farmer_details SET land_condition = 'not proper' ";
        echo $query;
        $result = mysqli_query($connection, $query);
        $query = "Select farmer_details_id from farmer_details where user_id = $user_id";
        echo $query;
        $result = mysqli_query($connection, $query);
        $row = mysqli_fetch_assoc($result);
        $farmer_details_id = $row['farmer_details_id'];
        $query1 = "Select order_left_from_farmer from order_details where farmer_details_id = $farmer_details_id and crop_id = $crop_id ";
        echo $query1;
        $result1 = mysqli_query($connection, $query1);
        $row1 = mysqli_fetch_assoc($result1);
        $order_left_from_farmer = $row1['order_left_from_farmer'];
        if($order_left_from_farmer == 0){
            $query2 = "Update order_details set order_cancel = 1 where farmer_details_id = $farmer_details_id and crop_id = $crop_id ";
            echo $query2;
            $result2 = mysqli_query($connection, $query2);
        }
    }
    //echo $reason;
    $query = "UPDATE farmer_crop SET crop_rate = $crop_rate , quantity = $quantity , rate_reason = '$reason'  WHERE user_id = $user_id and crop_id = $crop_id";
    echo $query;
    $result = mysqli_query($connection, $query);
//    echo"hello";
    
    header("Location: http://localhost/agrifood/src/farmer/dashboard.php");
}
?>