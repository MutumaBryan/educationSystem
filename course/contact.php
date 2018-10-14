<?php
 //variables
    $Host_Name = 'localhost';
    $Database_User = 'root';
    $Password = '';
    $Database_name = 'educationsystem';
   
    //connection
    $con = mysqli_connect($Host_Name, $Database_User, $Password, $Database_name);
?>
﻿<!DOCTYPE html>
<html lang="en">
<head>
<title>Contact Us</title>
<link rel="icon" href="images/logo2.png" />
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Course Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">
<link rel="stylesheet" type="text/css" href="styles/contact_styles.css">

</head>
<body>

<div class="super_container">

	<!-- Header -->

	<header class="header d-flex flex-row">
		<div class="header_content d-flex flex-row align-items-center">
			<!-- Logo -->
			<div class="logo_container">
				<div class="logo">
					<img src="images/logo.png" alt="">
					<span>Education</span>
				</div>
			</div>

			<!-- Main Navigation -->
			<nav class="main_nav_container">
				<div class="main_nav">
					<ul class="main_nav_list">
                                            <li class="main_nav_item"><a href="index.php">Home</a></li>
						<li class="main_nav_item"><a href="courses.php">Schools</a></li>
						<li class="main_nav_item"><a href="news.php">News</a></li>
						<li class="main_nav_item"><a href="#">Contact</a></li>
					</ul>
				</div>
			</nav>
		</div>
		<div class="header_side d-flex flex-row justify-content-center align-items-center">
			<img src="images/phone-call.svg" alt="">
			<span>Kenya</span>
		</div>

		<!-- Hamburger -->
		<div class="hamburger_container">
			<i class="fas fa-bars trans_200"></i>
		</div>

	</header>
	
	<!-- Menu -->
	<div class="menu_container menu_mm">

		<!-- Menu Close Button -->
		<div class="menu_close_container">
			<div class="menu_close"></div>
		</div>

		<!-- Menu Items -->
		<div class="menu_inner menu_mm">
			<div class="menu menu_mm">
				<ul class="menu_list menu_mm">
                                    <li class="main_nav_item"><a href="index.php">home</a></li>
						<li class="main_nav_item"><a href="courses.php">Schools</a></li>
						<li class="main_nav_item"><a href="news.php">news</a></li>
						<li class="main_nav_item"><a href="#">contact</a></li>
				</ul>

				<!-- Menu Social -->
				
				<div class="menu_social_container menu_mm">
					<ul class="menu_social menu_mm">
						<li class="menu_social_item"><a href="https://www.facebook.com/Ministry-of-Education-Kenya-563951936948891/"><i class="fab fa-facebook-f"></i></a></li>
						<li class="menu_social_item"><a href="https://twitter.com/EduMinKenya"><i class="fab fa-twitter"></i></a></li>
					</ul>
				</div>

				<div class="menu_copyright menu_mm">Colorlib All rights reserved</div>
			</div>

		</div>

	</div>
	
	<!-- Home -->

	<div class="home">
		<div class="home_background_container prlx_parent">
			<div class="home_background prlx" style="background-image:url(images/contact_background.jpg)"></div>
		</div>
		<div class="home_content">
			<h1>Contact</h1>
		</div>
	</div>

	<!-- Contact -->

	<div class="contact">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					
					<!-- Contact Form -->
					<div class="contact_form">
						<div class="contact_title">Register Your School</div>

						<div class="contact_form_container">
							<form method="post">
                                                            <label style="color: black">Name <span style="color: red;">*</span></label>
                                                            <input id="contact_form_name" name="name" class="input_field contact_form_name" type="text" placeholder="Name" required="required" data-error="Name is required.">
                                                            <label style="color: black">School's Name <span style="color: red;">*</span></label>
                                                            <input id="contact_form_name" name="school" class="input_field contact_form_name" type="text" placeholder="School Name" required="required" data-error="School's Name is required.">
                                                            <label style="color: black">Phone Number <span style="color: red;">*</span></label>
                                                            <input id="contact_form_email" name="phone" class="input_field contact_form_email" type="text" placeholder="Phone Number" required="required">
                                                            <label style="color: black">School's E-mail Address <span style="color: red;">*</span></label>
                                                            <input id="contact_form_email" name="email" class="input_field contact_form_email" type="email" placeholder="E-mail" required="required" data-error="Valid email is required.">
								<select id="search_form_name" class="input_field search_form_name" name="Category" required="required">
                                                                    <option value="" style="opacity: 0.5; font-weight: 900;">Select your category</option>
                                                                    <option value="Primary">Primary</option>
                                                                    <option value="Secondary">Secondary</option>
                                                                    <option value="University">University</option>
                                                                </select>
                                                            <label style="color: black">Registration Number <span style="color: red;">*</span></label>
                                                            <input id="contact_form_email" name="registration" class="input_field contact_form_email" type="Password" placeholder="Registration Number" required="required" data-error="Password is required.">
                                                            <label style="color: black">School's Website link  <span style="color: red;">*</span></label>
                                                            <input id="contact_form_email" name="link" class="input_field contact_form_email" type="text" placeholder="Paste Here" required="required" data-error="Link is required.">
                                                            
                                                            <button id="contact_send_btn" name="register" type="submit" class="contact_send_btn trans_200" value="Submit">Register</button>
							</form>
                                                    <?php
                                                        if (isset($_POST['register'])){
                                                              $username = $_POST['name'];
                                                              $school = $_POST['school'];
                                                              $password = $_POST['registration'];
                                                              $link=$_POST['link'];
                                                              $phone=$_POST['phone'];
                                                              $category=$_POST['Category'];
                                                              $query = "SELECT * FROM `user` WHERE username='$username' AND password='$password'";
                                                              $res = mysqli_query($con, $query);
                                                              $count= mysqli_num_rows($res);

                                                              if($count == 1){
                                                                  switch($category)
                                                            {   case "Primary":
                                                                $res="INSERT INTO `primary_schools`( `link`, `name`, ) VALUES ('$link','$school')";
                                                                $result = mysqli_query($con,$res);
                                                                $fmsg ="Primary Successfully launched!";
                                                                echo "<script type='text/javascript'>alert('$fmsg');</script>";
                                                                    break;
                                                                    case "Secondary":
                                                                       $res1="INSERT INTO `secondary_schools`( `link`, `name`, ) VALUES ('$link','$school')";
                                                                       $result = mysqli_query($con,$res1);
                                                                       $fmsg ="Secondary Successfully launched!";
                                                                        echo "<script type='text/javascript'>alert('$fmsg');</script>";
                                                                    break;
                                                                    case "University":   
                                                                        $res2="INSERT INTO `universities`( `link`, `name`, ) VALUES ('$link','$school')";
                                                                        $result = mysqli_query($con,$res2);
                                                                        $fmsg ="University Successfully launched!";
                                                                        echo "<script type='text/javascript'>alert('$fmsg');</script>";
                                                                            break;
                                                                    default :
                                                                        echo "<script text="/javascript/">alert('School Not found')</script>";
                                                              }}else{
                                                                  $fmsg ="User Registration Failed";
                                                                 echo "<script type='text/javascript'>alert('$fmsg');</script>";
                                                              }
                                                          }
                                                    ?>
						</div>
					</div>
						
				</div>

				<div class="col-lg-4">
					<div class="about">
						<div class="about_title">Join Courses</div>
						<p class="about_text">Education is a right to all kenyan people. Find the school you love through the multiple websites on our platform.The Ministry of Education, Science and Technology is responsible for national policies and programmes that help Kenyans access quality and affordable, school education, post-school, higher education and academic research.</p>

						<div class="contact_info">
							<ul>
								<li class="contact_info_item">
									<div class="contact_info_icon">
										<img src="images/placeholder.svg" alt="https://www.flaticon.com/authors/lucy-g">
									</div>
									P.O Box 30040-00100 Nairobi, Kenya
                                                                        Jogoo House B, Harambee Avenue
								</li>
								<li class="contact_info_item">
									<div class="contact_info_icon">
										<img src="images/smartphone.svg" alt="https://www.flaticon.com/authors/lucy-g">
                                                                        </div>
									Tel: +254-020-3318581
                                                                        Fax: +254-020-20214287
								</li>
								<li class="contact_info_item">
									<div class="contact_info_icon">
										<img src="images/envelope.svg" alt="https://www.flaticon.com/authors/lucy-g">
									</div>
                                                                    info@education.go.ke
								</li>
							</ul>
						</div>

					</div>
				</div>

			</div>

			<!-- Google Map -->

