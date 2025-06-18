<div class="dathang">
  

    <!--  -->
    <div class="donhang">
<table>
    <tr>
    <h3>Đơn hàng của bạn</h3>
        <th>Sản phẩm</th>
       
        <th> Thành tiền</th>
    </tr>
    
    <?php
 
  for ($i=0; $i < count($data_cart); $i++) {
    ?>
<tr>
    
    <td><?php  echo $data_cart[$i]["tensanpham"].'  x'.$_SESSION['cart'][$data_cart[$i]["id_sanpham"]]?></td>
    <td><?php  echo $data_cart[$i]["gia"]* $_SESSION['cart'][$data_cart[$i]["id_sanpham"]] ?> VNĐ</td>
</tr>
<?php
}
echo'<tr><td >Tạm tính </td>
<td >'.$total.' VNĐ</td>
</tr>
<tr><td >TỔng </td>
<td >'.$total.' VNĐ</td>
</tr>
';
?>


</table>
</div>

<div class="thongtin">
<form action="?quanly=order&action=thanhtoan" method="post">
<?php
for ($i=0; $i < count($data_thongtin); $i++) { 
    
?>
   
   
        <h3>Thông tin hóa đơn</h3>
    
   <input type="hidden" name="total" value="<?php echo $total ?>" >
  
  <p>Tên</p>
<input type="text" value="<?php echo $data_thongtin[$i]["tennguoidung"] ?>" name="ten" >
<p>Email</p>
<input type="text"  value="<?php echo $data_thongtin[$i]["email"] ?>" name="email" >
<p>Số điện thoại</p>
<input type="text" value="<?php echo $data_thongtin[$i]["sdt"] ?>" name="sdt" >
<p>Địa chỉ</p>
<input type="text" value="<?php echo $data_thongtin[$i]["diachi"] ?>" name="diachi" ><br>
<input type="submit" name="thanhtoan" id="" value="Thanh toán">
<?php
} ?>
</form>
    </div>


</div>