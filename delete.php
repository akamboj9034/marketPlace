<?php

$id=$_GET['id'];
mysql_connect("localhost","root","");
mysql_select_db("parlour");
$sql="delete from cart where id=$id";
mysql_query($sql);
header('location:booknow.php');




?>