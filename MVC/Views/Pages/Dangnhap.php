<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="http://localhost/webproject/Public/Css/Dangnhap.css">
</head>
<body>
    
    <div class="container" id="container">
        <div class="form-container sign-up">
            <form method="post" action="http://localhost/webproject/dangnhap/register">
                <h1>Tạo tài khoản</h1>
                <div class="social-icons">
                    <a href="#"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#"><i class="fa-brands fa-facebook"></i></a>
                    <a href="#"><i class="fa-brands fa-github"></i></a>
                    <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <span> hoặc sử dụng tài khoản để đăng nhập </span>
                <input type="text" placeholder="Họ và tên" name="username" value="<?php if(isset($data['hoten'])) echo $data['hoten'] ?>">
                <input type="text" placeholder="Tên đăng nhập" name="userlogin" value="<?php if(isset($data['tendangnhap'])) echo $data['tendangnhap'] ?>">
                <input type="email" placeholder="Email" name="email" value="<?php if(isset($data['email'])) echo $data['email'] ?>">
                <input type="password" placeholder="Mật khẩu" name="password" value="<?php if(isset($data['mat_khau'])) echo $data['mat_khau'] ?>">
                <button name="btnDangky"> Đăng kí </button>
            </form>
        </div>
        <div class="form-container sign-in">
            <form method="post" action="http://localhost/webproject/dangnhap/login">
                <h1>Đăng nhập</h1>
                <div class="social-icons">
                    <a href="#"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#"><i class="fa-brands fa-facebook"></i></a>
                    <a href="#"><i class="fa-brands fa-github"></i></a>
                    <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <span> hoặc sử dụng tài khoản của bạn </span>
                <input type="text" placeholder="Tên đăng nhập" name="userlogin" value="<?php if(isset($data['tendn'])) echo $data['tendn'] ?>">
                <input type="password" placeholder="Mật khẩu" name="password" value="<?php if(isset($data['matkhau'])) echo $data['matkhau'] ?>">
                <a href="#">Quên mật khẩu?</a>
                <button name="btnDangnhap"> Đăng nhập </button>
            </form>
        </div>
        
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Chào mừng bạn!</h1>
                    <p>Nhập thông tin cá nhân của bạn để sử dụng tất cả các tính năng của trang web</p>
                    <button class="hidden" id="login">Đăng nhập</button>

                </div>
                <div class="toggle-panel toggle-right">
                    <h1>Hello, my friend!</h1>
                    <p>Đăng kí với thông tin cá nhân của bạn để sử dụng tất cả các tính năng của trang web</p>
                    <button class="hidden" id="register">Đăng kí</button>

                </div>
            </div>
        </div>
    </div>
    <script src="http://localhost/webproject/Public/JS/Dangnhap.js"></script>
</body>
</html>