<!--			<div class="row">
				<div class="col">
					<div id="google_map">
						<div class="map_container">
							<div id="map"></div>
						</div>
					</div>
				</div>
			</div>-->

		</div>
	</div>

	<!-- Footer -->

	<footer class="footer">
		<div class="container">
			
			<!-- Newsletter -->
                        <div class="newsletter">
				

			</div>			

			<!-- Footer Content -->

			<div class="footer_content">
				<div class="row">

					<!-- Footer Column - About -->
					<div class="col-lg-3 footer_col">

						<!-- Logo -->
						<div class="logo_container">
							<div class="logo">
								<img src="images/logo.png" alt="">
								<span>Education</span>
							</div>
						</div>

						<p class="footer_about_text">Education Kenya's mission is to provide, promote and coordinate quality education, training and research; and enhance integration of Science, Technology and Innovation into national production systems for sustainable development.</p>

					</div>

					<!-- Footer Column - Menu -->

					<div class="col-lg-3 footer_col">
						<div class="footer_column_title">Menu</div>
						<div class="footer_column_content">
							<ul>
                                                            <li class="main_nav_item"><a href="index.php">home</a></li>
                                                            <li class="main_nav_item"><a href="courses.php">Schools</a></li>
                                                            <li class="main_nav_item"><a href="news.php">news</a></li>
                                                            <li class="main_nav_item"><a href="#">contact</a></li>
							</ul>
						</div>
					</div>

					<div class="col-lg-3 footer_col">
						<div class="footer_column_title">Contact</div>
						<div class="footer_column_content">
							<ul>
								<li class="footer_contact_item">
									<div class="footer_contact_icon">
										<img src="images/placeholder.svg" alt="https://www.flaticon.com/authors/lucy-g">
									</div>
									P.O Box 30040-00100 Nairobi, Kenya
                                                                        Jogoo House B, Harambee Avenue
								</li>
								<li class="footer_contact_item">
									<div class="footer_contact_icon">
										<img src="images/smartphone.svg" alt="https://www.flaticon.com/authors/lucy-g">
									</div>
									Tel: +254-020-3318581
                                                                        Fax: +254-020-20214287
								</li>
								<li class="footer_contact_item">
									<div class="footer_contact_icon">
										<img src="images/envelope.svg" alt="https://www.flaticon.com/authors/lucy-g">
									</div>Email: info@education.go.ke
								</li>
							</ul>
						</div>
					</div>

				</div>
			</div>

			<!-- Footer Copyright -->

			<div class="footer_bar d-flex flex-column flex-sm-row align-items-center">
				<div class="footer_copyright">
					<span><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></span>
				</div>
				<div class="footer_social ml-sm-auto">
					<ul class="menu_social">
						<li class="menu_social_item"><a href="https://www.facebook.com/Ministry-of-Education-Kenya-563951936948891/"><i class="fab fa-facebook-f"></i></a></li>
						<li class="menu_social_item"><a href="https://twitter.com/EduMinKenya"><i class="fab fa-twitter"></i></a></li>
					</ul>
				</div>
			</div>

		</div>
	</footer>

</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/scrollTo/jquery.scrollTo.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
<script src="plugins/easing/easing.js"></script>
<script src="js/contact_custom.js"></script>

</body>
</html>