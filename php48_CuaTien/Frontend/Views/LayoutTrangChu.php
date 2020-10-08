<!DOCTYPE html>
<html>
<head>
  <title>TienNguyen</title>
  <meta charset="utf-8">
  <!-- ĐẶT LẠI ĐƯỜNG DẪN ROOT -->
  <base href="http://localhost/php48/php48_CuaTien/Frontend/">
  <link rel="stylesheet" type="text/css" href="../Assets/Frontend/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../Assets/Frontend/css/style.css">
  <link rel="stylesheet" href="../Assets/Frontend/icon_font/font-awesome/css/font-awesome.min.css">
  <link href='http://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700%7CDancing+Script%7CMontserrat:400,700%7CMerriweather:400,300italic%7CLato:400,700,900' rel='stylesheet' type='text/css'>
  <script src="../Assets/Frontend/js/jquery-3.5.1.js"></script>
  <script type="text/javascript" src="../Assets/Frontend/js/bootstrap.min.js"></script>
  <!--Start of Tawk.to Script-->
  <script src="../Assets/Frontend/js/tawkto.js"></script>
  <!--End of Tawk.to Script-->
  <!-- JS, Popper.js, and jQuery -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" ></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" ></script>
  <script src="../Assets/Frontend/js/bootstrap.bundle.min.js"></script>

</head>
<body>
<?php include "Views/HeaderView.php";?>
  <!-- SLIDE-SHOW -->
  <div class="container-fluid" >
    
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
      <div class="carousel-inner">
          <div class="carousel-item active">
              <img class="d-block w-100" src="../Assets/Frontend/images/img1.jpg" alt="First slide">
              <div class="carousel-caption d-none d-md-block">
                <h5>Supplements for workout</h5>
                <p>Nhà cung cấp uy tín hàng đầu</p>
          </div>
        </div>
        <div class="carousel-item">
              <img class="d-block w-100" src="../Assets/Frontend/images/img2.jpg" alt="Second slide">
              <div class="carousel-caption d-none d-md-block">
                <h5>SHIP COD TOÀN QUỐC</h5>
                <p>Nhận hàng & thanh toán tiền tại nhà</p>
          </div>
        </div>
        <div class="carousel-item">
              <img class="d-block w-100" src="../Assets/Frontend/images/img3.jpg" alt="Third slide">
              <div class="carousel-caption d-none d-md-block">
                <h5>ĐỘI NGŨ TƯ VẤN CHUYÊN SÂU</h5>
                <p>Tư vấn một cách bài bản, khoa học nhất</p>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>

  <!-- Sản phẩm nổi bật -->
    <div class="container" style="margin: auto;">
        <div class="row justify-content-center">
            <div class style="margin-top:40px; font-size:35px;">
              Sản phẩm nổi bật
            </div>
        </div>
        
        <div class="row justify-content-center">
              <?php 
                  // if(file_exists($fileController)){
                  //     include $fileController;
                  //     if(class_exists($classController)){
                  //         $obj= new $classController();
                  //         $obj->$action();
                  //     }
                  // }
                include "Controllers/HomeHotProductsController.php";
                $obj= new HomeHotProductsController();
                $obj->read();
               ?>
        </div>
        <div class="row justify-content-center">
            <div class style="margin-top:40px; font-size:35px;">
                Sản phẩm giảm giá cao nhất
            </div>
        </div>
         <div class="row justify-content-center">
              <?php 
                include "Controllers/HomeDiscountProductsController.php";
                $obj= new HomeDiscountProductsController();
                $obj->read();
               ?>
        </div>


    </div>
  <!-- /Sản phẩm nổi bật-->

  
  <!-- Gioi thieu san pham tieu bieu -->
    <?php 
      include "Controllers/IntroProductsController.php";
      $obj= new IntroProductsController();
      $obj->read();
    ?>
  <!-- /Gioi thieu san pham tieu bieu -->

  <!-- category -->
  <div class="container">
    
    <div class="row justify-content-center">
      <div class="col-lg cate1"><a href="products/categories/WHEY%20PROTEIN/1"><i class="fa fa-trophy" aria-hidden="true"></i> &nbspWHEY PROTEIN</a></div>
      <div class="col-lg cate1"><a href="products/categories/MASS%20GAINER/2"><i class="fa fa-line-chart" aria-hidden="true"></i> &nbspMASS GAINER</a></div>
      <div class="col-lg cate1"><a href="products/categories/BCAA/3"><i class="fa fa-cogs" aria-hidden="true"></i> &nbspBCAA</a></div>
      <div class="col-lg cate1"><a href="products/categories/AMINO%20ACIDS/4"><i class="fa fa-heart" aria-hidden="true"></i> &nbspAMINO ACIDS</a></div>
       <div class="col-lg cate1"><a href="products/categories/DIET/5"><i class="fa fa-heart" aria-hidden="true"></i> &nbspDiet</a></div>
    </div>
  </div>  
  <!-- /category -->

  <!-- tem chung nhan -->
  <div class="container">
    <div class="row justify-content-center">
      <img src="../Assets/Frontend/images/tem.jpg" style="width: 160px; height: 60px;">
    </div>
    <div class="row justify-content-center" style="margin-bottom: 20px;">
      <div>Công ty TNHH một thành viên - Tiến Nguyễn</div>
    </div>
  </div>
  <!-- /tem chung nhan -->
  

<?php include "Views/FooterView.php";  ?>
</body>
</html>
