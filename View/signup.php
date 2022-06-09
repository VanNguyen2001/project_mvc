<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Đăng Nhập Đăng Ký</title>
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
	 
	<hr>
    <div class="container" id="container">
        <div class="text-center pt-5">
            <form action="index.php" method="POST">
                <input type="hidden" name="controller" value="authController">
                <input type="hidden" name="page" value="register">
                <h1>ĐĂNG KÝ</h1>
                <?php if(isset($_SESSION['errors'])) { ?>
                <h5 style="color: red;"><?php echo $_SESSION['errors']; unset($_SESSION['errors']); ?></h5>
                 <?php } ?>
                <input type="text" placeholder="Tên tài khoản" name="name" id="name"class="card">
                <input type="text" placeholder="Tên đầy đủ" name="full_name" id="name"class="card">
                <input type="text" placeholder="Số điện thoại" name="phone" id="phone"class="card">             
                <input type="password" placeholder="Nhập mật khẩu" name="password" id="password"class="card">
                <input type="password" placeholder="Nhập lại mật khẩu" name="password-repeat" id="password-repeat"class="card">
                <input type="text" placeholder="Địa chỉ" name="address" id="address"class="card">
                <p> <a href="<?php echo url_pattern('homeController', 'login'); ?>" style="color: #5ce1e6;">Trở Lại Trang Đăng Nhập</a></p>
                <button type="submit" class="submit card" style="background-color: #5ce1e6;">Đăng ký</button>
            </form>
        </div>
    </div>
</body>
</html>