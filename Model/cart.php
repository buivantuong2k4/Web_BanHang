<?php
require_once("model.php");
class Cart extends Model
{
    function sanpham_detail($idsp){
        $query = "SELECT * FROM sanpham WHERE id_sanpham='$idsp'";
       $this->mysqli->query();
    }
}