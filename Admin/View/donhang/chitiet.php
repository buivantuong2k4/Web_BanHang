<main id="main" class="main">
<p>Chi tiết đơn hàng</p>
<?php
if($data_dh["trangthai"]=='chưa duyệt'){?>
<a class="btn btn-primary" href="?quanly=donhang&action=duyet&idhoadon=<?php echo $data_dh["id_hoadon"]?>">Duyệt</a>
<?php
}
?>
<table class="table datatable">
  <tr>
  	<th>TT</th>  
  	<th>tên sản phẩm</th>
      <th> </th>
    <th>đơn giá</th>
    <th> số lượng</th>
    <th> thành tiền</th>
  
  </tr>
  <?php
  $j=0;
  for ($i=0; $i <count($data_hoadon) ; $i++) { 
  	$j++;
  ?>
  <tr>
  	<td><?php echo $j ?></td>
      <td><?php echo $data_hoadon[$i]['ten_sp'] ?></td>
    <td><img src="../Public/img/<?php echo $data_hoadon[$i]['hinhanh'] ?>" width="150px"></td>
    <td><?php echo $data_hoadon[$i]['gia'] ?> VNĐ</td>
    <td><?php echo $data_hoadon[$i]['soluong'] ?></td>
    <td><?php echo $data_hoadon[$i]['soluong']*$data_hoadon[$i]["gia"] ?> VNĐ</td>
  
   
  </tr>
  <?php
  } 
  ?>
 <tr><td collapse="6"> tổng tiền : <?php echo $total ?> VNĐ</td></tr>
</table>
</main>