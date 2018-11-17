<!DOCTYPE html>
<html>
<head>
    <title>รายนามผู้รวมบริจาค</title>
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
                    <div class="card-details">
                        <div class=" text-xs-center">
                            <div class="text-center">
                                <img src="../../images/success.png" alt="" width="110">                                
                            </div>
                          <h1 class="display-3 text-center">ขอบคุณค่ะ</h1>
                          <p class="lead"><strong>เราได้รับคำสั่งซื้อของคุณแล้ว</strong> รอการติดต่อจากเจ้าหน้าที่จากทางร้าน</p>
                          <hr>
                          <p>
                            ช่วยเหลือ <a href="#">ติดต่อ</a> หรือ <a href="#">แจ้งการชำระเงิน</a>
                          </p>
                        </div>
                        <div class="row">
                            <div class="form-group col-sm-12">
                                <button type="button" class="btn btn-primary btn-block">ดำเนินการต่อ</button>
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
        $(".btn-primary").click(function(event) {
            window.location.href = 'http://www.liangchiang.com/'
        });
    });
</script>
</body>
</html>