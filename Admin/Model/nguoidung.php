<?php
require_once("model.php");

class Nguoidung extends Model{
    var $table='nguoidung';
    var $contens='id_nguoidung';
    
    function phanquyen(){
        $query="SELECT * FROM phanquyen";
        require("result.php");
     return $data;
    }
}