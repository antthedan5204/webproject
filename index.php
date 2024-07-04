<?php
    session_start();
    include_once './MVC/bridge.php';
    $myapp=new app();


// Lấy URI từ request
$request_uri = $_SERVER['REQUEST_URI'];

// Xử lý yêu cầu
switch ($request_uri) {
    case '/login':
        require 'http://localhost/webproject/Controllers/AuthController.php';
        $controller = new AuthController();
        $controller->login();
        break;
    case '/register':
        require 'http://localhost/webproject/Controllers/AuthController.php';
        $controller = new AuthController();
        $controller->register();
        break;
    case '/logout':
        require 'http://localhost/webproject/Controllers/AuthController.php';
        $controller = new AuthController();
        $controller->logout();
        break;
    case '/welcome':
        require 'http://localhost/webproject/Views/welcome.php';
        break;
    default:
        // Nếu đường dẫn không hợp lệ, chuyển hướng về trang chủ hoặc xử lý theo nhu cầu của ứng dụng
        break;
}


?>