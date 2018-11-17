<!DOCTYPE html>
<html>
<head>
    <title>ใบสั่งซื้อ</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Kanit:300,400" rel="stylesheet">
    <link rel="stylesheet" href="../styles.css">
</head>

<body>
    <main class="page payment-page">
        <section class="payment-form dark">
            <div class="container">
                <div class="block-heading">
                    <div class="logo"><img src="../../images/logoLiangChiang150w.png"></div>
                    <p>บริษัท สำนักพิมพ์เลี่ยงเชียง เพียรเพื่อพุทธศาสน์ จำกัด</p>
                    <p>105/95-96 ถนนประชาอุทิศ ซอย 45 แขวงบางมด เขตทุ่งครุ กรุงเทพฯ 10140 โทร./แฟกซ์ 02-872-7667</p>
                </div>
                <form>
                    <div class="products">
                        <h3 class="title">ใบสั่งซื้อ</h3>
                        
                        <div class="product1">
                            <div class="item">
                                <span class="price isbn">978-616-268-290-1</span>
                                <p class="item-name">ISBN</p>
                            </div>
                            <div class="item">
                                <span class="qty">
                                    <input type="text" name="qty" class="form-control" value="1" data-product-id="1">
                                </span>
                                <p class="item-name">มนต์พิธี สำหรับภิกษุสามเณรและพุทธศาสนิกชนทั่วไป (เล่มเล็ก 10.5 X 14.5 ซม.)</p>
                                <p class="item-description">ราคา <span class="price-unit">30</span> บาท/รายการ</p>
                            </div>
                            <div class="item">
                                <span class="donate">
                                    <input type="checkbox" class="form-check-input is_print" value="1" data-product-id="1">
                                </span>
                                <p class="item-name">ต้องการพิมพ์รายชื่อหรือไม่</p>
                                <p class="item-description">รายชื่อผู้ร่วมบริจาคพิมพ์หนังสือ</p>
                            </div>
                            <div class="item">
                                <span class="item-name">รวม</span>
                                <span class="price subtotal">฿30.00</span>
                            </div>
                            <div class="item text-left">
                                <span class="item-name">
                                    <a href="#" data-product-id="1" class="remove"><img src="../../images/trash.png" width="20"> ลบรายการ</a>
                                </span>
                                <span class="price"></span>
                            </div>
                            <hr>
                        </div>

                        <div class="product2">
                            <div class="item">
                                <span class="price isbn">978-616-268-185-2</span>
                                <p class="item-name">ISBN</p>
                            </div>
                            <div class="item">
                                <span class="qty">
                                    <input type="text" name="qty" class="form-control" value="1" data-product-id="2">
                                </span>
                                <p class="item-name">มนต์พิธี สำหรับภิกษุสามเณรและพุทธศาสนิกชนทั่วไป</p>
                                <p class="item-description">ราคา <span class="price-unit">28.00</span> บาท/รายการ</p>
                            </div>
                            <div class="item">
                                <span class="donate">
                                    <input type="checkbox" class="form-check-input is_print" value="1" data-product-id="2">
                                </span>
                                <p class="item-name">ต้องการพิมพ์รายชื่อหรือไม่</p>
                                <p class="item-description">รายชื่อผู้ร่วมบริจาคพิมพ์หนังสือ</p>
                            </div>
                            <div class="item">
                                <span class="item-name">รวม</span>
                                <span class="price subtotal">฿2,382.00</span>
                            </div>
                            <div class="item text-left">
                                <span class="item-name">
                                    <a href="#" class="remove" data-product-id="2"><img src="../../images/trash.png" alt="" width="20"> ลบรายการ</a>
                                </span>
                                <span class="price"></span>
                            </div>
                        </div>

                        <div class="total">
                            <span class="item-name">รวมเป็นเงิน</span>
                            <span class="price" class="total">฿13,900.00</span>
                        </div>

                    </div>
                    <div class="card-details">
                        <h3 class="title">ข้อมูลลูกค้า</h3>
                        <div class="row info">
                            <div class="form-group col-sm-6">
                                <label for="info-name">ชื่อ-นามสกุล</label>
                                <input type="text" name="info[name]" class="form-control" placeholder="ชื่อ-นามสกุล" id="info-name">
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="cvc">ไลน์ไอดี</label>
                                <input type="text" name="info[lineid]" class="form-control" placeholder="ไลน์ไอดี" id="info-lineid">
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="card-holder">อีเมล์</label>
                                <input type="text" name="info[email]" class="form-control" placeholder="อีเมล์" id="info-email">
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="">โทรศัพท์</label>
                                <input type="text" name="info[mobile]" class="form-control" placeholder="โทรศัพท์" id="info-mobile">
                            </div>
                            <div class="form-group col-sm-12">
                                <label for="card-number">ที่อยู่</label>
                                <textarea type="text" name="info[address]" class="form-control" placeholder="ที่อยู่"></textarea>
                            </div>
                            <div class="form-group col-sm-12">
                                <input type="checkbox" class="form-check-input" id="isShipping" checked="checked" value="1">
                                <label class="form-check-label" for="exampleCheck1">จัดส่งสินค้าที่อยู่นี้</label>
                            </div>
                        </div>
                        <h3 class="title shipping-address">ที่อยู่ที่จัดส่ง</h3>
                        <div class="row shipping-address">
                            <div class="form-group col-sm-6">
                                <label for="shipping-name">ชื่อ-นามสกุล</label>
                                <input type="text" name="shipping[name]" class="form-control" placeholder="ชื่อ-นามสกุล">
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="shipping-lineid">ไลน์ไอดี</label>
                                <input type="text" name="shipping[lineid]" class="form-control" placeholder="ไลน์ไอดี">
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="shipping-email">อีเมล์</label>
                                <input type="text" name="shipping[email]" class="form-control" placeholder="อีเมล์">
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="shipping-mobile">โทรศัพท์</label>
                                <input type="text" name="shipping[mobile]" class="form-control" placeholder="โทรศัพท์">
                            </div>
                            <div class="form-group col-sm-12">
                                <label for="shipping-address">ที่อยู่</label>
                                <textarea type="text" name="shipping[address]" class="form-control" placeholder="ที่อยู่"></textarea>
                            </div>
                            <div class="form-group col-sm-12">
                                <input type="checkbox" class="form-check-input" id="isInvoice" checked="checked">
                                <label class="form-check-label" for="isInvoice">ส่งใบเสร็จไปที่อยู่นี้</label>
                            </div>
                        </div>
                        <h3 class="title receipt">ที่อยู่รับใบเสร็จ</h3>
                        <div class="row receipt">
                            <div class="form-group col-sm-6">
                                <label for="receipt-name">ชื่อ-นามสกุล</label>
                                <input type="text" name="receipt[name]" class="form-control" placeholder="ชื่อ-นามสกุล">
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="receipt-mobile">โทรศัพท์</label>
                                <input type="text" name="receipt[mobile]" class="form-control" placeholder="โทรศัพท์">
                            </div>
                            <div class="form-group col-sm-12">
                                <label for="receipt-address">ที่อยู่</label>
                                <textarea type="text" name="receipt[address]" class="form-control" placeholder="ที่อยู่"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-sm-4">
                                <button type="button" class="btn btn-warning btn-block back">กลับ</button>
                            </div>
                            <div class="form-group col-sm-8">
                                <button type="button" class="btn btn-primary btn-block next">ขั้นตอนต่อไป</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>
  </main>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.0/jquery.cookie.js"></script>
<script type="text/javascript">
    
    $(function() {
        var currency = '฿';
        $('input[name=qty]').keyup(function(event) {

            var qty = $(this).val();
            var id = $(this).attr('data-product-id');
            if ($('.product' + id).find('.is_print').is(':checked')) {
                subtotal = qty * 35;
            } else {
                subtotal = qty * 30;
            }

            $('.total .price').html(currency + subtotal.toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,'));
            
            $('.product' + id).find('.subtotal').html(currency + subtotal.toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,'));
        });

        $('.is_print').click(function(event) {
            var id = $(this).attr('data-product-id');
            if ($('.product' + id).find('.is_print').is(':checked')) {
                $('.product' + id).find('input[name=qty]').val(100).trigger('keyup');  
                price = 35;
                $('.product' + id).find('.price-unit').html(currency + price.toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,'));
            } else {
                $('.product' + id).find('input[name=qty]').val(1).trigger('keyup');                
                price = 30;
                $('.product' + id).find('.price-unit').html(currency + price.toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,'));
            }
        });
    });

    $('.back').click(function(event) {
        window.location.href = 'http://www.liangchiang.com/';
    });
    $('.next').click(function(event) {
        window.location.href = '2.php';
    });

</script>
</body>
</html>