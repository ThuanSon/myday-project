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