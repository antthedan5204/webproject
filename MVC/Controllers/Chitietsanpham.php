<?php
    class Chitietsanpham extends controller{
        private $ctsp;
        private $cart;
        public function __construct(){
            $this->ctsp=$this->model('Chitietsanpham_m');
            $this->cart=$this->model('Cart');
        }
        function Get_data(){
            $this->view('Masterlayout',[
                'page'=>'Chitietsanpham'
            ]);
        }
        function hienThiChiTiet($ID){
            $dl=$this->ctsp->chiTietSanPham($ID);
            $this->view('Masterlayout',[
                'page'=> 'Chitietsanpham',
                'dulieu'=>$dl
            ]);
        }
        public function addToCart($ID){
            $dl=$this->cart->add_to_cart($ID);
            $this->view('Masterlayout',[
                'page'=> 'Chitietsanpham',
                'dulieu'=>$dl
            ]);
        }
    }
?>