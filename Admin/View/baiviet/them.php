<main id="main" class="main">
<p>Thêm sản phẩm</p>
<table >
 <form method="POST" action="?quanly=baiviet&action=them" enctype="multipart/form-data">
	  <tr>
	  	<td>Tên bài viết</td>
	  	<td><input type="text" name="tenbaiviet"></td>
	  </tr>
	  <tr>
	  	<td>Giới thiệu</td>
	  	<td><input type="text" name="gioithieu"></td>
	  </tr>
	  <tr>
	  	<td>Nội dung</td>
	  	<td><Textarea id="noidung" name="noidung"></Textarea></td>
	  </tr>
	   <tr>
	  	<td>Hình ảnh</td>
	  	<td><input type="file" name="hinhanh"></td>
	  </tr>
	 
	  <tr>
	    <td>Danh mục bài viết</td>
	    <td>
	    	<select name="danhmuc">
	    		<?php
	    		for ($i=0; $i < count($data_dm); $i++) { 
	    		?>
	    		<option value="<?php echo $data_dm[$i]['id_danhmucbv'] ?>"><?php echo $data_dm[$i]['tendanhmucbv'] ?></option>
	    		<?php
	    		} 
	    		?>
	    	</select>
	    </td>
	  </tr>
	  
	   <tr>
	    <td colspan="2"><input  class="btn btn-primary" type="submit" name="thembaiviet" value="Thêm bài viết"></td>
	  </tr>
 </form>
</table>
</main>