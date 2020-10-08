<header>
  <style type="text/css">
    @media all and (max-width: 1024px){
      .logo{margin: auto;}
    }

  </style>
  <!-- banner -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light" style=" font-size: 17px; box-shadow: 0 .5rem 1rem rgba(0,0,0,.15);">
    <img class="navbar-brand logo" src="../Assets/Frontend/images/logo.png" style="width: 100px;height: 100px;" alt="">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-2">
        <li class="nav-item active">
          <a class="nav-link" href="home">Trang chủ</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="products/categories/BCAA/3">Sản phẩm</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="news">Tin tức</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact">Liên hệ</a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto" style="margin-right: 46px;">
        <li>
          <a href="cart" class="nav-link"><i class="fa fa-shopping-cart" aria-hidden="true" style="font-size: 21px;"></i></a>
        </li>
        <li class="nav-item dropdown">
          <?php if(isset($_SESSION["customerName"]) == false): ?>
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Tài khoản
          </a>
          <?php else: ?>
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <?php echo $_SESSION["customerName"];  ?>
          </a>
          <?php endif; ?>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="font-size: 14px;">
            <?php if(isset($_SESSION["customerName"]) == false): ?>
            <a class="dropdown-item" href="login"><i class="fa fa-sign-in" aria-hidden="true"></i>&nbsp&nbspĐăng nhập</a>
            <?php else: ?>
            <a class="dropdown-item" href="user/read"><i class="fa fa-user" aria-hidden="true"></i>&nbsp&nbspThông tin tài khoản</a>
            <a class="dropdown-item" href="#"><i class="fa fa-cog" aria-hidden="true"></i>&nbsp&nbspCài đặt</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="index.php?controller=account&action=logout"><i class="fa fa-sign-out" aria-hidden="true"></i>&nbsp&nbspĐăng xuất</a>
            <?php endif; ?>
          </div>
        </li>
      </ul>

    </div>
  </nav>
  <!-- /banner -->

</header>