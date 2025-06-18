<?php
require_once("Model/login.php");

class Login_controller{
    var $login_model;

    public function __construct(){
        $this->login_model=new Login();
    }


    function dangki(){
        if($_FILES['hinhanh']['name']!=''){
        $hinhanh = $_FILES['hinhanh']['name'];
$hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
$hinhanh = time().'_'.$hinhanh;
move_uploaded_file($hinhanh_tmp,'Public/img/'.$hinhanh);
}
else{
    $hinhanh='tải xuống (15).jpg';
}

         $data = array(
            'ten'  =>   $_POST['ten'],
            'hinhanh'=>$hinhanh,
            'email' => $_POST['email'],
            'sdt' => $_POST['sdt'],
            'diachi'  => $_POST["diachi"],
            'matkhau' => $_POST["matkhau"],   
            'ma_pq'=>'1',
        );
        $this->login_model->dangki($data);
        header("location:?quanly=login&action=dangnhap");
    }

    function dangnhap(){
        $data=array(
            'email'=> $_POST['email'],
            'matkhau'=>  $_POST["matkhau"],   
        );
        $this->login_model->dangnhap($data);
    }
    function dangxuat(){
        unset($_SESSION['email']);
        unset($_SESSION['id_nguoidung']);
        unset($_SESSION['cart']);
        unset($_SESSION['phanquyen']);
        header("location:index.php");
    }

    function trang_dk(){
        $data_danhmuc=$this->login_model->danhmuc();
        require("View/index.php");
    }
    function trang_mk(){
        $data_danhmuc=$this->login_model->danhmuc();
        require("View/index.php");
    }
    function trang_dn(){
        
        $data_danhmuc=$this->login_model->danhmuc();
        require("View/index.php");
    }
    function profile(){
        $id=$_SESSION["id_nguoidung"];
        $data_nd=$this->login_model->tt_nguoidung($id);
        $data_danhmuc=$this->login_model->danhmuc();
        
      require_once("View/index.php");
    }
    function update(){
        $id=$_SESSION["id_nguoidung"];
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
                    'id_nguoidung'=>$id,
                );
                move_uploaded_file($hinhanh_tmp,'Public/img/'.$hinhanh);
                $data_link=$this->login_model->tt_nguoidung($id);
                    if($data_link['hinhanh']!='tải xuống (15).jpg'){
                    unlink('Public/img/'.$data_link['hinhanh']);
                }
                $this->login_model->update_h($data);
                
            }else{
                $data = array(
                    'tennguoidung'  => $_POST['ten'],
                    'email' => $_POST['email'],
                    'sdt' => $_POST['sdt'],
                    'diachi'  => $_POST["diachi"],
                    'id_nguoidung'=>$id,
                );
        
        $this->login_model->update($data);}
        header('Location:?quanly=login&action=profile');
    }
    function doi_mk(){
        $data_danhmuc=$this->login_model->danhmuc();
        $email=$_POST["email"];
        $data=$this->login_model->tk_nguoidung($email);
        require("test.php");
        header("location:?quanly=login&action=dangnhap");
    }
}
