<?php
//echo "hello";

require_once("includes/db.php");
require_once("includes/functions.php");
session_start();

if(isset($_POST['login'])){
    $user_email = $_POST['user_email'];
    $user_password = $_POST['user_password'];
    
    $user_email = mysqli_real_escape_string($connection, $user_email);
    $user_password = mysqli_real_escape_string($connection, $user_password);
    
    $query = "SELECT * FROM user WHERE user_email = '$user_email'";
    
    $select_user_details = mysqli_query($connection, $query);
    
    $select_user_details = mysqli_query($connection, $query);
    
    checkQueryResult($select_user_details);
    //proceed if there is data returned otherwise would be errors!
    
    if(mysqli_num_rows($select_user_details)>1){
        
        die("How?");
        //later we would create a error wala page
        //and will print the error in user friendly manner
        //header();
    }
    //if m coming here that means i have exactly 0/1 row!
    
    //$db_password = "";
    
    if($row = mysqli_fetch_assoc($select_user_details)){
        //i have 1 row
        $db_password = $row['user_password'];
//        $employee_id = $row['employee_id'];
    }else{
        $db_password = "";
    }
    
    if(password_verify($user_password,$db_password)){
//        $_SESSION['employee_id'] = $employee_id;
        $user_type_id = $row["user_type_id"];
        if($user_type_id == 1){
            $_SESSION["user_id"] = $row["user_id"];
            header("Location: admin/admin-dashboard.html");
        }else if($user_type_id == 2){
            $_SESSION["user_id"] = $row["user_id"];
            header("Location: farmer/dashboard.php");
        }else if($user_type_id == 3){
            $_SESSION["user_id"] = $row["user_id"];
            header("Location: grocerystore/grocerystore-dashboard.html");
        }else if($user_type_id == 4){
            $_SESSION["user_id"] = $row["user_id"];
            header("Location: customer/customer-dashboard.php");
        }else{
            header("Location: index.html");    
        }
    }else{
        die("kya baat hai??");
    }
}


?>