<main id="main" class="main">
<p>Liệt kê danh mục bài viết</p>
<a  class="btn btn-primary"href="?quanly=danhmuc_bv&action=trangthem">Thêm danh mục</a>
<div class="table_container">
<table class="table datatable" >
  <tr>
  	<th>TT</th>
    <th>Tên danh mục bài viết</th>
  	<th>Quản lý</th>
  
  </tr>
  <?php
  $j = 0;
 for ($i=0; $i <count($data_dm) ; $i++) { 
  	$j++;
  ?>
  <tr>
  	<td><?php echo $j ?></td>
    <td><?php echo $data_dm[$i]['tendanhmucbv'] ?></td>
   	<td>
   		<a class="btn btn-danger rounded-pill" href="?quanly=danhmuc_bv&action=xoa&iddanhmuc=<?php echo $data_dm[$i]['id_danhmucbv'] ?>">Xoá</a> | <a class="btn btn-primary rounded-pill" href="?quanly=danhmuc_bv&action=trangsua&iddanhmuc=<?php echo $data_dm[$i]['id_danhmucbv'] ?>">Sửa</a> 
   	</td>
   
  </tr>
  <?php
  } 
  ?>
 
</table>
</div>
</main>