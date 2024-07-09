<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="http://localhost/webproject/Public/Css/styles.css">
    <link rel="stylesheet" href="http://localhost/webproject/Public/Css/nguoidung.css">

    <style>
        td{
            padding: 10px;
            margin-left: 200px;
        }
        .alignCenter{
            text-align: center;
        }
    </style>
</head>
<body>
    <?php
        if(isset($data['dulieu'])&&mysqli_num_rows($data['dulieu'])>0){
            while($row = mysqli_fetch_assoc($data['dulieu'])){
    ?>
    <table>
        <tr>
            <th colspan="3" class="alignCenter">THÔNG TIN KHÁCH HÀNG</th>
        </tr>
        <tr>
            <td class="alignCenter">Tài khoản: </td>
            <td><input type="text" value="<?php echo $row['username']?>" readonly></td>
        </tr>
        <tr>
            <td>Mật khẩu: </td>
            <td><input type="password" value="<?php echo $row['password']?>" readonly></td>
        </tr>
        <tr>
            <td>Tên: </td>
            <td><input type="text" value="<?php echo $row['name']?>" readonly></td>
        </tr>
        <tr>
            <td>Email: </td>
            <td><input type="text" value="<?php echo $row['email']?>" readonly></td>
        </tr>
        <tr>
            <td>Địa chỉ: </td>
            <td><input type="text" value="<?php echo $row['address']?>" readonly></td>
        </tr>
        <tr>
            </tr>
        </table>
        <div style="background-color: powderblue; height: 20px; width: 100px; padding: auto; margin-left: 100px"><a href="http://localhost/webproject/nguoidung/sua/"<?php echo $row['username']?>>Sửa thông tin</a></div>
    <?php
            }
        }else{
    ?>
            <h1 style="color: red; text-align: center;">Bạn chưa đăng nhập</h1>
    <?php
        }
    ?>
</body>
</html>