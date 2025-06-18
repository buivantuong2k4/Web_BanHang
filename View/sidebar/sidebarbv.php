<div class="left">
                <ul class="list_sidebar">
                <p>Danh mục bài viết  </p>
					<?php
					
	for ($i=0; $i < count($data_danhmucbv); $i++) { 
	
					?>
					<li ><a href="index.php?quanly=danhmucbv&iddanhmuc=<?php echo $data_danhmucbv[$i]['id_danhmucbv'] ?>"><?php echo $data_danhmucbv[$i]['tendanhmucbv'] ?></a></li>
					<?php
					} 
					?>
                    </ul>
                    
            </div>