 <?php
  require_once("Model/cart.php");

  class Cart_controller {

    var $cart_model;
    public function __construct(){
        $this->cart_model=new Cart();
    }
     
    function list(){
        if(isset($_SESSION["id_nguoidung"])){
            $id=$_SESSION["id_nguoidung"];
            $data_nd=$this->cart_model->tt_nguoidung($id);
        }
        $data_danhmuc=$this->cart_model->danhmuc();
        $total=0;
        if(isset($_SESSION['cart']) && count($_SESSION['cart'])>0){
            foreach($_SESSION['cart'] as $key=>$value)
            {
            $item[]=$key;
            }
            
            $str=implode(",",$item);
            $str=trim($str,",");

            $data_cart=$this->cart_model->list($str);
     
            for ($i=0; $i <count($data_cart) ; $i++) { 
                $total+=$data_cart[$i]['gia']*$_SESSION['cart'][$data_cart[$i]['id_sanpham']];
            }
  }
  require_once("View/index.php");
}

function add(){

    $idsp=$_GET["idsp"];
    if(isset($_SESSION['cart'][$idsp])){
        $soluong=$_SESSION['cart'][$idsp]+$_POST["soluong"];
    }
    else{
        $soluong=$_POST["soluong"];
    }
    $_SESSION['cart'][$idsp]=$soluong; 
    header("location:?quanly=giohang");
}

function cong(){
    $idsp=$_GET["idsp"];
   // $data=$this->cart_model->sanpham_detail($idsp);
 
// sua
    $soluong=$_SESSION['cart'][$idsp]+1;
    $_SESSION['cart'][$idsp]=$soluong; 
    header("location:?quanly=giohang");
}

function tru(){
    $idsp=$_GET["idsp"];
    $soluong=$_SESSION['cart'][$idsp]-1;
    if($soluong<=0){
        unset($_SESSION['cart'][$idsp]);
    }
    else{
        $_SESSION['cart'][$idsp]=$soluong; 
    }
    header("location:?quanly=giohang");
}

function xoa(){
    $idsp=$_GET["idsp"];
    unset($_SESSION['cart'][$idsp]);
    header("location:?quanly=giohang");
}

function delete_all(){
    unset($_SESSION['cart']);
    header("location:?quanly=giohang");
}


    
    
    function ajax_list(){
        $total=0;
        if(isset($_SESSION['cart']) && count($_SESSION['cart'])>0){
            foreach($_SESSION['cart'] as $key=>$value)
            {
            $item[]=$key;
            }
            $str=implode(",",$item);
            $str=trim($str,",");
            $data_cart=$this->cart_model->list($str);
          $output=' <div class="cart-row">
          <span class="cart-item cart-header cart-column">Sản Phẩm</span>
          <span class="cart-price cart-header cart-column">Giá</span>
          <span class="cart-quantity cart-header cart-column">Số Lượng</span>
        </div>
           <div class="cart-items">';
            for ($i=0; $i <count($data_cart) ; $i++) { 
                $total+=$data_cart[$i]['gia']*$_SESSION['cart'][$data_cart[$i]['id_sanpham']];
       $output.='
     
                            <div class="cart-row">
                            <div class="cart-item cart-column">
                                <img class="cart-item-image" src="Public/img/'.$data_cart[$i]["hinhanh"].'" width="100" height="100">
                                <span class="cart-item-title">'.$data_cart[$i]["tensanpham"].'</span>
                            </div>
                            <span class="cart-price cart-column">'.$data_cart[$i]["gia"].'</span>
                            <div class="cart-quantity cart-column">
                               <span class="cart-quantity-input">'.$_SESSION['cart'][$data_cart[$i]['id_sanpham']].'</span>
                                <button class="btn btn-danger delete" type="button" value="'.$data_cart[$i]["id_sanpham"].'">Xóa</button>
                            </div>
                        </div>';
                       
  }
  $output.='     
  <div class="cart-total">
  <strong class="cart-total-title">Tổng Cộng:</strong>
  <span class="cart-total-price">'.$total.'</span>
</div>
</div>';
echo $output;
        }
        else{
            $output='Giỏ hàng trống';
            echo $output;
        }
}
function ajax_xoa(){
    $idsp=$_POST["idsp"];
    unset($_SESSION['cart'][$idsp]);
  
}
function ajax_add(){
    $idsp=$_POST["idsp"];
    if(isset($_SESSION['cart'][$idsp])){
        $soluong=$_SESSION['cart'][$idsp]+1;
    }
    else{
        $soluong=1;
    }
    $_SESSION['cart'][$idsp]=$soluong; 

}
}
