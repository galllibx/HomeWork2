<?php
    session_start();
    if(isset($_SESSION['id'])){
        header("location:index.php");
        die();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <h1 style="text-align: center;">Webboard GUBGIB</h1>
    <hr>
    <table style="border: 2px solid black; width: 40%;" align="center">
        <tr><td style="background-color: #6CD2FE;" colspan="2">เข้าสู่ระบบ</td></tr>
        <tr><td>ชื่อบัญชี:</td><td><input type="text"name="login" size="32"></td></tr>
        <tr><td>รหัสผ่าน:</td><td><input type="password"name="pwd" size="32"></td></tr>
        <tr><td colspan="2" align="center"><input type="submit"value="login"></td></tr>
        <tr><td>ชื่อ-นามสกุล:</td><td><input type="text"name="login" size="32"></td></tr>
        <tr><td>เพศ : </td><td><input type="radio"name="gender" >ชาย <br>
            <input type="radio"name="gender" >หญิง <br>
            <input type="radio"name="gender" >อื่นๆ <br>
            <tr><td>อีเมล:</td><td><input type="text"name="login" size="32"></td></tr>
            <tr><td colspan="2" align="center"><input type="submit"value="สมัครสมาชิก"></td></tr>
        </td></tr>
    </table>
    <br>
    <div align="center"> <a href="index.php">กลับไปสู่หน้าหลัก</a></div>
</body>
</html>