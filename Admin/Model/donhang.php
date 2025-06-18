<?php
require_once("model.php");

class Donhang extends Model{
var $table='hoadon';
var $contens='id_hoadon';

function chitiet_hoadon($id){
    $query="SELECT * FROM chitiethoadon where id_hoadon ='$id'";

        require("result.php");
    return $data;
}
function lichsu_sanpham($id){
    $query="SELECT*FROM sanpham where id_sanpham='$id' limit 1 ";
   
  require("result.php");
    return $data;
}
}