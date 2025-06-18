<?php
require_once("Model/order.php");
class Order_controller{
    var $order_model;
    public function __construct(){
        $this->order_model=new Order();
    }

    function lk_thongtin(){
        $email=$_SESSION['email'];

        foreach($_SESSION['cart'] as $key=>$value)
        {
        $item[]=$key;
        }
        $str=implode(",",$item);
        $data_cart=$this->order_model->list($str);
      $total=0;
        for ($i=0; $i <count($data_cart) ; $i++) { 
            $total+=$data_cart[$i]['gia']*$_SESSION['cart'][$data_cart[$i]['id_sanpham']];
        }

       $data_thongtin =$this->order_model->thongtin($email);
       $data_danhmuc=$this->order_model->danhmuc();
       if(isset($_SESSION["id_nguoidung"])){
        $id=$_SESSION["id_nguoidung"];
        $data_nd=$this->order_model->tt_nguoidung($id);
    }
       require_once("View/index.php");
     
    }

    function dk_donhang(){
    $id_hoadon=rand(0,9999);

    $data=array(
        'total'=>$_POST["total"],
        'ten'=>$_POST["ten"],
        'email'=>$_POST["email"],
        'sdt'=>$_POST["sdt"],
        'diachi'=>$_POST["diachi"],
        'id_nguoidung'=> $_SESSION["id_nguoidung"],
        'id_hoadon'=>$id_hoadon,
        'trangthai'=>'chưa duyệt'
    );
    $this->order_model->donhang($data);
    foreach($_SESSION['cart'] as $key=>$value){
        $data1=array(
            'id_hoadon'=>$id_hoadon,
            'id_sanpham'=>$key,
            'soluong'=>$value,
        );
       $this->order_model->dkchitiet_hoadon($data1);
       $item[]=$key;
    }
    $str=implode(",",$item);
    $data_cart=$this->order_model->list($str);

    for ($i=0; $i <count($data_cart) ; $i++) { 
        $sl_sau=$data_cart[$i]['soluong']-$_SESSION['cart'][$data_cart[$i]['id_sanpham']];
        $data1=array(
            'id_sanpham'=>$key,
            'sl_sau'=> $sl_sau,
        );
        $this->order_model->updata_sp($data1);
    }
    unset($_SESSION['cart']);
    header("location:?quanly=order&action=lichsu");
    }

    function lichsu_dh(){
        if(isset($_SESSION["id_nguoidung"])){
            $id=$_SESSION["id_nguoidung"];
            $data_nd=$this->order_model->tt_nguoidung($id);
        }
       $data=$this->order_model->lk_donhang($_SESSION['id_nguoidung']);
       $data_danhmuc=$this->order_model->danhmuc();
     
      require_once("View/index.php");
    }
    function chitiet_donhang(){
        if(isset($_SESSION["id_nguoidung"])){
            $id=$_SESSION["id_nguoidung"];
            $data_nd=$this->order_model->tt_nguoidung($id);
        }
        $data_danhmuc=$this->order_model->danhmuc();
        $idhd=$_GET['id_hoadon'];
        $total=0;
	$data_hoadon=$this->order_model->chitiet_hoadon($idhd);
for ($i=0; $i <count($data_hoadon) ; $i++) { 
    $data_sanpham=$this->order_model->lichsu_sanpham($data_hoadon[$i]['id_sanpham']);
    $data_hoadon[$i]['hinhanh']=$data_sanpham[0]['hinhanh'];
    $data_hoadon[$i]['ten_sp']=$data_sanpham[0]['tensanpham'];
    $data_hoadon[$i]['gia']=$data_sanpham[0]['gia'];
    $total+= $data_hoadon[$i]['soluong']*$data_sanpham[0]['gia'];
}
    require_once("View/index.php");
    }
}