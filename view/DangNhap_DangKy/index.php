<h1>Trang Chủ</h1>
<?php
if(isset($_SESSION['username']) && isset($_SESSION['matKhau']))
{
    echo 'Chaof mung';
    session_destroy();
}
else
{
    header('location', 'login.php');
}
?>