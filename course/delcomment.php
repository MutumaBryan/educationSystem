<?php
//variables
    $Host_Name = 'localhost';
    $Database_User = 'root';
    $Password = '';
    $Database_name = 'educationsystem';
   
    //connection
    $con = mysqli_connect($Host_Name, $Database_User, $Password, $Database_name);
if(isset($_GET['id']) & !empty($_GET['id'])){
	$id = $_GET['id'];
        echo $id;
	$delsql="DELETE FROM `comments` WHERE id='$id'";
	if(mysqli_query($con, $delsql)){
		header("Location: index.php");
	}
}else{
	header('Location: index.php');
}?>

