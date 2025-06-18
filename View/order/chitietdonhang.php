<div class="donhang_detail">
<p>Chi tiết đơn hàng</p>
<table >
  <tr>
  	<th>TT</th>  
  	<th>tên sản phẩm</th>
      <th> </th>
    <th>đơn giá</th>
    <th> số lượng</th>
    <th> thành tiền</th>
  
  </tr>
  <?php
  for ($i=0; $i <count($data_hoadon) ; $i++) { 
 
  ?>
  <tr>
  	<td><?php echo $i+1 ?></td>
    <td><img src="Public/img/<?php echo $data_hoadon[$i]['hinhanh'] ?>" width="150px"></td>
    <td><?php echo $data_hoadon[$i]['ten_sp'] ?></td>
    <td><?php echo $data_hoadon[$i]['gia'] ?> VNĐ</td>
    <td><?php echo $data_hoadon[$i]['soluong'] ?></td>
    <td><?php echo $data_hoadon[$i]['soluong']*$data_hoadon[$i]["gia"] ?> VNĐ</td>
  
   
  </tr>
  <?php
  } 
  ?>
 <tr><td collapse="6"> tổng tiền : <?php echo $total ?> VNĐ</td></tr>
</table>
</div>