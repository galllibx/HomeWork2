<?php
    session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WEBBOARD GUBGIB</title>
</head>
<body>
    <h1 style="text-align: center;">Webboard GUBGIB</h1>
    <hr>
    <td>ผู้ใช้:admin</td> <br>
    <table >
        <tr>
        <td>
            หมวดหมู่:
        <select name="category">
        <option value="all">--ทั้งหมด--</option>
        <option value="general">เรื่องทั่วไป</option>
        <option value="study">เรื่องเรียน</option>
        </select>
        </td>
        </tr>
        <tr>
        <td>หัวข้อ: <input type="text" size="40%"></td>
        </tr>
        <tr>
        <td>เนื้อหา: <textarea name="message" rows="10%" cols="40%"></textarea></td>
        </tr>
        <tr>
            <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="submit" value="บันทึกข้อความ"></td>
        </tr>
    </table>
</body>
</html>