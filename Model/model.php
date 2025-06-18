<?php
require_once("connection.php");
class model
{
    var $mysqli;
    function __construct()
    {
        $mysqli_obj = new connection();
        $this->mysqli = $mysqli_obj->mysqli;
    }
   
    function danhmuc()
    {
        $query = "SELECT * FROM danhmucsanpham ORDER BY id_danhmuc DESC";

        require("result.php");
        
        return $data;
    }
    function sanpham(){
        $query = "SELECT * FROM sanpham,danhmucsanpham WHERE sanpham.id_danhmucsp=danhmucsanpham.id_danhmuc ORDER BY sanpham.id_sanpham DESC ";
    require("result.php");
    return $data;
    }
    function sanpham_limit($begin){
        $query = "SELECT * FROM sanpham,danhmucsanpham WHERE sanpham.id_danhmucsp=danhmucsanpham.id_danhmuc ORDER BY sanpham.id_sanpham DESC LIMIT $begin,12";
        require("result.php");
        return $data;
    }
    function danhmuc_bv(){
        $query  = "SELECT * FROM danhmucbaiviet ORDER BY id_danhmucbv DESC";
        require("result.php");
        return $data;
    }
   
    function  list($str){
        $query= "SELECT * FROM sanpham where id_sanpham in ($str)";
       
        require("result.php");
        return $data;
    }
    function tt_nguoidung($id){
        $query= "SELECT * FROM nguoidung where id_nguoidung ='$id' limit 1";
       return $this->mysqli->query($query)->fetch_assoc();
    }
}
 ?>