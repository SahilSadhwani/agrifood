<!DOCTYPE html>
<?php
require_once("../includes/db.php");
require_once("../includes/functions.php");
$query="SELECT crop.crop_id, crop.crop_name, farmer_crop.crop_rate, farmer_crop.quantity from crop , farmer_crop where crop.crop_id = farmer_crop.crop_id";
$result = mysqli_query($connection, $query);


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
  <!-- ##### Header Area End ##### -->

  <!-- ##### Breadcrumb Area Start ##### -->
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
  <div class="famie-breadcrumb">
    <div class="container">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-home"></i> Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Shop</li>
        </ol>
      </nav>
    </div>
  </div>
  <!-- ##### Breadcrumb Area End ##### -->

  <!-- ##### Shop Area Start ##### -->
  <section class="shop-area section-padding-0-100">
    <div class="container">

      <div class="row">
        <!-- Shop Filters -->
        <div class="col-12">
          <div class="shop-filters mb-30 d-flex align-items-center justify-content-between">
            <!-- Product Show -->
            <div class="product-show">
              <h6>Showing 1–9 of 20 results</h6>
            </div>

            <!-- Product View Mode -->
       
          </div>
        </div>
      </div>

      <div class="row">
        <!-- Shop Sidebar Area -->
        <div class="col-12 col-md-4 col-lg-3">

          <!-- Shopping Cart -->
          <div class="shopping-cart mb-50">
            <h5 class="mb-30">Shopping Cart</h5>
            <!-- Cart Table -->
            <div class="cart-table clearfix">
              <table class="table table-responsive">
                <!-- tbody -->
                <tbody>
                  <!-- Single Table Row -->
                  <tr>
                    <td class="cart_product_img">
                      <a href="single-product.html"><img src="../images/f89b864548b1e0ba4cffefdd6c55d3af.png" alt="Product"></a>
                    </td>
                    <td class="cart_product_desc">
                      <p>Bayonne Ham</p>
                      <h6>1 x $39.99</h6>
                    </td>
                    <td class="pro-close">
                      <a href="#"><i class="icon_close"></i></a>
                    </td>
                  </tr>
                  <!-- Single Table Row -->
                  <tr>
                    <td class="cart_product_img">
                      <a href="single-product.html"><img src="../images/marek-studzinski-aHK_4wglj1Q-unsplash.jpg" alt="Product"></a>
                    </td>
                    <td class="cart_product_desc">
                      <p>Bayonne Ham</p>
                      <h6>1 x $39.99</h6>
                    </td>
                    <td class="pro-close">
                      <a href="#"><i class="icon_close"></i></a>
                    </td>
                  </tr>
                  <!-- Single Table Row -->
                  <tr>
                    <td class="cart_product_img">
                      <a href="single-product.html"><img src="../images/Foxtail-Millet-Farming..jpg" alt="Product"></a>
                    </td>
                    <td class="cart_product_desc">
                      <p>Bayonne Ham</p>
                      <h6>1 x $39.99</h6>
                    </td>
                    <td class="pro-close">
                      <a href="#"><i class="icon_close"></i></a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <!-- SubTotal -->
            <div class="cart-summary d-flex align-items-center justify-content-between">
              <div class="sub-total">
                <h6>SUBTOTAL</h6>
              </div>
              <div class="total-price">
                <h6>$52.99</h6>
              </div>
            </div>
            <!-- Checkout -->
            <a href="#" class="btn famie-btn checkout-btn mt-30 w-100">Checkout</a>
          </div>


          <!-- Single Widget Area -->
          <div class="single-widget-area">
            <!-- Title -->
            <h5 class="widget-title">Tags</h5>
            <!-- Tags -->
            <ul class="famie-tags">
              <li><a href="#">All product</a></li>
              <li><a href="#">Freshy Fruit</a></li>
              <li><a href="#">Sweet Corn</a></li>
              <li><a href="#">Chicken</a></li>
              <li><a href="#">Organic</a></li>
              <li><a href="#">Meat</a></li>
            </ul>
          </div>

        </div>

        <!-- Shop Products Area -->
        <div class="col-12 col-md-8 col-lg-9">
          <div class="row">
           <?php
              while($row = mysqli_fetch_assoc($result)){
                  $crop_id = $row['crop_id'];
                  //echo $crop_id;
                  $crop_name = $row ['crop_name'];
                  //echo $crop_name;
                  $crop_rate = $row['crop_rate'];
                  //echo $crop_rate;
                  $crop_quantity = $row['quantity'];
                  //echo $crop_quantity;
              
              ?>
            
            <div class="col-12 col-sm-6 col-lg-4">
              <div class="single-product-area mb-50">
                <!-- Product Thumbnail -->
                <div class="product-thumbnail">
                 <a href="single-product.php?crop_id=<?php echo $crop_id?>"><img src="../images/yellow-maize-1416017.jpg" alt=""></a>
                  
                  <!-- Product Tags -->
                
                  <!-- Product Meta Data -->
                  <div class="product-meta-data">
                    <a href="#" data-toggle="tooltip" data-placement="top" title="Favourite"><i class="icon_heart_alt"></i></a>
                    <a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon_cart_alt"></i></a>
                    <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="arrow_left-right_alt"></i></a>
                  </div>
                </div>
                <!-- Product Description -->
                <div class="product-desc text-center pt-4">
                  <a href="#" class="product-title"><?php echo $crop_name; ?></a>
                  <h6 class="price">Rs: <?php echo $crop_rate; ?></h6>
                </div>
              </div>
            </div>
<?php
              }
              ?>

            </div>
          <!-- Pagination -->
          <nav>
            <ul class="pagination mb-0 mt-50">
              <li class="page-item active"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-right"></i></a></li>
            </ul>
          </nav>
        </div>
      </div>

    </div>
  </section>
  <!-- ##### Shop Area End ##### -->

  <!-- ##### Footer Area Start ##### -->
  <footer class="footer-area">
    <!-- Main Footer Area -->
    <div class="main-footer bg-img bg-overlay section-padding-80-0" style="background-image: url(../images/bg-img/3.jpg);">
      <div class="container">
        <div class="row">

          <!-- Single Footer Widget Area -->
          <div class="col-12 col-sm-6 col-lg-3">
            <div class="footer-widget mb-80">
              <a href="#" class="foo-logo d-block mb-30"><img src="../images/core-img/logo2.png" alt=""></a>
              <p>Lorem ipsum dolor sit amet, consecte stare adipiscing elit. In act honcus risus atiner Pellentesque risus.</p>
              <div class="contact-info">
                <p><i class="fa fa-map-pin" aria-hidden="true"></i><span>120 Raymond Rd, New York</span></p>
                <p><i class="fa fa-envelope" aria-hidden="true"></i><span>info.deercreative@gmail.com</span></p>
                <p><i class="fa fa-phone" aria-hidden="true"></i><span>+84 223 9000</span></p>
              </div>
            </div>
          </div>

      

        </div>
      </div>
    </div>

    <!-- Copywrite Area  -->
    <div class="copywrite-area">
      <div class="container">
        <div class="copywrite-text">
          <div class="row align-items-center">
            <div class="col-md-6">
              <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</p>
            </div>
         
          </div>
        </div>
      </div>
    </div>
  </footer>
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
</body>

</html>