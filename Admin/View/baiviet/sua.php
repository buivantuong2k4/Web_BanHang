<main id="main" class="main">
<p>Sửa sản phẩm</p>
<table class="table-sm">
<form method="POST" action="?quanly=baiviet&action=sua&idbaiviet=<?php echo $data_bv['id_baiviet'] ?>" enctype="multipart/form-data">
	  <tr>
	  	<td>Tên bài viết</td>
	  	<td><input type="text" value="<?php echo $data_bv['tenbaiviet'] ?>" name="tenbaiviet"></td>
	  </tr>
	  
	  <tr>
	  	<td>Giới thiệu</td>
	  	<td><input type="text" value="<?php echo $data_bv['gioithieu'] ?>" name="gioithieu"></td>
	  </tr>
	  <tr>
	  	<td>Nội dung</td>
	  	<td><textarea name="noidung" id="noidung" ><?php echo $data_bv['noidung']?></textarea></td>
	  </tr>
	   <tr>
	  	<td>Hình ảnh</td>
	  	<td>
	  		<input type="file" name="hinhanh">
	  		<img src="../Public/img/<?php echo $data_bv['hinhanh'] ?>" width="150px">
	  	</td>

	  </tr>
	 
	  <tr>
	    <td>Danh mục bài viết</td>
	    <td>
	    	<select name="danhmuc">
	    		<?php
	    		for ($i=0; $i < count($data_dm); $i++) { 
	    			if($data_dm[$i]['id_danhmucbv']==$data_bv[$i]['id_danhmucbv']){
	    		?>
	    		<option selected value="<?php echo $data_dm[$i]['id_danhmucbv'] ?>"><?php echo $data_dm[$i]['tendanhmucbv'] ?></option>
	    		<?php
	    			}else{
	    		?>
	    		<option value="<?php echo $data_dm[$i]['id_danhmucbv'] ?>"><?php echo $data_dm[$i]['tendanhmucbv'] ?></option>
	    		<?php
	    			}
	    		} 
	    		?>
	    	</select>
	    </td>
	  </tr>
	  
	   <tr>
	    <td colspan="2"><input class="btn btn-primary" type="submit" name="suabaiviet" value="Sửa bài viết"></td>
	  </tr>
 </form>
</table>
</main>