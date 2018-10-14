<?php
 //variables
    $Host_Name = 'localhost';
    $Database_User = 'root';
    $Password = '';
    $Database_name = 'educationsystem';
   
    //connection
    $con = mysqli_connect($Host_Name, $Database_User, $Password, $Database_name);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Schools Kenya</title>
<link rel="icon" href="images/logo2.png" />
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Course Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/courses_styles.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/courses_responsive.css">

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
						<li class="main_nav_item"><a href="news.php">Exams</a></li>
						<li class="main_nav_item"><a href="contact.php">Contact</a></li>
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
					<li class="menu_item menu_mm"><a href="index.php">Home</a></li>
					<li class="menu_item menu_mm"><a href="#">Schools</a></li>
					<li class="menu_item menu_mm"><a href="contact.php">Contact</a></li>
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
			<div class="home_background prlx" style="background-image:url(images/courses_background.jpg)"></div>
		</div>
		<div class="home_content">
			<h1>Schools</h1>
		</div>
	</div>

	<!-- Popular -->

	<div class="popular page_section">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title text-center">
						<h1>Websites For Schools</h1>
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
                                                            echo $category;
                                                            switch($category)
                                                            {   case "Primary":
                                                                $res="SELECT * FROM `primary_schools` WHERE name LIKE '%$name%'";
                                                                $result = mysqli_query($con,$res);
                                                                    if(mysqli_num_rows($result)>0)
                                                                    {
                                                                        echo '<h1>Search Results</h1>';
                                                                        while ($row=mysqli_fetch_array($result)) {
                                                                            echo '<div class="col-lg-4 course_box">
                                                                                       <div class="card">

                                                                                               <div class="price_box d-flex flex-row align-items-center">	
                                                                                                   <div class="course_author_name">';echo "<a href='".$row['link']."'>"; echo $row['name'];echo', </a><span>Primary School</span></div>
                                                                                                   <div class="course_price d-flex flex-column align-items-center justify-content-center"><img src="images/brick-filled.png" alt="" width="30" height="30"></div>
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
                                                                                                       <div class="course_price d-flex flex-column align-items-center justify-content-center"><img src="images/phone-call.svg" alt="" width="30" height="30"></div>
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
                                                                                                       <div class="course_author_name">';echo "<a href='".$row['link']."'>"; echo $row['name'];echo', </a><span>University</span></div>
                                                                                                       <div class="course_price d-flex flex-column align-items-center justify-content-center"><img src="images/student-male.png" alt="" width="30" height="30"></div>
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

			<div class="row course_boxes">
				 <?php
                                 $res=mysqli_query($con,"SELECT * FROM `primary_schools`");
                                 $res1=mysqli_query($con,"SELECT * FROM `secondary_schools`");
                                 $res2=mysqli_query($con,"SELECT * FROM `universities`");
                                 while ($row=mysqli_fetch_array($res)) {
                                     echo '<div class="col-lg-4 course_box">
                                                <div class="card">

                                                        <div class="price_box d-flex flex-row align-items-center">	
                                                            <div class="course_author_name">';echo "<a href='".$row['link']."'>"; echo $row['name'];echo', </a><span>Primary School</span></div>
                                                            <div class="course_price d-flex flex-column align-items-center justify-content-center"><img src="images/brick-filled.png" alt="" width="30" height="30"></div>
                                                        </div>
                                                </div>
                                            </div>';
                                 }
                                 while ($row=mysqli_fetch_array($res1)) {
                                     echo '<div class="col-lg-4 course_box">
                                                <div class="card">

                                                        <div class="price_box d-flex flex-row align-items-center">	
                                                            <div class="course_author_name">';echo "<a href='".$row['link']."'>"; echo $row['name'];echo', </a><span>Secondary School</span></div>
                                                            <div class="course_price d-flex flex-column align-items-center justify-content-center"><img src="images/phone-call.svg" alt="" width="30" height="30"></div>
                                                        </div>
                                                </div>
                                            </div>';
                                 }
                                 while ($row=mysqli_fetch_array($res2)) {
                                     echo '<div class="col-lg-4 course_box">
                                                <div class="card">

                                                        <div class="price_box d-flex flex-row align-items-center">	
                                                            <div class="course_author_name">';echo "<a href='".$row['link']."'>"; echo $row['name'];echo', </a><span>University</span></div>
                                                            <div class="course_price d-flex flex-column align-items-center justify-content-center"><img src="images/student-male.png" alt="" width="30" height="30"></div>
                                                        </div>
                                                </div>
                                            </div>';
                                 }
                                 ?>
				

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
                                                            <li class="main_nav_item"><a href="#">Schools</a></li>
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
<script src="plugins/scrollTo/jquery.scrollTo.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="js/courses_custom.js"></script>

</body>
</html>