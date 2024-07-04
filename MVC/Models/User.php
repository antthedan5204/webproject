<?php

class User {
    
    public static function authenticate($username, $password) {
        // Xử lý logic xác thực đăng nhập ở đây
        // Ví dụ, kiểm tra từ cơ sở dữ liệu
        // Trả về true nếu xác thực thành công, ngược lại false
        return ($username == 'admin' && $password == 'password');
    }
    
    public static function registerUser($username, $password) {
        // Xử lý logic đăng ký ở đây
        // Ví dụ, lưu thông tin người dùng vào cơ sở dữ liệu
        return true; // Trả về true nếu đăng ký thành công, ngược lại false
    }
    
}

?>
