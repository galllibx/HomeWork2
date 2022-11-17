<?php
session_start();

if(isset($_SESSION["username"]) && $_SESSION["id"]==session_id()){
    header("Location: login.php");
    die();
}

    isset($_POST['username']) ? $u = $_POST['username'] : $u = "";
    isset($_POST['password']) ? $p = $_POST['password'] : $p = "";
    $conn = new PDO("mysql:host=localhost;dbname=webboard;charset=utf8","root","");
    $sql = "SELECT * FROM user where login='$u' and password = sha1('$p') ";
    $result = $conn->query($sql);
    if($result->rowCount()==1){
        $data=$result->fetch(PDO::FETCH_ASSOC);
        $_SESSION["username"] = $data["login"];
        $_SESSION["role"] = $data["role"];
        $_SESSION["user_id"] = $data["id"];
        $_SESSION["id"] = session_id();
        header("Location: login.php");       
        die();
    }else{
        $_SESSION["error"] = 1;
        header("Location: login.php");       
        die();
    }
    $conn=null;

    ?>
        