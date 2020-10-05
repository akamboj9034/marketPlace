<?php



$servername = "localhost";
$username = "id699340_root";
$password = "ammy9034";
$dbname = "id699340_glamr";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


//$sql = "select * from reviews order by productRating desc limit 5";
  $sql="select p.productId,p.productName,p.productImagePath,p.productType,p.productPrice,review.pr from product p inner join (select distinct(productId) as pid,productRating as pr from reviews order by productRating desc limit 5) as review on review.pid = p.productId";  
//$sql = "select p.productName AS pname,p.productImagePath as ppath,p.productId  as pid from product p INNER JOIN (select DISTINCT(r.productId) AS rid,r.productRating AS rpr FROM reviews r ORDER BY productRating desc limit 5) S ON S.rid = p.pid";


    
if ($conn->connect_error) {
    die(json_encode(array("error"=>"Connection failed: " . $conn->connect_error)));
} 

$retval = $conn->query($sql);

if ($retval->num_rows > 0) {
    $result=array();
while($row = $retval->fetch_assoc()) {
    $result[]=$row;
}
  echo json_encode(array($result));





}else{
    die(json_encode(array("error"=>"SQL Error.Search Failed.")));
} 





?>