<?php
    class Home extends controller{
        private $dssp;
        public function __construct(){
            $this->dssp=$this->model('Trangchu');
        }
        public function Get_data(){
            $product = $this->dssp->hienThiTatCa();
            $username = isset($_SESSION['username']) ? $_SESSION['username'] : '';
            $this->view('Masterlayout',[
                'page'=>'Home',
                'dulieu'=> $product,
                'username'=>$username
            ]);
        }
        public function chiTiet($ID){
            $product = $this->dssp->chiTietSanPham($ID);
            $this->view('Masterlayout', [
            'page' => 'Chitietsanpham',
            'product' => $product
        ]);
        }
        public function Samsung(){
            $this->view('Masterlayout',[
                'page'=>'Home',
                'dulieu'=> $this->dssp->Samsung()
            ]);
        }
        public function Apple(){
            $this->view('Masterlayout',[
                'page'=>'Home',
                'dulieu'=> $this->dssp->Apple()
            ]);
        }
        public function Huawei(){
            $this->view('Masterlayout',[
                'page'=>'Home',
                'dulieu'=> $this->dssp->Huawei()
            ]);
        }
        public function Oppo(){
            $this->view('Masterlayout',[
                'page'=>'Home',
                'dulieu'=> $this->dssp->Oppo()
            ]);
        }
        public function Mobi(){
            $this->view('Masterlayout',[
                'page'=>'Home',
                'dulieu'=> $this->dssp->Mobi()
            ]);
        }
        public function duoi2trieu(){
            $product = $this->dssp->duoi2();
            $this->view('Masterlayout', [
            'page' => 'Home',
            'dulieu' => $product
        ]);
        }
        public function tu2den4trieu(){
            $product = $this->dssp->tu2den4();
            $this->view('Masterlayout', [
            'page' => 'Home',
            'dulieu' => $product
        ]);
        }
        public function tu4den7trieu(){
            $product = $this->dssp->tu4den7();
            $this->view('Masterlayout', [
            'page' => 'Home',
            'dulieu' => $product
        ]);
        }
        public function tu7den13trieu(){
            $product = $this->dssp->tu7den13();
            $this->view('Masterlayout', [
            'page' => 'Home',
            'dulieu' => $product
        ]);
        }
        public function tren13trieu(){
            $product = $this->dssp->tren13();
            $this->view('Masterlayout', [
            'page' => 'Home',
            'dulieu' => $product
        ]);
        }
        public function priceAsc(){
            $product = $this->dssp->priceAsc();
            $this->view('Masterlayout', [
            'page' => 'Home',
            'dulieu' => $product
        ]);
        }
        public function priceDesc(){
            $product = $this->dssp->priceDesc();
            $this->view('Masterlayout', [
            'page' => 'Home',
            'dulieu' => $product
        ]);
        }
        public function nameAsc(){
            $product = $this->dssp->nameAsc();
            $this->view('Masterlayout', [
            'page' => 'Home',
            'dulieu' => $product
        ]);
        }
        public function nameDesc(){
            $product = $this->dssp->nameDesc();
            $this->view('Masterlayout', [
            'page' => 'Home',
            'dulieu' => $product
        ]);
        }
        public function timkiem(){
            if(isset($_POST['btnTimkiem'])){
                $tensp = $_POST['txtTimkiem'];
                $dl=$this->dssp->timkiem($tensp);
                $this->view('Masterlayout', [
                    'page' => 'Home',
                    'dulieu' => $dl,
                    'tensp'=> $tensp
                ]);
            }
        }
    }
?>