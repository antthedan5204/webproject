<?php
    class Dangnhap extends controller{
        private $dangnhap;
        function __construct(){
            $this->dangnhap=$this->model('Dangnhap_m');
        }
        function Get_data(){
            $this->view('Login',[
                'page'=>'Dangnhap'
            ]);
        }
        function login(){
            if(isset($_POST['btnDangnhap'])){
                $tendn=$_POST['userlogin'];
                $matkhau=$_POST['password'];
                $kq=$this->dangnhap->checkTenDN($tendn);
                if($kq){
                    $kq1=$this->dangnhap->checkTaiKhoan($tendn,$matkhau);
                    if($kq1){
                        echo '<Script>alert("Đăng nhập thành công!")</Script>';
                        echo '<Script>isLoggedIn=true;</Script>';
                        // Lưu thông tin đăng nhập của người dùng vào session
                        $_SESSION['username'] = $tendn;
                        echo '<script>window.location.href = "http://localhost/webproject/home";</script>';
                        exit();
                    }else{
                        echo '<Script>alert("Tên đăng nhập hoặc mật khẩu không chính xác!")</Script>';
                    }
                }else{
                    echo '<Script>alert("Tài khoản chưa được đăng ký!")</Script>';
                }
                $this->view('Login',[
                    'page'=>'Dangnhap',
                    'tendn'=>$tendn,
                    'matkhau'=>$matkhau
                ]);
            }
        }
        function register(){
            if(isset($_POST['btnDangky'])){
                $hoten=$_POST['username'];
                $tendn=$_POST['userlogin'];
                $email=$_POST['email'];
                $matkhau=$_POST['password'];
                $kq=$this->dangnhap->checkTenDN($tendn);
                if($kq){
                    echo '<Script>alert("Tên đăng nhập đã được sử dụng!")</Script>';
                }else{
                    $kq1=$this->dangnhap->dangKy($hoten,$tendn,$email,$matkhau);
                    if($kq1){
                        echo '<Script>alert("Đăng ký thành công!")</Script>';
                        echo '<script>window.location.href = "http://localhost/webproject/dangnhap";</script>';
                    }else{
                        echo '<Script>alert("Đăng ký thất bại!")</Script>';
                    }
                }
                $this->view('Login',[
                    'page'=>'Dangnhap',
                    'hoten'=>$hoten,
                    'tendangnhap'=>$tendn,
                    'email'=>$email,
                    'mat_khau'=>$matkhau
                ]);
            }
        }
        function isLoggedIn(){
            $log = isset($_SESSION['username']) ? true : false;
            return $log;
        }
        function checkDangNhap(){
            if (isset($_SESSION['username'])) {
                // Nếu đăng nhập, trả về thông tin người dùng
                echo json_encode([
                    'loggedIn' => true,
                    'userName' => $_SESSION['username']
                ]);
                exit;
            }

            // Nếu chưa đăng nhập, trả về trạng thái chưa đăng nhập
            echo json_encode([
                'loggedIn' => false
            ]);
        }
    }
?>