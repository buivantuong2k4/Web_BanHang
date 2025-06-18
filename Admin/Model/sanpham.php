<?php
require_once("model.php");

class Sanpham extends Model{
var $table='sanpham';
var $contens='id_sanpham';


function lietke_sp(){
    $query = "SELECT * FROM sanpham,danhmucsanpham WHERE sanpham.id_danhmucsp=danhmucsanpham.id_danhmuc ORDER BY id_sanpham DESC";
    require("result.php");
    return $data;
}

function danhmuc_sp(){
    $query = "SELECT * FROM danhmucsanpham ORDER BY id_danhmuc DESC";
    require("result.php");
    return $data;
}
}