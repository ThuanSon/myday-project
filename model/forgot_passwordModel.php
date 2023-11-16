<?php
class ForgotPasswordModel {
    public function sendResetLink($email) {
        $conn = mysqli_connect("localhost",$username,$password,'mydayhandbook');
        if ($conn->mydayhandbook) {
            die("Kết nối không thành công: " . $conn->mydayhandbook);
        }
        // Thực hiện truy vấn để kiểm tra xem email có tồn tại trong cơ sở dữ liệu hay không
        $sql = "SELECT * FROM users WHERE email='$email'";
        $result = $conn->query($sql);

        if ($result->num_rows == 1) {
            // Tạo mã thông báo cho liên kết đặt lại mật khẩu (có thể làm bằng UUID hoặc mã ngẫu nhiên)
            $reset_token = uniqid();

            // Lưu mã thông báo vào cơ sở dữ liệu, thông tin này có thể được lưu trong một cột riêng biệt trong bảng người dùng
            $update_sql = "UPDATE users SET reset_token='$reset_token' WHERE email='$email'";
            $update_result = $conn->query($update_sql);

            if ($update_result) {
                // Gửi email chứa liên kết đặt lại mật khẩu đến email của người dùng
                $reset_link = "https://yourdomain.com/reset_password.php?token=$reset_token";
                $email_subject = "Yêu cầu đặt lại mật khẩu";
                $email_body = "Nhấn vào đây để đặt lại mật khẩu của bạn: $reset_link";
                
                // Gửi email bằng cách sử dụng hàm mail() hoặc thư viện gửi email khác
                // Ví dụ: mail($email, $email_subject, $email_body);
                
                // Trả về true nếu gửi email thành công
                return true;
            }
        }

        // Đóng kết nối sau khi thực hiện truy vấn
        $conn->close();
        return false;
    }
}
?>
