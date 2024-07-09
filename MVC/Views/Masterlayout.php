<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shop điện thoại</title>
    <link rel="stylesheet" href="http://localhost/webproject/Public/Css/owl.carousel.min.css">
	<link rel="stylesheet" href="http://localhost/webproject/Public/Css/owl.theme.default.min.css">    
    <script src="http://localhost/webproject/Public/Js/Jquery.min.js"></script>
    <script src="http://localhost/webproject/Public/Js/owl.carousel.min.js"></script>

    <!-- My css -->
    <link rel="stylesheet" href="http://localhost/webproject/Public/Css/styles.css">
    <link rel="stylesheet" href="http://localhost/webproject/Public/Css/topnav.css">
	<link rel="stylesheet" href="http://localhost/webproject/Public/Css/header.css">
	<link rel="stylesheet" href="http://localhost/webproject/Public/Css/banner.css">
	<link rel="stylesheet" href="http://localhost/webproject/Public/Css/taikhoan.css">
	<link rel="stylesheet" href="http://localhost/webproject/Public/Css/trangchu.css">
	<link rel="stylesheet" href="http://localhost/webproject/Public/Css/pagination_phantrang.css">
	<link rel="stylesheet" href="http://localhost/webproject/Public/Css/footer.css">

    <!-- My Js -->
    <script src="http://localhost/webproject/Public/Js/dungchung.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>
<body>

    <script> addTopNav(); </script>

    <section>

        <script> addHeader(); </script>

        <?php
            include_once './MVC/Views/Pages/'.$data['page'].'.php';
        ?>

	</section>

    <script>
		 addPlc();
	</script>

    <div class="footer"><script>addFooter();</script></div>

	<i class="fa fa-arrow-up" id="goto-top-page" onclick="gotoTop()"><img style="width:15px; height:15px; opacity:0.5;" src="http://localhost/webproject/Public/Pictures/up-arrow.png"></i>
    
</body>
</html>