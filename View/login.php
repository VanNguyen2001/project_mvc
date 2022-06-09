<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Đăng Nhập Đăng Ký</title>
    <link rel="stylesheet" href="./Public/css/main.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="./Public/css/login.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<script src="https://kit.fontawesome.com/9872ede934.js" crossorigin="anonymous"></script>
    
    <script src="./Public/js/registration.js"></script>
    <script src="./Public/js/login.js"></script>

</head>
	<style>
		body {
		  background-image: url('./Public/images/imgmain1.png');
		  background-repeat: no-repeat;
		  background-attachment: fixed;  
		  background-size: cover;
		}
	</style>
    
<body>
	<a class="" href="<?php echo url_pattern('homeController', 'home'); ?>" ><img src="./Public/images/wyml.png" width="150px" style="border-radius: 10px;"></a>
    <div class="container" id="container">
        <div class="text-center pt-5">
            <form method="POST" action="index.php">
                <input type="hidden" name="controller" value="authController">
                <input type="hidden" name="page" value="login">
                <h1 class="">ĐĂNG NHẬP</h1>
                <div class="social-container">
                    
                </div>
                <label for="username1">
                <input class="card" type="text" id="username1" placeholder="Nhập tài khoản"  name="name" />
                </label>
                <label for="password1">
                <input id="password1" type="password" placeholder="Nhập mật khẩu" class="form-control" name="password" value="">
                <span toggle="#password-field" class="fa fa-lg fa-eye field-icon toggle-password" onclick="myFunction2()"></span>
                </label> 
            <div class="">
            </div>        
            <div class="register login">
                <p> <a href="<?php echo url_pattern('homeController', 'signup'); ?>" style="color: #5ce1e6;">Đăng Ký Tài Khoản</a></p>
                <button class="card" type="submit" style="background-color: #5ce1e6;">ĐĂNG NHẬP</button>
            </div>
            </form>
        </div>    
    </div>
</body>
</html>