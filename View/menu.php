<nav class="navbar navbar-expand-lg bg-body-tertiary" >
  <div class="container-fluid" style=" background-color: #ec0e19">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      <a class="navbar-brand" href="?quanly=home">Hidden brand</a>
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item food">
          <a class="nav-link active" aria-current="page" href="?quanly=shop">thực đơn</a>
          <div class="nav_food">
            <?php
            for ($i=0; $i < count($data_danhmuc) ; $i++) { 
         
            echo '<a href="?quanly=shop&action=phanloai&id_danhmuc='.$data_danhmuc[$i]["id_danhmuc"].'" class="food_item">'.$data_danhmuc[$i]["ten_danh_muc"].'</a>';
            }?>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?quanly=baiviet">ưu đãi</a>
        </li>
        <li class="nav-item nav_cart" >
          <a class="nav-link " href="index.php?quanly=giohang">Giỏ hàng</a>
          <div class="modal-body">
                    
          </div>
          
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?quanly=home&action=lienhe">Liên hệ</a>
        </li>
        
          
      </ul>
    

     
      <form class="d-flex"   action="?quanly=shop&action=timkiem" method="post">
        <input class="form-control me-2" type="search" name="tukhoa" placeholder="Search" aria-label="Search" required>
        <button class="btn btn-outline-success"  name="timkiem"type="submit">Search</button>
      </form>
    </div>
    <div class="dropdown dropstart">
  <a data-toggle="dropdown" href="" >
    <?php
       if(isset($_SESSION['email'])){?>
     <img src="Public/img/<?php echo $data_nd["hinhanh"] ?>" alt="Profile" class="rounded-circle">
     <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo $data_nd["tennguoidung"] ?></span><span class="caret"></span>
          </a>
        
  <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
  <li class="dropdown-header">
              <h6><?php echo $data_nd["tennguoidung"] ?></h6>
              <span><?php echo $_SESSION['phanquyen'] ?></span>
            </li>
  <?php 
         echo' <li class="nav-item" >
         <i class="bx bxs-user"></i>
         <a class="nav-link" href="?quanly=login&action=profile">Hồ sơ </a>
       </li>';
         echo' <li class="nav-item" >
         <i class="bx bx-log-out"></i>
          <a class="nav-link" href="?quanly=taikhoan&action=dangxuat">Đăng xuất</a>
        </li>';

        echo' <li class="nav-item">
        <i class="bx bx-bar-chart-alt"></i>
        <a class="nav-link" href="?quanly=order&action=lichsu">Lịch sử đơn hàng</a>
      </li>';
      
        }
        else{ ?>
          
          <img src="Public/img/tải xuống (15).jpg" alt="Profile" class="rounded-circle">
          <span class="d-none d-md-block dropdown-toggle ps-2"></span><span class="caret"></span>
               </a>
             
       <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
        <?php  echo' <li class="nav-item" >
          <a class="nav-link" href="?quanly=login&action=dangki">Đăng Ký</a>
        </li>';
        echo' <li class="nav-item" ">
        <i class="bx bxs-log-in"></i>
        <a class="nav-link" href="?quanly=login&action=dangnhap">Đăng nhập</a>
      </li>';
        }
        if(isset($_SESSION['phanquyen']) && $_SESSION['phanquyen']=='Admin'){

          echo' <li class="nav-item" >
          <i class="bx bx-table"></i>
           <a class="nav-link" href="Admin/index.php">Trang quản lý</a>
         </li>';
         }
        ?>
  </ul>
</div>
  </div>
</nav>
