<?php
require_once("Model/home.php");

class Home_controller{
    var $home_model;

    public function __construct(){
        $this->home_model=new Home() ;
    }


    function list(){
        $id=$_SESSION["id_nguoidung"];
        $data_nd=$this->home_model->tt_nguoidung($id);
        $data_kh=$this->home_model->khachhang();
        $data_nv=$this->home_model->nhanvien();
        $data_sp=$this->home_model->sanpham();
        $data_bv=$this->home_model->baiviet();
        $data_cd=$this->home_model->hoadon_cd();
        $data_hd=$this->home_model->hoadon();
        $tien=0;
        for ($i=0; $i <count($data_hd) ; $i++) { 
           $tien+=$data_hd[$i]["tongtien"];
        }
        require_once("View/index.php");
    }
}