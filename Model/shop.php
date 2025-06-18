<?php
require_once("model.php");
class Shop extends Model
{
    function timkiem($tukhoa){
        $query = "SELECT * FROM sanpham WHERE tensanpham LIKE '%".$tukhoa."%' ORDER BY id_sanpham DESC ";
        require("result.php");
        return $data;
    }
    function tk_limit($tukhoa,$begin){
        $query = "SELECT * FROM sanpham WHERE tensanpham LIKE '%".$tukhoa."%' ORDER BY id_sanpham DESC LIMIT $begin,12 AND gia DESC";
        require("result.php");
        return $data;
    }
    function lsp_limit($id_danhmuc,$begin){
        $query = "SELECT * FROM sanpham WHERE id_danhmucsp='$id_danhmuc' ORDER BY id_sanpham DESC LIMIT $begin,12";
        require("result.php");
        return $data;
    }
    function loaisanpham($id_danhmuc){
        $query = "SELECT * FROM sanpham WHERE id_danhmucsp='$id_danhmuc' ORDER BY id_sanpham DESC ";
        require("result.php");
        return $data;
    }

    function sanpham_detail($idsp){
        $query = "SELECT * FROM sanpham WHERE id_sanpham='$idsp'";
        require("result.php");
        return $data;
    }
    function insert_comment($data){
        $query="INSERT INTO binhluan (id_binhluan,ten_nguoidung,anh_nguoidung,id_sanpham,binhluan,id_nguoidung) value ('','".$data['ten_nguoidung']."','".$data['anh_nguoidung']."','".$data['id_sanpham']."','".$data['binhluan']."','".$data['id_nguoidung']."')";
        $this->mysqli->query($query);
    }
    function list_comment($idsp){
        $query = "SELECT * FROM binhluan WHERE id_sanpham='$idsp'";
        require("result.php");
        return $data;
    }
    function delete_comment($id){
        $query="DELETE from binhluan where id_binhluan='$id'";
        $this->mysqli->query($query);
    }
}