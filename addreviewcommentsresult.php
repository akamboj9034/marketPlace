 <?php 
$servername = "localhost";
$username = "id699340_root";
$password = "ammy9034";
$dbname = "id699340_glamr";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

$productId= $_GET["productId"];
$userid = $_GET["userid"];
$reviewTitle = $_GET["reviewTitle"];
$reviewDesc= $_GET["reviewDesc"];
$productRating = $_GET["productRating"];

 $date = date('Y-m-d H:i:s');


 $sql = "INSERT INTO reviews(userid,productId,reviewTitle,reviewDesc,productRating,createddate) VALUES ('$userid','$productId','$reviewTitle','$reviewDesc','$productRating','$date')";

echo "$sql";
    
    if ($conn->connect_error) {
        die(json_encode(array("error"=>"Connection failed: " . $conn->connect_error)));
    } 
    
    $conn->query($sql);
    


?>




