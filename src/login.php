<!DOCTYPE html>
<html lang="en">

<head>
	<title>Login V17</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendors/plugins/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendors/plugins/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendors/plugins/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendors/plugins/animsition/css/animsition.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendors/plugins/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendors/plugins/daterangepicker/daterangepicker.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<!--===============================================================================================-->
</head>

<body>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" action="logindetails.php" method="post">
					<span class="login100-form-title p-b-34">
						Account Login
					</span>
					

                    <div class="wrap-input100 rs2-wrap-input100 validate-input m-b-20" data-validate="">
						<input class="input100" type="text" name="user_email" placeholder="Useremail">
						<span class="focus-input100"></span>
					</div>    
                        
					<div class="wrap-input100 rs2-wrap-input100 validate-input m-b-20" data-validate="Type password">
						<input class="input100" type="password" name="user_password" placeholder="Password">
						<span class="focus-input100"></span>
					</div>
					
<!--
					<div class="wrap-input100 rs1-wrap-input100 validate-input m-b-20" style="margin-left:100px;" data-validate="Type user name">

						<select class="custom-select input100" id="inputGroupSelect01" style="height: 55px;">
									<option selected>User type</option>
									<option value="1">Farmer</option>
									<option value="2">Admin</option>
									<option value="3">Customer</option>
									<option value="3">Grocery</option>
								  </select>
						<span class="focus-input100"></span>
					</div>
-->

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" name="login" type="submit">
							Sign in
						</button>
					</div>

					<div class="w-full text-center p-t-27 p-b-239">
						<span class="txt1">
							Forgot
						</span>

						<a href="#" class="txt2">
							User name / password?
						</a>
					</div>

					<div class="w-full text-center">
						<a href="#" class="txt3">
							Sign Up
						</a>
					</div>
				</form>

				<div class="login100-more" style="background-image: url('images/nandhu-kumar-5NGTf4oD8RA-unsplash.jpg');"></div>
			</div>
		</div>
	</div>



	<div id="dropDownSelect1"></div>

	<!--===============================================================================================-->
	<script src="vendors/plugins/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendors/plugins/animsition/js/animsition.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendors/plugins/bootstrap/js/popper.js"></script>
	<script src="vendors/plugins/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendors/plugins/select2/select2.min.js"></script>
	<script>
		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});

	</script>
	<!--===============================================================================================-->
	<script src="vendors/plugins/daterangepicker/moment.min.js"></script>
	<script src="vendors/plugins/daterangepicker/daterangepicker.js"></script>
	<!--===============================================================================================-->
	<script src="vendors/plugins/countdowntime/countdowntime.js"></script>
	<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>

</html>
