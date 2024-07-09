<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="http://localhost/webproject/Public/Css/bootstrap.min.css">
    <script src="http://localhost/webproject/Public/Js/popper.min.js"></script>
    <script src="http://localhost/webproject/Public/Js/jquery-3.3.1.slim.min.js"></script>
    <script src="http://localhost/webproject/Public/Js/bootstrap.min.js"></script>


</head>
<body>
<form method="post" action="http://localhost/webproject/nguoidung/suadl">
        <div class="form-group">
            <?php
            if(isset($data['dulieu'])&&mysqli_num_rows(($data['dulieu']))>0){
                while($row = mysqli_fetch_array($data['dulieu'])){
            ?>

            <label for="tk">Tài khoản</label>
            <input type="text" id = "tk" class="form-control dd1" placeholder="Tai khoan" name="txtUsername" value="<?php echo $row['username'] ?>" disabled>
            <label for="mk">Mật khẩu</label>
            <input type="text" id="mk" class="form-control" placeholder="Mat khau" name="txtPassword" value="<?php echo $row['password'] ?>">
            <label for="ten">Tên</label>
            <input type="text" id="ten" class="form-control" placeholder="Ten" name="txHoten" value="<?php echo $row['name'] ?>">
            <label for="email">Email</label>
            <input type="text" id="email" class="form-control" placeholder="Email" name="txtEmail" value="<?php echo $row['email'] ?>">
            <label for="diachi">Địa chỉ</label>
            <input type="text" id="diachi" class="form-control" placeholder="Dia chi" name="txtDiachi" value="<?php echo $row['address'] ?>">

            <?php        
                }
            }
            ?>
            <button type="submit" class="btn btn-primary" name="btnLuu">Submit</button>
        </div>
    </form>
</body>
</html>