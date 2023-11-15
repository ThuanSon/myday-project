<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cá nhân</title>
    <link rel="stylesheet" href="../assets/style.css">
    <style>
        input{
            width: 200px;
        }
        #luu{
            width: 50px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Thông tin người dùng</h1>
        <form method="post">
            <table>
                <tr>
                    <td>
                        <label for="fullname">Họ và tên:</label>
                    </td>
                    <td colspan = "3">
                        <input type="text" id="fullname" name="fullname" value="">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="password">Mật khẩu:</label>
                    </td>
                    <td colspan="3">
                        <input type="password" id="password" name="password" value="">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="email">Email:</label>
                    </td>
                    <td colspan="3">
                        <input type="email" id="email" name="email" value="">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="phone">Số điện thoại:</label>
                    </td>
                    <td colspan="3">
                        <input type="text" id="phone" name="phone" value="">
                    </td>
                </tr>
                <tr>
                    <td colspan="3">
                        <input type="submit" name="save" value="Lưu" id="luu">
                    </td>
                </tr>
            </table>
        </form>

        <h1>Thiết lập nhắc nhở</h1>
        <form method="post">
            <table>
                <tr>
                    <td>
                        <label for="reminder_time">Thời gian nhắc nhở:</label>
                    </td>
                    <td>
                        <input type="time" id="reminder_time" name="reminder_time" value="">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="reminder_message">Nội dung nhắc nhở:</label>
                    </td>
                    <td>
                        <input type="text" id="reminder_message" name="reminder_message" value="">
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" name="Reminder" value="Lưu" id="luu">
                    </td>
                </tr>
            </table>
            <br>
    <br>
            
            <br>
    <br>
            
        </form>
    </div>
</body>
</html>
