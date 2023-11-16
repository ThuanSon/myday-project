<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../../assets/css/forgot_password.css">
    <title>Quên Mật Khẩu</title>
</head>

<body>
    <?php
    include '../../model/forgot_passwordModel.php';
    ?>
    <form action="forgot_password.php" method="post">
        <div class="container">
            <h1>Quên Mật Khẩu</h1>
            <p>Nhập địa chỉ email của bạn để đặt lại mật khẩu.</p>
            <hr>

            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Nhập Email" name="email" id="email">
            <?php if (!empty($email_error)) : ?>
                <div class="error-message"><?php echo $email_error; ?></div>
            <?php endif; ?>

            <?php if (!empty($success_message)) : ?>
                <div class="success-message"><?php echo $success_message; ?></div>
            <?php endif; ?>

            <hr>
            <button type="submit" class="registerbtn" name="submit">Gửi Email Khôi Phục</button>
            <div class="container signin">
        <p>Quay lại <a href="login.php">Đăng Nhập</a>.</p>
    </div>
        </div>
    </form>

</body>

</html>
