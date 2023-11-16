<?php
include 'connect.php';

if (isset($_POST['dangnhap'])) {
    $username = $_POST['username'];
    $password = $_POST['psw'];

    $sql = "SELECT * FROM nguoidung WHERE username = '$username'";
    $query = mysqli_query($conn, $sql);
    $data = mysqli_fetch_assoc($query);
    $checkusers = mysqli_num_rows($query);
    if($checkusers==1){
        // $pass = password_hash($password, PASSWORD_BCRYPT); 
        $checkusers = ($password == $data['matKhau'])? True : false;
        // var_dump($pass);
        // echo '@pass';
        // var_dump($data['matKhau']);
        if($checkusers){
            // lưu vào session
            $_SESSION['nguoidung'] = $data['username'];
            $_SESSION['matKhau'] = $data['matKhau'];
            header('Location: index.php');
        }else{
            echo "Sai mật khẩu";
            echo $password;
        }

    }else{
        echo "Tên đăng nhập không tồn tại";
    }
    
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
    body {
        font-family: Arial, Helvetica, sans-serif;
        background-color: black;
    }

    * {
        box-sizing: border-box;
    }

    /* Add padding to containers */
    .container {
        padding: 16px;
        background-color: white;
    }

    /* Full-width input fields */
    input[type=text],
    input[type=password] {
        width: 100%;
        padding: 15px;
        margin: 5px 0 22px 0;
        display: inline-block;
        border: none;
        background: #f1f1f1;
    }

    input[type=text]:focus,
    input[type=password]:focus {
        background-color: #ddd;
        outline: none;
    }

    /* Overwrite default styles of hr */
    hr {
        border: 1px solid #f1f1f1;
        margin-bottom: 25px;
    }

    /* Set a style for the submit button */
    .registerbtn {
        background-color: #04AA6D;
        color: white;
        padding: 16px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 100%;
        opacity: 0.9;
    }

    .registerbtn:hover {
        opacity: 1;
    }

    /* Add a blue text color to links */
    a {
        color: dodgerblue;
    }

    /* Set a grey background color and center the text of the "sign in" section */
    .signin {
        background-color: #f1f1f1;
        text-align: center;
    }

    span.psw {
        float: right;
        padding-top: 16px;
    }

    .error-message {
        color: red;
        margin-bottom: 10px;
    }
    </style>

</head>

<body>
    <form action="login.php" method="post">
        <div class="container">
            <h1>Xin Chào! Vui Lòng Đăng Nhập</h1>
            <hr>

            <label for="username"><b></b></label>
            <input type="text" placeholder="Tên Đăng Nhập" name="username" id="username">
            <?php if (!empty($username_error)) : ?>
            <span class="error-message"><?php echo $username_error; ?></span>
            <?php endif; ?>

            <label for="psw"><b></b></label>
            <input type="password" placeholder="Mật Khẩu" name="psw" id="psw">
            <?php if (!empty($password_error)) : ?>
            <span class="error-message"><?php echo $password_error; ?></span>
            <?php endif; ?>

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