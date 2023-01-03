<?php
$servername = "localhost";
$username = "root";
$password = "";

try{
    $conn = new PDO("mysql:host=$servername;dbname=test",$username,$password, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $link = mysqli_connect("localhost", "root", "", "test") or die($link);
    $data = mysqli_select_db($link,"test");
}catch (PDOException $e){
    echo "Kết nối thất bại: ".$e->getMessage();
}
?>  