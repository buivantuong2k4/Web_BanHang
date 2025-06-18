<main id="main" class="main">
<p>Liệt kê danh mục sản phẩm</p>
<a class="btn btn-primary" href="?quanly=danhmuc_sp&action=trangthem">Thêm danh mục</a>
<div class="table_container">
<table class="table datatable">
  <tr>
  	<th>TT</th>
    <th>Tên danh mục</th>
  	<th>Quản lý</th>
  
  </tr>
  <?php
  $j=0;
for ($i=0; $i <count($data_dm) ; $i++) { 
  $j++;
?>
  <tr>
  	<td><?php echo $j ?></td>
    <td><?php echo $data_dm[$i]['ten_danh_muc'] ?></td>
   	<td>
   		<a class="btn btn-danger rounded-pill" href="?quanly=danhmuc_sp&action=xoa&iddanhmuc=<?php echo $data_dm[$i]['id_danhmuc'] ?>">Xoá</a> | <a class="btn btn-primary rounded-pill" href="?quanly=danhmuc_sp&action=trangsua&iddanhmuc=<?php echo $data_dm[$i]['id_danhmuc'] ?>">Sửa</a> 
   	</td>
   
  </tr>
  <?php
  } 
  ?>
 
</table>
</div>
</main>