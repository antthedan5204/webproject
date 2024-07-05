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
            <form>
                <h1>Tạo tài khoản</h1>
                <div class="social-icons">
                    <a href="#"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#"><i class="fa-brands fa-facebook"></i></a>
                    <a href="#"><i class="fa-brands fa-github"></i></a>
                    <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <span>
                    hoặc sử dụng email để đăng nhập
                </span>
                <input type="text"
                placeholder="Tên đăng nhập">
                <input type="email"
                placeholder="Email">
                <input type="password"
                placeholder="Mật khẩu">
                <button>
                    Đăng kí
                </button>
            </form>
        </div>
        <div class="form-container sign-in">
            <form>
                <h1>Đăng nhập</h1>
                <div class="social-icons">
                    <a href="#"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#"><i class="fa-brands fa-facebook"></i></a>
                    <a href="#"><i class="fa-brands fa-github"></i></a>
                    <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <span>
                    hoặc sử dụng mật khẩu email của bạn
                </span>
                <input type="email"
                placeholder="Email">
                <input type="password"
                placeholder="Mật khẩu">
                <a href="#">Quên mật khẩu?</a>
                <button>
                    Đăng nhập
                </button>
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