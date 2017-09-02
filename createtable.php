<?php
$servername="localhost";$username="root";$password="WxR...0.0";$DBname="enrollment";
$connect=new mysqli($servername,$username,$password,$DBname);
if($connect->connect_error){
    die("数据库连接失败".$connect->connect_error);
}

$sql = "CREATE TABLE Persons 
(
personID int NOT NULL AUTO_INCREMENT, 
PRIMARY KEY(personID),
_name varchar(15),
_sex varchar(15),
_from varchar(15),
_academy varchar(15),
_campus varchar(15),
_phone_number varchar(15),
_qq varchar(15),
_sdu_id varchar(15),
_group varchar(15),
_department varchar(15),
_reason varchar(1000),
_organize varchar(1500),
_introduction varchar(1500)
)";

if($connect->query($sql)===true){
    echo"表格创建成功";
}else{echo"创建数据表错误".$connect->error;}
$connect->close();
?>