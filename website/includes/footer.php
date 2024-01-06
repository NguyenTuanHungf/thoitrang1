<footer class="bg-second" style="min-height: 350px;">
        <div class="container">
            <div class="row">
                <div class="col-5 col-md-6 ">
                    <h3 class="footer-head">Thông tin và chính sách</h3>
                    <ul class="menu">
                        <li><a href="#">Mua hàng và thanh toán online </a></li> 
                        <li><a href="#"> Mua hàng trả góp online  </a></li> 
                        <li><a href="#">Tra cứu thông tin đơn hàng </a></li>
                        <li><a href="#">Tra cứu hóa đơn điện tử </a></li>
                        <li><a href="#">Thông tin hóa đơn mua hàng </a></li>
                    </ul>
                </div>

                <div class="col-5 col-md-6">
                    <h3 class="footer-head">THÔNG TIN LIÊN HỆ </h3>
                    <ul class="menu">
                        <li><a href="#"> Điện thoại: (+84)386767417</a></li>
                        <li><a href="#">Email: nguyentuanhung1609@gmail.com </a></li>
                        <li><a href="#">Địa chỉ: 234 Hoàng Quốc Việt, Nghĩa Đô, quận Cầu Giấy, Hà Nội </a></li>
                    </ul>
                </div>
                <div class="col-2 col-md-6 col-sm-12">
                    <div class="contact">
                        <h3 class="contact-header">
                            CARO
                        </h3>
                        <ul class="contact-socials">
                            <li><a href="#">
                                    <i class='bx bxl-facebook-circle'></i>
                                </a></li>
                            <li><a href="#">
                                    <i class='bx bxl-instagram-alt'></i>
                                </a></li>
                            <li><a href="#">
                                    <i class='bx bxl-youtube'></i>
                                </a></li>
                            <li><a href="#">
                                    <i class='bx bxl-twitter'></i>
                                </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
</footer>
<!-- app js -->
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
<script>
  <?php if(isset($_SESSION['message']))
  {
  ?>
    alertify.set('notifier','position', 'top-right');
    alertify.success('<?= $_SESSION['message'] ?>');
  <?php 
    unset($_SESSION['message']);
  }
  ?>
</script>
