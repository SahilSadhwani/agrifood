<?php

require_once("includes/db.php");
require_once("includes/functions.php");
session_start();
$id=$_POST['id'];
$query="SELECT user_id, user_name, user_email, user_password, user_type_id FROM user WHERE user_id = $id";
$res=mysqli_query($connection,$query);
$row=mysqli_fetch_assoc($res);
echo json_encode($row);
?>