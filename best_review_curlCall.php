<?php




$link1 = "http://amitkamboj.com/best_reviewed.php";
$curl_handle1 = curl_init();
curl_setopt($curl_handle1, CURLOPT_URL,$link1);
curl_setopt($curl_handle1, CURLOPT_HEADER, 0);
curl_setopt($curl_handle1,CURLOPT_RETURNTRANSFER,true);
$result1 = curl_exec($curl_handle1);
curl_close($curl_handle1);
$res1=rtrim($result1, "\0");
$data1 =  json_decode($res1,true)[0];

echo "<pre>";
print_r($result1);

echo "</pre>";

$link2 = "http://sahanainnanje.com/best_reviewed.php";
$curl_handle2 = curl_init();
curl_setopt($curl_handle2, CURLOPT_URL,$link2);
curl_setopt($curl_handle2, CURLOPT_HEADER, 0);
curl_setopt($curl_handle2,CURLOPT_RETURNTRANSFER,true);
$result2 = curl_exec($curl_handle2);
curl_close($curl_handle2);
$res2=rtrim($result2, "\0");
$data2 =  json_decode($res2,true)[0];

echo "<pre>";
print_r($result2);
echo "</pre>";

$data1=array_merge($data1,$data2);

echo "<pre>";
print_r($data1);

echo "</pre>";

usort($data1, function($a, $b) { //Sort the array using a user defined function
    return $a["productRating"] > $b["productRating"] ? -1 : 1; //Compare the scores
}); 

echo "<pre>";
print_r(array_slice($data1,0,5));

echo "</pre>";

?>