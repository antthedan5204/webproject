<?php
    class Cart extends connectDB {
        public function giohang() {
            $sql="SELECT * FROM cartitems";
            return mysqli_query($this->con,$sql);
        }
        public function add_to_cart($ID) {
            $sql= "INSERT INTO cartitems (product_id) VALUES ('$ID)";
            return mysqli_query($this->con,$sql);
        }
        public function cartShow(){
            $sql= "SELECT * FROM ";
        }
    }
?>