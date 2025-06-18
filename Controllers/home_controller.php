<?php
require_once("Model/home.php");
class HomeController
{
    var $home_model;
    public function __construct()
    {
       $this->home_model = new Home();
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
		$begin = ($page*12)-12;
	}
    if(isset($_SESSION["id_nguoidung"])){
        $id=$_SESSION["id_nguoidung"];
        $data_nd=$this->home_model->tt_nguoidung($id);
    }
    $data_sanpham_limit=$this->home_model->sanpham_limit($begin);
    $data_danhmuc=$this->home_model->danhmuc();
    $data_sanpham=$this->home_model->sanpham();
    require_once("View/index.php");
}
function list_lh(){

    if(isset($_SESSION["id_nguoidung"])){
        $id=$_SESSION["id_nguoidung"];
        $data_nd=$this->home_model->tt_nguoidung($id);
    }
    $data_danhmuc=$this->home_model->danhmuc();
    require_once("View/index.php");
}
}
?>