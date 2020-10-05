 <?php 
$conn= new mysqli('localhost', 'id699340_root', 'ammy9034','id699340_glamr'); 




 $sql = "select * from product where productType='BE'";
    
    if ($conn->connect_error) {
        die(json_encode(array("error"=>"Connection failed: " . $conn->connect_error)));
    } 
    
    $retval = $conn->query($sql);
    
   if ($retval->num_rows > 0) {
        $result=array();
    while($row = $retval->fetch_assoc()) {
        $result[]=$row;
    }
        echo json_encode(array("data"=>$result));
    }else{
        die(json_encode(array("error"=>"SQL Error.Search Failed.")));
    } 
 


?>

