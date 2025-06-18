<main id="main" class="main">
<p>sửa danh mục bài viết</p>
<form action="?quanly=danhmuc_bv&action=sua&iddanhmuc=<?php echo $id?>" method="post">
  Tên danh mục <input type="text"  value="<?php echo $data_dm["tendanhmucbv"]?>" name="tendm" >
  <input class="btn btn-primary" type="submit" name="suadanhmuc" value="Sửa danh mục">
</form>
</main>