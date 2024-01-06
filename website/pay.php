<?php 
$type_post = true;
include("./includes/header.php") ;
$blogs = getBlogs($page, $search);
$page ++;
?>;
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
}

* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

/* .container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
} */

input[type=text] {
  width: 50%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #04AA6D;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}
.boot

/* a {
  color: #2196F3;
} */

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
</style>
</head>
<body class="d-flex flex-column h-100" >

<div class="row">
  <div class="col-75">
    <div class="container">
      <?php 
      
 
      $_u_name = "";
      $_u_email = "";
      if (isset($_SESSION['auth_user']['id'])){
        $_us = getUser(); 
        $_u_name = $_us['name'];
        $_u_email = $_us['email']; 
        $_u_address = $_us['address'];
        $_u_phone =  $_us['phone'];
      } 
     
     
      ?>
        <form action="/action_page.php"> 
            <div class="row">
            <div class="col-50">
                <h3></h3>
                <label for="fname"><i class="fa fa-user"></i> Full Name</label>
                <input type="text" id="fname" name="firstname" value="<?=$_u_name?>"  >
                <label for="email"><i class="fa fa-envelope"></i> Email</label>
                <input type="text" id="email" name="email" value="<?=$_u_email?>">
                <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
                <input type="text" id="adr" name="address" value="<?=$_u_address?>">
                <div class="row">
                <div class="col-50">
                    <label for="state">Phone</label>
                    <input type="text" id="state" name="state" value="<?=$_u_phone?>">
                </div>
                </div>
            </div>
            </div>
            <label>
            <input type="checkbox" checked="checked" name="sameadr"> Địa chỉ giao hàng giống với địa chỉ thanh toán
            </label>
        </form>
        <form action="./functions/ordercode.php" method="post">
            <input type="hidden" name="buy_product" value="true">
            <button class="btn-buy" style="    
                margin-top: 25px;
                border: 1px solid black;
                padding: 10px;
                border-radius: 20px;
                color: white;
                background-color: #28a745;
            " >Đặt hàng</button>
        </form>
      
    </div>
  </div>

 

  <div class="col-25">
    <div class="container">
      <h4>Cart
        <span class="price" style="color:black">
          <i class="fa fa-shopping-cart"></i>
        </span>
      </h4>

      <?php
                    $products = getMyOrders();
                    $total_price = 0;
                    if (mysqli_num_rows($products) >= 0){ 

                        foreach ($products as $product) {  ?>
                            
                            <p><a href="#"><?= $product['name']?></a> <a><a>Quantity :</a><?= $product['quantity']?></a><span class="price">₫<?= number_format($product['selling_price']) ?></span></p>

                            <?php $total_price +=  $product['selling_price'] * $product['quantity'];
                       } 
                    }
    ?>
      
      <hr>
      <p>Total <span class="price" style="color:black"><b>₫<?=number_format($total_price)?></b></span></p>
    </div>
  </div>
</div>


<?php include("./includes/footer.php") ?>
    <script src="./assets/js/app.js"></script>
    <script src="./assets/js/index.js"></script>
</body>
