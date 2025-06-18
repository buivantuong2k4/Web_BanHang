<div class="main">
<?php



if(isset($_GET["quanly"])){
    $tam=$_GET["quanly"];
    if(isset($_GET["action"])){
        $action=$_GET["action"];}
        else
         $action='';
}
else{
    $tam='';
}


if($tam=='shop'){
  if($action=='chitiet'){
    include("shop/sanpham_detail.php");
  }
  else{
    include("sidebar/sidebar.php");
    include("shop/sanpham.php");}
   
}
else if($tam=='baiviet'){
    if($action=='baiviet_detail'){
        include("baiviet/baiviet_detail.php");
    }
    else{
    include("sidebar/sidebarbv.php");
    include("baiviet/baiviet.php");
    }
}

else if($tam=='giohang'){
   
    include("cart/cart.php");
}

elseif($tam=='login'){
    if($action=='dangnhap'){
        include("login/dangnhap.php");
      }  
   elseif($action=='dangki' ){
        include("login/dangky.php");
      }  
      elseif($action=='profile'){
        include("login/profile.php");
    }
    elseif($action=='quenmk'){
        include("login/quenmk.php");
    }
      else{
        include("login/dangnhap.php");
      }

}

elseif($tam=='order'){
    if($action=='dathang'){
        include("order/dathang.php");
    }
   else if($action=='chitiet'){
        include("order/chitietdonhang.php");
    }
    else{
        include("order/lichsu.php");
    }
}

elseif($tam=='home'){
    if($action=='lienhe'){
        include("home/lienhe.php");
    }
    else{
        // include("sidebar/sidebar.php");
        include("home/home.php");
    }
}


else{
    // include("sidebar/sidebar.php");
    include("home/home.php");
}


?>
</div>

