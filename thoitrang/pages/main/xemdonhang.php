
<?php
// Đảm bảo biến $code tồn tại và không rỗng
// Kiểm tra xem tham số 'code_cart' đã được truyền qua URL hay chưa
if (isset($_GET['code'])) {
  $code = mysqli_real_escape_string($mysqli, $_GET['code']);

  // Lấy giá trị của tham số 'code_cart' và xử lý để ngăn chặn SQL injection
	
  $sql_lietke_dh = "SELECT tbl_cart_details.*, tbl_sanpham.*, size.ten_size
  FROM tbl_cart_details
  INNER JOIN tbl_sanpham ON tbl_cart_details.id_sanpham = tbl_sanpham.id_sanpham
  INNER JOIN size ON tbl_cart_details.size = size.id_size
  WHERE tbl_cart_details.code_cart = '".$code."'
  ORDER BY tbl_cart_details.id_cart_details DESC;
  ";


  // Thực hiện truy vấn SQL và kiểm tra kết quả
  $query_lietke_dh = mysqli_query($mysqli, $sql_lietke_dh);
}
if (isset($_POST['phanhoi'])) {
  // Lấy nội dung phản hồi từ form
  $noidung = mysqli_real_escape_string($mysqli, $_POST['noidung']);
  $code = $_GET['code'];

  // Truy vấn SQL để lấy id_dangky từ tbl_dangky


  $id_khachhang = $_SESSION['id_khachhang'];


      // Chèn nội dung phản hồi và id_dangky vào bảng tbl_hoanhang trong cơ sở dữ liệu
      $insert_feedback_sql = "INSERT INTO tbl_hoanhang (id_khachhang, code_cart, noidung,status_lh) VALUES ('$id_khachhang', '$code', '$noidung',1)";
      $insert_feedback_query = mysqli_query($mysqli, $insert_feedback_sql);

      if ($insert_feedback_query) {
          header('Location:index.php?quanly=ketqua');
         
      } else {
          echo " " . mysqli_error($mysqli);
      }
  } else {
      echo " " . mysqli_error($mysqli);
  }



?>
 <div class="row" style="margin-top: 20px;">
	<div class="col-md-12 table-responsive">
		<h3 class="the_h">Xem đơn hàng</h3>
    
    <table class="table table-bordered table-hover" style="margin-top: 20px;">
    <?php
// Kiểm tra xem người dùng đã đăng nhập hay chưa
if(isset($_SESSION['dangky'])){
    // Nếu đã đăng nhập, hiển thị thông tin tài khoản và form sửa thông tin
    $id = $_SESSION['id_khachhang'];
    $sql_pro = "SELECT * FROM tbl_khackhang WHERE tbl_khackhang.id_khachhang = '$id'  LIMIT 1"; //lấy tất cả sản phẩm dựa vào id 
    $query_pro = mysqli_query($mysqli, $sql_pro);
    while($row_taikhoan = mysqli_fetch_array($query_pro)){
        ?>
        <div class="cart_main--sidebar">
            <div class="customer-info">
                <p class="customer-info-item">Tên: <?php echo $row_taikhoan['tenkhachhang'] ?></p>
                <p class="customer-info-item">Số điện thoại: <?php echo $row_taikhoan['dienthoai'] ?></p>
                <p class="customer-info-item">Địa chỉ: <?php echo $row_taikhoan['diachi'] ?></p>
              
            </div>
   
        <?php
    }
} else {
    // Nếu chưa đăng nhập, hiển thị thông báo hoặc chuyển hướng người dùng đến trang đăng nhập

    // Hoặc chuyển hướng người dùng đến trang đăng nhập
    // header("Location: index.php?quanly=dangnhap");
}
?>
    <thead>
  <tr >
    <th>Mã đơn hàng</th>
    <th>Tên sản phẩm</th>
    <th>Hình ảnh</th>
    <th>Số lượng</th>
    <th>Mã sp</th>
    <th>Kích thước</th>
    <th>Giá</th>


  
   
  </tr>
  <tr colpspan = ></tr>
    </thead>
  <?php
  $i = 0;
  $tongtien = 0;
  $tienlai = 0;
  $giaspkm=0;
  while($row = mysqli_fetch_array($query_lietke_dh)){
    if ($row['km']>0){
      $giaspkm=$row['giasp']-($row['giasp']*($row['km']/100));
    }else {
      $giaspkm=$row['giasp'];
    }
  	$i++;
  	$thanhtien = $giaspkm*$row['soluongmua'];
  	$tongtien += $thanhtien ;
    $tienlaia = $row['giagockm'] * $row['soluongmua'];
    $tienlai+= $tienlaia;
    $lai= $tongtien - $tienlai;
    $lais=$thanhtien - $tienlaia ;
  ?>
  <tr style="text-align: center;">
 
    <td><?php echo $row['code_cart'] ?></td>
    <td><?php echo $row['tensanpham'] ?></td>
    <th><img style="width:50px;max-height:80px;" src = "admincp/modules/quanlysp/uploads/<?php echo $row['hinhanh'];  ?>"></th>


    <td><?php echo $row['soluongmua'] ?></td>
    <td><?php echo $row['masp'] ?></td>
    <th><?php echo $row['ten_size'] ?></th>
    <th><?php echo number_format($giaspkm).'đ' ?></th>




  </tr>
  <?php
  } 
  ?>
<tr>
  	<th colspan="7">
   		<p style="color:red;">Tổng tiền : <?php echo number_format($tongtien,0,',','.').'vnđ' ?></p>
   	</th> </tr>
</table>

        </div>