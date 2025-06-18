
<div class="home">
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="Public\img\z4582724565087-e4c12bf3425c1edf7dd5d05a44befcf4.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="Public\img\368289346-119943134530141-4090670493568627179-n.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="Public\img\368338023-119040651287690-980268845250670363-n.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<h3>Thực đơn </h3>
<div class="danhmuc">	
	<?php     
  for ($i=0; $i < count($data_danhmuc) ; $i++) { 

  echo '<a href="?quanly=shop&action=phanloai&id_danhmuc='.$data_danhmuc[$i]["id_danhmuc"].'" >'.$data_danhmuc[$i]["ten_danh_muc"].'</a>';
  }?>
	
	
</div>
 
	<div class="box">
					<?php
				
					for($i=0;$i<count($data_sanpham_limit);$i++){
						
					?>
					<div class="box-item">
						<a href="?quanly=shop&action=chitiet&idsp=<?php echo $data_sanpham_limit[$i]['id_sanpham'] ?>">
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