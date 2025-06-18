<div class="left">
                <ul class="list_sidebar">
                <p>Thực đơn</p>
					<?php
             for($i=0;$i<count($data_danhmuc);$i++){
              
					?>
					<li ><a href="?quanly=shop&action=phanloai&id_danhmuc=<?php echo $data_danhmuc[$i]["id_danhmuc"] ?>"><?php echo $data_danhmuc[$i]["ten_danh_muc"] ?></a></li>
					<?php

					} 
					?>
                    </ul>
                    
            </div>