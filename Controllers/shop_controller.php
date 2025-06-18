<?php
require_once("Model/shop.php");
class Shop_controller {
    var $shop_model;
    public function __construct(){
        $this->shop_model=new Shop();
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
            $data_nd=$this->shop_model->tt_nguoidung($id);
        }
        $data_sanpham_limit=$this->shop_model->sanpham_limit($begin);
        $data_danhmuc=$this->shop_model->danhmuc();
        $data_sanpham=$this->shop_model->sanpham();
        require_once("View/index.php");
    }

    function phanloai(){
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
            $data_nd=$this->shop_model->tt_nguoidung($id);
        }
        $id_danhmuc=$_GET["id_danhmuc"];
        $data_sanpham_limit=$this->shop_model->lsp_limit($id_danhmuc,$begin);
        $data_danhmuc=$this->shop_model->danhmuc();
        $data_sanpham=$this->shop_model->loaisanpham($id_danhmuc);
        for ($i=0; $i <count($data_danhmuc) ; $i++) { 
        if($data_danhmuc[$i]["id_danhmuc"]==$id_danhmuc){
            $data_loai=$data_danhmuc[$i]["ten_danh_muc"];
        }
        }
        require_once("View/index.php");
    }

    function timkiem(){
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
        $id_timkiem=$_POST["tukhoa"];
        $data_sanpham_limit=$this->shop_model->tk_limit($id_timkiem,$begin);
        $data_danhmuc=$this->shop_model->danhmuc();
        $data_sanpham=$this->shop_model->timkiem($id_timkiem);
        if(isset($_SESSION["id_nguoidung"])){
            $id=$_SESSION["id_nguoidung"];
            $data_nd=$this->shop_model->tt_nguoidung($id);
        }
        require_once("View/index.php");
    }

    function chitiet_sp(){
        if(isset($_SESSION["id_nguoidung"])){
            $id=$_SESSION["id_nguoidung"];
            $data_nd=$this->shop_model->tt_nguoidung($id);
        }
        $idsp=$_GET["idsp"]; 
        $data_danhmuc=$this->shop_model->danhmuc();
        $data_sanpham=$this->shop_model->sanpham_detail($idsp);
        require_once("View/index.php");
    }
    function comment(){
        $idsp=$_POST["idsp"]; 
        $id_nd=$_SESSION["id_nguoidung"];
        $comment=$_POST["comment"]; 
      $data_nd = $this->shop_model->tt_nguoidung($id_nd);
      $data=array(
        'ten_nguoidung'=>$data_nd["tennguoidung"],
        'anh_nguoidung'=>$data_nd["hinhanh"],
        'id_sanpham'=>$idsp,
        'binhluan'=>$comment,
        'id_nguoidung'=>$data_nd["id_nguoidung"],
    );
     $this->shop_model->insert_comment($data);
    }
    function list_comment(){
        $idsp=$_POST["idsp"]; 
        $data_cm=$this->shop_model->list_comment($idsp);
        if($data_cm){
            $output='';
        for ($i=0; $i < count($data_cm); $i++) { 
            $output.='
    <div class="comment">
    <div class="comment-img">
    <img src="Public/img/'.$data_cm[$i]["anh_nguoidung"].'" alt="" with=70px" height="70px">
    </div>
    <div class="comment-noidung">
    <p1>'.$data_cm[$i]["ten_nguoidung"].'</p1>
    <p2>'.$data_cm[$i]["binhluan"].'</p2>';

    if(isset($_SESSION["id_nguoidung"]) && $_SESSION["id_nguoidung"]==$data_cm[$i]["id_nguoidung"]){
    $output.='
     <button id="id_comment" value="'.$data_cm[$i]["id_binhluan"].'">Xóa</button>';
    }
     $output.='
    </div>     
    </div>  ';
        }
        echo $output;}
    }
    function delete_comment(){
        $id=$_POST["id_comment"]; 
        $this->shop_model->delete_comment($id);
    }

}
