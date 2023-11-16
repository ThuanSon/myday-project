<?php
include_once '../model/registerModel.php';
class RegisterController {
    public function registerUser($username, $email, $password) {
        $registerModel = new RegisterModel();
        $result = $registerModel->createUser($username, $email, $password);
        if ($result) {
            header('Location: ../view/DangNhap_DangKy/login.php');
            exit();
        } else {
            echo "Đăng ký không thành công. Vui lòng thử lại.";
        }
    }
}
?>
