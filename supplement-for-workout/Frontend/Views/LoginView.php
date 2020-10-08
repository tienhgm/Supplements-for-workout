<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <base href="http://localhost/php48/php48_CuaTien/Frontend/">
    <link rel="stylesheet" type="text/css" href="../Assets/Frontend/css/login.css">

</head>
<body>
    <div class="login-wrap">

        <div class="login-html">
            <div style="margin-bottom:5px;">
                <a href="home" style="font-size: 20px; color: white;">Trang chủ</a>
            </div>
            <br>
            <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Đăng nhập</label>
            <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Đăng ký</label>
            <div class="login-form">
                <div class="sign-in-htm">
                     <?php if(isset($_GET["notify"]) && $_GET["notify"]=="success"): ?>
                        <span style="color:red; font-size: 16px; font-weight: bold;">Đăng ký thành công</span>
                    
                    <?php endif; ?>
                    <form method="post" action="index.php?controller=account&action=loginPost">
                        <div class="group">
                            <label for="" class="label">Email</label>
                            <input name="email" type="text" class="input" required> 
                        </div>
                        <div class="group">
                            <label for="" class="label">Mật khẩu</label>
                            <input name="password" type="password" class="input" data-type="password" required>
                        </div>

                        <div class="group">
                            <input type="submit" class="button" value="Đăng nhập">
                        </div>
                        <div class="hr"></div>
                        <div class="foot-lnk" style="color: white;">
                            <h4>Nếu bạn chưa có tài khoản, hãy đăng ký ngay để nhận thông tin ưu đãi cùng những ưu đãi từ shop</h4>
                        </div>
                    </form>
                </div>
                <div class="sign-up-htm">
                    
                    <form method="post" action="index.php?controller=account&action=registerPost">
                        <div class="group">
                            <label for="" class="label">Email</label>
                            <input name="email" type="text" class="input" required>
                        </div>
                        <div class="group">
                            <label for="" class="label">mật khẩu</label>
                            <input name="password" type="password" class="input" data-type="password">
                        </div>
                        <div class="group">
                            <label for="" class="label">Họ & Tên</label>
                            <input name="name" type="text" class="input" required>
                        </div>
                        <div class="group">
                            <label for="" class="label">Địa chỉ</label>
                            <input name="address" type="text" class="input" required>
                        </div>
                        <div class="group">
                            <label for="" class="label">Số điện thoại</label>
                            <input name="phone" type="text" class="input">
                        </div>
                        <div class="group">
                            <input type="submit" class="button" value="Đăng ký">
                        </div>
                        <div class="hr"></div>
                        <div class="foot-lnk" style="color: white;">
                            <h4>Đăng ký để nhận được nhiều ưu đãi</h4>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>  
</body>
</html>
