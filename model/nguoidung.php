<?php include("../controller/index.php")?>
<?php
class nguoidung{
    private $username;
    private $tenNguoiDung;
    private $email;
    private $matKhau;
    private $soDT;
    private $gioitinh;
    private $ngaySinh;
    private $diaChi;

    public function __construct($username,$tenNguoiDung,$email,$matKhau,$soDT,$gioitinh,$ngaySinh,$diaChi){
        $this->username = $username;
        $this->tenNguoiDung = $tenNguoiDung;
        $this->email = $email;
        $this->matKhau = $matKhau;
        $this->soDT = $soDT;
        $this->gioitinh=$gioitinh;
        $this->ngaySinh = $ngaySinh;
        $this->diaChi = $diaChi;
        }
    public function getusername($soDT){
        $conn = mysqli_connect("localhost","root","",'mydayhandbook');
        $query = "SELECT username FROM 'nguoidung' WHERE 'soDT' = $soDT";
        $username = mysqli_query($conn, $query);
        echo $username;
    }
    public function gettenNguoiDung(){
        return $this->tenNguoiDung;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getMatKhau(){
        return $this->matKhau;
    }
    public function getGioitinh(){
        return $this->gioitinh;
    }
    public function getDiaChi(){
        return $this->diaChi;
    }
    public function getngaySinh(){
        return $this->ngaySinh;
    }
}

?>