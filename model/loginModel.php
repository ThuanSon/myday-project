<?php
include 'connect.php';
$err = [];
if (isset($_POST['dangnhap'])) {
    $username = $_POST['username'];
    $password = $_POST['psw'];

    if (empty($username)) {
        $err['username'] = "Vui lòng nhập tên đăng nhập";
      }
      if (empty($password)) {
        $err['psw'] = "Vui lòng nhập mật khẩu";
      }else{
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
            $err['psw'] = "Sai mật khẩu";
        }

    }else{
        $err['username'] = "Tên đăng nhập không tồn tại";
    }
  }
}
?>