<?php
$servername="localhost";$username="root";$password="WxR...0.0";
$connect=new mysqli($servername,$username,$password);
if($connect->connect_error){
    die("连接失败：".$connect->connect_error);
}
$sql ="CREATE DATABASE enrollment";
if($connect->query($sql)===true){
    echo"数据库创建成功";
}else{
    echo"数据库创建失败";
}
$connect->close();

?>