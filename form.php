<?php
session_start();
if (isset($_POST['email'])){

    $contact=$_POST['contact'];$address=$_POST['address'];$city=$_POST['city'];$date=$_POST['date'];
mysql_connect("localhost","root","");
mysql_select_db("parlour");
$sql="insert into booknow(contact,address,city,date) values('$contact','$address','$city','$date')";
$result=mysql_query($sql);
session_start();
$email=$_SESSION['email'];



if (isset($_POST['contact']) && isset($_POST['email']) &&  isset($_POST['address']) &&  isset($_POST['city']))


{
     $contact_name = $_POST['contact_name'];
      $contact_email = $_POST['contact_email'];
      $contact_number = $_POST['contact_number'];
      $home_address = $_POST['home_address'];


if(!empty($contact_name) && !empty($contact_email) && !empty($contact_number) && !empty($home_address))
{
 	$to = 'GoGlamrs.web@gmail.com';
	$subject = 'A new form submitted';
      
        
	$body = $contact_name ."\n". $contact_email ."\n". $contact_number ."\n".  $home_address ;
          $body .= '
$connection=mysql_connect("localhost","root","");

mysql_select_db("parlour");


$query="select *from cart  ";

$result=mysql_query($query);

while($row=mysql_fetch_array($result))
{

extract($row);
$price=$row[3];

echo "<tr>";
echo "<td>";echo $row[0]; echo "</td>";
echo "<td>";echo $row[2]; echo "</td>";echo "<td>";echo $row[4]; echo "</td>";



echo "</tr>";

}';
	$headers ='From :' .$contact_email;

	if(@mail($to , $subject , $body , $headers))
{

        $msg=" Thanks for booking .Our team will get back to you Shortly.. ";
}

	else
{

        $msg="Sorry, Please try again";
}
}
	

}
header('location:services.php');
}else{
header('location:login.php');}
?>


