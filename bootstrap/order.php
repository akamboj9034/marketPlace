<?php

session_start();
mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db("parlour") or die(mysql_error());






$query="insert into cart (email,type,service) values
('$email','$type','$pid')";

$result=mysql_query($query);

if($result==1){
header("location:services.php?type=$type&pid=$pid");}
?>