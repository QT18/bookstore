<?php
//require_once __DIR__. "/../libraries/session.php";
require_once __DIR__. "/../libraries/Database.php";
// require_once __DIR__. "/../libraries/PHPMailer.php";
// require_once __DIR__. "/../libraries/SMTP.php";
$_SESSION['user'];
?>
<?php
/**
 * 
 */
class giohang
{
    private $db;
    public function __construct()
    {
        $this->db = new Database();
    }
    public function add($masp)
    {
        $makhachhang = Session::get('makhachhang');        
        $query = "SELECT * FROM sanpham WHERE id = '$id' ";
        $result = $this->db->select($query)->fetch_assoc();
        $tensp = $result["tensp"];
        $gia = $result["gia"];
        $image = $result["image"];
        $checkgiohang = "SELECT soluong FROM giohang WHERE masp = '$masp' AND makhachhang = '$makhachhang' ";
        $check_giohang = $this->db->select($checkgiohang);
        if ($check_giohang) {
            //Check soluong product in db
            $soluongIngiohang = mysqli_fetch_row($check_giohang)[0];
            $product = new product();
            $productCheck = $product->getProductbyId($masp);
            if (intval($soluongIngiohang) >= intval($productCheck['soluong'])) {
                return 'out of stock';
            }
            $query_insert = "UPDATE giohang SET soluong = soluong + 1 WHERE masp = $masp AND makhachhang = $makhachhang";
            $insert_giohang = $this->db->update($query_insert);
            if ($insert_giohang) {
                return true;
            } else {
                return false;
            }
        } else {
            $query_insert = "INSERT INTO giohang VALUES(NULL,'$makhachhang','$masp',1,'$tensp','$gia','$image' )";
            $insert_giohang = $this->db->insert($query_insert);
            if ($insert_giohang) {
                return true;
            } else {
                return false;
            }
        }
    }
    public function update($masp, $soluong)
    {
        $makhachhang = Session::get('makhachhang');
        //Check soluong product in db
        $product = new product();
        $productCheck = $product->getProductbyId($masp);
        if (intval($soluong) > intval($productCheck['soluong'])) {
            return 'out of stock';
        }

        $query_insert = "UPDATE giohang SET soluong = $soluong WHERE masp = $masp AND makhachhang = $makhachhang";
        $insert_giohang = $this->db->update($query_insert);
        if ($insert_giohang) {
            return true;
        } else {
            return false;
        }
    }
    public function get()
    {
        
        $makhachhang = $_SESSION['userid'];
        $query = "SELECT * FROM giohang WHERE makhachhang = '$makhachhang' ";
        $mysqli_result = $this->db->select($query);
        if ($mysqli_result) {
            $result = mysqli_fetch_all($this->db->select($query), MYSQLI_ASSOC);
            return $result;
        }
        return false;
    }
    public function delete($id)
    {
        $makhachhang = Session::get('makhachhang');
        $query = "DELETE FROM giohang WHERE makhachhang = '$makhachhang' AND id = $id";
        $row = $this->db->delete($query);
        if ($row) {
            return true;
        }
        return false;
    }
    public function getTotalPriceBymakhachhang()
    {
        $makhachhang = $_SESSION['userid'];
        $query = "SELECT SUM(gia*soluong) as tonggia FROM giohang WHERE makhachhang = '$makhachhang' ";
        $mysqli_result = $this->db->select($query);
        if ($mysqli_result) {
            $result = mysqli_fetch_all($this->db->select($query), MYSQLI_ASSOC)[0];
            return $result;
        }
        return false;
    }
    public function getTotalsoluongBymakhachhang()
    {
        $makhachhang = $_SESSION['userid'];
        $query = "SELECT SUM(soluong) as soluong FROM giohang WHERE makhachhang = '$makhachhang' ";
        $mysqli_result = $this->db->select($query);
        if ($mysqli_result) {
            $result = mysqli_fetch_all($this->db->select($query), MYSQLI_ASSOC)[0];
            return $result;
        }
        return false;
    }
}
?>