<?php
require_once("model.php");

class Baiviet extends Model{
    var $table='baiviet';
    var $contens='id_baiviet';

    function danhmuc_bv(){
        $query = "SELECT * FROM danhmucbaiviet ORDER BY id_danhmucbv DESC";
        require("result.php");
        return $data;
    }
}