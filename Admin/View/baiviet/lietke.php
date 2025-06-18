<main id="main" class="main">
<p>Liệt kê  bài viết</p>
<a  class="btn btn-primary"href="?quanly=baiviet&action=trangthem">Thêm bài viết</a>
<div class="table_container">
<table class="table datatable">
  <tr>
  	<th>TT</th>
    <th>Tên bài viết</th>
    <th>Hình ảnh</th>
    <th>Giới thiệu</th>
   <th> Danh mục</th>
    <!-- <th>Danh mục</th> -->
  	<th>Quản lý</th>
  
  </tr>
  <?php
  $j = 0;
  for ($i=0; $i <count($data_bv) ; $i++) { 
   $j++
  ?>
  <tr>
  	<td><?php echo $j ?></td>
    <td><?php echo $data_bv[$i]['tenbaiviet'] ?></td>
    <td><img src="../Public/img/<?php echo $data_bv[$i]['hinhanh'] ?>" width="150px"></td>
    <td><?php echo $data_bv[$i]['gioithieu'] ?></td>
   <?php for ($k=0; $k < count($data_dm); $k++) {
          if($data_dm[$k]["id_danhmucbv"]==$data_bv[$i]["id_danhmucbv"]){?>
            <td><?php echo $data_dm[$k]['tendanhmucbv'] ?></td>
       <?php   }
    } ?>
   	<td>
   		<a class="btn btn-danger rounded-pill" href="?quanly=baiviet&action=xoa&idbaiviet=<?php echo $data_bv[$i]['id_baiviet'] ?>">Xoá</a> | <a class="btn btn-primary rounded-pill" href="?quanly=baiviet&action=trangsua&idbaiviet=<?php echo $data_bv[$i]['id_baiviet'] ?>">Sửa</a> 
   	</td>
   
  </tr>
  <?php
  } 
  ?>
 
</table>
</div>
</main>