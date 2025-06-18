<div class="giohang">
  
   <div class="giohang_danhsach">
    <table class="table1"> 
   
        <tr>
          
            <th colspan="2">Sản phẩm</th>
            <th>Giá</th>
            <th> Số lượng</th>
            <th>Thành tiền</th>
            <th>xóa</th>
        </tr>
        <?php
       if(isset($_SESSION['cart']) && count($_SESSION['cart'])>0){
           for ($i=0; $i < count($data_cart); $i++) { 
    ?>
    <tr>
        <td><img src="Public/img/<?php  echo $data_cart[$i]["hinhanh"]?>" alt="" width="80px" height="80px" ></td>
        <td ><?php  echo $data_cart[$i]["tensanpham"]?></td>
        <td class="price" ><?php  echo $data_cart[$i]["gia"]?> VNĐ</td>
        <td ><div class="soluong">
          <?php if($data_cart[$i]["soluong"]> $_SESSION['cart'][$data_cart[$i]["id_sanpham"]]){ ?>
        <a href="?quanly=giohang&action=cong&idsp=<?php echo $data_cart[$i]["id_sanpham"] ?>"><box-icon class="plus" name='plus'></box-icon></a>
        <?php }?>
       <?php  echo $_SESSION['cart'][$data_cart[$i]["id_sanpham"]] ?> 
       <a href="?quanly=giohang&action=tru&idsp=<?php echo $data_cart[$i]["id_sanpham"] ?>"><box-icon class="minus"name='minus'></box-icon></a></div></td>
        <td class="price" ><?php  echo $data_cart[$i]["gia"]*$_SESSION['cart'][$data_cart[$i]["id_sanpham"]]?> VNĐ</td>
        <td ><a href="?quanly=giohang&action=xoa&idsp=<?php echo $data_cart[$i]["id_sanpham"] ?>"><box-icon name='x'></box-icon></a></td>
    </tr>
    <?php
    }
echo '<tr><td colspan="6"><a href="index.php">Mua hàng</a></td></tr> </table></div>';
           
 } else{
    echo '<tr><td colspan="6">Giỏ hàng trống</td>
    <td colspan="3S"><a href="index.php">Mua hàng</a></td></tr> </table>';
}


?>

<table class="table2">
    <tr><th>Cộng giỏ hàng</th>
    <th>   </th></tr>
    <tr><td>Tạm tính</td>
    <td class="price"><?php echo $total?>  VNĐ</td></tr>
    <tr><td>Tổng</td>
    <td class="price"><?php echo $total?> VNĐ</td></tr>
    <tr><td colspan="2">

<?php
if(isset($_SESSION['email']) && isset($_SESSION["cart"]) && count($_SESSION['cart'])>0){
    echo' <a href="index.php?quanly=order&action=dathang" class="xuli_gh"> Đặt hàng</a></td></tr></table>';
}
else if(isset($_SESSION["cart"]) &&count($_SESSION['cart'])>0){
    echo' <a href="?quanly=login&action=dangnhap" class="xuli_gh"> đăng nhập</a></td></tr></table>';
}

    ?>

   
   
</div>