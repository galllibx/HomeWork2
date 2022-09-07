<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1 align="center">Webboard GUBGIB</h1>
    <hr>
    <div align="center">
    
    <?php 
            $x = $_GET["id"];
            if(($x%2)==0) {
                echo "ต้องการกระทู้หมายเลข" . $x. "<br>";
                echo "เป็นกระทู้หมายเลขคู่";    
            }     
            else{
                echo "ต้องการกระทู้หมายเลข" . $x. "<br>";
                echo "เป็นกระทู้หมายเลขคี่";  
            }
    ?>
    </div>
    <br>
   
    <table style="border: 2px solid black; width: 40%;" align="center">
        <tr><td style="background-color: #6CD2FE;" colspan="2">แสดงความคิดเห็น</td></tr>
        <tr><td><textarea name="" id="" cols="100" rows="10"></textarea></td></tr>
        <tr align='center'><td><input type="submit"value="message"></td></tr>

    </table>
    <div align="center"><a href="index.php">กลับไปหน้าหลัก</a></div>
    
</body>
</html>