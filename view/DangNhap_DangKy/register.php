<?php
include 'connect.php';
$err = [];
  if (isset($_POST['dangky'])) {
 
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['psw'];
    $password_repeat = $_POST['psw-repeat'];

    if (empty($username)) {
      $err['username'] = "Vui lòng nhập tên đăng nhập";
    }
    if (empty($email)) {
      $err['email'] = "Vui lòng nhập email";
    }
    if (empty($phone)) {
      $err['phone'] = "Vui lòng nhập số điện thoại";
    }
    if (empty($password)) {
      $err['psw'] = "Vui lòng nhập mật khẩu";
    }
    if (empty($password_repeat)) {
      $err['psw-repeat'] = "Vui lòng nhập lại mật khẩu";
    }elseif ($password != $password_repeat) {
      $err['psw-repeat'] = "Nhập Lại Mật Khẩu không khớp";
        }
    // var_dump($err);
    if(empty($err)){
      // $pass = password_hash($password, PASSWORD_BCRYPT);

      $sql = "INSERT INTO nguoidung(username, email, soDT, matKhau) VALUES ('$username', '$email', '$phone', '$password')";
      $query = mysqli_query($conn, $sql);
      if($query){
        
        header('location: login.php');
      }
    
    }
    // die();

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

    a {
        color: dodgerblue;
    }

    .signin {
        background-color: #f1f1f1;
        text-align: center;
    }
    .error-message {
        color: red;
        margin-bottom: 10px;
    }
    </style>

</head>

<body>
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