<?php
require_once("Model/sanpham.php");

class Sanpham_controller{
    var $sanpham_model;

    public function __construct(){
        $this->sanpham_model=new Sanpham();
    }


    function list(){
        $id=$_SESSION["id_nguoidung"];
        $data_nd=$this->sanpham_model->tt_nguoidung($id);
        $data_sanpham=$this->sanpham_model->lietke_sp();
        require_once("View/index.php");
    }

    function trangsua(){
        $id=$_SESSION["id_nguoidung"];
        $data_nd=$this->sanpham_model->tt_nguoidung($id);
        $id=$_GET["idsanpham"];
        $data_sp=$this->sanpham_model->timkiem($id);
        $data_dm=$this->sanpham_model->danhmuc_sp();
        require_once("View/index.php");
    }
    
    function trangthem(){
        $id=$_SESSION["id_nguoidung"];
        $data_nd=$this->sanpham_model->tt_nguoidung($id);
        $data_dm=$this->sanpham_model->danhmuc_sp();
        require_once("View/index.php");
    }
    function add(){
//xuly hinh anh
$hinhanh = $_FILES['hinhanh']['name'];
$hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
$hinhanh = time().'_'.$hinhanh;

$data=array(
    'id_sanpham'=>'null',
    'tensanpham'=>$_POST['tensanpham'],
    'gia'=>$_POST['giasp'],
    'soluong'=>$_POST['soluong'],
    'hinhanh'=>$hinhanh,
    'id_danhmucsp'=>$_POST['danhmuc'],
    'chitiet'=>$_POST["chitiet"],
);

    $this->sanpham_model->insert($data);
    //   tải ảnh
  
	move_uploaded_file($hinhanh_tmp,'../Public/img/'.$hinhanh);
	header('Location:?quanly=sanpham&action=lietke');
    }

    function update(){
        $id=$_GET["idsanpham"];
        $hinhanh = $_FILES['hinhanh']['name'];
        $hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
        $hinhanh = time().'_'.$hinhanh;
              //sua
            if(!empty($_FILES['hinhanh']['name'])){
                $data=array(
                    'tensanpham'=>$_POST['tensanpham'],
                    'gia'=>$_POST['giasp'],
                    'soluong'=>$_POST['soluong'],
                    'hinhanh'=>$hinhanh,
                    'id_danhmucsp'=>$_POST['danhmuc'],
                    'chitiet'=>$_POST["chitiet"],
                    'id_sanpham'=>$id,
                );
                move_uploaded_file($hinhanh_tmp,'../Public/img/'.$hinhanh);
                $data_link=$this->sanpham_model->timkiem($id);
                    unlink('../Public/img/'.$data_link['hinhanh']);
                    $this->sanpham_model->update($data);
                
            }else{
                $data=array(
                    'tensanpham'=>$_POST['tensanpham'],
                    'gia'=>$_POST['giasp'],
                    'soluong'=>$_POST['soluong'],
                    'id_danhmucsp'=>$_POST['danhmuc'],
                    'chitiet'=>$_POST["chitiet"],
                    'id_sanpham'=>$id,
                );
                $this->sanpham_model->update($data);
              
            }
        
            header('Location:?quanly=sanpham&action=lietke');
    }

    function delete(){
        $id=$_GET['idsanpham'];
       $data_link=$this->sanpham_model->timkiem($id);
            unlink('../Public/img/'.$data_link['hinhanh']);
            $this->sanpham_model->delete($id);
            header('Location:?quanly=sanpham&action=lietke');
    }
}