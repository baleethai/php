<!DOCTYPE html>
<html>
<head>
    <title>ยืนยันใบสั่งซื้อ</title>
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
                        <div class="item">
                            <span class="price">978-616-268-185-1</span>
                            <p class="item-name">ISBN</p>
                        </div>
                        <div class="item">
                            <span class="price" id="total">100 เล่ม</span>
                            <p class="item-name">
                                มนต์พิธี สำหรับภิกษุสามเณรและพุทธศาสนิกชนทั่วไป
                            </p>
                            <p class="item-description">ราคา 28.00 บาท/รายการ</p>
                        </div>
                        <div class="item">
                            <span class="donate">
                                <input type="checkbox" class="form-check-input" id="is_print" value="1" disabled>
                            </span>
                            <p class="item-name">ต้องการพิมพ์รายชื่อหรือไม่</p>
                            <p class="item-description">รายชื่อผู้ร่วมบริจาคพิมพ์หนังสือ</p>
                        </div>
                        <div class="item">
                            <span class="item-name">รวม</span>
                            <span class="price" id="total">฿2,238.00</span>
                        </div>
                        <hr>
                        <div class="item">
                            <span class="price">978-616-268-185-2</span>
                            <p class="item-name">ISBN</p>
                        </div>
                        <div class="item">
                            <span class="price" id="total">100 เล่ม</span>
                            <p class="item-name">
                                มนต์พิธี สำหรับภิกษุสามเณรและพุทธศาสนิกชนทั่วไป
                            </p>
                            <p class="item-description">ราคา 28.00 บาท/รายการ</p>
                        </div>
                        <div class="item">
                            <span class="donate">
                                <input type="checkbox" class="form-check-input" id="is_print" value="1" disabled>
                            </span>
                            <p class="item-name">ต้องการพิมพ์รายชื่อหรือไม่</p>
                            <p class="item-description">รายชื่อผู้ร่วมบริจาคพิมพ์หนังสือ</p>
                        </div>
                        <div class="item">
                            <span class="item-name">รวม</span>
                            <span class="price" id="total">฿2,382.00</span>
                        </div>
                        <div class="total">
                            <span class="item-name">ค่าจัดส่ง (Kerry Express (เคอรี่ เอ็กซ์เพรส))</span>
                            <span class="price" id="total">฿100.00</span>
                        </div>
                        <div class="total-item">
                            <span class="item-name">รวมเป็นเงิน</span>
                            <span class="price" id="total">฿13,900.00</span>
                        </div>
                    </div>
                    <div class="card-details">
                        <h3 class="title">ช่องทางการชำระเงิน</h3>
                        <div class="row donate" id="donate1">
                            <div class="form-group col-sm-12">
                                <div>
                                    <label class="form-check-label-confirm" for="paymentmethod">กสิกรไทย 12428-12314 สำนักพิมพ์เลี่ยงเชียง</label>
                                    <span style="float: right;"></span>
                                </div>
                            </div>
                        </div>
                        <h3 class="title">ข้อมูลลูกค้า</h3>
                        <div class="row donate" id="donate1">
                            <div class="form-group col-sm-12">
                                <div>
                                    <label class="form-check-label-confirm" for="paymentmethod">ชื่อ-นามสกุล</label>
                                    <span style="float: right;">คุณ อารียา ประเสริฐสิริกุล</span>
                                </div>
                                <div>
                                    <label class="form-check-label-confirm" for="paymentmethod">ไลน์ไอดี</label>
                                    <span style="float: right;">sidlxx29</span>
                                </div>
                                <div>
                                    <label class="form-check-label-confirm" for="paymentmethod">อีเมล์</label>
                                    <span style="float: right;">sidlxx29@mail.com</span>
                                </div>
                                <div>
                                    <label class="form-check-label-confirm" for="paymentmethod">โทรศัพท์</label>
                                    <span style="float: right;">0981234423</span>
                                </div>
                                <div>
                                    <label class="form-check-label-confirm" for="paymentmethod">ที่อยู่</label>
                                    <span style="float: right;">180/769 บางมด บางมด ราษบูรณะ กรุงเทพ 10100</span>
                                </div>
                            </div>
                        </div>
                        <h3 class="title">ที่อยู่ที่จัดส่ง</h3>
                        <div class="row donate" id="donate1">
                            <div class="form-group col-sm-12">
                                <div>
                                    <label class="form-check-label-confirm" for="paymentmethod">ชื่อ-นามสกุล</label>
                                    <span style="float: right;">คุณ อารียา ประเสริฐสิริกุล</span>
                                </div>
                                <div>
                                    <label class="form-check-label-confirm" for="paymentmethod">ไลน์ไอดี</label>
                                    <span style="float: right;">sidlxx29</span>
                                </div>
                                <div>
                                    <label class="form-check-label-confirm" for="paymentmethod">อีเมล์</label>
                                    <span style="float: right;">sidlxx29@mail.com</span>
                                </div>
                                <div>
                                    <label class="form-check-label-confirm" for="paymentmethod">โทรศัพท์</label>
                                    <span style="float: right;">0981234423</span>
                                </div>
                                <div>
                                    <label class="form-check-label-confirm" for="paymentmethod">ที่อยู่</label>
                                    <span style="float: right;">180/769 บางมด บางมด ราษบูรณะ กรุงเทพ 10100</span>
                                </div>
                            </div>
                        </div>
                        <h3 class="title">ที่อยู่จัดส่งใบเสร็จรับเงิน</h3>
                        <div class="row donate" id="donate1">
                            <div class="form-group col-sm-12">
                                <div>
                                    <label class="form-check-label-confirm" for="paymentmethod">ชื่อ-นามสกุล</label>
                                    <span style="float: right;">คุณ อารียา ประเสริฐสิริกุล</span>
                                </div>
                                <div>
                                    <label class="form-check-label-confirm" for="paymentmethod">โทรศัพท์</label>
                                    <span style="float: right;">0981234423</span>
                                </div>
                                <div>
                                    <label class="form-check-label-confirm" for="paymentmethod">ที่อยู่</label>
                                    <span style="float: right;">180/769 บางมด บางมด ราษบูรณะ กรุงเทพ 10100</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-sm-4">
                                <button type="button" class="btn btn-warning btn-block btn-back">กลับ</button>
                            </div>
                            <div class="form-group col-sm-8">
                                <button type="button" class="btn btn-primary btn-block">ยืนยันใบสั่งซื้อ</button>
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
        $("input").attr('disabled', true);
        $("textarea").attr('disabled', true);
        $(".btn-primary").click(function() {
            window.location.href = '5.php';
        });
    });
</script>
</body>
</html>