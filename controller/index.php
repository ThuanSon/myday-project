<?php 
class ConnectDataBase{
    function connect(& $conn){
        $conn = mysqli_connect("localhost","root","",'mydayhandbook');
        // mysql_set_charset("utf8");
        if($conn)
            return mysqli_select_db($conn,"mydayhandbook");
        return false;
    }
    function disconnect($conn){
        mysqli_close($conn);
    }
};
$p = new ConnectDataBase();
echo $p->connect($conn);
if (!$conn) {
    die("Kết nối tới cơ sở dữ liệu thất bại: " . mysqli_connect_error());
}
else{
    echo "Kết nối db thành công !!!";
}

?>