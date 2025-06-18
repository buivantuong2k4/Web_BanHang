
<div class="right">
<h3>Bài viết mơí nhất</h3>
				<div class="boxbv">
					<?php
					for ($i=0; $i <count($data_baiviet_limit) ; $i++) { 
					
					?>
					<div class="box-item">
						<a href="index.php?quanly=baiviet&action=baiviet_detail&idbv=<?php echo $data_baiviet_limit[$i]['id_baiviet'] ?>">
							<div class="box-img"><img class="img img-responsive" width="100%" height="140px" src="Public/img/<?php echo $data_baiviet_limit[$i]['hinhanh'] ?>"></div>
							<p class="title"> <?php echo $data_baiviet_limit[$i]['tenbaiviet'] ?></p>
							<p class="gioithieu"> <?php echo $data_baiviet_limit[$i]["gioithieu"] ?></p>
							
						</a>
					</div>
                   
					<?php
					} 
					?>
				</div>
				<div style="clear:both;"></div>
				
				<?php
				
				$row_count = count($data_baiviet);
				$trang = ceil($row_count/4);
				?>
			
				
				<ul class="list_trang">
				<p>Trang hiện tại : <?php echo $page ?>/<?php echo $trang ?> </p>
					<?php
					
					for($i=1;$i<=$trang;$i++){ 
					?>
						<li <?php if($i==$page){
                            echo 'style="background: brown;"';
                            }else{ echo '';
                             }  ?>
                             ><a href="index.php?quanly=baiviet&trang=<?php echo $i ?>"><?php echo $i ?></a></li>
					<?php
					} 
					?>
					
				</ul>
</div>