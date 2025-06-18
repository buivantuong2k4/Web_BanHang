<main id="main" class="main">
<p>Sửa sản phẩm</p>

<table  >

<form  method="POST" action="?quanly=sanpham&action=sua&idsanpham=<?php echo $data_sp['id_sanpham'] ?>" enctype="multipart/form-data">
	  <tr>
	  	<td>Tên sản phẩm</td>
	  	<td><input type="text" value="<?php echo $data_sp['tensanpham'] ?>" name="tensanpham"></td>
	  </tr>
	  
	  <tr>
	  	<td>Giá sp</td>
	  	<td><input type="text" value="<?php echo $data_sp['gia'] ?>" name="giasp"></td>
	  </tr>
	  <tr>
	  	<td>Số lượng</td>
	  	<td><input type="text" value="<?php echo $data_sp['soluong'] ?>" name="soluong"></td>
	  </tr>
	   <tr>
	  	<td>Hình ảnh</td>
	  	<td>
	  		<input type="file" name="hinhanh">
	  		<img src="../Public/img/<?php echo $data_sp['hinhanh'] ?>" width="150px">
	  	</td>

	  </tr>
	  <tr>
	  	<td>Chi tiết</td>
	  	<td><textarea name="chitiet" id="noidung" ><?php echo $data_sp['chitiet']?></textarea></td>
	  </tr>
	 
	  <tr>
	    <td>Danh mục sản phẩm</td>
	    <td>
	    	<select name="danhmuc">
	    		<?php
	    	for ($j=0; $j <count($data_dm) ; $j++) { 
	    			if($data_dm[$j]['id_danhmuc']==$data_sp['id_danhmucsp']){
	    		?>
	    		<option selected value="<?php echo $data_dm[$j]['id_danhmuc'] ?>"><?php echo $data_dm[$j]['ten_danh_muc'] ?></option>
	    		<?php
	    			}else{
	    		?>
	    		<option value="<?php echo $data_dm[$j]['id_danhmuc'] ?>"><?php echo $data_dm[$j]['ten_danh_muc'] ?></option>
	    		<?php
	    			}
	    		} 
	    		?>
	    	</select>
	    </td>
	  </tr>
	  
	   <tr>
	    <td colspan="2"><input  class="btn btn-primary " type="submit" name="suasanpham" value="Sửa sản phẩm"></td>
	  </tr>
 </form>
 <?php

 ?>

</table>
			
</main>