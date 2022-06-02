<!DOCTYPE html>
<html>
<head>
	<title>NH22 - Đăng nhập</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
	<link rel="stylesheet" type="text/css" href="public/css/main.css">
</head>
<body class="bg-l">
  <div class="container-fluid">
    <div class="container">
     <div class="row pp">
       <div class="col-md-2">
         <a href="index.php?controller=homeController&page=home" class="btn card bg-info p-1"><h6 class="text-white"><b>Trở lại</b></h6></a>
       </div>
     </div> 
    </div>
  </div>
  <div class="container-fluid">
    <div class="container tt">
      <div class="d-flex justify-content-center">
          <div class="card w-500">
              <div class="card-header bg-info">
                <h3 class="text-white"><b>ĐĂNG NHẬP</b></h3>
                <div class="d-flex justify-content-end">
                  <a href=""><span><i class="fab fa-facebook-square m-1 text-white fs-25"></i></span></a>
                  <a href=""><span><i class="fab fa-google-plus-square m-1 text-white fs-25"></i></span></a>
                  <a href=""><span><i class="fab fa-instagram m-1 text-white fs-25"></i></span></a>
                </div>
              </div>
              <div class="card-body">
                    <div class="input-group form-group">
                      <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-user"></i></span>
                      </div>
                      <input type="text" class="form-control" placeholder="Tài khoản" name="username1" id="username1">
                    </div>
                    <div class="input-group form-group">
                      <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-key"></i></span>
                      </div>
                      <input type="password" class="form-control" placeholder="Mật khẩu" name="password1" id="password1">
                    </div>
                    <div class="align-items-center">
                      Lưu mật khẩu
                      <input type="checkbox">
                    </div>
                    <div class="form-group"> 
                      <input onclick="return validate1()" type="submit" value="Đăng nhập" class="btn float-right login_btn card bg-info text-white">
                    </div>
              </div>
              <div class="card-footer bg-info">
                <div class="d-flex justify-content-center link">
                    Bạn chưa có tài khoản ?<a href="index.php?controller=homeController&page=signin" class="text-white">Đăng ký</a>
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
    function validate1(){
  var uu = document.getElementById("username1").value;
  var pu1 = document.getElementById("password1").value;

  if(uu == ""){
    alert("Vui lòng nhập tên!");
    return false;
  }
  if(pu1 == ""){
    alert("Vui lòng nhập mật khẩu!");
    return false;
  }
    var name = localStorage.getItem("name_db")
    var pass = localStorage.getItem("pass_db")
  if(((uu = "abc")&&(pu1 = "123")) || ((uu == name)&&(pu1 == pass))){
    alert("Bạn đã đăng nhập thành công");location.assign("./admin/index.php")
  }
  else 
    alert("Bạn hãy đăng nhập lại!");
  return true;
}
  </script>
</body>
</html>
