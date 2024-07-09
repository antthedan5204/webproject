<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    
    <link rel="stylesheet" href="http://localhost/webproject/Public/Css/styles.css">
    <link rel="stylesheet" href="http://localhost/webproject/Public/Css/home.css">
    <link rel="stylesheet" href="http://localhost/webproject/Public/Css/banner.css">

    <script src="http://localhost/webproject/Public/Js/trangchu.js"></script>
    <script src="http://localhost/webproject/Public/Js/Jquery.min.js"></script>
    <script src="http://localhost/webproject/Public/Js/owlcarousel/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="http://localhost/webproject/Public/Css/owlcarousel/owl.carousel.min.css">
	<link rel="stylesheet" href="http://localhost/webproject/Public/Css/owlcarousel/owl.theme.default.min.css">

</head>
<body>
    
    <div class="banner">
		<div class="owl-carousel owl-theme"></div>
	</div> <!-- End Banner -->

    <img src="http://localhost/webproject/Public/Pictures/Banners/blackFriday.gif" alt="" style="width: 100%; height: 150px;">

    <br>
    <div class="companyMenu group flexContain">
        <a><img src="http://localhost/webproject/Public/Pictures/Company/Apple.jpg" alt="Apple"></a>
        <a><img src="http://localhost/webproject/Public/Pictures/Company/Samsung.jpg" alt="Samsung"></a>
        <a><img src="http://localhost/webproject/Public/Pictures/Company/Oppo.jpg" alt="Oppo"></a>
        <a><img src="http://localhost/webproject/Public/Pictures/Company/Nokia.jpg" alt="Nokia"></a>
        <a><img src="http://localhost/webproject/Public/Pictures/Company/Huawei.jpg" alt="Huawei"></a>
        <a><img src="http://localhost/webproject/Public/Pictures/Company/Xiaomi.png" alt="Xiaomi"></a>
        <a><img src="http://localhost/webproject/Public/Pictures/Company/Realme.png" alt="Realme"></a>
        <a><img src="http://localhost/webproject/Public/Pictures/Company/Vivo.jpg" alt="Vivo"></a>
        <a><img src="http://localhost/webproject/Public/Pictures/Company/Philips.jpg" alt="Philips"></a>
        <a><img src="http://localhost/webproject/Public/Pictures/Company/Mobell.jpg" alt="Mobell"></a>
        <a><img src="http://localhost/webproject/Public/Pictures/Company/Mobiistar.jpg" alt="Mobiistar"></a>
        <a><img src="http://localhost/webproject/Public/Pictures/Company/Itel.jpg" alt="Itel"></a>
        <a><img src="http://localhost/webproject/Public/Pictures/Company/Coolpad.png" alt="Coolpad"></a>
        <a><img src="http://localhost/webproject/Public/Pictures/Company/HTC.jpg" alt="HTC"></a>
        <a><img src="http://localhost/webproject/Public/Pictures/Company/Motorola.jpg" alt="Motorola"></a>
    </div>

    <div class="flexContain">

		<div class="pricesRangeFilter dropdown">
			<button class="dropbtn">Giá tiền</button>
			<div class="dropdown-content">
                <a href="http://localhost/webproject/home/duoi2trieu">Dưới 2 triệu</a>
                <a href="http://localhost/webproject/home/tu2den4trieu">Từ 2 - 4 triệu</a>
                <a href="http://localhost/webproject/home/tu4den7trieu">Từ 4 - 7 triệu</a>
                <a href="http://localhost/webproject/home/tu7den13trieu">Từ 7 - 13 triệu</a>
                <a href="http://localhost/webproject/home/tren13trieu">Trên 13 triệu</a>
            </div>
		</div>

		<div class="promosFilter dropdown">
			<button class="dropbtn">Khuyến mãi</button>
			<div class="dropdown-content">
                <a href="">Giảm giá</a>
                <a href="">Trả góp</a>
                <a href="">Mới ra mắt</a>
                <a href="">Giá rẻ online</a>
            </div>
		</div>


		<div class="sortFilter dropdown">
			<button class="dropbtn">Sắp xếp</button>
			<div class="dropdown-content">
                <a href="http://localhost/webproject/home/priceAsc">Giá tăng dần</a>
                <a href="http://localhost/webproject/home/priceDecs">Giá giảm dần</a>
                <a href="http://localhost/webproject/home/nameAsc">Tên A-Z</a>
                <a href="http://localhost/webproject/home/nameDesc">Tên Z-A</a>
            </div>
		</div>

	</div> <!-- End khung chọn bộ lọc -->

    <div class="choosedFilter flexContain">
		<a id="deleteAllFilter" style="display: none;">
			<h3>Xóa bộ lọc</h3>
		</a>
	</div> <!-- Những bộ lọc đã chọn -->
	<hr>
    
    <!-- Mặc định mới vào trang sẽ ẩn đi, nế có filter thì mới hiện lên -->
	<div class="contain-products" style="display:none"> 
		<div class="filterName">
			<input type="text" placeholder="Lọc trong trang theo tên..." onkeyup="filterProductsName(this)">
		</div> <!-- End FilterName -->

		<ul id="products" class="homeproduct group flexContain">
			<div id="khongCoSanPham">
				<i class="fa fa-times-circle"></i>
				Không có sản phẩm nào
			</div> <!-- End Khong co san pham -->
		</ul><!-- End products -->
    
		<div class="pagination"></div>
	</div>
    
    <!-- Div hiển thị khung sp hot, khuyến mãi, mới ra mắt ... -->
    <?php
        if(isset($data['dulieu'])&&mysqli_num_rows($data['dulieu'])>0){
            while($row = mysqli_fetch_assoc($data['dulieu'])){
    ?>
	<a href="http://localhost/webproject/chitietsanpham/hienThiChiTiet/<?php echo $row['product_id']?>">
        <div class="contain-khungSanPham" >
            <div class="product-item">
            <img style="width:150px; height:250px;" src="http://localhost/webproject/Public/Pictures/Products/<?php echo $row['img']?>" alt="<?php echo $row['name']?>">
            <h3><?php echo $row['name']?></h3>
            <p class="price"><?php echo $row['price']?></p>
            <div class="rating">⭐⭐⭐⭐⭐ 0 đánh giá</div>
            </div>
        </div>
    </a>
    <?php
        }
    }else{
    ?>
        <h1 style="color: red; text-align: center;">Không tìm thấy sản phẩm</h1>
    <?php
    }
    ?>
  <!-- Thêm các sản phẩm khác tương tự -->

</body>
</html>