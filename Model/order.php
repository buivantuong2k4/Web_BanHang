<?php
require_once("model.php");
class Order extends Model
{
    function thongtin($email){
        $query="SELECT*FROM nguoidung where email='$email' limit 1";
        require("result.php");
        return $data;
    }

    function donhang($data){
        $query="INSERT INTO hoadon (id_hoadon,id_nguoidung,timedathang,tennguoinhan,sdt,diachi,tongtien,trangthai) value('".$data["id_hoadon"]."','".$data["id_nguoidung"]."',current_timestamp(),'".$data["ten"]."','".$data["sdt"]."','".$data["diachi"]."','".$data["total"]."','".$data["trangthai"]."')";
        $this->mysqli->query($query);
       
    }

    function dkchitiet_hoadon($data1){
        $query="INSERT INTO chitiethoadon (id_chitiet,id_hoadon,id_sanpham,soluong) value('','".$data1['id_hoadon']."','".$data1['id_sanpham']."','".$data1['soluong']."')";
        $this->mysqli->query($query);
    }

    function lk_donhang($data){
        $query="SELECT * FROM hoadon where id_nguoidung='$data' ORDER BY timedathang DESC";
        require("result.php");
        return $data;
    }
  
    function chitiet_hoadon($data){
        $query="SELECT*FROM chitiethoadon where id_hoadon in ($data)";
            require("result.php");
        return $data;
    }
    function lichsu_sanpham($data){
        $query="SELECT*FROM sanpham where id_sanpham='$data' ";
        require("result.php");
        return $data;
    }
    function updata_sp($data1){
        $query="UPDATE sanpham SET soluong='".$data1["sl_sau"]."' where id_sanpham='".$data1["id_sanpham"]."'";
        echo $query;
        $this->mysqli->query($query);
    }
}