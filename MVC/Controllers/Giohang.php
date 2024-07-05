<?php
    class Giohang extends controller{
        private$giohang;
        public function __construct(){
            $this->giohang=$this->model("Cart");
        }
        function Get_data(){
            $username = isset($_SESSION['username']) ? $_SESSION['username'] : '';
            $this->view('Masterlayout',[
                'page'=>'Giohang',
                'dulieu'=>$this->giohang->giohang(),
                'username'=>$username
            ]);
        }
    }
?>