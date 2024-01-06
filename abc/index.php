<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
  width : 90% ;
  padding: 0 5%;
  max-width: 78.57143em;
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

.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
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

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}
.breadcrumb {
    margin-top: 1em;
}
.h1{
    font-size: 1.28571em;
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
<body>


<div class="row">
  <div class="col-75">
  <h2>CARO STUDIO</h2>
<ul class="breadcrumb">
	<li class="breadcrumb-item">
		<a href="/cart">Giỏ hàng</a>  ➢ Thông tin giao hàng
	</li>									
</ul>
    <div class="container">
      <form action="/action_page.php">
      
        <div class="row">
          <div class="col-50">
            <h3>Thông tin nhận hàng</h3>
            <label for="fname"><i class="fa fa-user"></i> Họ và tên</label>
            <input type="text" id="fname" name="firstname" placeholder="Nguyễn Văn A">
            <label for="adr"><i class="fa fa-address-card-o"></i> Địa chỉ nhận hàng</label>
            <input type="text" id="adr" name="address" placeholder="542 W. 15th Street">
            <div class="row">
              <div class="col-50">
                <label for="asd">Email</label>
                <input type="text" id="asd" name="email" placeholder="john@example.com">
              </div>
              <div class="col-50">
                <label for="sdt">Số điện thoại</label>
                <input type="text" id="sdt" name="sdt" placeholder="(+84)">
              </div>
            </div>
            <label for="city"><i class="fa fa-institution"></i> Thành Phố</label>
            <input type="text" id="city" name="city" placeholder="Hà Nội">
          </div>

          
        </div>
        <label for="abc"><i class="#"></i> Phương thức vận chuyển</label>
          <input type="checkbox" checked="checked" name="sameadr"  >Giao hàng tận nơi 40.000 VnĐ
        <input type="submit" value="Continue to checkout" class="btn">
      </form>
    </div>
  </div>
  <div class="col-25">
    <div class="container">
      <h4>Cart <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i> <b>4</b></span></h4>
      <p><a href="#">Product 1</a> <span class="price">$15</span></p>
      <p><a href="#">Product 2</a> <span class="price">$5</span></p>
      <p><a href="#">Product 3</a> <span class="price">$8</span></p>
      <p><a href="#">Product 4</a> <span class="price">$2</span></p>
      <hr>
      <p>Total <span class="price" style="color:black"><b>$30</b></span></p>
    </div>
  </div>
</div>

</body>
</html>
