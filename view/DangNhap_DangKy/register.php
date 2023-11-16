<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../../assets/css/register.css">
</head>
<body>
  <?php
  include '../../model/registerModel.php';
  ?>
    <form action="register.php" method="post">
        <div class="container">
            <h1>Xin Chào! Vui Lòng Đăng Ký</h1>
            <hr>

            <label for="username"><b></b></label>
            <input type="text" placeholder="Tên Đăng Nhập" name="username" id="username">
            <div class="error-message">
              <span><?php echo (isset($err['username']))?$err['username']:'' ?></span>
            </div>
            <label for="email"><b></b></label>
            <input type="text" placeholder="Email" name="email" id="email">
            <div class="error-message">
              <span><?php echo (isset($err['email']))?$err['email']:'' ?></span>
            </div>
            <label for="phone"><b></b></label>
            <input type="text" placeholder="Số Điện Thoại" name="phone" id="phone">
            <div class="error-message">
              <span><?php echo (isset($err['phone']))?$err['phone']:'' ?></span>
            </div>
            <label for="psw"><b></b></label>
            <input type="password" placeholder="Mật Khẩu" name="psw" id="psw">
            <div class="error-message">
              <span><?php echo (isset($err['psw']))?$err['psw']:'' ?></span>
            </div>
            <label for="psw-repeat"><b></b></label>
            <input type="password" placeholder="Nhập Lại Mật Khẩu" name="psw-repeat" id="psw-repeat">
            <div class="error-message">
              <span><?php echo (isset($err['psw-repeat']))?$err['psw-repeat']:'' ?></span>
            </div>
            <hr>
            <button type="submit" class="registerbtn" name="dangky">Đăng Ký</button>
        </div>

        <div class="container signin">
            <p>Bạn Đã Có Tài Khoản? <a href="login.php">Đăng Nhập</a>.</p>
        </div>
    </form>

</body>

</html>