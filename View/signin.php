<!DOCTYPE html>
<html>
<head>
	<title>NH22 - Đăng Ký</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
	<link rel="stylesheet" type="text/css" href="public/css/main.css">
</head>
<body class="bg-l">
  <div class="container-fluid">
    <div class="container tt">
      <div class="d-flex justify-content-center">
          <div class="card">
              <div class="card-header bg-info">
                <h3 class="text-white"><b>ĐĂNG KÝ</b></h3>
                <div class="d-flex justify-content-end">
                  <a href=""><span><i class="fab fa-facebook-square m-1 text-white fs-25"></i></span></a>
                  <a href=""><span><i class="fab fa-google-plus-square m-1 text-white fs-25"></i></span></a>
                  <a href=""><span><i class="fab fa-instagram m-1 text-white fs-25"></i></span></a>
                </div>
              </div>
              <div class="card-body">
                <form action="" method="POST" onsubmit="return validate()">
                  <div class="input-group form-group">
                      <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-user"></i></span>
                      </div>
                      <input type="text" class="form-control" placeholder="Tên tài khoản" name="username" id="username">
                    </div>
                    <div class="input-group form-group">
                      <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-envelope-square"></i></span>
                      </div>
                      <input type="text" class="form-control" placeholder="Email" name="email" id="email">
                    </div><div class="input-group form-group">
                      <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-phone"></i></span>
                      </div>
                      <input type="text" class="form-control" placeholder="Số điện thoại" name="phone" id="phone">
                    </div>
                    <div class="input-group form-group">
                      <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-key"></i></span>
                      </div>
                      <input type="password" class="form-control" placeholder="Mật khẩu" name="password" id="password">
                    </div>
                    <div class="input-group form-group">
                      <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-key"></i></span>
                      </div>
                      <input type="password" class="form-control" placeholder="Nhập lại mật khẩu" name="password-repeat" id="password-repeat">
                    </div>
                    <div class="align-items-center">
                      Tôi chắc chắn với các thông tin trên là đúng
                      <input type="checkbox">
                    </div>
                    <div class="form-group card">
                      <input type="submit" value="Đăng ký" class="btn login_btn card bg-info text-white align-items-center" onclick="return validate()">
                    </div>
                </form>
              </div>
              <div class="card-footer bg-info">
                <div class="d-flex justify-content-center link" id="thu">
                    <a href="index.php?controller=homeController&page=login" class="text-white">Quay lại trang đăng nhập</a>
                </div>
              </div>
          </div>
        </div>
    </div>
  </div>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script type="text/javascript">
        function validate() {
  var u = document.getElementById("username").value;
  var p = document.getElementById("phone").value;
  var p3 = document.getElementById("email").value;
  var p1 = document.getElementById("password").value;
  var p2 = document.getElementById("password-repeat").value;
   
  if(u== "") {
  alert("Vui lòng nhập tên!");
  return false;
  }
  if(p== "") {
  alert("Vui lòng nhập số điện thoại!");
  return false;
  }
  if(p3== "") {
  alert("Vui lòng nhập email!");
  return false;
  }
  if((p1 == "") || (p1.length < 6)) {
  alert("Vui lòng nhập mật khẩu!");
  return false;
  }
  if(p2 == "") {
  alert("Vui lòng xác minh mật khẩu!");
  return false;
  }
  if((u != "") && (p1 == p2)){
    localStorage.setItem("name_db", u);
    localStorage.setItem("pass_db", p1);

    document.getElementById("thu").innerHTML = "Hãy đăng nhập nhé!";
    alert("Bạn đã đăng ký thành công!");
  }else alert("Xin hãy điền đúng thông tin");

  return true;
}
  </script>
</body>
</html>