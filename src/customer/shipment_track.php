<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
   
<?php
  
require_once("../includes/db.php");
require_once("../includes/functions.php");
    
?>
   
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

   
    <head>
        <meta charset="utf-8" />
        <title>Quick ERP | Dashboard</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="../vendors/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="../vendors/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="../vendors/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="../vendors/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css" />
        <link href="../vendors/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="../vendors/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="../vendors/css/plugins.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="../css/layout.min.css" rel="stylesheet" type="text/css" />
        <link href="../css/themes/darkblue.css" rel="stylesheet" type="text/css" id="style_color" />
        <link href="../css/custom.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME LAYOUT STYLES -->
        
        
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        
        <link rel="stylesheet" href="../css/style-track.css">
        
        <link rel="shortcut icon" href="favicon.png" /> </head>
    <!-- END HEAD -->

    <body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white">
        <!-- BEGIN HEADER -->
        
        <!-- END HEADER -->
        <!-- BEGIN HEADER & CONTENT DIVIDER -->
        <div class="clearfix"> </div>
        <!-- END HEADER & CONTENT DIVIDER -->
        <!-- BEGIN CONTAINER -->
        
<?php
session_start();
if(isset($_GET["order_id"])){
         
$order_id = $_GET["order_id"];
$query = "SELECT * FROM order_details WHERE order_id = 1;";
$result = mysqli_query($connection, $query);

$row = mysqli_fetch_assoc($result);
$order_left_from_farmer = $row["order_left_from_farmer"];
$time_order_left_from_from_farmer = $row["time_order_left_from_from_farmer"];
$processed_by_thirdparty = $row["processed_by_thirdparty"];
$time_reached_thirdparty = $row["time_reached_thirdparty"];
$processed_by_store = $row["processed_by_store"];    
$time_reached_store = $row["time_reached_store"];
}


        
?>        

<div class="content">
	<div class="content1">
		<h2>Order Tracking</h2>
	</div>
	<div class="content2">
		<div class="content2-header1">
			<p>Shipped Via : <span>Ipsum Dolor</span></p>
		</div>
		<div class="content2-header1">
			<p>Status : <span>Checking Quality</span></p>
		</div>
		<div class="content2-header1">
			<p>Delivered by <span>Tomorrow</span></p>
		</div>
		<div class="clear"></div>
	</div>
	<div class="content3">
        <div class="shipment">
			<div class="confirm">
                <div class="imgcircle">
                    <img src="../images/confirm.png" alt="confirm order">
            	</div>
				<span class="line"></span>
				<?php
            if($order_left_from_farmer == 0){
                echo "<div><p>Still not left from farm</p></div>";
            }else{
                echo "<div><p>Left from farm on {$time_order_left_from_from_farmer}</p></div>";
            }
   ?>
				
			</div>
			<div class="process">
           	 	<div class="imgcircle">
                	<img src="../images/dispatch.png" alt="process order">
            	</div>
				<span class="line"></span>
					<?php
            if($order_left_from_farmer == 0){
                echo "<div><p>Waiting for dispatch</p></div>";
            }else{
                echo "<div><p>Dispatched Item</p></div>";
            }
   ?>
			</div>
			<div class="quality">
				<div class="imgcircle">
                	<img src="../images/quality.png" alt="quality check">
            	</div>
				<span class="line"></span>
					<?php
            if($processed_by_thirdparty == 0){
                echo "<div><p>waiting for item</p></div>";
            }else{
                echo "<div><p>Processed by third party on {$time_reached_thirdparty}</p></div>";
            }
   ?>
			</div>
			<div class="dispatch">
				<div class="imgcircle">
                	<img src="../images/dispatch.png" alt="dispatch product">
            	</div>
				<span class="line"></span>
						<?php
            if($processed_by_thirdparty == 0){
                echo "<div><p>waiting for dispatch</p></div>";
            }else{
                echo "<div><p>Disptched item</p></div>";
            }
   ?>
			</div>
			<div class="delivery">
				<div class="imgcircle">
                	<img src="../images/delivery.png" alt="delivery">
				</div>
						<?php
            if($time_reached_store == 0){
                echo "<div><p>Not Delivered</p></div>";
            }else{
                echo "<div><p>Delivered on {$time_reached_store}</p></div>";
            }
   ?>
			</div>
			<div class="clear"></div>
		</div>
	</div>
</div>

        <!-- END CONTAINER -->
        <!-- BEGIN FOOTER -->
        
        <!-- END FOOTER -->
        <!--[if lt IE 9]>
<script src="../assets/global/plugins/respond.min.js"></script>
<script src="../assets/global/plugins/excanvas.min.js"></script> 
<![endif]-->
        <!-- BEGIN CORE PLUGINS -->
        <script src="../vendors/plugins/jquery.min.js" type="text/javascript"></script>
        <script src="../vendors/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="../vendors/plugins/js.cookie.min.js" type="text/javascript"></script>
        <script src="../vendors/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
        <script src="../vendors/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <script src="../vendors/plugins/jquery.blockui.min.js" type="text/javascript"></script>
        <script src="../vendors/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
        <script src="../vendors/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="../vendors/plugins/counterup/jquery.waypoints.min.js" type="text/javascript"></script>
        <script src="../vendors/plugins/counterup/jquery.counterup.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="../js/app1.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="../js/dashboard.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="../js/layout.min.js" type="text/javascript"></script>
        <script src="../js/quick-sidebar.min.js" type="text/javascript"></script>
        <!-- END THEME LAYOUT SCRIPTS -->
        <!--BEGIN CUSTOM SCRIPT LOADING-->
        <script src="../js/custom.js" type="text/javascript"></script>
        <!--END OF CUSTOM SCRIPT LOADING-->
    </body>

</html>