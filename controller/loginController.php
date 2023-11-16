<?php
include_once '../model/loginModel.php';
class LoginController {
    public function loginUser($username, $password) {
        $loginModel = new LoginModel();
        $user = $loginModel->authenticate($username, $password);
        if ($user) {
            $_SESSION['user'] = $user;
            echo header('Location: index.php');
            exit();
        } else {
            if (empty($username)) {
                $username_error = "Vui lòng nhập tên đăng nhập";
            }
            if (empty($password)) {
                $password_error = "Vui lòng nhập mật khẩu";
            }
            // Kiểm tra nếu không tìm thấy dữ liệu trong cơ sở dữ liệu, hiển thị thông báo lỗi
            if (!empty($username) && !empty($password)) {
                $general_error = "Tên đăng nhập hoặc mật khẩu không đúng";
            }
            include 'login.php';
        }
    }
}
?>