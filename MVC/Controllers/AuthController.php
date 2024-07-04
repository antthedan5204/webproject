<?php

class AuthController extends controller {
    function Get_data(){
        $this->view('Masterlayout',[
            'page'=>'login'
        ]);
    }
    
    public function login() {
        // Xử lý đăng nhập
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Xử lý logic đăng nhập ở đây
            // Ví dụ, kiểm tra thông tin đăng nhập từ model User
            
            // Sau khi đăng nhập thành công
            // Chuyển hướng đến trang chào mừng
            header("Location: http://localhost/webproject/Views/Pages/welcome.php");
            exit();
        }
        
        // Hiển thị view đăng nhập
        require_once('http://localhost/webproject/Views/Pages/login.php');
    }
    
    public function register() {
        // Xử lý đăng ký
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Xử lý logic đăng ký ở đây
            // Ví dụ, lưu thông tin đăng ký vào cơ sở dữ liệu
            
            // Sau khi đăng ký thành công
            // Chuyển hướng đến trang chào mừng
            header("Location: http://localhost/webproject/Views/Pages/welcome.php");
            exit();
        }
        
        // Hiển thị view đăng ký
        require_once('http://localhost/webproject/Views/Pages/register.php');
    }
    
    public function logout() {
        // Xử lý đăng xuất
        // Xóa các biến session, hủy session
        
        // Sau khi đăng xuất thành công
        // Chuyển hướng về trang đăng nhập
        header("Location: http://localhost/webproject/Views/Pages/welcome.php");
        exit();
    }
}

?>
