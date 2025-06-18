
<div class="right">
	<?php
	if(isset($data_loai)){
	echo	'<h3>Loại sản phẩm :'.$data_loai.' </h3>';
	}
	elseif(isset($id_timkiem)){
		echo	'<h3>Tìm kiếm :'.$id_timkiem.' </h3>';
		}
	?>

				<div class="box">
					<?php
				
					for($i=0;$i<count($data_sanpham_limit);$i++){
						
					?>
					<div class="box-item">
						<a href="index.php?quanly=shop&action=chitiet&idsp=<?php echo $data_sanpham_limit[$i]['id_sanpham'] ?>">
							<div class="box-img"><img class="img img-responsive" width="100%"  src="Public/img/<?php echo $data_sanpham_limit[$i]["hinhanh"]?>"></div>
							
							<p class="title_product">   <?php echo $data_sanpham_limit[$i]['tensanpham'] ?></p>
							<p class="price_product">Giá : <?php echo number_format($data_sanpham_limit[$i]['gia'],0,',','.').' VNĐ' ?></p>
							
						</a>
						<?php if($data_sanpham_limit[$i]["soluong"]>0){ ?>
						<button class="add_cart" value="<?php echo $data_sanpham_limit[$i]["id_sanpham"]?>">+</button>
						<?php }?>
					</div>
                   
					<?php
					} 
					?>
				</div>
				<div style="clear:both;"></div>
				
				<?php
				
				$row_count = count($data_sanpham);
				$trang = ceil($row_count/12);
				?>
				
				
				<ul class="list_trang" style="ma">
				<p>Trang hiện tại : <?php echo $page ?>/<?php echo $trang ?> </p>
					<?php
					
					for($i=1;$i<=$trang;$i++){ 
					?>
						<li <?php if($i==$page){
                            echo 'style="background: brown;"';
                            }else{ echo '';
                             }  ?>
                             ><a href="?trang=<?php echo $i ?>"><?php echo $i ?></a></li>
					<?php
					} 
					?>
					
				</ul>
				
</div>