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
            $sql="SET @max_customer_id = (SELECT MAX(CAST(SUBSTRING(customer_id, 10) AS UNSIGNED)) FROM customers);
                INSERT INTO customers(customer_id, `name`, username, email, password)
                VALUES('CONCAT('customer_', @max_customer_id + 1)', $name, $username, $email, $password);";
            return mysqli_query($this->con,$sql);
        }
    }
?>