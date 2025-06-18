<div class="lichsu">
    <h1>Lịch sử đơn hàng </h1>
    <div class="thongke">
    <table  >
        <tr>
            <th>Mã đơn</th>
            <th> Ngày đặt</th>
            <th>Tổng tiền</th>
            <th>Trạng thái</th>
            <th>  </th>
            
        </tr>
<?php

for ($i=0; $i <count( $data); $i++) { 
  
?>
 <tr>
            <td><?php echo $data[$i]['id_hoadon'] ?></td>
            <td><?php echo $data[$i]['timedathang'] ?></td>
            <td><?php echo $data[$i]['tongtien'] ?> VNĐ</td>
            <td><?php echo $data[$i]['trangthai'] ?></td>
            <td><a href="?quanly=order&action=chitiet&id_hoadon=<?php echo $data[$i]['id_hoadon']  ?> "class="btn-chitiet">Xem chi tiết</a></td>
        </tr>
        <?php
}
        ?>
    </table>
    </div>
</div>