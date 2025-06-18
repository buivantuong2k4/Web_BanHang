<main id="main" class="main">
<p>Liệt kê Người dùng</p>
<a  class="btn btn-primary" href="?quanly=nguoidung&action=trangthem">Thêm người dùng</a> 
<div class="table_container">
<table class="table datatable">
  <tr>
  	<th>TT</th>
    <th>Tên người dùng</th>
    <th>Địa chỉ</th>
    <th>Số Điện thoại</th>
    <th>Email</th>
  	<th>Quản lý</th>
  
  </tr>
  <?php
  $j = 0;
  for ($i=0; $i < count($data_nd1); $i++) { 
 
  	$j++;
  ?>
  <tr>
  	<td><?php echo $j ?></td>
    <td><?php echo $data_nd1[$i]['tennguoidung'] ?></td>
    <td><?php echo $data_nd1[$i]['diachi'] ?></td>
    <td><?php echo $data_nd1[$i]['sdt'] ?></td>
    <td><?php echo $data_nd1[$i]['email'] ?></td>
   	<td>
   		<a class="btn btn-danger rounded-pill" href="?quanly=nguoidung&action=xoa&idnguoidung=<?php echo $data_nd1[$i]['id_nguoidung'] ?>">Xoá</a> | <a  class="btn btn-primary rounded-pill" href="?quanly=nguoidung&action=trangsua&idnguoidung=<?php echo $data_nd1[$i]['id_nguoidung'] ?>">Sửa</a> 
   	</td>
   
  </tr>
  <?php
  } 
  ?>
 
</table>
</div>
</main>