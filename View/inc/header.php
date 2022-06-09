<div id="header" style="padding-top: 100px; ">
        <nav class="navbar fixed-top navbar-expand-lg navbar-light shadow"style="background-color: #5ce1e6;" >
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>      
                <a class="navbar-brand" href="<?php echo url_pattern('homeController', 'home'); ?>">
                    <div class="logo" style="padding-left: 100px; "> 
                        <img src="./Public/images/wyml.png" width="120px" height="65px">  
                    </div>      
                </a>
                <div class="collapse navbar-collapse " id="navbarTogglerDemo03" >
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 " >
                        <li class="nav-item dropdown">
                            <a class="nav-link text-white btn hover-white" href="<?php echo url_pattern('homeController', 'home'); ?>"  style="color: black;"><b>Trang chủ</b></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-white btn hover-white" id="navbardropaaa" role="button" data-bs-toggle="dropdown" aria-expanded="false"  style="color: black;"><b>Sản Phẩm</b></a>
                            <div class="dropdown-menu" aria-labelledby="navbardropaaa">
                                <a class="dropdown-item" href="<?php echo url_pattern('homeController', 'shop'); ?>"><b>Tập Hồ Sơ</b></a>
                                <a class="dropdown-item" href="<?php echo url_pattern('homeController', 'shop'); ?>"><b>Bìa Cứng</b></a>                             
                                <a class="dropdown-item" href="<?php echo url_pattern('homeController', 'shop'); ?>"><b>Trụ Nhựa</b></a>
                                <a class="dropdown-item" href="<?php echo url_pattern('homeController', 'shop'); ?>"><b>Kim Bấm</b></a>
                                <a class="dropdown-item" href="<?php echo url_pattern('homeController', 'shop'); ?>"><b>Bút</b></a>
                                <a class="dropdown-item" href="<?php echo url_pattern('homeController', 'shop'); ?>"><b>Giấy In</b></a>
                            </div>                              
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link text-white btn hover-white" href="<?php echo url_pattern('homeController', 'introduce'); ?>" id="navbardrop" data-toggle="dropdown"  style="color: black;"><b>Giới thiệu</b></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link text-white btn hover-white" href="<?php echo url_pattern('homeController', 'list'); ?>" style="color: black;" ><b>Phân Phối</b></a>                               
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link text-white btn hover-white" href="<?php echo url_pattern('homeController', 'knowledge'); ?>"  style="color: black;"><b>Nhà Sách</b></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link text-white btn hover-white" href="<?php echo url_pattern('homeController', 'news'); ?>"  style="color: black;"><b>Tin Tức</b></a>
                        </li>      
                    </ul> 
                    <div class="btn-user" style="margin-right:20px;">
                        <div class="btn-cart1" onclick="show()">
                            <?php if($this->auth->user()) { ?>
                            <a class="btn hover-white  text-white" href="<?php echo url_pattern('authController', 'logout'); ?>" role="button"><i class="fa fa-sign-out" aria-hidden="true"></i></a>
                            <?php } else { ?>
                            <a class="btn hover-white text-white" href="<?php echo url_pattern('authController', 'login'); ?>" role="button"><i class="fa fa-tags" aria-hidden="true"></i></a>
                            <?php } ?>
                            <a class="btn hover-white text-white" href="<?php echo url_pattern('homeController', 'cart'); ?>" role="button"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <div class="search" style="margin-right:0px;">
                        <form action="search.php" method="get">
                            <div class="bg-light shadow-sm rounded-pill">
                                <div class="input-group">
                                <input name="q" type="search" placeholder="Nhập tên sản phẩm cần tìm ?" aria-describedby="button-addon1" class="form-control border-0 bg-light">
                                <div class="input-group-append">
                                    <button id="button-addon1" type="submit" class="btn btn-link text-primary"><i class="fa fa-search"></i></button>
                                </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>        
        </nav>
</div> 