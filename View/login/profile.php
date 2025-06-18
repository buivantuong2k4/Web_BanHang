<div class="container-xl px-4 mt-4">
<form action="?quanly=taikhoan&action=sua" method="post" enctype="multipart/form-data">
    <hr class="mt-0 mb-4">
    <div class="row">
        <div class="col-xl-4">
            <!-- Profile picture card-->
            <div class="card mb-4 mb-xl-0">
                <div class="card-header">Profile Picture</div>
                <div class="card-body text-center">
                    <!-- Profile picture image-->
                    <img class="img-account-profile rounded-circle mb-2" src="Public/img/<?php echo $data_nd["hinhanh"] ?>" alt="">
                    <!-- Profile picture help block-->
                    <div class="small font-italic text-muted mb-4"><?php echo $_SESSION["phanquyen"] ?></div>
                    <!-- Profile picture upload button-->
                  Upload  <input type="file" name="hinhanh"  >
                </div>
            </div>
        </div>
        <div class="col-xl-8">
            <!-- Account details card-->
            <div class="card mb-4">
                <div class="card-header">Account Details</div>
                <div class="card-body">
                    
                        <!-- Form Group (username)-->
                        <div class="mb-3">
                            <label class="small mb-1" for="inputUsername">Username </label>
                            <input class="form-control" name="ten" id="inputUsername" type="text" placeholder="Enter your username" value="<?php echo $data_nd["tennguoidung"] ?>">
                        </div>
                        <div class="mb-3">
                            <label class="small mb-1" for="inputEmailAddress">Adress </label>
                            <input class="form-control" name="diachi" id="inputEmailAddress"  placeholder="Enter your address" value="<?php echo $data_nd["diachi"] ?>">
                        </div>
                        
                        <!-- Form Group (email address)-->
                        <div class="mb-3">
                            <label class="small mb-1" for="inputEmailAddress">Email </label>
                            <input class="form-control" name="email" id="inputEmailAddress" type="email" placeholder="Enter your email address" value="<?php echo $data_nd["email"] ?>">
                        </div>
                        <!-- Form Row-->
                        <div class="row gx-3 mb-3">
                            <!-- Form Group (phone number)-->
                            <div class="col-md-6">
                                <label class="small mb-1"   for="inputPhone">Phone number</label>
                                <input class="form-control" name="sdt" id="inputPhone" type="tel" placeholder="Enter your phone number" value="<?php echo $data_nd["sdt"] ?>">
                            </div>
                            
                        </div>
                        <!-- Save changes button-->
                         <input type="submit"  class="btn btn-primary" type="button" value="Lưu thay đổi">
                       
                    
                </div>
            </div>
        </div>
    </div>
</form>
</div>