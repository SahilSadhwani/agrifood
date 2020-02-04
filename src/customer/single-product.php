<!DOCTYPE html>
<?php
require_once("../includes/db.php");
require_once("../includes/functions.php");
$crop_id = $_GET['crop_id'];
$query="SELECT crop.crop_id, crop.crop_name, farmer_crop.crop_rate, farmer_crop.quantity from crop , farmer_crop where crop.crop_id = farmer_crop.crop_id and crop.crop_id = $crop_id";
$result = mysqli_query($connection, $query);
$row = mysqli_fetch_assoc($result);
$crop_id = $row['crop_id'];
//echo $crop_id;
$crop_name = $row ['crop_name'];
//echo $crop_name;
$crop_rate = $row['crop_rate'];
//echo $crop_rate;
$crop_quantity = $row['quantity'];
?>
<html lang="en">

<head>
<meta charset="UTF-8">
  <meta name="description" content="">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <!-- Title -->
  <title>Famie - Farm Services &amp; Organic Food Store Template | Shop</title>
  <!-- Favicon -->
  <link rel="icon" href="../images/core-img/favicon.ico">
  <!-- Core Stylesheet -->
   <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="../css/animate.css">
  
    <link rel="stylesheet" href="../css/aos.css">

    <link rel="stylesheet" href="../css/ionicons.min.css">

<link rel="stylesheet" href="../fonts/flaticon/font/flaticon.css">


    <link rel="stylesheet" href="../css/icomoon.css">
    <link rel="stylesheet" href="../css/style1.css">
  
</head>

