<?php
    class Giohang extends controller{
        private$giohang;
        public function __construct(){
            $this->giohang=$this->model("Cart");
        }
        function Get_data(){
            $this->view('Masterlayout',[
                'page'=>'Giohang',
                'dulieu'=>$this->giohang->giohang()
            ]);
        }
    }
?>