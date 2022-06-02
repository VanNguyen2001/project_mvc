<?php require_once './Model/ProductModel.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>NH22 - Trang chủ</title>
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
      <div class="row pp text-center">
        <div class="col-md-12"> 
          <h3><b>GIỎ HÀNG</b></h3>
          <p class="text-info">_________</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8">
          <h4>Thông tin</h4>
          <div class="row pp">
            <div class="col-md-12">
              <form class="card">
                <div class="bg-light shadow-sm rounded-pill">
                  <div class="input-group">
                    <input type="search" placeholder="Họ và tên" aria-describedby="button-addon1" class="form-control border-0 bg-light">
                  </div>
                </div>
              </form>
            </div>
            <div class="col-md-6 pt-15">
              <form class="card">
                <div class="bg-light shadow-sm rounded-pill">
                  <div class="input-group">
                    <input type="search" placeholder="Số điện thoại" aria-describedby="button-addon1" class="form-control border-0 bg-light">
                  </div>
                </div>
              </form>
            </div>
            <div class="col-md-6 pt-15">
              <form class="card">
                <div class="bg-light shadow-sm rounded-pill">
                  <div class="input-group">
                    <input type="search" placeholder="Email" aria-describedby="button-addon1" class="form-control border-0 bg-light">
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 pt-15">
              <form class="card">
                <div class="bg-light shadow-sm rounded-pill">
                  <div class="input-group">
                    <input type="search" placeholder="Địa chỉ (Địa chỉ để sử dụng giao hàng)" aria-describedby="button-addon1" class="form-control border-0 bg-light">
                  </div>
                </div>
              </form>
            </div>
            <div class="col-md-6 pt-15">
              <form class="card">
                <div class="bg-light shadow-sm rounded-pill">
                  <div class="input-group">
                    <input type="search" placeholder="Tỉnh/ Thành phố" aria-describedby="button-addon1" class="form-control border-0 bg-light">
                  </div>
                </div>
              </form>
            </div>
            <div class="col-md-6 pt-15">
              <form class="card">
                <div class="bg-light shadow-sm rounded-pill">
                  <div class="input-group">
                    <input type="search" placeholder="Quận/ Huyện" aria-describedby="button-addon1" class="form-control border-0 bg-light">
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 pt-15">
              <form class="card">
                <div class="bg-light shadow-sm rounded-pill">
                  <div class="input-group">
                    <input type="search" placeholder="Ghi chú đơn hàng" aria-describedby="button-addon1" class="form-control border-0 bg-light">
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="row pp">
            <div class="col-md-12 text-center">
              <a href="" class="btn nh22-02"><h6 class="text-white"><b>XÁC NHẬN THANH TOÁN</b></h6></a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <h4>Giỏ hàng</h4>
          <div class="pp">
            <div class="card">
            <table class="table" border="1">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Ảnh</th>
                            <th scope="col">Tên</th>
                            <th scope="col">Giá</th>
                            <th scope="col">Số lượng</th>
                            <th scope="col">Tổng</th>
                             
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($productList as $product) { ?>
                        <tr>
                            <th scope="row">1</th>
                            <td>
                                <img style="width: 50px; height: 50px;" src="<?php echo $product['image']; ?>" alt="">
                            </td>
                            <td><?php echo $product['name']; ?></td>
                            <td><?php echo $product['price']; ?></td>
                            <td><?php echo $product['quantity']; ?></td>
                            <td><?php echo $product['price']; ?></td>
                        </tr>
                        <?php    } ?>
                    </tbody>
                </table>
                <div class="col-md-4">
            <table class="table" border="1">
                    <thead>
                    
                        <tr>
                        <td><h6>TỔNG SỐ LƯỢNG</h6> </td>
                             
                        </tr>
                    </thead>
                    
                </table>
            </div>
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