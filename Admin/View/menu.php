<!-- <ul class="admincp_list">
	<li><a href="?quanly=danhmuc_sp&action=lietke">Quản lý danh mục sản phẩm</a></li>
	<li><a href="?quanly=sanpham&action=lietke">Quản lý sản phẩm</a></li>
	<li><a href="?quanly=danhmuc_bv&action=lietke">Quản lý danh mục bài viết</a></li>
	<li><a href="?quanly=baiviet&action=lietke">Quản lý bài viết</a></li>
	<li><a href="?quanly=donhang&action=lietke">Quản lý đơn hàng</a></li>
	<li><a href="?quanly=nguoidung&action=lietke">Quản lý người dùng</a></li>
</ul> -->


  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">      </span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-bell"></i>
            <span class="badge bg-primary badge-number">1</span>
          </a><!-- End Notification Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
            <li class="dropdown-header">
              You have 1 new notifications
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li class="notification-item">
              <i class="bi bi-info-circle text-primary"></i>
              <div>
                <h4>Dicta reprehenderit</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>4 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>
            <li class="dropdown-footer">
              <a href="#">Show all notifications</a>
            </li>

          </ul><!-- End Notification Dropdown Items -->

        </li><!-- End Notification Nav -->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-chat-left-text"></i>
            <span class="badge bg-success badge-number">1</span>
          </a><!-- End Messages Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
            <li class="dropdown-header">
              You have 11 new messages
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li class="message-item">
              <a href="#">
                <img src="Public/img/messages-3.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>David Muldon</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>8 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li class="dropdown-footer">
              <a href="#">Show all messages</a>
            </li>

          </ul><!-- End Messages Dropdown Items -->

        </li><!-- End Messages Nav -->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="../Public/img/<?php echo $data_nd["hinhanh"] ?>" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo $data_nd["tennguoidung"] ?></span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6><?php echo $data_nd["tennguoidung"] ?></h6>
              <span><?php $_SESSION["phanquyen"] ?></span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="../index.php?quanly=login&action=profile">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="../index.php">
                <i class="bi bi-question-circle"></i>
                <span>Trang mua hàng</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="../index.php?quanly=taikhoan&action=dangxuat">
                <i class="bi bi-box-arrow-right"></i>
                <span>Đăng xuất</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->
  <!-- ======= Sidebar ======= -->
  
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="?">
          <i class="bi bi-grid"></i>
          <span>Thống kê    </span>
        </a>
      </li><!-- End Dashboard Nav -->

	  <li class="nav-item">
        <a class="nav-link " href="?quanly=sanpham&action=lietke">
          <i class="bi bi-grid"></i>
          <span>Quản lý sản phẩm</span>
        </a>
      </li>
	  <li class="nav-item">
        <a class="nav-link " href="?quanly=danhmuc_sp&action=lietke">
          <i class="bi bi-grid"></i>
          <span>Quản lý danh mục sản phẩm</span>
        </a>
      </li>
	  <li class="nav-item">
        <a class="nav-link " href="?quanly=baiviet&action=lietke">
          <i class="bi bi-grid"></i>
          <span>Quản lý bài viết</span>
        </a>
      </li>
	  <li class="nav-item">
        <a class="nav-link " href="?quanly=danhmuc_bv&action=lietke">
          <i class="bi bi-grid"></i>
          <span>Quản lý danh mục bài viết</span>
        </a>
      </li>
	  <li class="nav-item">
        <a class="nav-link " href="?quanly=donhang&action=lietke">
          <i class="bi bi-grid"></i>
          <span>Quản lý đơn hàng</span>
        </a>
      </li>
	  <li class="nav-item">
        <a class="nav-link " href="?quanly=nguoidung&action=lietke">
          <i class="bi bi-grid"></i>
          <span>Quản lý người dùng</span>
        </a>
      </li>

    </ul>
	
  </aside><!-- End Sidebar-->