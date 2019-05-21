<?php
session_Start();
require 'dbconnector.php';
require 'registration_insert.php';
require 'login_insert.php';
?>

<!DOCTYPE html>
<html>

<head>
	<title>Supply Hub</title>
	<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="css\landing-page-final.css">
		<link rel="stylesheet" type="text/css" href="css\bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="font-awesome\fontawesome-free-5.8.1-web\css\all.css">
</head>

<body>
    <header>
      <div class="fluid-container nav-color">
        <nav class="navbar navbar-light navbar-toggleable-sm">
          <a href="#" class="navbar-brand mb-0"><span><img class="custom-12" style="width:10%;" src="images\icon-2.png"> Supply Hub</span>	</a>

          <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#headerNav" aria-controls="headerNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div id="headerNav" class="collapse navbar-collapse justify-content-end">
            <ul class="navbar-nav">

              <li class="nav-item  mt-2" style="height: 35px;">
                <a href="#myModal" class="text-black-50" data-toggle="modal" style="text-decoration: none;">Register</a>
              </li>
			  
			  <li class="nav-item  mt-2" style="height: 35px;">
                <a href="#myModal-Login" class="text-black-50" data-toggle="modal" style="text-decoration: none;">Log-in</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="#about-us">About Us</a>
              </li>
			  
			  <li class="nav-item">
                <a class="nav-link" href="#sec-testimonials">Our Testimonials</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="#sec-contact">Contact Us</a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </header>
	<div class="fluid-container landing-page-main">
		<div class="split left">
			<h1>The Purchasing Staff</h1>
			<a href="#myModal" class="button trigger-btn" data-toggle="modal" style="text-decoration: none; color: white;">Join Us</a>
		</div>
		<div class="split right">
			<h1>The Supplier</h1>
			<a href="#myModal" class="button" data-toggle="modal" style="text-decoration: none; color: white;">Join Us</a>
			
		</div>
	</div>
	
	<div class="fluid-container class-1">
		<h2 class="text-center about-us text-success"><a id="about-us">About Us</a></h2>
		<div class="fluid-container about-us-p-2">
		<div class="row about-us-p">
		<div class="col-2 col-xs-2 col-lg-2 col-md-2"></div>
			<p class="text-center pl-4 pr-4 pt-2 col-8 col-xs-8 col-lg-8 col-md-8">If it smells like fish eat as much as you wish swipe at owner's legs find empty spot in cupboard and sleep all day. Roll over and sun my belly your pillow is now my pet bed intrigued by the shower, or knock over christmas tree scratch me there, elevator butt my slave human didn't give me any food so i pooped on the floor and meow all night. Pretend you want to go out but then don't.</p>
		</div>
		<div class="col-2 col-xs-2 col-lg-2 col-md-2"></div>
		</div>
		<!-- <div class="fluid-container numbers">
		<div class="row ">
			<div class="col-4 col-xs-4 col-lg-4 col-md-4"><h5 class="text-center">100 Staffs</h5></div>
			<div class="col-4 col-xs-4 col-lg-4 col-md-4"><h5 class="text-center">250 Suppliers</h5></div>		
			<div class="col-4 col-xs-4 col-lg-4 col-md-4"><h5 class="text-center">699 Items</h5></div>
		</div>
		</div> -->
		
		<!-- Testimonials -->
		<div class="container testimonials-class pb-0">
	<div class="row">
		<div class="col-md-8 col-center m-auto">
			<h2 class="text-center"><a id="sec-testimonials">Words from our makers</a></h2>
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
				<!-- Carousel indicators -->
				<!-- <ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					<li data-target="#myCarousel" data-slide-to="2"></li>
				</ol>  -->  
				<!-- Wrapper for carousel items -->
				<div class="carousel-inner">
					<div class="item carousel-item active">
						<p class="testimonial">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante. Idac bibendum scelerisque non non purus. Suspendisse varius nibh non aliquet.</p>
						<p class="overview"><b>Chester Segovia</b>, Chief Executive Officer</p>
					</div>
					<div class="item carousel-item">
						<p class="testimonial">Vestibulum quis quam ut magna consequat faucibus. Pellentesque eget nisi a mi suscipit tincidunt. Utmtc tempus dictum risus. Pellentesque viverra sagittis quam at mattis. Suspendisse potenti. Aliquam sit amet gravida nibh, facilisis gravida odio.</p>
						<p class="overview"><b> Rodrigo Duterte </b>, Utusan</p>
					</div>
					<div class="item carousel-item">
						<p class="testimonial">Phasellus vitae suscipit justo. Mauris pharetra feugiat ante id lacinia. Etiam faucibus mauris id tempor egestas. Duis luctus turpis at accumsan tincidunt. Phasellus risus risus, volutpat vel tellus ac, tincidunt fringilla massa. Etiam hendrerit dolor eget rutrum.</p>
						<p class="overview"><b>Ashary Balowa</b>, Chief Financial Officer</p>
					</div>
				</div>
				<!-- Carousel controls -->
				<a class="carousel-control left carousel-control-prev" href="#myCarousel" data-slide="prev">
					<i class="fa fa-angle-left"></i>
				</a>
				<a class="carousel-control right carousel-control-next" href="#myCarousel" data-slide="next">
					<i class="fa fa-angle-right"></i>
				</a>
			</div>
		</div>
	</div>
