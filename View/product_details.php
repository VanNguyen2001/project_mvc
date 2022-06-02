<?php include_once './Model/ProductModel.php '?>
<!DOCTYPE html>
<html>
<head>
	<title>Sản phẩm - Tập đựng hồ sơ</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
	<link rel="stylesheet" type="text/css" href="public/css/main.css">
</head>
<body>
<?php require_once './view/inc/header.php'?>
  <div class="container-fluid">
    <div class="container">
      <div class="row p-4">
        <div class="col-md-5 pt01 card shadow">
          <img src="<?php echo $product->image; ?>">
        </div>
        <div class="col-md-4">
          <h3><b><?php echo $product->name; ?></b></h3>
          <h4 class="text-info"><b><?php echo $product->price; ?> VNĐ</b></h4>
          <br>
          <h6 class="bb p-1">DANH MỤC: Tập hồ sơ</h6>
          <h5 class="pp"><b>Thương hiệu: Flexoffice</b></h5>
          <h5 class="pt-15">Đơn vị tính: bìa</h5>
          <h5 class="pt-15">Màu sắc : Xanh/ Xanh Đậm/ Đỏ/ Trắng.</h5>
          <h5 class="pt-15 bb p-1">Kích thước : 3.5F</h5>
          <h6 class="card p-1"><b>MÃ SẢN PHẨM:</b> THS05</h6>
          <br>
          <a href="<?php echo url('cart'); ?>&id=<?php echo $product->id; ?>" class="btn nh22-02 text-white text-center p-1" data-bs-toggle="modal" data-bs-target="#themvaogiohang"><h5 class="ctsp">THỀM VÀO GIỎ HÀNG</h5></a>
          <div class="row"> 
            <div class="modal fade" id="themvaogiohang" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header bg-info">
                    <h4 class="modal-title text-white" id="exampleModalLabel"><b>ĐÃ THÊM VÀO GIỎ HÀNG</b></h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="close"></button>
                  </div>
                   <div class="modal-body">
                                    <h5><b>Sản phẩm của bạn đã được thêm vào giỏ hàng thành công</b></h5>
                                    <h6>Bấm vào xe đẩy để kiểm tra sản phẩm của bạn!</h6>
                                </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-info" data-bs-dismiss="modal" >HOÀN TẤT</button>
                  </div>
                </div>
              </div>
            </div>
          </div>  
        </div>
        <div class="col-md-3">
          <div class="">
            <div class="card p-3">
              <h5><b class="bb">BẢO HÀNH ĐỔI TRẢ</b></h5>
              <h6 class="pt-15"><i class="fas fa-thumbs-up text-info"></i> Chính hãng 100%</h6>
              <h6 class="pt-15"><i class="fas fa-arrow-alt-circle-right text-info"></i> Đổi trả, khiếu nại sản phẩm</h6>
            </div>
          </div>
          <div class="pt-15">
            <div class="card p-3">
              <h5><b class="bb">THÔNG TIN LIÊN HỆ</b></h5>
              <h6 class="pt-15"><i class="fas fa-phone text-info"></i> 039 9712 074</h6>
              <h6 class="pt-15"><i class="fas fa-phone text-info"></i> 076 8495 661</h6>
              <h6 class="pt-15"><i class="fas fa-envelope-square text-info"></i> Email: nh22102020@gmail.com</h6>
            </div>
          </div>
          <div class="pt-15">
            <div class="card p-3">
              <h6><i class="fas fa-box-open text-info"></i><b> TÌNH TRẠNG:</b> Còn hàng</h6>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <div class="container">
      <div class="row">
        <div class="col-md-2 pp">
          <div class="card bg-info text-white p-1">
            <h5 class="text-center"><b>THÔNG TIN</b></h5>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="card p-3">
            <h5 class="pp">Bìa chất liệu nhựa PP có độ dày, cứng cáp khi cầm trên tay.</h5>
            <h6 class="pt-15">– Kích thước bìa khổ A4 (24x31cm), kích thước phần gáy 3.5 cm.</h6>
            <h6 class="pt-15">– Phần giữa có thiết kế 1 còng mạ inox chắc chắn gắn chặt vào giữa bìa, công dụng để móc các file giấy tờ riêng biệt lại với nhau thành một tập sổ lớn.</h6>
            <h6 class="pt-15">– Lưu và cất trữ các giấy tờ tài liệu. Tạo cho chúng một nơi để ngăn nắp theo thứ tự, dễ dàng khi tìm kiếm.</h6>
            <h6 class="pt-15">– Không gian văn phòng được xắp xếp gọn gàng, công việc được hoàn thành thuận lợi.</h6>
            <h6 class="pt-15">– Đem lại hiệu xuất cao khi làm việc, sử dụng bìa còng nhẫn nhựa Thiên Long 3.5 F B.01 là áp dụng một cách lưu trữ giấy tờ một cách khoa học.</h6>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <div class="container">
      <div class="row pp">
        <div class="col-md-12 text-center">
          <h3><b>MẪU SẢN PHẨM BẠN CÓ THỂ TÙY CHỌN</b></h3>
          <p class="text-info">_________</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3 p-4"> 
          <div class="pt01 h200 card shadow">
            <img src="public/image/tapdunghoso01.jpg">
            <div class="text-center">
              <h5>TẬP BÌA GỖ</h5>
              <h6 class="text-info">30.000 VNĐ</h6>
              <a href="" class="btn"><h5 class="ctsp card p-2">THÊM VÀO GIỎ HÀNG</h5></a>
            </div>
          </div>
        </div>
        <div class="col-md-3 p-4"> 
          <div class="pt01 h200 card shadow">
            <img src="public/image/tapdunghoso02.jpg">
            <div class="text-center">
              <h5>TẬP ĐA NGĂN</h5>
              <h6 class="text-info">21.000 VNĐ</h6>
              <a href="" class="btn"><h5 class="ctsp card p-2">THÊM VÀO GIỎ HÀNG</h5></a>
            </div>
          </div>
        </div>
        <div class="col-md-3 p-4"> 
          <div class="pt01 h200 card shadow">
            <img src="public/image/tapdunghoso03.jpg">
            <div class="text-center">
              <h5>TẬP NHỰA K-22</h5>
              <h6 class="text-info">25.000 VNĐ</h6>
              <a href="" class="btn"><h5 class="ctsp card p-2">THÊM VÀO GIỎ HÀNG</h5></a>
            </div>
          </div>
        </div>
        <div class="col-md-3 p-4"> 
          <div class="pt01 h200 card shadow">
            <img src="public/image/tapdunghoso04.jpg">
            <div class="text-center">
              <h5>TẬP ĐỰNG NILONG</h5>
              <h6 class="text-info">18.000 VNĐ</h6>
              <a href="" class="btn"><h5 class="ctsp card p-2">THÊM VÀO GIỎ HÀNG</h5></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php require_once './view/inc/footer.php' ?>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>