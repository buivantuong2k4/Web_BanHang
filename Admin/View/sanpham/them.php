<main id="main" class="main">
<p>Thêm sản phẩm</p>
<table >
 <form method="POST" action="?quanly=sanpham&action=them" enctype="multipart/form-data">
	  <tr>
	  	<td>Tên sản phẩm</td>
	  	<td><input type="text" name="tensanpham"></td>
	  </tr>
	  <tr>
	  	<td>Giá sp</td>
	  	<td><input type="text" name="giasp"></td>
	  </tr>
	  <tr>
	  	<td>Số lượng</td>
	  	<td><input type="text" name="soluong"></td>
	  </tr>
	   <tr>
	  	<td>Hình ảnh</td>
	  	<td><input type="file" name="hinhanh"></td>
	  </tr>
	  <tr>
	  	<td>Chi tiết</td>
	  	<td><Textarea id="noidung" name="chitiet"></Textarea></td>
	  </tr>
	  <tr>
	    <td>Danh mục sản phẩm</td>
	    <td>
	    	<select name="danhmuc">
	    		<?php
	    		for ($i=0; $i < count($data_dm); $i++) { 
	    		?>
	    		<option value="<?php echo $data_dm[$i]['id_danhmuc'] ?>"><?php echo $data_dm[$i]['ten_danh_muc'] ?></option>
	    		<?php
	    		} 
	    		?>
	    	</select>
	    </td>
	  </tr>
	  
	   <tr>
	    <td colspan="2"><input class="btn btn-primary" type="submit" name="themsanpham" value="Thêm sản phẩm"></td>
	  </tr>
 </form>
</table>
</main>