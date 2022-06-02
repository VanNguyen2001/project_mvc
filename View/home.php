<!DOCTYPE html>
<html>
<head>
	<title>NH22 - Trang chủ</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
	<link rel="stylesheet" type="text/css" href="./public/css/main.css">
  <style type="text/css">
    
  </style>
</head>
<body onload="autoloading()">
<?php require_once './view/inc/header.php'?>
  <div class="container-fluid">
    <div class="row">
    <div class="col-md-12">
        <div id="MyCarousel" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active im card">
              <img src=",/public/image/imgmain01.jpeg">
            </div>
            <div class="carousel-item im card">
              <img src="./public/image/imgmain02.webp">
            </div>
            <div class="carousel-item im card">
              <img src="./public/image/imgmain03.jpg">
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#MyCarousel" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#MyCarousel" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row p-5 text-center">
      <div class="col-md-3">
        <div class="card shadow">
          <i class="far fa-thumbs-up cic"></i>
          <h6><b>Uy tín, chất lượng</b></h6>
          <span class="p-1">Hoàn tiền 100% nếu sản phẩm lỗi hoặc có bất kì hư hỏng gì.</span>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card shadow">
          <i class="fas fa-map-marked-alt cic"></i>
          <h6><b>Phân phối</b></h6>
          <span class="p-1">Nhận, đặt, giao hàng miễn phí trên toàn quốc.</span>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card shadow">
          <i class="fas fa-tags cic"></i>
          <h6><b>Ưu đải bất ngờ</b></h6>
          <span class="p-1">Thành viên có thể nhận vé giảm giá lên tới 80%.</span>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card shadow">
          <i class="fas fa-shipping-fast cic"></i>
          <h6><b>Giao hàng nhanh</b></h6>
          <span class="p-1">Tiết kiệm thời gian, chi phí, nhanh, tiện lợi và an toàn.</span>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row pp text-center">
      <div class="col-md-12">
        <h3><b>SẢN PHẨM</b></h3>
        <p class="text-info">_________</p>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
    <?php 
      foreach($productList as $product) { ?>
        <div class="col-md-3">
          <div class="card m-1 shadow-sm">
            <div class="text-center">
              <img src="<?php echo $product->image;?>" width="100%" height="200px">
              <div class="card-body">
                <p><?php echo $product->name; ?></p>
                <h5 class="card-text"><?php echo $product->price; ?> đ</h5>
                <div class="row">
                  <div class="col-md-6">
                    <a href="index.php?controller=homeController&page=product_details&id=<?php echo $product->id; ?>" class="btn card shadow"><h5 class="ctsp">CHI TIẾT</h5></a>
                  </div>
                  <div class="col-md-6">    
                    <a  class="btn card shadow" href="<?php echo url('cart'); ?>&id=<?php echo $product->id; ?>"><h5 class="ctsp">MUA</h5></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>                      
      <?php } ?>
    </div>
    <div class="row">
      <div class="col-md-12 text-center p-5">
        <a href="<?php echo url('product'); ?>" class="btn nh22-02 text-white"><h5 class="ctsp">XEM TẤT CẢ</h5></a>
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row nh22-01">
      <div class="col-md-6">
        <div id="MyCarousel" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active im card">
              <img src="public/image/imgmain01.jpeg">
            </div>
            <div class="carousel-item im card">
              <img src="public/image/imgmain02.webp">
            </div>
            <div class="carousel-item im card">
              <img src="public/image/imgmain03.jpg">
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#MyCarousel" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#MyCarousel" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
            </button>
          </div>
        </div>
      </div>
      <div class="col-md-6 text-center">
        <div class="pp">
          <h3><b>VỀ NH22</b></h3>
          <p class="text-info">_________</p>
          <h6>Với tầm nhìn trở thành một trong những nhà phân phối và sản xuất văn phòng phẩm hàng đầu, cùng với nỗ lực của toàn thể nhân viên, NH22 đã từng bước khẳng định những bước tiến vững chắc trên thị trường Văn phòng phẩm Việt Nam.</h6>
        </div>
        <div class="pp">
          <a href="Gioithieu.html" class="btn nh22-02 text-white"><h5 class="ctsp">TÌM HIỂU THÊM</h5></a>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center tt">
        <h3><b>TIN TỨC</b></h3>
        <p class="text-info">_________</p>
      </div>
    </div>
    <div class="row p-2">
      <div class="col-md-4 p-2">
        <div class="shadow p-1">
          <div class="imgtt">
            <img src="public/image/ttimg01.jpg">
          </div>
          <div class="pttt">
            <a href="news.php"><i>Ngày Quốc tế Thiếu nhi.</i></a>
            <h6>Nhân ngày Quốc tế thiếu nhi 1-6 giảm giá các sản phẩm bút, màu vẽ.</h6>
          </div>
        </div>
      </div>
      <div class="col-md-4 p-2">
        <div class="shadow p-1">
          <div class="imgtt">
            <img src="public/image/ttimg02.webp">
          </div>
          <div class="pttt">
            <a href=""><i>Chương trình khuyến mãi tháng 5</i></a>
            <h6>Tháng 5 này mang lại nhiều chương trình khuyến mãi cho quý khách hàng khi mua sắm.</h6>
          </div>
        </div>
      </div>
      <div class="col-md-4 p-2">
        <div class="shadow p-1">
          <div class="imgtt">
            <img src="public/image/ttimg03.webp">
          </div>
          <div class="pttt">
            <a href=""><i>Thống báo</i></a>
            <h6>Thông báo: tạm dừng hoạt động từ ngày 30/4 đến 1/5</h6>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row text-center tt">
      <div class="col-md-12">
        <h3><b>ĐỐI TÁC CHIẾN LƯỢC</b></h3>
        <p class="text-info">_________</p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-2 dtcl text-center">
        <img src="public/image/logodoitac01.jpg">
      </div>
      <div class="col-md-2 dtcl text-center">
        <img src="public/image/logodoitac02.png">
      </div>
      <div class="col-md-2 dtcl text-center">
        <img src="public/image/logodoitac03.png">
      </div>
      <div class="col-md-2 dtcl text-center">
        <img src="public/image/logodoitac04.jpg">
      </div>
      <div class="col-md-2 dtcl text-center">
        <img src="public/image/logodoitac05.png">
      </div>
      <div class="col-md-2 dtcl text-center">
        <img src="public/image/logodoitac06.jpg">
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row tt">
      <div class="col-md-12 cskh">
        <img src="public/image/cskh.webp">
      </div>
    </div>
  </div>
  <?php require_once './view/inc/footer.php' ?>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script type="text/javascript">
  var vimg = document.getElementById("anhnen-a");
  var t;
  var i = 1;
  function autoloading(){
    t = setInterval(function autoloading(){
      i++;
      if(i>3){
        i=1;
      }
      vimg.src="" + "public/image/nen" + i + ".jpg";
    },5000)
  }
</script>
</body>
</html>