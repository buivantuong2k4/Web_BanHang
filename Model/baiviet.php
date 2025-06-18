<?php
require_once("model.php");
class Baiviet extends model {
 function baiviet_limit($begin){
    $query = "SELECT * FROM baiviet,danhmucbaiviet WHERE baiviet.id_danhmucbv=danhmucbaiviet.id_danhmucbv ORDER BY baiviet.id_baiviet DESC LIMIT $begin,4";
    require("result.php");
    return $data;
 }
 function baiviet(){
    $query = "SELECT * FROM baiviet,danhmucbaiviet WHERE baiviet.id_danhmucbv=danhmucbaiviet.id_danhmucbv ORDER BY baiviet.id_baiviet DESC ";
    require("result.php");
    return $data;
 }
 function baiviet_detail($id){
   $query = "SELECT * FROM baiviet WHERE id_baiviet='$id' ";
   return $this->mysqli->query($query)->fetch_assoc();
}
}