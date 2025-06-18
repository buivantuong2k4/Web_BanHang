<main id="main" class="main">
  
    <form action="?quanly=nguoidung&action=sua&idnguoidung=<?php echo $id1?>" method="post" enctype="multipart/form-data">
    <div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h2 class="text-center">Thông tin người dùng</h2>
			</div>
			<div class="panel-body">
				<div class="form-group">
				  <label for="usr">Name:</label>
				  <input required="true" type="text" class="form-control" name="ten" id="usr" value="<?php echo $data_nd1["tennguoidung"]?>">
				</div>
                <div class="form-group">
				  <label for="usr">Avata:</label><br>
                  <input type="file" value="tải xuống (15).jpg" name="hinhanh">
				</div>
				<div class="form-group">
				  <label for="email">Email:</label>
				  <input required="true" type="email" class="form-control" name="email" id="email" value="<?php echo $data_nd1["email"]?>">
				</div>
                <div class="form-group">
				  <label for="email">Phone:</label><br>
				  <input type="text" name="sdt" value="<?php echo $data_nd1["sdt"]?>" required>
				</div>
                
                <div class="form-group">
				  <label for="email">Phân quyền :</label><br>
                  <select name="phanquyen">
	    		<?php
	    		for ($j=0; $j < count($data_pq); $j++) { 
	    			if($data_pq[$j]['id']==$data_nd1['ma_pq']){
	    		?>
	    		<option selected value="<?php echo $data_pq[$j]['id'] ?>"><?php echo $data_pq[$j]['tenphanquyen'] ?></option>
	    		<?php
	    			}else{
	    		?>
	    		<option value="<?php echo $data_pq[$j]['id'] ?>"><?php echo $data_pq[$j]['tenphanquyen'] ?></option>
	    		<?php
	    			}
	    		} 
	    		?>
	    	</select>
				</div>
				
				<div class="form-group">
				  <label for="pwd">Password:</label>
				  <input required="true" type="password" class="form-control" name="matkhau" id="pwd" value="<?php echo $data_nd1["matkhau"]?>">
				</div>
				<div class="form-group">
				  <label for="address">Address:</label>
				  <input type="text" class="form-control"  name="diachi" id="address" value="<?php echo $data_nd1["diachi"]?>">
				</div>
				<input type="submit" class="btn btn-primary" id="btn-dk" value="Sửa " required>
			</div>
		</div>
	</div>
    </form>

</main>