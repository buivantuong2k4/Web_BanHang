<?php
require_once("Model/danhmuc_bv.php");

class Dmbv_controller{
    var $dmbv_model;
    public function __construct(){
     $this->dmbv_model=new danhmuc_bv();
    }
    
    function lietke(){
      $id=$_SESSION["id_nguoidung"];
      $data_nd=$this->dmbv_model->tt_nguoidung($id);
       $data_dm =$this->dmbv_model->lietke();
        require_once("View/index.php");
    }
    function trangsua(){
      $id=$_SESSION["id_nguoidung"];
      $data_nd=$this->dmbv_model->tt_nguoidung($id);
        $id=$_GET['iddanhmuc'];
       $data_dm=$this->dmbv_model->timkiem($id);
       require_once("View/index.php");
    }
    function trangthem(){
      $id=$_SESSION["id_nguoidung"];
      $data_nd=$this->dmbv_model->tt_nguoidung($id);
        require_once("View/index.php");
    }
    function add(){
      $data=array(
    'tendanhmucbv'=>$_POST['tendm'],
      );
      $this->dmbv_model->insert($data);
      header('Location:?quanly=danhmuc_bv&action=lietke');
    }
    function update(){
        $data=array(
            'tendanhmucbv'=>$_POST['tendm'],
            'id_danhmucbv'=>$_GET['iddanhmuc'],
              );
              $this->dmbv_model->update($data);
              header('Location:?quanly=danhmuc_bv&action=lietke');
    }
    function delete(){
        $id=$_GET['iddanhmuc'];
        $this->dmbv_model->delete($id);
        header('Location:?quanly=danhmuc_bv&action=lietke');
    }
}