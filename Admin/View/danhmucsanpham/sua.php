<main id="main" class="main">
<p>sửa danh mục sản phẩm</p>
<form action="?quanly=danhmuc_sp&action=sua&iddanhmuc=<?php echo $id?>" method="post">
  Tên danh mục <input type="text"  value="<?php echo $data_dm["ten_danh_muc"]?>" name="tendm" >
  <input class="btn btn-primary" type="submit" name="suadanhmuc" value="Sửa danh mục">
</form>
</main>