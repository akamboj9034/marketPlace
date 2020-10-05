<?php
// Start the session

session_start();


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

?>





<html>

<body>



<h3>All users</h3>

<?php
    $sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);
echo "<table class='table' border = '1' cellpadding = '3' cellspacing = '2'  style = 'background-color: #ADD8E6'>";
echo "<tr>";
echo "<th>First name</th>";
echo "<th>Last name</th>";
echo "<th>Email</th>";
echo "<th>Address</th>";
echo "<th>Home phone</th>";
echo "<th>Cell phone</th>";

echo "</tr>";

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr class='white'>";
        echo "<td>" . $row["firstname"] . "</td>";
        echo "<td>" . $row["lastname"] . "</td>";
        echo "<td>" . $row["email"] . "</td>";
        echo "<td>" . $row["address"] . "</td>";
        echo "<td>" . $row["home_phone"] . "</td>";
        echo "<td>" . $row["cell_phone"] . "</td>";
        echo "</tr>";



    }

} else {
    echo "0 results";
}

?>

      
<?php
$curl = curl_init();
$url = "http://www.sahanainnanje.com/curlusers.php";
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$result = curl_exec($curl);

echo $result;
?>


		

	</body>
</html>