<?php
    class Nguoidung extends controller{
        private $user;
        public function __construct(){
            $this->user=$this->model('Nguoidung_m');
        }
        function Get_data(){
            $username = isset($_SESSION['username']) ? $_SESSION['username'] : '';
            $dl=$this->user->hienThiThongTin($username);
            $this->view('Masterlayout',[
                'page'=>'Nguoidung',
                'dulieu'=>$dl,
                'username'=>$username
            ]);
        }
        function thongTin($user){
            $username = isset($_SESSION['username']) ? $_SESSION['username'] : '';
            $user = $username;
            $dl=$this->user->hienThiThongTin($user);
            $this->view('Masterlayout',[
                'page'=> 'Nguoidung',
                'dulieu'=>$dl,
                'username'=>$username
            ]);
        }
        function sua($username){
            $username = isset($_SESSION['username']) ? $_SESSION['username'] : '';
            $this->view('Masterlayout',[
                'page'=>'Nguoidung_sua',
                'dulieu'=>$this->user->hienThiThongTin($username)
            ]);
        }
        function suadl(){
            if(isset($_POST['btnLuu'])){
                $username=$_POST['txtUsername'];
                $password=$_POST['txtPassword'];
                $hoten=$_POST['txHoten'];
                $email=$_POST['txtEmail'];
                $diachi=$_POST['txtDiachi'];
                $kq=$this->user->updatedl($username,$password,$hoten,$email,$diachi);
                if($kq){
                    echo '<Script>alert("Sửa thành công!")</Script>';
                }else{
                    echo '<Script>alert("Sửa thất bại!")</Script>';
                }
                echo '<script>window.location.href = "http://localhost/webproject/nguoidung";</script>';
            }
        }
    }
?>