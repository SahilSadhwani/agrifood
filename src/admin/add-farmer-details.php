<?php

require_once("../includes/db.php");
require_once("../includes/functions.php");
session_start();
          
          if(isset($_POST["register_farmer"])){ 

              $user_name = $_POST["user_name"];
              $user_email = $_POST["user_email"];
              $user_password = $_POST["user_password"];
              $user_contact = $_POST["user_contact"];
              $user_address = $_POST["user_address"];
              $land_address = $_POST["land_address"];
              $land_city = $_POST["land_city"];
              $land_number = $_POST["land_number"];
            
              
              
              $cleaned_email = mysqli_real_escape_string($connection, htmlentities($user_email));
              
//              echo $cleaned_email;
              
              
                  $hashed_password = password_hash($user_password, PASSWORD_DEFAULT);
              
              $query = "INSERT INTO user(user_name, user_email, user_password, user_contact, user_address, user_type_id) VALUES('$user_name','$user_email','$hashed_password',$user_contact,'$user_address',2)";
//                  echo $query;
              $result = mysqli_query($connection,$query);
                
                $id = 0;
                $id = mysqli_insert_id($connection);
                  
              $query = "INSERT INTO farmer_details(user_id, land_address, land_city, land_number) VALUES($id, '$land_address', '$land_city', '$land_number')";
              $result = mysqli_query($connection,$query);

                  header("Location: http://localhost:3000/register-details-on-block.html?id=$id");
                  exit;
                  ?>
<!--                  <script>window.open("http://localhost:3000/register-details-on-block.html", "_blank");</script>-->
                  <?php
              }
              
              
              
          
          ?>
        