<?php
require_once("model.php");
class Login extends Model
{
    function dangki($data){
        $query="INSERT INTO nguoidung (id_nguoidung,tennguoidung,diachi,matkhau,sdt,email,ma_pq,hinhanh) value ('','".$data['ten']."','".$data['diachi']."','".$data['matkhau']."','".$data['sdt']."','".$data['email']."','".$data['ma_pq']."','".$data['hinhanh']."')";
        $this->mysqli->query($query);
    }

    function dangnhap($data){
        $query="SELECT* FROM nguoidung where email='".$data['email']."' limit 1";
     
   $kq=$this->mysqli->query($query);
   $row=mysqli_fetch_array($kq);
    if($row["matkhau"]==$data['matkhau']){
        if($row["ma_pq"]=='1'){
        $_SESSION['email']=$data['email'];
        $_SESSION['id_nguoidung']=$row['id_nguoidung'];
        $_SESSION['phanquyen']='Khách hàng';
    }
   else if($row["ma_pq"]=='2'){
        $_SESSION['email']=$data['email'];
        $_SESSION['id_nguoidung']=$row['id_nguoidung'];
        $_SESSION['phanquyen']='Admin';
    }
    
        header("location:?quanly=home");
                }
                else
                header("location:?quanly=login&action=dangnhap");
   
}
function update_h($data){
    $query="UPDATE  nguoidung set tennguoidung='".$data["tennguoidung"]."',diachi='".$data["diachi"]."',sdt='".$data["sdt"]."',email='".$data["email"]."',hinhanh='".$data["hinhanh"]."' where id_nguoidung='".$data["id_nguoidung"] ."'";
    $this->mysqli->query($query);
}
function update($data){
    $query="UPDATE  nguoidung set tennguoidung='".$data["tennguoidung"]."',diachi='".$data["diachi"]."',sdt='".$data["sdt"]."',email='".$data["email"]."' where id_nguoidung='".$data["id_nguoidung"] ."'";
    $this->mysqli->query($query);
}
function tk_nguoidung($email){
    $query= "SELECT * FROM nguoidung where email ='$email' limit 1";
   return $this->mysqli->query($query)->fetch_assoc();
}

}