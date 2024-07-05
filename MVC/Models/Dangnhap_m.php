<?php
    class Dangnhap_m extends connectDB{
        function checkTenDN($username){
            $sql="SELECT * FROM customers WHERE username = '$username'";
            $dl=mysqli_query($this->con,$sql);
            $kq=false;
            if(mysqli_num_rows($dl)>0){
                $kq=true;
            }
            return $kq;
        }
        function checkTaiKhoan($username,$password){
            $sql="SELECT * FROM customers WHERE username = '$username' AND password ='$password'";
            $dl=mysqli_query($this->con,$sql);
            $kq=false;
            if(mysqli_num_rows($dl)>0){
                $kq=true;
            }
            return $kq;
        }
        function dangKy($name,$username,$email,$password){
            $sql="INSERT INTO customers(customer_id, name, username, email, password) VALUE('customer_' || (SELECT MAX(customer_id) FROM customers) + 1,$name,$username,$email,$password)";
            return mysqli_query($this->con,$sql);
        }
    }
?>