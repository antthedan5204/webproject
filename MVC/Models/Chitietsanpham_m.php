<?php
    class Chitietsanpham_m extends connectDB{
        public function chiTietSanPham($ID){
            $sql="SELECT * FROM productdetails pd INNER JOIN products p ON pd.product_id = p.product_id WHERE p.product_id = '$ID'";
            return mysqli_query($this->con,$sql);
        }
    }
?>