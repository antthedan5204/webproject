<?php
    $username = isset($_SESSION['username']) ? $_SESSION['username'] : '';
    class Nguoidung_m extends connectDB{
        function hienThiThongTin($user){
            $sql="SELECT * FROM customers WHERE username = '$user'";
            return mysqli_query($this->con,$sql);
        }
        function updatedl($username, $password, $hoten, $email, $diachi){
            $sql="UPDATE customers SET name ='$hoten', password = '$password', email  = '$email', address = '$diachi' WHERE username = '$username'";
            return mysqli_query($this->con,$sql);
        }
    }
?>