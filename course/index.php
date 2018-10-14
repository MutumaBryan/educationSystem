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
<title>Education Kenya</title>
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
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">

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
						<li class="main_nav_item"><a href="#">home</a></li>
						<li class="main_nav_item"><a href="courses.php">Schools</a></li>
						<li class="main_nav_item"><a href="news.php">exams</a></li>
						<li class="main_nav_item"><a href="contact.php">contact</a></li>
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
						<li class="main_nav_item"><a href="#">home</a></li>
						<li class="main_nav_item"><a href="courses.php">Schools</a></li>
						<li class="main_nav_item"><a href="news.php">news</a></li>
						<li class="main_nav_item"><a href="contact.php">contact</a></li>
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

		<!-- Hero Slider -->
		<div class="hero_slider_container">
			<div class="hero_slider owl-carousel">
				
				<!-- Hero Slide -->
				<div class="hero_slide">
					<div class="hero_slide_background" style="background-image:url(images/slider_background.jpg)"></div>
					<div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
						<div class="hero_slide_content text-center">
							<h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut">Join our <span>Education</span> today!</h1>
						</div>
					</div>
				</div>
				
				<!-- Hero Slide -->
				<div class="hero_slide">
					<div class="hero_slide_background" style="background-image:url(images/slider_background.jpg)"></div>
					<div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
						<div class="hero_slide_content text-center">
							<h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut">Join our <span>Education</span> today!</h1>
						</div>
					</div>
				</div>
				
				<!-- Hero Slide -->
				<div class="hero_slide">
					<div class="hero_slide_background" style="background-image:url(images/slider_background.jpg)"></div>
					<div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
						<div class="hero_slide_content text-center">
							<h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut">Join our <span>Education</span> today!</h1>
						</div>
					</div>
				</div>

			</div>

			<div class="hero_slider_left hero_slider_nav trans_200"><span class="trans_200">prev</span></div>
			<div class="hero_slider_right hero_slider_nav trans_200"><span class="trans_200">next</span></div>
		</div>

	</div>

	<div class="hero_boxes">
		<div class="hero_boxes_inner">
			<div class="container">
				<div class="row">

					<div class="col-lg-4 hero_box_col">
						<div class="hero_box d-flex flex-row align-items-center justify-content-start">
							<img src="images/earth-globe.svg" class="svg" alt="">
							<div class="hero_box_content">
								<h2 class="hero_box_title">Online Education</h2>
								<a href="courses.php" class="hero_box_link">view more</a>
							</div>
						</div>
					</div>

					<div class="col-lg-4 hero_box_col">
						<div class="hero_box d-flex flex-row align-items-center justify-content-start">
							<img src="images/books.svg" class="svg" alt="">
							<div class="hero_box_content">
								<h2 class="hero_box_title">Our Universities</h2>
								<a href="courses.php" class="hero_box_link">view more</a>
							</div>
						</div>
					</div>

					<div class="col-lg-4 hero_box_col">
						<div class="hero_box d-flex flex-row align-items-center justify-content-start">
							<img src="images/professor.svg" class="svg" alt="">
							<div class="hero_box_content">
								<h2 class="hero_box_title">Our Teachers</h2>
								<a href="http://www.knut.or.ke/" class="hero_box_link">view more</a>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>

	<!-- Popular -->

	<div class="popular page_section">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title text-center">
						<h1>Popular Schools</h1>
					</div>
				</div>
			</div>

			<div class="row course_boxes">
				
				<!-- Popular Course Item -->
				<div class="col-lg-4 course_box">
					<div class="card">
						
						<div class="price_box d-flex flex-row align-items-center">	
                                                    <div class="course_author_name"><a href="http://alliancehighschool.sc.ke/">Alliance High School, </a><span>Secondary School</span></div>
                                                    <div class="course_price d-flex flex-column align-items-center justify-content-center"><img src="images/phone-call.svg" alt="" width="30" height="30"></div>
						</div>
					</div>
				</div>

				<!-- Popular Course Item -->
				<div class="col-lg-4 course_box">
					<div class="card">
						
						<div class="price_box d-flex flex-row align-items-center">	
                                                    <div class="course_author_name"><a href="https://www.strathmore.edu/">Strathmore University, </a><span>University</span></div>
                                                    <div class="course_price d-flex flex-column align-items-center justify-content-center"><img src="images/student-male.png" alt="" width="30" height="30"></div>
						</div>
					</div>
				</div>

				<!-- Popular Course Item -->
				<div class="col-lg-4 course_box">
					<div class="card">
						
						<div class="price_box d-flex flex-row align-items-center">	
                                                    <div class="course_author_name"><a href="http://novapioneer.com/kenya/">Nova Pioneer, </a><span>Primary School</span></div>
                                                    <div class="course_price d-flex flex-column align-items-center justify-content-center"><img src="images/brick-filled.png" alt="" width="30" height="30"></div>
						</div>
					</div>
				</div>
			</div>
		</div>		
	</div>

	<!-- Register -->

	<div class="register">

		<div class="container-fluid">
			
			<div class="row row-eq-height">
				<div class="col-lg-6 nopadding">
					
					<!-- Register -->

					<div class="register_section d-flex flex-column align-items-center justify-content-center">
						<div class="register_content text-center">
							<h1 class="register_title">Register and get to show case your school, <span>online presence required</span>.</h1>
							<p class="register_text">Let people know of your amazing school through your online presence. Adding of school will require verification and submission of the necessary files to ensure integrity</p>
                                                        <div class="button button_1 register_button mx-auto trans_200"><a href="contact.php">register now</a></div>
						</div>
					</div>

				</div>

				<div class="col-lg-6 nopadding">
					
					<!-- Search -->

					<div class="search_section d-flex flex-column align-items-center justify-content-center">
						<div class="search_background" style="background-image:url(images/search_background.jpg);"></div>
						<div class="search_content text-center">
							<h1 class="search_title">Search for your dream School</h1>
                                                        <form id="search_form" class="search_form" action="" method="post">
                                                            <input id="search_form_name" class="input_field search_form_name" name="name" type="text" placeholder="School Name" required="required" data-error="School name is required."><br><br>
                                                            <select id="search_form_name" class="input_field search_form_name" name="Category" required="required">
                                                                <option value="" style="opacity: 0.5; font-weight: 900;">Select your category</option>
                                                                <option value="Primary">Primary</option>
                                                                <option value="Secondary">Secondary</option>
                                                                <option value="University">University</option>
                                                            </select>
                                                            <button id="search_submit_button" name="search" type="submit" class="search_submit_button trans_200" value="Submit">search school</button>
							</form>
                                                        <?php
                                                        if(isset($_POST['search']))
                                                        {
                                                            $name=$_POST['name'];
                                                            $category=$_POST['Category'];
                                                            switch($category)
                                                            {   case "Primary":
                                                                $res="SELECT * FROM `primary_schools` WHERE name LIKE '%$name%'";
                                                                $result = mysqli_query($con,$res);
                                                                    if(mysqli_num_rows($result)>0)
                                                                    {
                                                                        while ($row=mysqli_fetch_array($result)) {
                                                                            echo '<div class="col-lg-4 course_box">
                                                                                       <div class="card">

                                                                                               <div class="price_box d-flex flex-row align-items-center">	
                                                                                                   <div class="course_author_name">';echo "<a href='".$row['link']."'>"; echo $row['name'];echo', </a><span>Primary School</span></div>
                                                                                                   
                                                                                               </div>
                                                                                       </div>
                                                                                   </div>';
                                                                        }
                                                                    }
                                                                    break;
                                                                    case "Secondary":
                                                                        $res1="SELECT * FROM `secondary_schools` WHERE name LIKE '%$name%'";
                                                                        $result1 = mysqli_query($con,$res1);
                                                                            if(mysqli_num_rows($result1)>0)
                                                                            {
                                                                            while ($row=mysqli_fetch_array($result1)) {
                                                                                echo '<div class="col-lg-4 course_box">
                                                                                           <div class="card">

                                                                                                   <div class="price_box d-flex flex-row align-items-center">	
                                                                                                       <div class="course_author_name">';echo "<a href='".$row['link']."'>"; echo $row['name'];echo', </a><span>Secondary School</span></div>
                                                                                                       
                                                                                                   </div>
                                                                                           </div>
                                                                                       </div>';
                                                                            }
                                                                            }
                                                                    break;
                                                                    case "University":   
                                                                        $res2="SELECT * FROM `universities` WHERE name LIKE '%$name%'";
                                                                        $result2= mysqli_query($con,$res2);
                                                                            if(mysqli_num_rows($result2)>0)
                                                                            {
                                                                            while ($row=mysqli_fetch_array($result2)) {
                                                                                echo '<div class="col-lg-4 course_box">
                                                                                           <div class="card">
                                                                                           <div class="price_box d-flex flex-row align-items-center">	
                                                                                                       <div>';echo "<a href='".$row['link']."'>"; echo $row['name'];echo', </a><span>University</span></div>
                                                                                                   </div>
                                                                                           </div>
                                                                                       </div>';
                                                                            }
                                                                            }
                                                                            break;
                                                                    default :
                                                                        echo "<script text="/javascript/">alert('School Not found')</script>";
                                                                            }    
                                                        }
                                                        ?>
						</div> 
					</div>

				</div>
			</div>
		</div>
	</div>

	<!-- Services -->

	<div class="services page_section">
		
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title text-center">
						<h1>Our Services</h1>
					</div>
				</div>
			</div>

			<div class="row services_row">

				<div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
					<div class="icon_container d-flex flex-column justify-content-end">
						<img src="images/earth-globe.svg" alt="">
					</div>
					<h3>Online Education</h3>
                                        <p>Our new cirriculum supports online education to all students and pupils with the use of our <span>free laptops</span></p>
				</div>

				<div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
					<div class="icon_container d-flex flex-column justify-content-end">
						<img src="images/exam.svg" alt="">
					</div>
					<h3>Useful Knowledge</h3>
					<p>Our syllabus and activities cover only the best with resouces and knowledge to help our students succeed in life.</p>
				</div>

				<div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
					<div class="icon_container d-flex flex-column justify-content-end">
                                            <img src="images/money.png" alt="">
					</div>
					<h3>Free Primary Education</h3>
					<p>Kenya is one of the few countries to offer free primary education to all who seek it.</p>
				</div>

				<div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
					<div class="icon_container d-flex flex-column justify-content-end">
						<img src="images/professor.svg" alt="">
					</div>
					<h3>Qualified Staff</h3>
					<p>Our teaching and educating staff at large is there to help you get to even greater heights. They assist in any way possible and train our students to learn and advance smarter than before.</p>
				</div>

				<div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
					<div class="icon_container d-flex flex-column justify-content-end">
						<img src="images/sports.png" alt="">
					</div>
					<h3>Sports</h3>
					<p>Kenya not only has one of the best cirriculums but also great sport competitions among schools that aid in the growth of ones craft. Students are equipped with gear to have fun and grow their skill.</p>
				</div>

				<div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
					<div class="icon_container d-flex flex-column justify-content-end">
                                            <img src="images/student-male.png" alt="">
					</div>
					<h3>Graduate Diploma</h3>
					<p>Hard work pays and at the end of a student's time in our cirriculum they are awarded a certificate that guarantee them a job in the field they chose.</p>
				</div>

			</div>
		</div>
	</div>

	<!-- Testimonials -->

        <hr style="height:1px;border:none;color:#333;background-color:#333;" />

	<!-- Events -->

	<div class="events page_section">
		<div class="container">
			
			<div class="row">
				<div class="col">
					<div class="section_title text-center">
						<h1>Comment Section</h1>
					</div>
				</div>
			</div>
			
			<div class="event_items">

				<!-- Event Item -->
				<div class="panel panel-default">
                                  <div class="panel-body">
                                      
                                      <form method="post" action="">
                                      <?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php } ?>
                                      <?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>
                                          <div class="form-group">
                                            <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Name">
                                          </div>
                                          <div class="form-group">
                                            <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                                          </div>
                                          <div class="form-group">
                                            <label for="exampleInputPassword1">Subject</label>
                                            <textarea name="subject" class="form-control" rows="3"></textarea>
                                          </div>
                                          <button type="submit" name="comment" class="btn btn-success">Submit</button>
                                      </form><br>
                                      
                                      <?php
                                      if(isset($_POST['comment'])){
                                                $name = mysqli_real_escape_string($con, $_POST['name']);
                                                $email = mysqli_real_escape_string($con, $_POST['email']);
                                                $subject = mysqli_real_escape_string($con, $_POST['subject']);

                                                $isql = "INSERT INTO comments (name, email, subject, status) VALUES ('$name', '$email', '$subject', 'draft')";
                                                $ires = mysqli_query($con, $isql) or die(mysqli_error($connection));
                                                if($ires){
                                                        $smsg = "Your Comment Submitted Successfully";
                                                }else{
                                                        $fmsg = "Failed to Submit Your Comment";
                                                }
                                        }
                                      ?>
                                      <body><div class="panel panel-default">
                                              <h3>Comments</h3> 
                                                            <?php
                                                            $sql = "SELECT * FROM comments";
                                                            $res=mysqli_query($con, $sql);
                                                            ?>
                                                            <?php
                                                                    while ( $r = mysqli_fetch_assoc($res)) {
                                                            ?>
                                              <section style="border: solid 0.5px; border-radius: 5px; padding: 25x;">
                                                  <p style="color: black; padding-left: 25px; padding-top: 10px">  <?php echo $r['subject']; ?><br>
                                                                            Posted by:<?php echo $r['name'] ?> 
                                                                            <?php echo $r['submittime']; ?>                                                                             
                                                                            <a href="editcomment.php?id=<?php echo $r['id']; ?>" style="color: green">Edit</a>  <a href="delcomment.php?id=<?php echo $r['id']; ?>" style="color: green">Del</a></p>
                                              </section><br><br>
                                                            <?php } ?>
                                                   
                                    </div>
                                  </div>
                                </div>
			</div>
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
                                                            <li class="main_nav_item"><a href="#">home</a></li>
                                                            <li class="main_nav_item"><a href="courses.php">Schools</a></li>
                                                            <li class="main_nav_item"><a href="news.php">news</a></li>
                                                            <li class="main_nav_item"><a href="contact.php">contact</a></li>
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
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/scrollTo/jquery.scrollTo.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="js/custom.js"></script>

</body>
</html>