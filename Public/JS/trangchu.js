window.onload = function () {

    // Thêm hình vào banner
	addBanner("http://localhost/webproject/Public/Pictures/Banners/banner0.gif", "http://localhost/webproject/Public/Pictures/Banners/banner0.gif");
	var numBanner = 9; // Số lượng hình banner
	for (var i = 1; i <= numBanner; i++) {
		var linkimg = "http://localhost/webproject/Public/Pictures/Banners/banner" + i + ".png";
		addBanner(linkimg, linkimg);
	}

    // Khởi động thư viện hỗ trợ banner - chỉ chạy khi đã tạo hình trong banner
	var owl = $('.owl-carousel');
	owl.owlCarousel({
		items: 1.5,
		margin: 100,
		center: true,
		loop: true,
		smartSpeed: 450,
		autoplay: true,
		autoplayTimeout: 3500
	});

	
}