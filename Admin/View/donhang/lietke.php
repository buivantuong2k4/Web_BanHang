<main id="main" class="main">
<p>Liệt kê Đơn hàng</p>
<div class="table_container">
<table class="table datatable">
  <tr>
  	<th>TT</th>
    <th>Tên người nhận</th>
  	<th>ngày đặt</th>
    <th>Tổng tiền</th>
    <th>Địa chỉ</th>
    <th>số điện thoại</th>
    <th>Trạng thái</th>
    <th> Quản lý</th>
  
  </tr>
  <?php
  $j = 0;
 for ($i=0; $i <count($data_dh) ; $i++) { 

  	$j++;
  ?>
  <tr>
  	<td><?php echo $j ?></td>
    <td><?php echo $data_dh[$i]['tennguoinhan'] ?></td>
    <td><?php echo $data_dh[$i]['timedathang'] ?></td>
    <td><?php echo $data_dh[$i]['tongtien'] ?> VNĐ</td>
    <td><?php echo $data_dh[$i]['diachi'] ?></td>
    <td><?php echo $data_dh[$i]['sdt'] ?></td>
    <td><?php echo $data_dh[$i]['trangthai'] ?></td>

    
   	<td>
   	<a  class="btn btn-danger rounded-pill" href="?quanly=donhang&action=chitiet&idhoadon=<?php echo $data_dh[$i]['id_hoadon'] ?>">Xem</a> 
   	</td>
   
  </tr>
  <?php
  } 
  ?>
 
</table>
</div>
</main>
<!-- <a  class="btn btn-primary" href="?quanly=donhang&action=xoa&idhoadon=?php echo $data_dh[$i]['id_hoadon'] ?>">Xoá</a> |  -->