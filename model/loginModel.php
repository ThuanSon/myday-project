<?php
include '../model/connect.php';

if (isset($_POST['dangnhap'])) {
    $username = $_POST['username'];
    $password = $_POST['psw'];

    $sql = "SELECT * FROM nguoidung WHERE username = '$username'";
    $query = mysqli_query($conn, $sql);
    $data = mysqli_fetch_assoc($query);
    $checkusers = mysqli_num_rows($query);
    if($checkusers==1){
        $checkusers = password_verify($password, $data['password']);
        if($checkusers){
            // lưu vào session
            $_SESSION['nguoidung'] = $data;
            header('Location: index.php');
        }else{
            echo "Sai mật khẩu";
        }

    }else{
        echo "Tên đăng nhập không tồn tại";
    }
    
}
?>