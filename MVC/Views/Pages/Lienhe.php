<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liên hệ</title>

    <link rel="stylesheet" href="http://localhost/webproject/Public/Css/styles.css">
    <link rel="stylesheet" href="http://localhost/webproject/Public/Css/lienhe.css">

</head>
<body>
    <div class="body-lienhe">
        <div class="lienhe-header">Liên hệ</div>
        <div class="lienhe-info">
            <div class="info-left">
                <p>
                    <h2 style="color: gray"> GROUP 10th WEB </h2><br />
                    <b>Địa chỉ:</b> 63A, Triều Khúc, Thanh Xuân, Hà Nội<br /><br />
                    <b>Telephone:</b> 090 916 5598<br /><br />
                    <b>Hotline:</b> 097777777 - CSKH: 028 9996 777<br /><br />
                    <b>Website:</b> <a href="https://github.com/qnc910/webproject.git">Github</a> <br /><br />
                    <b>E-mail:</b> tavanmanhduc2004@gmail.com<br /><br />
                    <b>Mã số thuế:</b> 01 02 03 04 05<br /><br />
                    <b>Tài khoản ngân hàng :</b><br /><br />
                    <b>Số TK:</b> 4521079098 <br /><br />
                    <b>Tại Ngân hàng:</b> Ngân hàng đầu tư và phát triển chi nhánh Hà Tây<br /><br /><br /><br />
                    <b>Quý khách có thể gửi liên hệ tới chúng tôi bằng cách hoàn tất biểu mẫu dưới đây. Chúng tôi
                        sẽ trả lời thư của quý khách, xin vui lòng khai báo đầy đủ. Hân hạnh phục vụ và chân thành
                        cảm ơn sự quan tâm, đóng góp ý kiến đến Smartphone Store.</b>
                </p>
            </div>
        </div>
        <div class="lienhe-info">

            <div class="guithongtin">
                <p style="font-size: 22px; color: gray">Gửi thông tin liên lạc cho chúng tôi: </p>
                <hr />
                <form name="formlh" onsubmit="return nguoidung()">
                    <table cellspacing="10px">
                        <tr>
                            <td>Họ và tên</td>
                            <td><input type="text" name="ht" size="40" maxlength="40" placeholder="Họ tên"
                                    autocomplete="off" required></td>
                        </tr>
                        <tr>
                            <td>Điện thoại liên hệ</td>
                            <td><input type="text" name="sdt" size="40" maxlength="11" minlength="10" placeholder="Điện thoại"
                                    required></td>
                        </tr>
                        <tr>
                            <td>Địa chỉ Email</td>
                            <td><input type="email" name="em" size="40" placeholder="Email" autocomplete="off"
                                    required></td>
                        </tr>
                        <tr>
                            <td>Tiêu đề</td>
                            <td><input type="text" name="tde" size="40" maxlength="100" placeholder="Tiêu đề"
                                    required>
                        </tr>
                        <tr>
                            <td>Nội dung</td>
                            <td><textarea name="nd" rows="5" cols="44" maxlength="500" wrap="physical"
                                    placeholder="Nội dung liên hệ" required></textarea></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><button type="submit">Gửi thông tin liên hệ</button></td>
                        </tr>
                    </table>
                </form>
            </div>
            <div class="thongtinnhom">
                <p style="font-size: 22px; color: gray">Thông tin thành viên nhóm: </p>
                <hr />
                <table>
                    <tr>
                        <th>Họ tên</th>
                        <th>MSSV</th>
                        <th>Giới tính</th>
                        <th>Lớp</th>
                        <th>Tỉ lệ công việc</th>
                    </tr>
                    <script>
                        var thongtin = [
                            ["Tạ Văn Mạnh Đức", "73DCTT23218", "Nam", "73DCTT23", "20%"],
                            ["Mai Thế Dân", "73DCTT23218", "Nam", "73DCTT23", "20%"],
                            ["Nguyễn Trà My", "73DCTT23218", "Nữ", "73DCTT23", "20%"],
                            ["Nguyễn Văn Sâm", "73DCTT23218", "Nam", "73DCTT23", "20%"],
                            ["Ngô Thị Thanh Vân", "73DCTT23218", "Nữ", "73DCTT23", "20%"]
                        ]
                        for (var i = 0; i < thongtin.length; i++) {
                            document.write(
                                `
                                <tr>
                                    <td>` +
                                thongtin[i][0] + `</td>
                                    <td>` +
                                thongtin[i][1] + `</td>
                                    <td>` +
                                thongtin[i][2] + `</td>
                                    <td>` +
                                thongtin[i][3] + `</td>
                                    <td>` +
                                thongtin[i][4] +
                                `</td>
                                </tr>
                            `
                            )
                        }
                    </script>
                </table>
            </div>

        </div>
    </div>
</body>
</html>