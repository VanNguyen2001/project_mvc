<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WYML/Wen Yuan Mei Lian - Trang chủ</title>
    
	<link rel="stylesheet" href="./Public/css/style1.css">
    <link rel="stylesheet" href="./Public/css/main.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <!-- Own Carousel -->
    <link rel="stylesheet" href="./Public/css/owl.carousel.css">
    <link rel="stylesheet" href="./Public/css/owl.theme.green.css">
     <!-- JQuery & Own Carousel -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="./Public/js/owl.carousel.js"></script>
    <script src="./Public/js/web.js"></script>
</head>
<body onload="autoloadimg ()">
<?php include_once './View/inc/header.php'?>
   <!--end header-->
    <div id="wrapper">
        <div class="container">
            <div class="row" style="box-sizing: border-box;">
                <div class="col-md-7">
                    <div class="banner" style="border-radius: 10px;">
                        <div class="container-fluid ">
                            <img src="./Public/images/imgmain1.png"id="anhnen-a"style="border-radius: 10px;">
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="banner" style="border-radius: 10px;">
                        <div class="container-fluid">
                            <img src="./Public/images/banner3.jpg"style="border-radius: 10px; height: 175px;" class="pb-3">
                        </div>
                        <div class="container-fluid">
                            <img src="./Public/images/banner2.jpg"style="border-radius: 10px; height: 175px;" class="pt-3">
                        </div>
                    </div>
                </div>
            </div>
            <div class="container pt-4">
                <div class="row p-2 text-center">
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
            <h5 style="margin:30px 0px 30px 30px" class="pt-5"><b>SẢN PHẨM NỔI BẬT</b></h5>
            <p class="text-center" style="color: #5ce1e6;"><b>__________________</b></p>
            <div class="main" style="text-align: center;">
                <div class="box">
                        <div class="row " >
                            <!--Vùng dữ liệu-->
                            <?php 
                                foreach($productList as $product) { ?>
                                    <div class="col-xs-3 col-3 col-lg-3 mb-4" >
                                        <a href="<?php echo url_pattern('homeController', 'single', $product->id); ?>"> 
                                            <div class="card"  >
                                                <img src="<?php echo $product->image;?>" width="100%" height="200px">
                                                <div class="card-body">
                                                    <p style="color: black" ><b><?php echo $product->name; ?></b></p>
                                                    <b class="" style="color: #5ce1e6;"><?php echo $product->price; ?>đ</b>       
                                                    <a  class="btn btn-dark" href="<?php echo url_pattern('homeController', 'cart', $product->id); ?>"><b>Thêm Vào Giỏ Hàng <i class="fa fa-shopping-cart" aria-hidden="true"></i></b></a>
                                                </div>
                                            </div>
                                        </a>
                                    </div>  
                                                        
                            <?php } ?>
                        </div>
                    <button type="button" class="btn" style="margin-left: 50px; color: #5ce1e6;"><b>Xem thêm</b></button>  
                </div>
            </div>
            <div class="container-fluid">
    <div class="row nh22-01">
      <div class="col-md-6">
        <div class="banner" style="border-radius: 10px;">
                            <div class="container-fluid ">
                                <img src="./Public/images/imgmain1.png"id="anhnen-a"style="border-radius: 10px;">
                            </div>
                        </div>
        </div>
        <div class="col-md-6 text-center">
            <div class="pp">
            <h3><b>VỀ WYML</b></h3>
            <p class="text-info">_________</p>
            <h6>Với tầm nhìn trở thành một trong những nhà phân phối và sản xuất văn phòng phẩm hàng đầu, cùng với nỗ lực của toàn thể nhân viên, NH22 đã từng bước khẳng định những bước tiến vững chắc trên thị trường Văn phòng phẩm Việt Nam.</h6>
            </div>
            <div class="pt-2">
            <a href="<?php echo url_pattern('homeController', 'introduce'); ?>" class="btn" style="margin-left: 50px; color: #5ce1e6;"><p><b>TÌM HIỂU THÊM</b></p></a>
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
            <div class="shadow p-2">
            <div class="imgtt">
                <img src="./public/images/ttimg01.jpg">
            </div>
            <div class="pttt m-2">
                <a href="news.php"><i>Ngày Quốc tế Thiếu nhi.</i></a>
                <h6>Nhân ngày Quốc tế thiếu nhi 1-6 giảm giá các sản phẩm bút, màu vẽ.</h6>
            </div>
            </div>
        </div>
        <div class="col-md-4 p-2">
            <div class="shadow p-2">
            <div class="imgtt">
                <img src="./public/images/ttimg02.jpg">
            </div>
            <div class="pttt m-2">
                <a href=""><i>Chương trình khuyến mãi tháng 5</i></a>
                <h6>Tháng 5 này mang lại nhiều chương trình khuyến mãi cho quý khách hàng khi mua.</h6>
            </div>
            </div>
        </div>
        <div class="col-md-4 p-2">
            <div class="shadow p-2">
            <div class="imgtt">
                <img src="./public/images/ttimg03.jpg">
            </div>
            <div class="pttt m-2">
                <a href=""><i>Thống báo</i></a>
                <h6>Thông báo: tạm dừng hoạt động từ ngày 30/4 đến 1/5</h6>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
            <div class="container-fluid pt-5">
                <h5 class="text-center"><b>ĐỐI TÁC CHIẾN LƯỢC</b></h5>
                <p class="text-center" style="color: #5ce1e6;"><b>__________________</b></p>
                <div class="row">
                    <div class="col-md-12">
                    <div class="owl-carousel owl-theme">
                <div class="item">
                    <div class="card border-0" style="width: 18rem;">
                        <div class="">
                            <img src="./public/images/logodoitac01.jpg"class="card-img-top p-1" alt="..." width="100%" height="200px">
                         </div>
                        <div class="card-body">
                            <h6 class="">Big C VietNam</h6>
                            <p class="card-text">Hệ thống siêu thị Big C hoạt động kinh doanh theo mô hình...</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card border-0" style="width: 18rem;">
                        <div class="">
                            <img src="./public/images/logodoitac02.jpg" class="card-img-top p-1" alt="..." width="100%" height="200px">
                         </div>
                        <div class="card-body">
                            <h6 class="">Tiki VN</h6>
                            <p class="card-text">Với hàng triệu sản phẩm từ các thương hiệu, cửa hàng...</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card border-0" style="width: 18rem;">
                        <div class="">
                            <img src="./public/images/logodoitac03.jpg" class="card-img-top p-1" alt="..." width="100%" height="200px">
                         </div>
                        <div class="card-body">
                            <h6 class="">Lazada</h6>
                            <p class="card-text">Thành lập từ năm 2012, Lazada là nền tảng thương mại...</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card border-0" style="width: 18rem;">
                        <div class="">
                            <img src="./public/images/logodoitac04.jpg" class="card-img-top p-1" alt="..." width="100%" height="200px">
                         </div>
                        <div class="card-body">
                            <h6 class="">Shoppe</h6>
                            <p class="card-text">Shopee - ứng dụng mua sắm trực tuyến thú vị, tin cậy...</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card border-0" style="width: 18rem;">
                        <div class="">
                            <img src="./public/images/logodoitac05.jpg" class="card-img-top p-1" alt="..." width="100%" height="200px">
                         </div>
                        <div class="card-body">
                            <h6 class="">Grap</h6>
                            <p class="card-text">Chúng tôi tự hào là một công ty TAXI công nghệ của Việt Nam...</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card border-0" style="width: 18rem;">
                        <div class="">
                            <img src="./public/images/logodoitac06.jpg" class="card-img-top p-1" alt="..." width="100%" height="200px">
                         </div>
                        <div class="card-body">
                            <h6 class="">Coopmart</h6>
                            <p class="card-text">Chính thức bước vào thị trường Việt Nam vào năm 1998 ...</p>
                        </div>
                    </div>
                </div>     
            </div>
        </div>
    </div>
    <!--end wrapper-->
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
            vimg.src = "./public/images/" + "imgmain" + i +".png" ;
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