<main id="main" class="main">
<p>Liệt kê  sản phẩm</p>
<a class="btn btn-primary" href="?quanly=sanpham&action=trangthem">THÊM SẢN PHẨM</a>
<div class="table_container">
<table class="table datatable" >
  <tr>
  	<th>TT</th>
    <th>Tên sản phẩm</th>
    <th>Hình ảnh</th>
    <th>Giá sp</th>
    <th>Số lượng</th>
    <th>Danh mục</th>
  	<th>Quản lý</th>
  
  </tr>
  <?php
  $j=0;
 for ($i=0; $i <count($data_sanpham) ; $i++) { 	
  $j++;
  ?>
  <tr>
  	<td><?php echo $j ?></td>
    <td><?php echo $data_sanpham[$i]['tensanpham'] ?></td>
    <td><img src="../Public/img/<?php echo $data_sanpham[$i]['hinhanh'] ?>" width="150px"></td>
    <td><?php echo $data_sanpham[$i]['gia'] ?> VNĐ</td>
    <td><?php echo $data_sanpham[$i]['soluong'] ?></td>
    <td><?php echo $data_sanpham[$i]['ten_danh_muc'] ?></td>
   	<td>
   		<a  class="btn btn-danger rounded-pill" href="?quanly=sanpham&action=xoa&idsanpham=<?php echo $data_sanpham[$i]['id_sanpham'] ?>">Xoá</a> | <a  class="btn btn-primary rounded-pill" href="?quanly=sanpham&action=trangsua&idsanpham=<?php echo $data_sanpham[$i]['id_sanpham'] ?>">Sửa</a> 
   	</td>
   
  </tr>
  <?php
  } 
  ?>
 
</table>
</div>
</main>