<?php

require_once("includes/db.php");
require_once("includes/functions.php");
session_start();
          
          if(isset($_POST["register"])){

              $user_name = $_POST["user_name"];
              $user_email = $_POST["user_email"];
              $user_password = $_POST["user_password"];
              $user_contact = $_POST["user_contact"];
              $user_address = $_POST["user_address"];
//              $user_aadhar = $_POST["user_aadhar"];
              $user_type_id = $_POST["user_type_id"];
            
              
              
              $cleaned_email = mysqli_real_escape_string($connection, htmlentities($user_email));
              
//              echo $cleaned_email;
              
              $query = "SELECT * FROM user WHERE user_email = '$cleaned_email'";
              $result = mysqli_query($connection, $query);
              if(mysqli_num_rows($result)>=1){
                  echo "email already exists";
              }else{
                  $hashed_password = password_hash($user_password, PASSWORD_DEFAULT);
              
              $query = "INSERT INTO user(user_name, user_email, user_password, user_contact, user_address, user_type_id) VALUES('$user_name','$user_email','$hashed_password',$user_contact,'$user_address',$user_type_id)";
//                  echo $query;
              $result = mysqli_query($connection,$query);
                
                $id = 0;
                $id = mysqli_insert_id($connection);
                  

                  header("Location: http://localhost:3000/register-details-on-block.html?id=$id");
                  exit;
                  ?>
<!--                  <script>window.open("http://localhost:3000/register-details-on-block.html", "_blank");</script>-->
                  <?php
              }
              
              
              
          }
          ?>
        