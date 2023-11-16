<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../../assets/css/login.css">

</head>

<body>
<?php 
include '../../model/loginModel.php';
?>
    <form action="login.php" method="post">
        <div class="container">
            <h1>Xin Chào! Vui Lòng Đăng Nhập</h1>
            <hr>

            <label for="username"><b></b></label>
            <input type="text" placeholder="Tên Đăng Nhập" name="username" id="username">
            <div class="error-message">
              <span><?php echo (isset($err['username']))?$err['username']:'' ?></span>
            </div>

            <label for="psw"><b></b></label>
            <input type="password" placeholder="Mật Khẩu" name="psw" id="psw">
            <div class="error-message">
              <span><?php echo (isset($err['psw']))?$err['psw']:'' ?></span>
            </div>

            <span class="psw"><a href="forgot_password.php">Quên Mật Khẩu?</a></span>
            <hr>
            <button type="submit" class="registerbtn" name="dangnhap">Đăng Nhập</button>
        </div>

        <div class="container signin">
            <p>Bạn Chưa Có Tài Khoản? <a href="register.php">Đăng Ký</a>.</p>
        </div>
    </form>

</body>

</html>