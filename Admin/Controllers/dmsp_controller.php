<?php
require_once("Model/danhmuc_sp.php");

class Dmsp_controller{
    var $dmsp_model;

    public function __construct(){
  $this->dmsp_model=new Danhmuc_sp();
    }
    function lietke(){
        $id=$_SESSION["id_nguoidung"];
        $data_nd=$this->dmsp_model->tt_nguoidung($id);
      $data_dm=  $this->dmsp_model->lietke();
      require_once("View/index.php");
    }

    function trangsua(){
        $id=$_SESSION["id_nguoidung"];
        $data_nd=$this->dmsp_model->tt_nguoidung($id);
        $id=$_GET["iddanhmuc"];
      $data_dm=$this->dmsp_model->timkiem($id);
      require_once("View/index.php");
    }
    function trangthem(){
        $id=$_SESSION["id_nguoidung"];
        $data_nd=$this->dmsp_model->tt_nguoidung($id);
        require_once("View/index.php");
    }
    function update(){
      
        $data=array(
            'ten_danh_muc'=>$_POST['tendm'],
            'id_danhmuc'=>$_GET['iddanhmuc'],
        );
        $this->dmsp_model->update($data);
        header('Location:?quanly=danhmuc_sp&action=lietke');
    }

function add(){
    $data=array(
        'ten_danh_muc'=>$_POST['tendm'],
    );
 $this->dmsp_model->insert($data);
 header('Location:?quanly=danhmuc_sp&action=lietke');
}
function delete(){
    $id=$_GET['iddanhmuc'];
    $this->dmsp_model->delete($id);
    header('Location:?quanly=danhmuc_sp&action=lietke');
}
}