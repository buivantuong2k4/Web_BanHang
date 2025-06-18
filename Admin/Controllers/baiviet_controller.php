<?php
require_once("Model/baiviet.php");

class Baiviet_controller{
    var $baiviet_model;
    public function __construct(){
$this->baiviet_model=new Baiviet();
    }

    function lietke(){
        $id=$_SESSION["id_nguoidung"];
        $data_nd=$this->baiviet_model->tt_nguoidung($id);
        $data_dm=$this->baiviet_model->danhmuc_bv();
$data_bv=$this->baiviet_model->lietke();
require_once("View/index.php");
    }
    function trangthem(){
        $id=$_SESSION["id_nguoidung"];
        $data_nd=$this->baiviet_model->tt_nguoidung($id);
$data_dm=$this->baiviet_model->danhmuc_bv();
require_once("View/index.php");
    }
    function trangsua(){
            $id=$_SESSION["id_nguoidung"];
            $data_nd=$this->baiviet_model->tt_nguoidung($id);
        $id=$_GET['idbaiviet'];
        $data_bv=$this->baiviet_model->timkiem($id);
        $data_dm=$this->baiviet_model->danhmuc_bv();
        require_once("View/index.php");
    }
    function add(){
//xuly hinh anh
$hinhanh = $_FILES['hinhanh']['name'];
$hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
$hinhanh = time().'_'.$hinhanh;

$data=array(
    'tenbaiviet'=>$_POST['tenbaiviet'],
    'gioithieu'=> $_POST['gioithieu'],
    'noidung'=>$_POST['noidung'],
    'hinhanh'=>$hinhanh,
    'id_danhmucbv'=> $_POST['danhmuc'],
);
	move_uploaded_file($hinhanh_tmp,'../Public/img/'.$hinhanh);
    $this->baiviet_model->insert($data);
    header('Location:?quanly=baiviet&action=lietke');
}
    
    function update(){
        $hinhanh = $_FILES['hinhanh']['name'];
        $hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
        $hinhanh = time().'_'.$hinhanh;
      $id=  $_GET['idbaiviet'];
	if(!empty($_FILES['hinhanh']['name'])){
		move_uploaded_file($hinhanh_tmp,'../Public/img/'.$hinhanh);
        $data=array(
            'tenbaiviet'=>$_POST['tenbaiviet'],
            'gioithieu'=> $_POST['gioithieu'],
            'noidung'=>$_POST['noidung'],
            'hinhanh'=>$hinhanh,
            'id_danhmucbv'=> $_POST['danhmuc'],
            'id_baiviet'=>$id,
        );
	
		$data_bv=$this->baiviet_model->timkiem($id);
			unlink('../Public/img/'.$data_bv['hinhanh']);
			$this->baiviet_model->update($data);
	}else{
        $data=array(
            'tenbaiviet'=>$_POST['tenbaiviet'],
            'gioithieu'=> $_POST['gioithieu'],
            'noidung'=>$_POST['noidung'],
            'id_danhmucbv'=> $_POST['danhmuc'],
            'id_baiviet'=>$id,
        );
        $this->baiviet_model->update($data);
	}
    header('Location:?quanly=baiviet&action=lietke');
    }
    function delete(){
        $id=$_GET['idbaiviet'];
	   $data_bv=$this->baiviet_model->timkiem($id);
      unlink('../Public/img/'.$data_bv['hinhanh']);
      $this->baiviet_model->delete($id);
      header('Location:?quanly=baiviet&action=lietke');
    }

}