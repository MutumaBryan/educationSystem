<?php
 //variables
    $Host_Name = 'localhost';
    $Database_User = 'root';
    $Password = '';
    $Database_name = 'educationsystem';
   $session_start();
    //connection
    $con = mysqli_connect($Host_Name, $Database_User, $Password, $Database_name);
?>
<html>
    <head>
        <title>Login</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="icon" href="images/logo2.png" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >

        <link rel="stylesheet" href="styles.css" >

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <style>
            body {
                padding-top: 40px;
                padding-bottom: 40px;
                background-color: #eee;
              }

              .form-signin {
                max-width: 330px;
                padding: 15px;
                margin: 0 auto;
              }
              .form-signin .form-signin-heading,
              .form-signin .checkbox {
                margin-bottom: 10px;
              }
              .form-signin .checkbox {
                font-weight: normal;
              }
              .form-signin .form-control {
                position: relative;
                height: auto;
                -webkit-box-sizing: border-box;
                   -moz-box-sizing: border-box;
                        box-sizing: border-box;
                padding: 10px;
                font-size: 16px;
              }
              .form-signin .form-control:focus {
                z-index: 2;
              }
              .form-signin input[type="email"] {
                margin-bottom: -1px;
                border-bottom-right-radius: 0;
                border-bottom-left-radius: 0;
              }
              .form-signin input[type="password"] {
                margin-bottom: 10px;
                border-top-left-radius: 0;
                border-top-right-radius: 0;
              }
        </style>
    </head>
    <?php
              if (isset($_POST['username']) && isset($_POST['password'])){
                    $username = $_POST['username'];
                    $password = $_POST['password'];

                    $query = "SELCET * FROM `user` WHERE username='$username' AND password='$password'";
                    $res = mysqli_query($con, $query);
                    $count= mysqli_num_rows($res);
                    
                    if($count == 1){
                        while ( $r = mysqli_fetch_assoc($res)) {
                        $_SESSION['username']=$username;
                        $_SESSION['id']= $r['id'];
                        }
                        header('Location: index.php');
                    }else{
                        $fmsg ="User Registration Failed";
                        echo "<script>alert($fmsg)</script>";
                    }
                }
          ?>
    <div class="container">
      <form class="form-signin" method="POST">
        <h2 class="form-signin-heading">Please Login</h2>
        <div class="input-group">
	  <span class="input-group-addon" id="basic-addon1">@</span>
	  <input type="text" name="username" class="form-control" placeholder="Username" required>
	</div>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <button class="btn btn-lg btn-success btn-block" type="submit">Login</button>
        <a class="btn btn-lg btn-success btn-block" href="register.php">Register</a>
      </form>
    </div>
</html>
?>