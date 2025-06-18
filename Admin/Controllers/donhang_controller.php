<?php
require_once("Model/donhang.php");

class Donhang_controller{
    var $dh_model;
    public function __construct(){
     $this->dh_model=new Donhang();
    }

    function lietke(){
        $id=$_SESSION["id_nguoidung"];
        $data_nd=$this->dh_model->tt_nguoidung($id);
        $data_dh=$this->dh_model->lietke();
       require_once("View/index.php");
     }

     function chitiet(){
         $id=$_GET['idhoadon'];
         $total=0;
         $id1=$_SESSION["id_nguoidung"];
         $data_nd=$this->dh_model->tt_nguoidung($id1);
         $data_dh=$this->dh_model->timkiem($id);
     $data_hoadon=$this->dh_model->chitiet_hoadon($id);
    
 for ($i=0; $i <count($data_hoadon) ; $i++) { 
     $data_sanpham=$this->dh_model->lichsu_sanpham($data_hoadon[$i]['id_sanpham']);
    
     
     $data_hoadon[$i]['hinhanh']=$data_sanpham[0]['hinhanh'];
     $data_hoadon[$i]['ten_sp']=$data_sanpham[0]['tensanpham'];
     $data_hoadon[$i]['gia']=$data_sanpham[0]['gia'];
     $total+= $data_hoadon[$i]['soluong']*$data_sanpham[0]['gia'];

 }
     require_once("View/index.php");
     }

     function delete(){
        $id=$_GET['idhoadon'];
        $this->dh_model->delete($id);
        header('Location:?quanly=donhang&action=lietke');
     }
     function duyet(){
        $id=$_GET['idhoadon'];
        $data=array(
            'trangthai'=>'duyệt',
            'id_hoadon'=>$id,
        );
        $this->dh_model->update($data);
        header('Location:?quanly=donhang&action=lietke');
     }
}