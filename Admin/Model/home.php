<?php
require_once("model.php");

class Home extends Model{

 function sanpham(){
    $query="SELECT*FROM sanpham ";
    require("result.php");
      return $data;
 }   
 function khachhang(){
    $query="SELECT*FROM nguoidung where ma_pq='1' ";
    require("result.php");
      return $data;
 }   
 function nhanvien(){
    $query="SELECT*FROM nguoidung where ma_pq='2' ";
    require("result.php");
      return $data;
 }   
 function baiviet(){
    $query="SELECT*FROM baiviet ";
    require("result.php");
      return $data;
 }  
 function hoadon_cd(){
    $query="SELECT*FROM hoadon where trangthai='chưa duyệt' ";
    require("result.php");
      return $data;
 }  
 function hoadon(){
    $query="SELECT*FROM hoadon ";
    require("result.php");
      return $data;
 }  
}