</div>
			<!-- Testimonials -->
			<!-- End page -->
			
	<section id="sec-contact" class="sec-contact pb-5">
    <div class="container pt-0">
      <div class="row justify-content-center">
        <div class="col-md-10 col-lg-7">
          <h2 class="h4 text-center"><a id="sec-contact">Have a question? Get in touch with us!</a></h2>
          
          <form action="" method="">
            <fieldset class="form-group">
              <label for="formName">Your Name:</label>
              <input id="formName" class="form-control" type="text" placeholder="Your Name" required>
            </fieldset>
              
            <fieldset class="form-group">
              <label for="formEmail1">Email address:</label>
              <input id="formEmail1" class="form-control" type="email" placeholder="Enter email" required>
            </fieldset>
            
            <fieldset class="form-group">
              <label for="formMessage">Your Message:</label>
              <textarea id="formMessage" class="form-control" rows="3" placeholder="Your message" required></textarea>
            </fieldset>
            
            <fieldset class="form-group text-center">
              <button class="btn btn-primary" type="submit">Send Message</button>
            </fieldset>
          </form>
        </div>
      </div>
    </div>
  </section>

  <footer class="footer">
    <div class="container">
      <ul class="list-inline mb-0 text-center">
        <li class="list-inline-item">
          <p class="text-success">©2019 Supply Hub</p>
        </li>
      </ul>
    </div>
  </footer>
</div>	
			
			<!-- End page -->
		
	</div>
	
	<!-- Modal -->

	<div id="myModal" class="modal fade">
	<div class="modal-dialog modal-login">
		<div class="modal-content">
			<form action="" method="POST" id="loginform">
				<div class="modal-header">				
					<h4 class="modal-title">Register</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">	
				<div id="errorDiv1"> </div>
					<div class="form-group">
						<label>Email</label>
						
						<input type="email_1" id="email_1" name="email_1" class="form-control" required="required" value="" autofocus>
						
					</div>
					<label>Username</label>
					<div class="form-group input-group">
						<div class="input-group-prepend">
							<span class="input-group-text" id="basic-addon1">@</span>
						</div>
						
						<input type="text" id="username_1" name="username_1" title="This field is required" class="form-control" oninvalid="this.setCustomValidity('Username must be atleast 6 characters long')"
						oninput="this.setCustomValidity('')" onkeypress="return AvoidSpace(event)"  required="required" minlength="6" value="">
						<script>
							function AvoidSpace(event) 
							{ var k = event ? event.which : window.event.keyCode;
							if (k == 32) return false; }
						</script>
					</div>
					<div class="form-group">
						<label>First Name</label>
						<input type="text" id="firstname_1" name="firstname_1" class="form-control"  value="" required>
					</div>
					<div class="form-group">
						<label>Last Name</label>
						<input type="text" id="lastname_1" name="lastname_1" class="form-control"  value="" required>
					</div>
					<div class="form-group">
						<label>Address</label>
						<input type="address" id="address_1" name="address_1" class="form-control"  value="" required>
					</div>
					<label>Phone Number</label>
					<div class="form-group input-group">
						<div class="input-group-prepend">
							<span class="input-group-text" name="phonenumber_1" id="basic-addon1">+63</span>
						</div>
						<input type="tel" pattern="[0-9]{10}" id="phonenumber_1" name="phonenumber_1"  oninvalid="this.setCustomValidity('Invalid Phone Number')"
						oninput="this.setCustomValidity('')" class="form-control"  value="" required >
					</div>
					<div class="form-group">
						<div class="clearfix">
							<label>Password</label>
							<!-- <a href="#" class="pull-right text-muted"><small>Forgot?</small></a> -->
						</div>
						<input type="password" class="form-control" name="password_1_1" id="password_1_1" minlength="8" required="required"><!-- 
						<span toggle="#inputPassword" class="fa fa-fw fa-eye field-icon toggle-password"></span> -->
					</div>
					<div class="form-group">
						<div class="clearfix">
							<label>Verify Password</label>
							<!-- <a href="#" class="pull-right text-muted"><small>Forgot?</small></a> -->
						</div>
						<input type="password" class="form-control" name="password_1_2" minlength="8" id="password_1_2" required="required"><!-- 
						<span toggle="#RepeatPassword" class="fa fa-fw fa-eye field-icon toggle-password"></span> -->
					</div>
					
					<div class="form-group row">
					<label style="margin-left: 15px;">I am a:</label>
						<div class="form-check-inline" style="padding-left: 30px;">
							<label class="form-check-label">
								<input type="radio" 
								id="usertype_1" name="usertype_1" value="staff" required>Purchasing Staff
							</label>
						</div>
						<div class="form-check-inline" style="padding-left: 10px; ">
							<label class="form-check-label">
								<input type="radio" 
								id="usertype_1" name="usertype_1" value="supplier" required>Supplier
							</label>
						</div>
						</div>
						<?php
							if(isset($success_message_1)){
							echo '<div class="success_message_1">'.$success_message_1.'</div>'; 
							}
							if(isset($error_message_1)){
							echo '<div class="error_message_1">'.$error_message_1.'</div>'; 
							}
						?>
					</div>
				<div class="modal-footer">
					<label class="pull-left">Already registered? <a href="#myModal-Login" class="trigger-btn text-primary" data-dismiss="modal" data-toggle="modal">Sign in</a></label>
					<button type="button" class="btn btn-primary pull-right btn-register" > Register </button>
				</div>
			</form>
		</div>
	</div>
