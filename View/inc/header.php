<div class="container">
    <div class="row">
      <div class="col-md-3">
        <img src="./Public/image/logo.jpg" class="logo">
      </div>
      <div class="col-md-4 pp">
        <form action="">
          <div class="bg-light shadow-sm rounded-pill">
            <div class="input-group">
              <input type="search" placeholder="Bạn tìm gì ở đây?" aria-describedby="button-addon1" class="form-control border-0 bg-light">
              <div class="input-group-append">
                <button id="button-addon1" type="submit" class="btn btn-link text-primary"><i class="fa fa-search"></i></button>
              </div>
            </div>
          </div>
        </form>
      </div>
        <div class="col-md-3 text-center pp">
          <div class="shadow">
            <h6 class="p-1 text-white bg-info"><b>LIÊN HỆ TRUNG TÂM</b></h6>
            <h6 class="p-1"><i class="fas fa-phone-square"></i> 039 9712 074</h6>
          </div>
        </div>
      <div class="col-md-2 pp text-center">
        <a href="https://www.facebook.com/Nguyen.HuynhVan.2001"><img src="./Public/image/facebook.jpg" class="ci"></a>
        <a href="" class="si"><img src="./Public/image/gmail.png" class="ci"></a>
        <a href="" class="si"><img src="./Public/image/instagram.png" class="ci"></a>
      </div>
    </div>
  </div>
  <div class="container-fluid text-center bg-info">
    <div class="row">
      <div class="col-md-12">
      <nav class="navbar navbar-expand-lg bg-info">
          <button class="navbar-toggler bg-light text-info" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon text-info"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link card bg-info" href="<?php echo url('home'); ?>"><b class="text-white">TRANG CHỦ</b></a>
              </li>
              <li class="nav-item">
                <a class="nav-link card bg-info" href="<?php echo url('communications'); ?>"><b class="text-white">GIỚI THIỆU</b></a>
              </li>
              <li>
                <a class="nav-link  card bg-info" href="<?php echo url('allotment'); ?>"><b class="text-white">PHÂN PHỐI</b></a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link card bg-info" href="<?php echo url('product'); ?>" data-toggle="dropdown">
                  <b class="text-white">SẢN PHẨM</b>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link card bg-info" href="<?php echo url('bookstore'); ?>"><b class="text-white">NHÀ SÁCH</b></a>
              </li>
              <li class="nav-item">
                <a class="nav-link card bg-info" href="<?php echo url('login'); ?>"><b class="text-white">ĐĂNG NHẬP</b></a>
              </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
              <div class="col-md-2 text-center">
                <a href="<?php echo url('cart'); ?>" class="text-white"><i class="fas fa-shopping-cart fs-25"></i></a>
              </div>
            </form>
          </div>
        </nav>
      </div>
    </div>
  </div>