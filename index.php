<?php
session_start();
if(isset($_GET["quanly"]) ){
    $quanly=$_GET["quanly"];
    if(isset($_GET["action"])){
    $action=$_GET["action"];}
    else
     $action='';

}
else{
    $quanly='home';
    $action='';
}
  
 
if($quanly=='home'){
    require("Controllers/home_controller.php");
$home=new HomeController();

if($action=='lietke' or $action==''){
$home->list();
}
elseif($action=='lienhe'){
    $home->list_lh();
}
}

 
elseif($quanly=='baiviet'){
    require("Controllers/baiviet_controller.php");
    $baiviet=new Baiviet_controller();
    if($action=='lietke' or $action==''){
    $baiviet->list();
    }
    if($action=='baiviet_detail'){
        $baiviet->baiviet_detail();
}}

elseif($quanly=='shop'){
    require("Controllers/shop_controller.php");
    $shop=new Shop_controller();
    if($action=='lietke' or $action==''){
        $shop->list();
    }
    elseif($action=='timkiem'){
        $shop->timkiem();
    }
    elseif($action=='phanloai'){
        $shop->phanloai();
    }
    elseif($action=='chitiet'){
        $shop->chitiet_sp();
    }
    elseif($action=='comment'){
        $shop->comment();
    }
    elseif($action=='list_comment'){
        $shop->list_comment();
    }
    elseif($action=='delete_comment'){
        $shop->delete_comment();
    }
}


elseif($quanly=='giohang'){
    require("Controllers/cart_controller.php");
    $cart=new Cart_controller();
    if($action=='lietke' or $action==''){
        $cart->list();
    }
    elseif($action=='add'){
        $cart->add();
    }
    elseif($action=='cong'){
        $cart->cong();
    }
    elseif($action=='tru'){
        $cart->tru();
    }
    elseif($action=='xoa'){
        $cart->xoa();
    }
    elseif($action=='ajax'){
        $cart->ajax_list();
    }
    elseif($action=='ajax_xoa'){
        $cart->ajax_xoa();
    }
    elseif($action=='ajax_add'){
        $cart->ajax_add();
    }
    elseif($action=='delete_all'){
        $cart->delete_all();
    }
}

elseif($quanly=='taikhoan'){
    require("Controllers/login_controller.php");
    $login =new Login_controller();
    if($action=='dangki'){
    $login->dangki();
    }
    elseif($action=='dangnhap' or $action==''){
        $login->dangnhap();
    }
    elseif($action=='dangxuat'){
        $login->dangxuat();
    }
    elseif($action=='sua'){
        $login->update();
    }
    elseif($action=='doimk'){
        $login->doi_mk();
    }
}
elseif($quanly=='login'){
    require("Controllers/login_controller.php");
    $login =new Login_controller();
    if($action=='dangki'){
  $login->trang_dk();
    }
    elseif($action=='dangnhap' or $action==''){
     $login->trang_dn();
    }
    elseif($action=='profile'){
        $login->profile();
    }
    elseif($action=='quenmk'){
        $login->trang_mk();
    }
   
}

elseif($quanly=='order'){
    require("Controllers/order_controller.php");
    $order=new Order_controller();
 if($action=='dathang'){
  $order->lk_thongtin();
 }
 elseif($action=='thanhtoan'){
    $order->dk_donhang();
 }
 elseif($action=='lichsu'){
    $order->lichsu_dh();
 }
 elseif($action=='chitiet'){
    $order->chitiet_donhang();
 }

}
    
?>