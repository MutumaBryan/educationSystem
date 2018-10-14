<?php
 //variables
    $Host_Name = 'localhost';
    $Database_User = 'root';
    $Password = '';
    $Database_name = 'educationsystem';
    //connection
    $con = mysqli_connect($Host_Name, $Database_User, $Password, $Database_name);
?>
<?php
if(isset($_GET['id']) & !empty($_GET['id'])){
	//select query
	$id = $_GET['id'];
	$selsql = "SELECT * FROM comments WHERE id=$id";
	$selres = mysqli_query($con, $selsql);
	$selr = mysqli_fetch_assoc($selres);
	if(mysqli_num_rows($selres) < 1){
		//redirect to main comments page
            header('Location: index.php');
	}
        else{

	
?>
<html>
    <head>
    <title>Register</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="icon" href="images/logo2.png" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >

        <link rel="stylesheet" href="styles.css" >

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
<div class="panel panel-default">
  <div class="panel-body">
  	<form method="post">
	  <div class="form-group">
	    <label for="exampleInputEmail1">Name</label>
	    <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Title" value="<?php echo $selr['name']; ?>">
	  </div>
	  <div class="form-group">
	    <label for="exampleInputEmail1">Email</label>
	    <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email" value="<?php echo $selr['email']; ?>">
	  </div>
	  <div class="form-group">
	    <label for="exampleInputPassword1">Comment</label>
	    <textarea name="subject" class="form-control" rows="6"><?php echo $selr['subject']; ?></textarea>
	  </div>
	  <div class="form-group">
		  <div class="row">
				<div class="col-md-6">
				<label>Post Status</label>
					<select name="status" multiple class="form-control">
                                            <option value="draft" <?php if($selr['status'] == "draft"){ echo "selected"; } ?>>Draft</option>
                                            <option value="published" <?php if($selr['status'] == "published"){ echo "selected"; } ?>>Published</option>
                                          </select>
				</div>
			  </div>
		  </div>
	  <button type="submit" class="btn btn-success">Edit</button>
	</form>
  </div>
</div>
        </body>
</html>
<?php
}
}
if(isset($_POST) & !empty($_POST)){
	//print_r($_POST);
	$name = mysqli_real_escape_string($con, $_POST['name']);
	$email = mysqli_real_escape_string($con, $_POST['email']);
	$subject = mysqli_real_escape_string($con, $_POST['subject']);
	$status = $_POST['status'];

	$sql = "UPDATE comments SET name='$name', email='$email', subject='$subject', status='$status' WHERE id=$id";
	$res = mysqli_query($con, $sql) or die(mysqli_error($con));
	//$lid = mysqli_insert_id($connection);
	if($res){
		$smsg = "Comment updated Successfully";
                
		header("location: index.php");
	}else{
		$fmsg = "Failed to update Comment";
	}
}?>