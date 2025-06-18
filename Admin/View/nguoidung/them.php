<main id="main" class="main">
<div class="dangki">
    <form action="?quanly=nguoidung&action=them" method="post" enctype="multipart/form-data">
    <div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h2 class="text-center">Đăng kí</h2>
			</div>
			<div class="panel-body">
				<div class="form-group">
				  <label for="usr">Name:</label>
				  <input required="true" type="text" class="form-control" name="ten" id="usr">
				</div>
                <div class="form-group">
				  <label for="usr">Avata:</label><br>
                  <input type="file"  name="hinhanh">
				</div>
				<div class="form-group">
				  <label for="email">Email:</label>
				  <input required="true" type="email" class="form-control" name="email" id="email">
				</div>
                <div class="form-group">
				  <label for="phone">Phone:</label><br>
				  <input type="text" name="sdt"  required>
				</div>
                <div class="form-group">
				  <label for="address">Address:</label>
				  <input type="text" class="form-control"  name="diachi" id="address">
				</div>
                <div class="form-group">
				  <label for="">Phân quyền :</label>
                  <select name="phanquyen">
	    		<?php
	    		for ($i=0; $i < count($data_pq); $i++) { 
	    		?>
	    		<option value="<?php echo $data_pq[$i]['id'] ?>"><?php echo $data_pq[$i]['tenphanquyen'] ?></option>
	    		<?php
	    		} 
	    		?>
	    	</select>
				</div>
				<div class="form-group">
				  <label for="pwd">Password:</label>
				  <input required="true" type="password" class="form-control" name="matkhau" id="pwd">
				</div>
			
				<input type="submit" class="btn btn-primary" name="dangki" id="btn-dk" value="Đăng kí" required>
			</div>
		</div>
	</div>
    </form>
</div>
</main>