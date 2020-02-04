<?php

require_once('../includes/db.php');
require_once("../includes/functions.php");


$orderid=$_POST['orderId'];

$query="select hashdata, quantity from order_details where order_id=$orderid";
$res=mysqli_query($connection,$query);
$row=mysqli_fetch_assoc($res);
echo json_encode($row);
?>