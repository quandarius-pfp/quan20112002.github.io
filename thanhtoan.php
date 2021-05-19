<div class="spham">
<div class="row2">
  <div class="col-75">
    <div class="container">
      <form action="/action_page.php">
      
        <div class="row2">
          <div class="col-50">
            <h3>Billing Address</h3>
            <label for="fname"><i class="fa fa-user"></i> Họ và Tên </label>
            <input type="text" id="fname" name="firstname" placeholder="Nguyễn Trọng Quân">
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="quan@example.com">
            <label for="adr"><i class="fa fa-address-card-o"></i> Địa chỉ</label>
            <input type="text" id="adr" name="address" placeholder="528 KTX c17 , Haui">
            <label for="city"><i class="fa fa-institution"></i> Tỉnh</label>
            <input type="text" id="city" name="city" placeholder="Ninh Bình">

            <div class="row2">
              <div class="col-50">
                <label for="state">Thành Phố</label>
                <input type="text" id="state" name="state" placeholder="Ninh Bình">
              </div>
              <div class="col-50">
                <label for="zip">Zip</label>
                <input type="text" id="zip" name="zip" placeholder="20112002">
              </div>
            </div>
          </div>

          <div class="col-50">
            <h3>Thanh Toán</h3>
            <label for="fname">Chọn Loại thẻ</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">Tên chủ Thẻ: </label>
            <input type="text" id="cname" name="cardname" placeholder="NGUYEN TRONG QUAN BIDV">
            <label for="ccnum">Số Thẻ</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="9999-9999-9999-9999">
            <label for="expmonth">Tháng hết hạn</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="September">
            <div class="row">
              <div class="col-50">
                <label for="expyear">Năm hết hạn</label>
                <input type="text" id="expyear" name="expyear" placeholder="9999">
              </div>
              <div class="col-50">
                <label for="cvv"> số CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="20112002">
              </div>
            </div>
          </div>
          
        </div>
        <label>
          <input type="checkbox" checked="checked" name="sameadr"> Địa chỉ, thời gian giao hàng như đăng kí , freeship
        </label>
        <input type="submit" value="Thanh Toán" class="btn">
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
</div>

