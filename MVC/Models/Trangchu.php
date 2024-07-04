<?php
    class Trangchu extends connectDB{
        public function hienThiTatCa(){
            $sql="SELECT * FROM products";
            return mysqli_query($this->con,$sql);
        }
        public function Samsung(){
            $sql= "SELECT * FROM products WHERE company LIKE '%Samsung%'";
            return mysqli_query($this->con,$sql);
        }
        public function Apple(){
            $sql= "SELECT * FROM products WHERE company LIKE '%Apple%'";
            return mysqli_query($this->con,$sql);
        }
        public function Huawei(){
            $sql= "SELECT * FROM products WHERE company LIKE '%Huawei%'";
            return mysqli_query($this->con,$sql);
        }
        public function Oppo(){
            $sql= "SELECT * FROM products WHERE company LIKE '%Oppo%'";
            return mysqli_query($this->con,$sql);
        }
        public function Mobi(){
            $sql= "SELECT * FROM products WHERE company LIKE '%Mobi%'";
            return mysqli_query($this->con,$sql);
        }
        public function duoi2(){
            $sql= "SELECT * FROM products WHERE price < 2000000.00";
            return mysqli_query($this->con,$sql);
        }
        public function tu2den4(){
            $sql= "SELECT * FROM products WHERE price BETWEEN 2000000.00 AND 4000000.00";
            return mysqli_query($this->con,$sql);
        }
        public function tu4den7(){
            $sql= "SELECT * FROM products WHERE price BETWEEN 4000000.00 AND 7000000.00";
            return mysqli_query($this->con,$sql);
        }
        public function tu7den13(){
            $sql= "SELECT * FROM products WHERE price BETWEEN 7000000.00 AND 13000000.00";
            return mysqli_query($this->con,$sql);
        }
        public function tren13(){
            $sql= "SELECT * FROM products WHERE price > 13000000.00";
            return mysqli_query($this->con,$sql);
        }
        public function timKiem($tensp){
            $sql="SELECT * FROM products WHERE name LIKE '%$tensp%'";
            return mysqli_query( $this->con,$sql);
        }
        public function priceAsc(){
            $sql= "SELECT * FROM products ORDER BY price ASC";
            return mysqli_query($this->con,$sql);
        }
        public function priceDesc(){
            $sql= "SELECT * FROM products ORDER BY price DESC";
            return mysqli_query($this->con,$sql);
        }
        public function nameAsc(){
            $sql= "SELECT * FROM products ORDER BY name ASC";
            return mysqli_query($this->con,$sql);
        }
        public function nameDesc(){
            $sql= "SELECT * FROM products ORDER BY name DESC";
            return mysqli_query($this->con,$sql);
        }

    }
?>