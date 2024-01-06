<?php 
$type_post = true;
include("./includes/header.php") ;
$blogs = getBlogs($page, $search);
$page ++;
?>;

<body class="d-flex flex-column h-100" >
    
<main role="main" class="mb-2">
        <!-- Block content -->
        <div class="container mt-2">
            <h1 class="text-center">Liên hệ với chúng tôi</h1>
            <div class="row">
                <div class="col col-md-6">
                    <img src="./images/headphone2.png" class="img-fluid" />
                </div>
                <div class="col col-md-6">
                    <form method="post" action="">
                        <div class="form-group">
                            <label for="email">Email của bạn</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email ...*">
                        </div>
                        <div class="form-group">
                            <label for="title">Tiêu đề </label>
                            <input type="text" class="form-control" id="title" name="title" placeholder="Tiêu đề ...*">
                        </div>
                        <div class="form-group">
                            <label for="message">Chi tiết</label>
                            <textarea name="message" class="form-control"id="message" name="message" placeholder="Chi tiết ...*" ></textarea>
                        </div>
                        <button class="btn btn-primary" name="btnGoiLoiNhan" style = "margin-top:10px">Gửi lời nhắn</button>
                    </form>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col col-md-12">
                    <iframe src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=đại học điện lực&amp;t=p&amp;z=15&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
        
        <!-- End block content -->
    </main>

<?php include("./includes/footer.php") ?>
    <script src="./assets/js/app.js"></script>
    <script src="./assets/js/index.js"></script>
</body>
