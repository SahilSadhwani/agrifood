<?php

 require_once('../includes/db.php');
$myArray = $_POST['hasharray'];
// echo $myArray;
$hashes="";
$hashes=$hashes.$myArray[0];
for($i=1;$i<sizeof($myArray);$i++)
{
	$hashes=$hashes.",".$myArray[$i];
}

$orderId=$_POST['orderId'];
$query="update order_details set hashdata='{$hashes}' where order_id={$orderId}";
echo $query;
$result=mysqli_query($connection,$query);
echo json_encode($query);
// if(mysqli_affected_rows($connection)!=1)
// {
// 	echo "error";
// 	die();
// }
?>