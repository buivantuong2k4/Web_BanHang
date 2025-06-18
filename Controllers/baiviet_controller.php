<?php
require_once("Model/baiviet.php");
class Baiviet_controller {
    var $home;
   public function __construct(){
        $this->home=new Baiviet();
    }

    function list(){
        if(isset($_GET['trang'])){
            $page = $_GET['trang'];
        }else{
            $page = 1;
        }
        if($page == '' || $page == 1){
            $begin = 0;
        }else{
            $begin = ($page*4)-4;
        }
        if(isset($_SESSION["id_nguoidung"])){
            $id=$_SESSION["id_nguoidung"];
            $data_nd=$this->home->tt_nguoidung($id);
        }
        $data_danhmuc=$this->home->danhmuc();
      $data_baiviet_limit = $this->home->baiviet_limit($begin);
      $data_baiviet = $this->home->baiviet();
      $data_danhmucbv = $this->home->danhmuc_bv();
      require_once("View/index.php");
    }
    function baiviet_detail(){
        if(isset($_SESSION["id_nguoidung"])){
            $id=$_SESSION["id_nguoidung"];
            $data_nd=$this->home->tt_nguoidung($id);
        }
        $id_bv=$_GET["idbv"];
        $data_danhmuc=$this->home->danhmuc();
        $data_bvdt=$this->home->baiviet_detail($id_bv);
        require_once("View/index.php");
    }
}