</div>     
	
	<!-- Modal -->
	
	
	
	<!-- Modal for Login -->
	
	<div id="myModal-Login" class="modal fade">
	<div class="modal-dialog modal-login">
		<div class="modal-content">
			<form action="" method="post" id="loginform">
				<div class="modal-header">				
					<h4 class="modal-title">Log-in</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">	
				<div id="errorDiv1"> </div>
					<div class="form-group">
						<label>Email</label>
						<input type="email" id="email_2" name="email_2" class="form-control" required="required" value="" autofocus>
					</div>
					<div class="form-group">
						<div class="clearfix">
							<label>Password</label>
							<!--<a href="#Forgot-Password-Modal" class="trigger-btn text-primary" data-dismiss="modal" data-toggle="modal" class="float-right text-muted"><small>Forgot?</small></a>-->
						</div>
						<input type="password" name="password_2_1" class="form-control" minlength="8" id="password_2_1" required="required"><!-- 
						<span toggle="#inputPassword" class="fa fa-fw fa-eye field-icon toggle-password"></span> -->
					</div>
					<div class="form-group row">
					<label style="margin-left: 15px;">Choose user type:</label>
						<div class="form-check-inline" style="padding-left: 30px;">
							<label class="form-check-label">
								<input type="radio"
								name="usertype_2" value="staff" required>Purchasing Staff	
							</label>
						</div>
						<div class="form-check-inline" style="padding-left: 10px; ">
							<label class="form-check-label">
								<input type="radio" 
								name="usertype_2" value="supplier" required>Supplier
							</label>
						</div>
						</div>
					<?php
					if(isset($success_message_2)){
					echo '<div class="success_message">'.$success_message_2.'</div>'; 
						}
					if(isset($error_message_2)){
					echo '<div class="error_message">'.$error_message_2.'</div>'; 
					}
					?>	
				</div>
				<div class="modal-footer">
					<label class="checkbox-inline float-left"><input type="checkbox"> Remember me</label>
					<input type="submit" name="submit_2" class="btn btn-primary pull-right" value="Log-in">
				</div>
			</form>
		</div>
	</div>
</div>
	
	<!-- Modal for Login -->
	
	<!-- Modal for Forgot Password -->
	
	<!-- <div id="Forgot-Password-Modal" class="modal fade">
	<div class="modal-dialog modal-login">
		<div class="modal-content">
			<form action="" method="post" id="lg">
				<div class="modal-header">				
					<h4 class="modal-title">Password Reset</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">	
					<div class="form-group">
						<label>Email</label>
						<input type="email" id="email_3" class="form-control" required="required" value="" autofocus>
					</div>
					<div class=" form-group">
						<div class="clearfix">
							<label>New Password</label>
						</div>
						<input type="password" class="form-control" minlength="8" id="password_1" required="required">
						</div>
				</div>
				<div class="modal-footer">
					<input type="submit" name="submit_3" class="btn btn-primary pull-right" value="Reset Password">
				</div>
			</form>
		</div>
	</div>
</div> -->
	
	<!-- Modal for Forgot Password -->
	
	
	
	<script src="jquery\jquery-3.3.1.min.js"></script>
    <script src="popper-js\popper.min.js"></script>
    <script src="js\bootstrap.min.js"></script><!-- 
	<script src="js\toggle-password.js"></script> -->
	<script src="js\landing-page-final.js"></script>
	<script src="js\carousel-landing-page.js"></script>
	<script src="js\password_validation.js"></script>
	
</body>
	
</html>
