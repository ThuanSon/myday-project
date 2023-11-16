<?php
include_once 'model/forgot_passwordModel.php';
class ForgotPasswordController {
    public function sendResetLink($email) {
        $forgotPasswordModel = new ForgotPasswordModel();
        $result = $forgotPasswordModel->sendResetLink($email);
        if ($result) {
            echo "Một liên kết đặt lại mật khẩu đã được gửi đến email của bạn.";
        } else {
            echo "Không thể gửi liên kết đặt lại mật khẩu. Vui lòng thử lại sau.";
        }
    }
}
?>
