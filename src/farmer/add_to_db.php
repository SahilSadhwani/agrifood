<?php
require_once("../includes/db.php");
require_once("../includes/functions.php");
$user_id = 1;
if (isset($_POST['add_product'])){
    $crop_id = $_POST['crop_id'];
    $crop_rate = $_POST['crop_rate'];
    $quantity = $_POST['quantity'];
    $query = "Insert into farmer_crop (user_id, crop_id, crop_rate, quantity) values ($user_id, $crop_id, $crop_rate, $quantity)";
    $result = mysqli_query($connection, $query);
//    echo $query;
    //echo"hello";
    header("Location: http://localhost/agrifood/src/farmer/add_product.php");
}
?>