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
