<?php 
session_start();
if(isset($_POST['login'])){
$user_name = $_POST['name'];
$psw = $_POST['password'];
//$psw2 = md5($psw);

include('include/connection.php');
$query = "SELECT `user_name`, `password`FROM `user_details` WHERE user_name ='$user_name'";
 
$result = mysqli_query($connection,$query);

$row  = mysqli_fetch_array($result);

 if (empty($user_name)||empty($psw)) {
    
 } else {
    if($row['user_name']==$user_name&&$row['password']==$psw){
      $_SESSION['user_login'] = $user_name;
      header('location:make_pass.php'); 
     }else {
      echo '<script language = "javascript">';
      echo 'alert("Password Not Match")';
      echo '</script>';
    }
 } 
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gate Pass</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
    <div id="login">
        <h3 class="text-center text-white pt-5">User Login form</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="index.php" method="post">
                            <h3 class="text-center text-info">Login</h3>
                            <div class="form-group">
                                <label for="username" class="text-info">Username:</label><br>
                                <input type="text" name="name" id="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Password:</label><br>
                                <input type="password" name="password" id="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="remember-me" class="text-info"><span>Remember me</span> <span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br>
                                <input type="submit" name="login" class="btn btn-info btn-md" value="submit">
                            </div>
                            <div id="register-link" class="text-right">
                                <a href="register.php" class="text-info">Register here</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>