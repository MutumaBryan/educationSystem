<?php 
$connect = mysqli_connect("localhost", "root", "", "educationsystem");
$query = "SELECT * FROM grade_table ORDER BY grade_id ASC";
$result = mysqli_query($connect, $query);
?>
<!--<!DOCTYPE html>
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

	 Header 

	<header class="header d-flex flex-row">
		<div class="header_content d-flex flex-row align-items-center">
			 Logo 
			<div class="logo_container">
				<div class="logo">
					<img src="images/logo.png" alt="">
					<span>Education</span>
				</div>
			</div>

			 Main Navigation 
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

		 Hamburger 
		<div class="hamburger_container">
			<i class="fas fa-bars trans_200"></i>
		</div>

	</header>-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>  
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  
 </head>
 <body>
  <div class="container">
   <h1 align="center">Results Table</h1>
   <br />
   
   <div class="table-responsive">
    <table id="product_data" class="table table-bordered table-striped">
     <thead>
      <tr>
       <th>Student Name</th>
       <th>School Name</th>
       <th>
        <select name="category" id="category" class="form-control">
         <option value="">Category Search</option>
         <?php 
         while($row = mysqli_fetch_array($result))
         {
          echo '<option value="'.$row["mark"].'">'.$row["grade"].'</option>';
         }
         ?>
        </select>
       </th>
       <th>Mark</th>
      </tr>
     </thead>
    </table>
   </div>
  </div>
 </body>
</html>

<script type="text/javascript" language="javascript" >
$(document).ready(function(){
 
 load_data();

 function load_data(is_category)
 {
  var dataTable = $('#product_data').DataTable({
   "processing":true,
   //"serverSide":true,
   "order":[],
   "ajax":{
    url:"fetch.php",
    type:"POST",dataSrc:"",
    data:{is_category:is_category}
   },
   "columnDefs":[
    {
     "targets":[2],
     "orderable":false,
    },
   ],
  });
 }

 $(document).on('change', '#category', function(){
  var category = $(this).val();
  $('#product_data').DataTable().destroy();
  if(category != '')
  {
   load_data(category);
  }
  else
  {
   load_data();
  }
 });
});
</script>
