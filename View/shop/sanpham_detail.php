<div class="main_sp">
    
    <form action="?quanly=giohang&action=add&idsp=<?php echo $idsp ?>" method="post">
    <?php
  for ($i=0; $i <count($data_sanpham) ; $i++) { 
    ?>
 <div class="sanpham">
    <div class="sanpham-img">
        <img class="" src="Public/img/<?php  echo $data_sanpham[$i]["hinhanh"]?>" alt=""> </div>
    <div class="sanpham-noidung">
        <p class="ten_sp"><?php  echo $data_sanpham[$i]["tensanpham"]?></p>
        <p class="gia">Giá : <?php  echo $data_sanpham[$i]["gia"]?> VNĐ</p>
        <p>  <?php 
         if($data_sanpham[$i]["soluong"]>0){
         echo"Số Lượng : ". $data_sanpham[$i]["soluong"];}
         else
         echo 'Hết hàng';
         ?></p>
        <p></p>
        <input type="number"  value="1" name="soluong" min="1" max="<?php  echo $data_sanpham[$i]["soluong"]?>">
        <input type="submit" value="Thêm vào giỏ" name="themgiohang" class="themgiohang">
    </div>
    
 </div>
 </form>
 <div class="tabs">
  <ul id="tabs-nav">
    <li><a href="#tab1">Chi tiết </a></li>
    <li><a href="#tab2" id="#tab2" class="btn-danhgia">Đánh giá</a></li>
  </ul> <!-- END tabs-nav -->
  <div id="tabs-content">
    <div id="tab1" class="tab-content">
    
     <div><?php echo  $data_sanpham[$i]["chitiet"]?></div> <?php } ?>
    </div>
    <div id="tab2" class="tab-content">
    <input type="hidden" value="<?php echo $idsp ?>" id="idsp">
   <?php if(isset($_SESSION["email"])){?>
    <div>
    <div class="mb-3 mt-3">
      <label for="comment">Comments:</label>
      <textarea class="form-control" rows="3" cols="10" id="comment" name="text" ></textarea>
    </div>
    <button type="submit" class="btn btn-primary btn-comment">Bình luận</button>
    </div>
    <?php }?>
    <div class="comments">
        <div class="comment">
            <div class="comment-img">
                <img src="Public\img\368289346-119943134530141-4090670493568627179-n.jpg" alt="" width="70px" height="70px">
            </div>
       <div class="comment-noidung">
        <p1>Nguyễn quang đại</p1>
        <p2>tốt tốt tốt</p2>
       </div>     
       </div>
        </div>
    </div>
  </div>
  </div> <!-- END tabs-content -->
</div> <!-- END tabs -->
</div>


<script type="text/javascript"src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type ="text/javascript">
    $('#tabs-nav li:first-child').addClass('active');
$('.tab-content').hide();
$('.tab-content:first').show();

// Click function
$('#tabs-nav li').click(function(){
  $('#tabs-nav li').removeClass('active');
  $(this).addClass('active');
  $('.tab-content').hide();
  
  var activeTab = $(this).find('a').attr('href');
  $(activeTab).fadeIn();
  return false;
});
</script>