<body>
  <!-- Preloader -->
  <div class="preloader d-flex align-items-center justify-content-center">
    <div class="spinner"></div>
  </div>

  <!-- ##### Header Area Start ##### -->
  <header class="header-area">
    <!-- Top Header Area -->
    <div class="top-header-area">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="top-header-content d-flex align-items-center justify-content-between">
              <!-- Top Header Content -->
              <div class="top-header-meta">
                <p>Welcome to <span>Farmie</span>, we hope you will enjoy our products and have good experience</p>
              </div>
              <!-- Top Header Content -->
              <div class="top-header-meta text-right">
                <a href="#" data-toggle="tooltip" data-placement="bottom" title="infodeercreative@gmail.com"><i class="fa fa-envelope-o" aria-hidden="true"></i> <span>Email: infodeercreative@gmail.com</span></a>
                <a href="#" data-toggle="tooltip" data-placement="bottom" title="+1 234 122 122"><i class="fa fa-phone" aria-hidden="true"></i> <span>Call Us: +84 223 9000</span></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Navbar Area -->
    <div class="famie-main-menu">
      <div class="classy-nav-container breakpoint-off">
        <div class="container">
          <!-- Menu -->
          <nav class="classy-navbar justify-content-between" id="famieNav">
            <!-- Nav Brand -->
            <a href="index.html" class="nav-brand"><img src="../images/core-img/logo.png" alt=""></a>
            <!-- Navbar Toggler -->
            <div class="classy-navbar-toggler">
              <span class="navbarToggler"><span></span><span></span><span></span></span>
            </div>
            <!-- Menu -->
            <div class="classy-menu">
              <!-- Close Button -->
              <div class="classycloseIcon">
                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
              </div>
              <!-- Navbar Start -->
              <div class="classynav">
                <ul>
                  <li class="active"><a href="index.html">Home</a></li>
                  <li><a href="about.html">About</a></li>
                
                  <li><a href="contact.html">Contact</a></li>
                </ul>
                <!-- Search Icon -->
                <div id="searchIcon">
                  <i class="icon_search" aria-hidden="true"></i>
                </div>
                <!-- Cart Icon -->
                <div id="cartIcon">
                  <a href="#">
                    <i class="icon_cart_alt" aria-hidden="true"></i>
                    <span class="cart-quantity">2</span>
                  </a>
                </div>
              </div>
              <!-- Navbar End -->
            </div>
          </nav>

          <!-- Search Form -->
          <div class="search-form">
            <form action="#" method="get">
              <input type="search" name="search" id="search" placeholder="Type keywords &amp; press enter...">
              <button type="submit" class="d-none"></button>
            </form>
            <!-- Close Icon -->
            <div class="closeIcon"><i class="fa fa-times" aria-hidden="true"></i></div>
          </div>
        </div>
      </div>
    </div>
  </header>
    <div class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url('../images/markus-spiske-iOL-0GJY-DM-unsplash.jpg');">
    <div class="container h-100">
      <div class="row h-100 align-items-center">
        <div class="col-12">
          <div class="breadcrumb-text">
            <h2>Shop</h2>
          </div>
        </div>
      </div>
    </div>
  </div>
  <section class="ftco-section"  style="margin-top: 40px">
    	<div class="container">
    		<div class="row">
    			<div class="col-lg-6 mb-5 ftco-animate">
    				<a href="images/product-1.jpg" class="image-popup"><img src="../images/yellow-maize-1416017.jpg" class="img-fluid" alt="Colorlib Template"></a>
    			</div>
    			<div class="col-lg-6 product-details pl-md-5 ftco-animate">
    				<h3><?php echo $crop_name; ?></h3>
    				
    				<p class="price"><b style="color: #78B31C">Rs <?php echo $crop_rate; ?></b></p>
    				<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Text should turn around and return to its own, safe country. But nothing the copy said could convince her and so it didn’t take long until.
						</p>
						<div class="row mt-4">
							<div class="col-md-6">
					
							</div>
							<div class="w-100"></div>
							<form action="add_to_cart.php>" method="GET" role="form">
							<div class="input-group col-md-6 d-flex mb-3">
	             	<span class="input-group-btn mr-2">
	                	<button type="button" class="quantity-left-minus btn"  data-type="minus" data-field="" style="height: 50px;width: 30px;">
	                    
	                   <i class="ion-ios-remove"></i>
	                	</button>
	            		</span>
	             	<input type="text" id="quantity" name="quantity" class="form-control input-number" value="1" min="1" max="100">
	             	<span class="input-group-btn ml-2">
	                	<button type="button" class="quantity-right-plus btn" data-type="plus" data-field="" style="height: 50px;width: 30px;">
	                     <i class="ion-ios-add" ></i>
	                 </button>
	             	</span>
	          	</div>
	          	<div class="w-100"></div>
	          	<div class="col-md-12">
	          		<p style="color: #777; font-weight: 400;font-size: 20px;"><?php echo $crop_quantity; ?> kg available</p>
	          	</div>
	          	<div class="col-md-12">
	          		<p style="color: #777; font-weight:300;font-size:14px;">Sold by <b style="color:#78B31C ">Sarvanand brothers</b> and <u style="color:#78B31C ">2 more</u> </p>
	          	</div>
	          	<a href="add_to_cart.php?crop_id=<?php echo $crop_id;?>&user_id=4&crop_rate=<?php echo $crop_rate;?>&quantity=2" class="btn famie-btn" type="submit"  name="add_to_cart" style=" font-size:16px;color: white">Buy now</a>
          	<a href="#" class="btn famie-btn" style="margin-left:20px;font-size:16px;color: white">Add to Wishlist</a>
          	</form>
          	</div>
          	
          	
    			</div>
    		</div>
    		<div class="container-fluid" style="margin-left:-150px; margin-top:60px;">
               <div>
                   <h4>Reviews</h4>
               </div>
    		    <div class="row">
    		        <div class="col-md-12">
    		            <div class="col-md-12">
    		                <h4>Piyush L</h4>
    		            </div>
    		            <div class="col-md-12">
    		               <p> Excellent quality grains
                               Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa est ipsum natus quidem dolores, corporis quia rem accusantium esse suscipit labore doloremque dignissimos quibusdam consectetur, cum aperiam blanditiis nisi perferendis.</p>
    		            </div>
    		        </div>
    		        <div class="col-md-12">
    		            <div class="col-md-12">
    		                <h4>Sahil S</h4>
    		            </div>
    		            <div class="col-md-12">
    		               <p> Excellent quality grains
                               Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa est ipsum natus quidem dolores, corporis quia rem accusantium esse suscipit labore doloremque dignissimos quibusdam consectetur, cum aperiam blanditiis nisi perferendis.</p>
    		            </div>
    		        </div>
    		       <div class="col-md-12">
    		            <div class="col-md-12">
    		                <h4>Puja M</h4>
    		            </div>
    		            <div class="col-md-12">
    		               <p> Excellent quality grains
                               Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa est ipsum natus quidem dolores, corporis quia rem accusantium esse suscipit labore doloremque dignissimos quibusdam consectetur, cum aperiam blanditiis nisi perferendis.</p>
    		            </div>
    		        </div>
    		        <div class="col-md-12">
    		            <div class="col-md-12">
    		                <h4>Latika G</h4>
    		            </div>
    		            <div class="col-md-12">
    		               <p> Excellent quality grains
                               Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa est ipsum natus quidem dolores, corporis quia rem is.</p>
    		            </div>
    		        </div>
    		        <div class="col-md-12">
    		            <div class="col-md-12">
    		                <h4>Jiten T</h4>
    		            </div>
    		            <div class="col-md-12">
    		               <p> Excellent quality grains
                               Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa est ipsum natus quidem dolores, corporis quia rem accusantium esse suscipit labore dolors.</p>
    		            </div>
    		        </div>
    		    </div>
    		</div>
    	</div>
    </section>
  <!-- ##### Header Area End ##### -->

  
  <!-- ##### Footer Area End ##### -->

  <!-- ##### All Javascript Files ##### -->
  <!-- jquery 2.2.4  -->
  <script>
	$('form').submit(function(e) {
  e.preventDefault(); 
  $('div img').hide();
  $('div img[alt*="' + $('#search').val() + '"]').show();
});
	</script>
  <script src="../js/jquery.min.js"></script>
  <!-- Popper js -->
  <script src="../js/popper.min.js"></script>
  <!-- Bootstrap js -->
  <script src="../js/bootstrap.min.js"></script>
  <!-- Owl Carousel js -->
  <script src="../js/owl.carousel.min.js"></script>
  <!-- Classynav -->
  <script src="../js/classynav.js"></script>
  <!-- Wow js -->
  <script src="../js/wow.min.js"></script>
  <!-- Sticky js -->
  <script src="../js/jquery.sticky.js"></script>
  <!-- Magnific Popup js -->
  <script src="../js/jquery.magnific-popup.min.js"></script>
  <!-- Scrollup js -->
  <script src="../js/jquery.scrollup.min.js"></script>
  <!-- Jarallax js -->
  <script src="../js/jarallax.min.js"></script>
  <!-- Jarallax Video js -->
  <script src="../js/jarallax-video.min.js"></script>
  <!-- Active js -->
  <script src="../js/active.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>


  <script>
		$(document).ready(function(){

		var quantitiy=0;
		   $('.quantity-right-plus').click(function(e){
		        
		        // Stop acting like a button
		        e.preventDefault();
		        // Get the field name
		        var quantity = parseInt($('#quantity').val());
		        
		        // If is not undefined
		            
		            $('#quantity').val(quantity + 1);

		          
		            // Increment
		        
		    });

		     $('.quantity-left-minus').click(function(e){
		        // Stop acting like a button
		        e.preventDefault();
		        // Get the field name
		        var quantity = parseInt($('#quantity').val());
		        
		        // If is not undefined
		      
		            // Increment
		            if(quantity>0){
		            $('#quantity').val(quantity - 1);
		            }
		    });
		    
		});
	</script>
</body>

</html>