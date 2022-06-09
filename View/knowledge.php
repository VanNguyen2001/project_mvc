<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WYML - Nhà Sách</title>
    
	<link rel="stylesheet" href="./Public/css/style1.css">
        
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <!-- Own Carousel -->
    <link rel="stylesheet" href="./Public/css/owl.carousel.css">
    <link rel="stylesheet" href="./Public/css/owl.theme.green.css">
    <link rel="stylesheet" href="./Public/css/main.css">
     <!-- JQuery & Own Carousel -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="./Public/js/owl.carousel.js"></script>
    <script src="./Public/js/web.js"></script>
<body onload="autoloadimg ()">
<?php include_once './View/inc/header.php'?>
   <!--end header-->
   <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div id="MyCarousel" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active im">
              <img src="public/image/imgmain07.webp">
            </div>
            <div class="carousel-item im">
              <img src="public/image/ttimg02.webp">
            </div>
            <div class="carousel-item im">
              <img src="public/image/imgmain03.jpg">
            </div>
            <div class="carousel-item im">
              <img src="public/image/imgmain04.jpg">
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#MyCarousel" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#MyCarousel" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
            </button>
          </div>
        </div>
        <div class="carousel-caption">
          <div class="row">
            <div class="col-md-12 p-b text-white">
              <h1 class="text-uppercase"><b>NHÀ SÁCH</b></h1>
              <h2>Thư Viện Tương Lai</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <div class="container">
      <div class="row">
        <div class="col-md-12 pp text-center">
          <h3><b>DANH MỤC SÁCH</b></h3>
          <p class="text-info">_________</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <form>
            <tr>
              <td>
                <select class="p-1 col-md-12">
                  <option value="">
                    Chọn chuyên mục
                  </option>
                  <option value="">
                    Lớp học
                  </option>
                  <option value="">
                    Truyện tranh
                  </option>
                  <option value="">
                    Trinh thám
                  </option>
                  <option value="">
                    Khoa học
                  </option>
                </select>
              </td>
            </tr>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <div class="container">
      <div class="row pp">
        <div class="col-md-12">
          <h4 class="text-info"><b>SÁCH THỊNH HÀNH</b></h4>
        </div>
      </div>
      <div class="row pp">
        <div class="col-md-3 p-4"> 
          <div class="pt01 h200 card shadow">
            <img src="public/image/thinhhanh01.jpg">
            <div class="text-center">
              <h5>DẾ MÈN PHIÊU LƯU KÝ</h5>
              <h6 class="text-info">30.000 VNĐ</h6>
              <a href="" class="btn"><h5 class="ctsp card p-2">THÊM VÀO GIỎ HÀNG</h5></a>
            </div>
          </div>
        </div>
        <div class="col-md-3 p-4"> 
          <div class="pt01 h200 card shadow">
            <img src="public/image/thinhhanh02.jpg">
            <div class="text-center">
              <h5>NHỚ LẠI VÀ SUY NGHĨ</h5>
              <h6 class="text-info">21.000 VNĐ</h6>
              <a href="" class="btn"><h5 class="ctsp card p-2">THÊM VÀO GIỎ HÀNG</h5></a>
            </div>
          </div>
        </div>
        <div class="col-md-3 p-4"> 
          <div class="pt01 h200 card shadow">
            <img src="public/image/thinhhanh03.jpg">
            <div class="text-center">
              <h5>HỒI KÝ CHIẾN TRƯỜNG</h5>
              <h6 class="text-info">25.000 VNĐ</h6>
              <a href="" class="btn"><h5 class="ctsp card p-2">THÊM VÀO GIỎ HÀNG</h5></a>
            </div>
          </div>
        </div>
        <div class="col-md-3 p-4"> 
          <div class="pt01 h200 card shadow">
            <img src="public/image/thinhhanh04.jpg">
            <div class="text-center">
              <h5>CHUYỆN THỜI BAO CẤP</h5>
              <h6 class="text-info">18.000 VNĐ</h6>
              <a href="" class="btn"><h5 class="ctsp card p-2">THÊM VÀO GIỎ HÀNG</h5></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <div class="container">
      <div class="row tt">
        <div class="col-md-2 card bg-info">
          <div class="p-1 text-center">
             <h6 class="text-white"><b>Lớp học</b></h6>
          </div>
        </div>
        <div class="col-md-10">
          <form action="">
            <div class="bg-light shadow-sm card">
              <div class="input-group">
                <input type="search" placeholder="Tên sách giáo Khoa bạn muốn tìm ?" aria-describedby="button-addon1" class="form-control border-0 bg-light">
                <div class="input-group-append">
                <button id="button-addon1" type="submit" class="btn btn-link text-primary"><i class="fa fa-search"></i></button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <div class="container">
      <div class="row pp">
        <div class="col-md-3"> 
          <div class="pt01">
            <img src="public/image/sachgiaokhoa01.jpg">
            <div class="text-center">
              <h5>Sách Giáo Khoa Hóa Học Lớp 8</h5>
              <a href="" class="btn"><h5 class="ctsp card p-2">CHI TIẾT SẢN PHẨM</h5></a>
            </div>
          </div>
        </div>
        <div class="col-md-3"> 
          <div class="pt01">
            <img src="public/image/sachgiaokhoa02.jpg">
            <div class="text-center">
              <h5>Sách Giáo Khoa Ngữ Văn Lớp 12</h5>
              <a href="" class="btn"><h5 class="ctsp card p-2">CHI TIẾT SẢN PHẨM</h5></a>
            </div>
          </div>
        </div>
        <div class="col-md-3"> 
          <div class="pt01">
            <img src="public/image/sachgiaokhoa03.jpg">
            <div class="text-center">
              <h5>Sách Giáo Khoa Toán Học Lớp 9</h5>
              <a href="" class="btn"><h5 class="ctsp card p-2">CHI TIẾT SẢN PHẨM</h5></a>
            </div>
          </div>
        </div>
        <div class="col-md-3"> 
          <div class="pt01">
            <img src="public/image/sachgiaokhoa04.jpg">
            <div class="text-center">
              <h5>Sách Giáo Khoa Toán Học Lớp 7</h5>
              <a href="" class="btn"><h5 class="ctsp card p-2">CHI TIẾT SẢN PHẨM</h5></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <div class="container">
      <div class="row tt">
        <div class="col-md-2 card bg-info">
          <div class="p-1 text-center">
             <h6 class="text-white"><b>Triết học</b></h6>
          </div>
        </div>
        <div class="col-md-10">
          <form action="">
            <div class="bg-light shadow-sm card">
              <div class="input-group">
                <input type="search" placeholder="Tên sách triết học mà bạn cần tìm ?" aria-describedby="button-addon1" class="form-control border-0 bg-light">
                <div class="input-group-append">
                <button id="button-addon1" type="submit" class="btn btn-link text-primary"><i class="fa fa-search"></i></button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <div class="container">
      <div class="row pp">
        <div class="col-md-3"> 
          <div class="pt01 igt">
            <img src="public/image/triethoc01.jpg">
            <div class="text-center">
              <h5>Lưới Trời Ai Dệt? – Nguyễn Tường Bách</h5>
              <a href="" class="btn"><h5 class="ctsp card p-2">CHI TIẾT SẢN PHẨM</h5></a>
            </div>
          </div>
        </div>
        <div class="col-md-3"> 
          <div class="pt01 igt">
            <img src="public/image/triethoc02.jpg">
            <div class="text-center">
              <h5>Lược Sử Triết Học Trung Quốc</h5>
              <a href="" class="btn"><h5 class="ctsp card p-2">CHI TIẾT SẢN PHẨM</h5></a>
            </div>
          </div>
        </div>
        <div class="col-md-3"> 
          <div class="pt01 igt">
            <img src="public/image/triethoc03.jpg">
            <div class="text-center">
              <h5>Giáo Trình Hồ Chí Minh & Đường Lối Cách Mạng</h5>
              <a href="" class="btn"><h5 class="ctsp card p-2">CHI TIẾT SẢN PHẨM</h5></a>
            </div>
          </div>
        </div>
        <div class="col-md-3"> 
          <div class="pt01 igt">
            <img src="public/image/triethoc04.jpg">
            <div class="text-center">
              <h5>Bàn Về Trung Quốc, Hoa Kỳ Và Thế Giới</h5>
              <a href="" class="btn"><h5 class="ctsp card p-2">CHI TIẾT SẢN PHẨM</h5></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <div class="container">
      <div class="row tt">
        <div class="col-md-2 card bg-info">
          <div class="p-1 text-center">
             <h6 class="text-white"><b>Y học</b></h6>
          </div>
        </div>
        <div class="col-md-10">
          <form action="">
            <div class="bg-light shadow-sm card">
              <div class="input-group">
                <input type="search" placeholder="Tên sách y học bạn muốn tìm ?" aria-describedby="button-addon1" class="form-control border-0 bg-light">
                <div class="input-group-append">
                <button id="button-addon1" type="submit" class="btn btn-link text-primary"><i class="fa fa-search"></i></button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <div class="container">
      <div class="row pp">
        <div class="col-md-3"> 
          <div class="pt01">
            <img src="public/image/yhoc01.jpg">
            <div class="text-center">
              <h5>Những Điều Cần Biết Về Suy Nhược Và Mất Ngủ</h5>
              <a href="" class="btn"><h5 class="ctsp card p-2">CHI TIẾT SẢN PHẨM</h5></a>
            </div>
          </div>
        </div>
        <div class="col-md-3"> 
          <div class="pt01">
            <img src="public/image/yhoc02.jpg">
            <div class="text-center">
              <h5>Những Điều Cần Biết Về Bệnh Ung Thư</h5>
              <a href="" class="btn"><h5 class="ctsp card p-2">CHI TIẾT SẢN PHẨM</h5></a>
            </div>
          </div>
        </div>
        <div class="col-md-3"> 
          <div class="pt01">
            <img src="public/image/yhoc03.jpg">
            <div class="text-center">
              <h5>Phát Hiện Và Điều Trị Bệnh Thiếu Iot</h5>
              <a href="" class="btn"><h5 class="ctsp card p-2">CHI TIẾT SẢN PHẨM</h5></a>
            </div>
          </div>
        </div>
        <div class="col-md-3"> 
          <div class="pt01">
            <img src="public/image/yhoc04.jpg">
            <div class="text-center">
              <h5>Phòng Chữa Bệnh Nhờ Rau Củ Quả Quanh Ta</h5>
              <a href="" class="btn"><h5 class="ctsp card p-2">CHI TIẾT SẢN PHẨM</h5></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
    <!--end content-->
    <?php include_once './View/inc/footer.php'?>
    <!--end footer-->
</body>
<script type="text/javascript">
    var vimg = document.getElementById("anhnen-a")
    var t ;
    var i = 1 ;
    function autoloadimg() {
        t = setInterval(function autoloadimg(){
            i++;
            if ( i > 3 ){
                i = 1;
            }
            vimg.src = "./public/images/" + "banner" + i +".jpg" ;
        }, 2000 )
    }
    $(document).ready(function() {
            $('.owl-carousel').owlCarousel({
                // loop:true,
                margin:0,
                nav:true,
                // items: 2,
                mouseDrag: true,
                touchDrag: true,
                pullDrag: true,
                dots: false,
                responsive:{
                    0:{
                        items:1
                    },
                    400: {
                        items:2
                    },
                    600:{
                        items:3
                    },
                    1000:{
                        items:4
                    }
                }
            })
        });

</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

<!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>     -->
   
</html>