<?php
session_start();
				if(isset($_GET['quanly']) && $_GET['action']){
					$tam = $_GET['quanly'];
					$query = $_GET['action'];
				}else{
					$tam = '';
					$query = '';
				}

    if($tam=='sanpham'){
        require("Controllers/sanpham_controller.php");
        $sanpham=new Sanpham_controller();
        if($query=='lietke'){
            $sanpham->list();
        }
        elseif($query=='sua'){
          $sanpham->update();
        }
        elseif($query=='xoa'){
          $sanpham->delete();
        }
        elseif($query=='trangsua'){
            $sanpham->trangsua();
        }
        elseif($query=='trangthem'){
            $sanpham->trangthem();
        }
        elseif($query=='them'){
            $sanpham->add();
        }
    }

   else if($tam=='danhmuc_sp'){
        require("Controllers/dmsp_controller.php");
        $dmsp=new Dmsp_controller();
        if($query=='lietke'){
            $dmsp->lietke();
        }
        elseif($query=='sua'){
            $dmsp->update();
        }
        elseif($query=='xoa'){
            $dmsp->delete();
        }
        elseif($query=='trangsua'){
            $dmsp->trangsua();
        }
        elseif($query=='trangthem'){
            $dmsp->trangthem();
        }
        elseif($query=='them'){
            $dmsp->add();
        }
    }
    else if($tam=='danhmuc_bv'){
        require("Controllers/dmbv_controller.php");
        $dmbv=new Dmbv_controller();
        if($query=='lietke'){
            $dmbv->lietke();
        }
        elseif($query=='sua'){
            $dmbv->update();
        }
        elseif($query=='xoa'){
            $dmbv->delete();
        }
        elseif($query=='trangsua'){
            $dmbv->trangsua();
        }
        elseif($query=='trangthem'){
            $dmbv->trangthem();
        }
        elseif($query=='them'){
            $dmbv->add();
        }
    }
   else if($tam=='baiviet'){
        require("Controllers/baiviet_controller.php");
        $baiviet=new Baiviet_controller();
        if($query=='lietke'){
            $baiviet->lietke();
        }
        elseif($query=='sua'){
            $baiviet->update();
        }
        elseif($query=='xoa'){
            $baiviet->delete();
        }
        elseif($query=='trangsua'){
            $baiviet->trangsua();
        }
        elseif($query=='trangthem'){
            $baiviet->trangthem();
        }
        elseif($query=='them'){
            $baiviet->add();
        }
    }
    else if($tam=='donhang'){
        require("Controllers/donhang_controller.php");
        $donhang=new Donhang_controller();
        if($query=='lietke'){
            $donhang->lietke();
        }
        if($query=='chitiet'){
            $donhang->chitiet();
        }
        elseif($query=='xoa'){
            $donhang->delete();
        }
        elseif($query=='duyet'){
            $donhang->duyet();
        }
      
    }
    else if($tam=='nguoidung'){
        require("Controllers/nd_controller.php");
        $nguoidung=new Nd_controller();
        if($query=='lietke'){
            $nguoidung->lietke();
        }
        if($query=='trangthem'){
            $nguoidung->trangthem();
        }
        if($query=='trangsua'){
            $nguoidung->trangsua();
        }
        if($query=='them'){
            $nguoidung->add();
        }
        if($query=='sua'){
            $nguoidung->update();
        }
        elseif($query=='xoa'){
            $nguoidung->delete();
        }
      
    }

    else if($tam=='post'){
        require("Controllers/posts_upload.php");
        $post=new post();
        if($query=='upload'){
            $post->upload();
        }
        if($query=='delete'){
           $post->delete();
        }
    }

    else {
        require("Controllers/home_controller.php");
        $home=new Home_controller();
        $home->list();
    }
   