<?php
require_once("Model/nguoidung.php");

class Nd_controller{
    var $nd_model;
    public function __construct(){
      $this->nd_model=new Nguoidung();
    }
function lietke(){
    $id=$_SESSION["id_nguoidung"];
    $data_nd=$this->nd_model->tt_nguoidung($id);
$data_nd1=$this->nd_model->lietke();
require_once("View/index.php");
}
function trangthem(){
    $id=$_SESSION["id_nguoidung"];
    $data_pq=$this->nd_model->phanquyen();
    $data_nd=$this->nd_model->tt_nguoidung($id);
require_once("View/index.php");
}
function trangsua(){
    $id=$_SESSION["id_nguoidung"];
    $data_nd=$this->nd_model->tt_nguoidung($id);
    $data_pq=$this->nd_model->phanquyen();
    $id1=$_GET['idnguoidung'];
    $data_nd1=$this->nd_model->timkiem($id1);
    require_once("View/index.php");
}
function add(){

if($_FILES['hinhanh']['name']!=''){
    $hinhanh = $_FILES['hinhanh']['name'];
$hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
$hinhanh = time().'_'.$hinhanh;
move_uploaded_file($hinhanh_tmp,'../Public/img/'.$hinhanh);
}
else{
$hinhanh='tải xuống (15).jpg';
}
     $data = array(
        'tennguoidung'  =>   $_POST['ten'],
        'hinhanh'=>$hinhanh,
        'email' => $_POST['email'],
        'sdt' => $_POST['sdt'],
        'diachi'  => $_POST["diachi"],
        'matkhau' => $_POST["matkhau"],   
        'ma_pq'=>$_POST["phanquyen"],
    );
$this->nd_model->insert($data);
header('Location:?quanly=nguoidung&action=lietke');
}
function update(){
    $id=$_GET['idnguoidung'];
    $hinhanh = $_FILES['hinhanh']['name'];
    $hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
    $hinhanh = time().'_'.$hinhanh;
          //sua
        if(!empty($_FILES['hinhanh']['name'])){
            $data = array(
                'tennguoidung'  => $_POST['ten'],
                'hinhanh'=>$hinhanh,
                'email' => $_POST['email'],
                'sdt' => $_POST['sdt'],
                'diachi'  => $_POST["diachi"],
                'matkhau' => $_POST["matkhau"],   
                'ma_pq'=>$_POST["phanquyen"],
                'id_nguoidung'=>$id,
            );
            move_uploaded_file($hinhanh_tmp,'../Public/img/'.$hinhanh);
            $data_link=$this->nd_model->timkiem($id);
                if($data_link['hinhanh']!='tải xuống (15).jpg'){
                unlink('../Public/img/'.$data_link['hinhanh']);
            }
            $this->nd_model->update($data);
            
        }else{
            $data = array(
                'tennguoidung'  => $_POST['ten'],
                'email' => $_POST['email'],
                'sdt' => $_POST['sdt'],
                'diachi'  => $_POST["diachi"],
                'matkhau' => $_POST["matkhau"],   
                'ma_pq'=>$_POST["phanquyen"],
                'id_nguoidung'=>$id,
            );}
    
    $this->nd_model->update($data);
    header('Location:?quanly=nguoidung&action=lietke');
}
function delete(){
    $id=$_GET['idnguoidung'];
    $this->nd_model->delete($id);
    header('Location:?quanly=nguoidung&action=lietke');
}

}