<div class="clear"></div>
<div class="main">

	<?php

				if(isset($_GET['quanly']) && $_GET['action']){
					$tam = $_GET['quanly'];
					$query = $_GET['action'];
				}else{
					$tam = '';
					$query = '';
				}
				

				if($tam=='sanpham'){
				
					if($query=='lietke'){
						include("sanpham/lietke.php");
					}
					
					elseif($query=='trangsua'){
						include("sanpham/sua.php");
					}
					elseif($query=='trangthem'){
						include("sanpham/them.php");
					}
					else{
						include("sanpham/lietke.php");
							
					}
				}
			  else  if($tam=='danhmuc_sp'){
				
					if($query=='lietke'){
						include("danhmucsanpham/lietke.php");
					}
					
					elseif($query=='trangsua'){
						include("danhmucsanpham/sua.php");
					}
					elseif($query=='trangthem'){
						include("danhmucsanpham/them.php");
					}
					else{
						include("danhmucsanpham/lietke.php");
							
					}
				}
				else  if($tam=='danhmuc_bv'){
				
					if($query=='lietke'){
						include("danhmucbaiviet/lietke.php");
					}
					
					elseif($query=='trangsua'){
						include("danhmucbaiviet/sua.php");
					}
					elseif($query=='trangthem'){
						include("danhmucbaiviet/them.php");
					}
					else{
						include("danhmucbaiviet/lietke.php");
							
					}
				}
				else if($tam=='baiviet'){
				
					if($query=='lietke'){
						include("baiviet/lietke.php");
					}
					
					elseif($query=='trangsua'){
						include("baiviet/sua.php");
					}
					elseif($query=='trangthem'){
						include("baiviet/them.php");
					}
					else{
						include("baiviet/lietke.php");
							
					}
				}
				else if($tam=='donhang'){
				
					if($query=='lietke'){
						include("donhang/lietke.php");
					}
					
					elseif($query=='chitiet'){
						include("donhang/chitiet.php");
					}
					else{
						include("baiviet/lietke.php");
							
					}
				}
				else if($tam=='nguoidung'){
				
					if($query=='lietke'){
						include("nguoidung/lietke.php");
					}
					elseif($query=='trangsua'){
						include("nguoidung/sua.php");
					}
					elseif($query=='trangthem'){
						include("nguoidung/them.php");
					}
	
					else{
						include("nguoidung/lietke.php");
							
					}
				}
			else{
                include("home/home.php");
					
            }
	?> 
	
</div>