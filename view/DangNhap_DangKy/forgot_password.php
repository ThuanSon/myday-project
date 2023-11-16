<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Quên Mật Khẩu</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
        }

        .container {
            max-width: 400px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
        }

        p {
            text-align: center;
            color: #555;
        }

        hr {
            border: 1px solid #ddd;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #333;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .error-message {
            color: red;
            margin-bottom: 10px;
            font-size: 14px;
        }

        .success-message {
            color: green;
            margin-bottom: 10px;
        }

        .registerbtn {
            background-color: #04AA6D;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
            border-radius: 4px;
        }

        .registerbtn:hover {
            opacity: 0.8;
        }
        .signin {
            background-color: #f1f1f1;
            text-align: center;
        }
    </style>
</head>

<body>

    <?php
    $email_error = $success_message = "";

    if (isset($_POST['submit'])) {
        $email = $_POST['email'];

        if (empty($email)) {
            $email_error = "Vui lòng nhập địa chỉ email";
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $email_error = "Định dạng email không hợp lệ";
        } else {
            // Validate email

            $is_email_valid = kiem_tra_email_trong_csdl($email);

            if (!$is_email_valid) {
                $email_error = "Email không tồn tại";
            } else {
                $success_message = "Hướng dẫn đặt lại mật khẩu đã được gửi đến địa chỉ email của bạn.";
            }
        }
    }

    function kiem_tra_email_trong_csdl($email)
    {
        // Thực hiện truy vấn cơ sở dữ liệu ở đây
        // Trả về true nếu email tồn tại, ngược lại trả về false

        // Ví dụ: Giả sử email là hợp lệ để minh họa
        $ket_qua = true;

        return $ket_qua;
    }
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
