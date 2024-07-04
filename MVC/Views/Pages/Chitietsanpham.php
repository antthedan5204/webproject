<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết sản phẩm</title>

    <link rel="stylesheet" href="http://localhost/webproject/Public/Css/styles.css">
    <link rel="stylesheet" href="http://localhost/webproject/Public/Css/chitietsanpham.css">

</head>
<body>
    <div id="productNotFound" style="min-height: 50vh; text-align: center; margin: 50px; display: none;">
        <h1 style="color: red; margin-bottom: 10px;">Không tìm thấy sản phẩm</h1>
        <a href="http://localhost/webproject/home" style="text-decoration: underline;">Quay lại trang chủ</a>
    </div>

    <?php
        if(isset($data['dulieu'])&&mysqli_num_rows($data['dulieu'])>0){
            while($row = mysqli_fetch_array($data['dulieu'])){
    ?>

    <div class="chitietSanpham" style="margin-bottom: 100px">
        <h1>Điện thoại <?php echo $row['name']?></h1>
        <div class="rowdetail group">
            <div class="picture">
                <img src="http://localhost/webproject/Public/Pictures/Products/<?php echo $row['img']?>">
            </div>
            <div class="price_sale">
                <div class="area_price"><b><p style="color:red;font-size:24px;"><?php echo $row['price']?>₫</p></b></div>
                <div class="ship">
                    <img src="http://localhost/webproject/Public/Pictures/clock.png">
                    <div>NHẬN HÀNG TRONG 1 GIỜ</div>
                </div>
                <div class="area_promo">
                    <strong>khuyến mãi</strong>
                    <div class="promo">
                        <img src="http://localhost/webproject/Public/Pictures/icon-tick.png">
                        <div id="detailPromo">Sản phẩm sẽ được giảm <b>500.000₫</b> khi mua hàng online bằng thẻ VPBank hoặc tin nhắn SMS</div>
                    </div>
                </div>
                <div class="policy">
                    <div>
                        <img src="http://localhost/webproject/Public/Pictures/box.png">
                        <p>Trong hộp có: Sạc, Tai nghe, Sách hướng dẫn, Cây lấy sim, Ốp lưng </p>
                    </div>
                    <div>
                        <img src="http://localhost/webproject/Public/Pictures/icon-baohanh.png">
                        <p>Bảo hành chính hãng 12 tháng.</p>
                    </div>
                    <div class="last">
                        <img src="http://localhost/webproject/Public/Pictures/1-1.jpg">
                        <p>1 đổi 1 trong 1 tháng nếu lỗi, đổi sản phẩm tại nhà trong 1 ngày.</p>
                    </div>
                </div>
                <div class="area_order">
                    <!-- nameProduct là biến toàn cục được khởi tạo giá trị trong phanTich_URL_chiTietSanPham -->
                    <a class="buy_now" href="http://localhost/webproject/chitietsanpham/hienThiChiTiet/addToCart/<?php echo $row['product_id']?>">
                        <b><i class="fa fa-cart-plus"></i> Thêm vào giỏ hàng</b>
                        <p>Giao trong 1 giờ hoặc nhận tại cửa hàng</p>
                    </a>
                </div>
            </div>
            <div class="info_product">
                <h2>Thông số kỹ thuật</h2>
                <ul class="info">
                    <li><p>Màn hình</p><?php echo $row['screen']?></li>
                    <li><p>Hệ điều hành</p><?php echo $row['os']?></li>
                    <li><p>Camara sau</p><?php echo $row['camera']?></li>
                    <li><p>Camara trước</p><?php echo $row['camera_front']?></li>
                    <li><p>CPU</p><?php echo $row['cpu']?></li>
                    <li><p>RAM</p><?php echo $row['ram']?></li>
                    <li><p>Bộ nhớ trong</p><?php echo $row['rom']?></li>
                    <li><p>Thẻ nhớ</p><?php echo $row['microUSB']?></li>
                    <li><p>Dung lượng pin</p><?php echo $row['battery']?></li>
                </ul>
            </div>
        </div>

    <?php           
            }
        }
    ?>
        <div id="overlaycertainimg" class="overlaycertainimg">
            <div class="close" onclick="closecertain()">&times;</div>
            <div class="overlaycertainimg-content">
                <img id="bigimg" class="bigimg" src="img/chitietsanpham/oppo-f9-red-2-400x460.png">
                <div class="div_smallimg owl-carousel">
                    <!-- <img src="img/chitietsanpham/oppo-f9-mau-do-1-org.jpg" onclick="changepic(this.src)">
                    <img src="img/chitietsanpham/oppo-f9-mau-do-2-org.jpg" onclick="changepic(this.src)">
                    <img src="img/chitietsanpham/oppo-f9-mau-do-3-org.jpg" onclick="changepic(this.src)"> -->
                </div>
            </div>
        </div>
    </div>
</body>
</html>