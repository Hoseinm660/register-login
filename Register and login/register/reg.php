<?php
foreach($_POST as $k => $v)
    $$k=$v;

//اتصال به دیتا بیس
$dbc = new mysqli('localhost','root','');
$dbc -> select_db('test');
//کویری
$sql= "INSERT INTO user(title,email,text)
VALUES('{$title}','{$email}','{$textbody}') ";
//اجرای کویری
$result = $dbc -> query($sql);
//بستن کویری
$dbc-> close();

?>