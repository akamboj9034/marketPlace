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



<?php
if(isset($_SESSION['uinfo']))
{
	$un=$_SESSION['uinfo'];
}
else
{
	echo "<script>window.location='login.php';</script>";
}
?>


<html>
	<head>
		<title>About - goGlamrs</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js" type="text/javascript"></script>
		<script>
			$(document).ready(function(){
					$(window).scroll(function(){
						var y = $(this).scrollTop();
						var windowsize = $(window).width();
						if((y > 50)&&(windowsize>1200)){
							$("#divTopRow").css("padding","0px");
							$("#divTopRow").css("position","fixed");
							$("#divTopRow").css("top","0");
							$("#divTopRow").css("width","100%");
							$("#divTopleftStrip").css("padding","0px");
							$("#imgTopLogoLong").hide();
							$("#imgTopLogoShort").show();
						}
						else if((y > 50)&&(windowsize<1200)){
							$("#divTopRow").css("padding","10px");
							$("#divTopRow").css("position","fixed");
							$("#divTopRow").css("top","0");
							$("#divTopRow").css("width","100%");
							$("#imgTopLogoLong").hide();
							$("#imgTopLogoShort").show();
							$("#imgTopMenuButton").css("padding","10px");
						}
						else{
							$("#divTopRow").css("padding-top","1%");
							$("#divTopRow").css("padding-left","0");
							$("#divTopRow").css("padding-right","0");
							$("#divTopRow").css("padding-bottom","1%");
							$("#divTopRow").css("position","absolute");
							$("#divTopleftStrip").css("padding-left","10px");
							$("#divTopleftStrip").css("padding-top","1%");
							$("#imgTopLogoLong").show();
							$("#imgTopLogoShort").hide();
							$("#imgTopMenuButton").css("padding","20px");
						}
					});
					$(window).resize(function() {
						var windowsize = $(window).width();
						if (windowsize < 1150) {
							$("#divTopMenuButton").show();
							$("#divTopleftStrip").hide();
						}
						else{
							$("#divTopleftStrip").show();
							$("#divTopMenuButton").hide();
						}
						if (windowsize < 800){
							$("#divCopyRightlong").hide();
							$("#divCopyRightShort").show();
						}
						else{
							$("#divCopyRightlong").show();
							$("#divCopyRightShort").hide();
						}
						setTopDivAndImage();
					});
					$(window).load(function() {
						$(this).resize();
					});
					var a=-1;
					function setTopDivAndImage(){
						var windowsize = $(window).width();
						var h=$("#divTopRow").height();
						var p=$("#divTopRow").css("padding-top").substring(0,2);
						$("#topwrapper").css("height",h+(2*parseInt(p)));
						var a=$("#liHowItWorks1").height();
						var b=$("#divHeadingHowItWorks").height();
						if (windowsize < 1050) {
							$("#divHowItWorks").css("height",(2*parseInt(a)+1.5*parseInt(b)));
						}
						else if (windowsize < 800){
							$("#divHowItWorks").css("height",(3*parseInt(a)+1.5*parseInt(b)));
						}
						else if (windowsize < 530){
							$("#divHowItWorks").css("height",(4*parseInt(a)+1.5*parseInt(b)));
						}
						else{
							$("#divHowItWorks").css("height",(parseInt(a)+1.5*parseInt(b)));
						}
					}
					$("#imgTopMenuButton").on({
						mouseenter: function(){
							$(this).css("opacity","1");
						},
						mouseleave: function(){
							$(this).css("opacity",".7");
						}
					});
					$(".liTopRighttHeaderItem").on({
						mouseenter: function(){
							$(this).css("opacity","1");
						},
						mouseleave: function(){
							$(this).css("opacity",".8");
						}
					});
					$(".liTopLeftPannelElements a").on({
						mouseenter: function(){
							$(this).css("color","rgb(204, 0, 0)");
						},
						mouseleave: function(){
							$(this).css("color","rgb(0, 0, 0)");
						}
					});
					$("#aBookNow").on({
						mouseenter: function(){
							$(this).css("color","rgb(204, 0, 0)");
							$(this).css("background-color","rgb(250, 250, 250)");
						},
						mouseleave: function(){
							$(this).css("color","rgb(255,255,255)");
							$(this).css("background-color","rgb(204, 0, 0)");
						}
					});
					$("#divTopMenuButton").on({
						mouseleave: function(){
							$(".liTopRighttHeaderItem").hide();
						}
					});
					$("#imgTopMenuButton").click(function(){
						$(".liTopRighttHeaderItem").toggle();
					});
					$("#liGoogle").on({
						mouseenter: function(){
							//$(this).css("background-size","225px 87.5px");
							$(this).css("background-position","-8px -2px");
						},
						mouseleave: function(){
							//$(this).css("background-size","300px 116.67px");
							$(this).css("background-position","-8px 35px");
						}
					});
					$("#liInsta").on({
						mouseenter: function(){
							//$(this).css("background-size","225px 87.5px");
							$(this).css("background-position","-125px -2px");
						},
						mouseleave: function(){
							//$(this).css("background-size","300px 116.67px");
							$(this).css("background-position","-125px 35px");
						}
					});
					$("#liFacebook").on({
						mouseenter: function(){
							//$(this).css("background-size","225px 87.5px");
							$(this).css("background-position","-65px -2px");
						},
						mouseleave: function(){
							//$(this).css("background-size","300px 116.67px");
							$(this).css("background-position","-65px 35px");
						}
					});
					$("#liTwitter").on({
						mouseenter: function(){
							//$(this).css("background-size","225px 87.5px");
							$(this).css("background-position","-175px -2px");
						},
						mouseleave: function(){
							//$(this).css("background-size","300px 116.67px");
							$(this).css("background-position","-175px 35px");
						}
					});
			});
		</script>
		<style>
			@font-face {font-family: RalewayMedium;src: url('raleway/Raleway-Medium.ttf');}
			@font-face {font-family: RalewayThin;src: url('raleway/Raleway-Thin.ttf');}
			@font-face {font-family: Raleway;src: url('raleway/Raleway-Regular.ttf');}
			#divTopRow{background-color:rgb(255,255,255);padding-top:1%;padding-left:0%;padding-bottom:1%;padding-right:0%;width:100%;display:inline;position:absolute;z-index:5;}
			#divTopleftStrip{float:right;margin:0;z-index:1;padding-left:10px;padding-top:1%;display:inline;}
			#ulTopLeftPannel{list-style-type: none;margin: 0;padding:0;}
			.liTopLeftPannelElements{float: left;z-index:1;padding-left:12px;padding-right:12px;}
			.liTopLeftPannelElements a{text-decoration:none; font-size: 16px; padding-right:20; color:rgb(0, 0, 0);text-transform: uppercase;line-height: 80px;letter-spacing: 1px;font-family: Raleway;-webkit-font-smoothing:antialiased;font-weight:600;}
			#aBookNow{background-color:rgb(204, 0, 0);border-radius:10px;text-align:center;color:rgb(255,255,255);padding:15px;border:1px solid rgb(204, 0, 0);}
			#divTopMenuButton{float:right;margin:0;z-index:1;padding-left:10px;padding-top:1%;padding-right:20px;display:none;width:250px;}
			.liTopRighttHeaderItem {font-family:'PT Sans', 'Helvetica Neue', Arial, Helvetica, sans-serif; opacity:.8; font-size:16px;font-stretch:condensed;color:#ffffff;padding:15px;background-color:rgb(204,0,0);border: 1px solid rgba(255, 255, 255, 0.0666667);display:none;}
			.liTopRighttHeaderItem a{font-family:'PT Sans', 'Helvetica Neue', Arial, Helvetica, sans-serif;font-size:16px;font-stretch:condensed;color:#ffffff;text-decoration:none;}
			#divPageDescription{z-index:0;background-color:rgba(0,0,0,.7);}
			#divAboutUs{padding-top:7.3%;padding-bottom:2%;}
			#divAboutUsDesc{font-size: 24px; color:rgb(255, 255, 255);font-family:RalewayThin;padding:10px;max-width:1000px;margin:auto;line-height:34px;text-align: justify;}
			#pHeadingAboutUs{font-size:64px;margin:0;margin-bottom:40px;font-weight:600;line-height:70px;}
			#divHowItWorks{padding-top:4.7%;padding-bottom:3%;background-color:rgb(255,255,255);}
			#divHeadingHowItWorks{font-size: 18px; color:rgb(0, 0, 0);font-family:RalewayMedium;padding:10px;max-width:1000px;margin:auto;line-height:34px;}
			#pHeadingHowItWorks{font-family:RalewayThin;font-size:50px;margin:0;margin-bottom:40px;font-weight:600;color:rgb(204, 0, 0);}
			#liHowItWorks1{float:left;max-width:200px;}
			#liHowItWorks2{float:left;max-width:220px;padding-left:40px;}
			#liHowItWorks3{float:left;max-width:220px;padding-left:40px;}
			#liHowItWorks4{float:left;max-width:200px;padding-left:40px;}
			.liHowItWorkImg{Width:112.5px; height:137.5px;}
			.liHowItWorkImgArrow{Width:20px; height:50px;}
			.liHowItWorksDescHeading{font-size:18px;margin:0;margin-bottom:10px;color:rgb(204, 0, 0);}
			.liHowItWorksDescDesc{font-size:18px;margin:0;margin-bottom:10px;color:rgb(0, 0, 0);}
			#divPageFooter{background-color:rgb(204,0,0);font-family:Raleway;font-size:12px;color:#ffffff;opacity:.95;}
			#navlist {position: relative;margin:0;}
			#navlist li {display: block;float:left;margin: 0;padding: 0;list-style: none;position: relative;top: 0;margin-top:5px;margin-right:9px;width: 36px; height:36px;border-radius: 5px;background-size:225px 87.5px;}
			#liGoogle{background: url('SOCIAL-ICONS.png') -5px 35px;}
			#liFacebook{background: url('SOCIAL-ICONS.png') -65px 35px;}
			#liInsta{background: url('SOCIAL-ICONS.png') -125px 35px;}
			#liTwitter{background: url('SOCIAL-ICONS.png') -175px 35px;}
            .full{width:100%}
            .table{color:white}
		</style>
	</head>
	<body background="phoenix.jpg" style="padding:0;margin:0;background-attachment: fixed;background-repeat: no-repeat;">
			<div id="topwrapper">
			<div>
				<div id="divTopLogo"style="float:left;margin-left:2%;display:inline;"> 
					<img id="imgTopLogoLong" src="Pics/goGlamrsLogo100.png"/>
					<img id="imgTopLogoShort" src="Pics/goGlamrsText50.png" style="display:none;padding-top:10px;"/>
				</div>
				<div id="divTopleftStrip">
					<ul id="ulTopLeftPannel">
						<li class="liTopLeftPannelElements"><a href="index.php">Home </a></li>
						<li class="liTopLeftPannelElements"><a href="AboutUs.php">about</a></li>
						<li class="liTopLeftPannelElements"><a href="AboutUs.php">HOW IT WORKS</a></li>
						<li class="liTopLeftPannelElements"><a href="services.php">services</a></li>
						<li class="liTopLeftPannelElements"><a href="FAQs.php">FAQ's</a></li>
						<li class="liTopLeftPannelElements"><a href="#">blog</a></li>
						<li class="liTopLeftPannelElements"><a href="ContactUs.php">contact us</a></li>
						<li class="liTopLeftPannelElements"><a href="logout.php" id="aBookNow">logout</a></li>
					</ul>
				</div>
				<div id="divTopMenuButton" align="right">
					<div><img id="imgTopMenuButton"src="Pics/Button.png" style="clear:both;opacity:.7;padding-top:20px;"/></div>
					<div id="divDropDownMenu"style="z-index:100;position:absolute;" >
						<ul style="list-style-type: none;margin: 0;padding: 0;width:250px;border-collapse:collapse;text-align:left;">
							<a href="index.php" style="text-decoration: none;"><li class="liTopRighttHeaderItem">HOME </li></a>
							<a href="AboutUs.php" style="text-decoration: none;"><li class="liTopRighttHeaderItem">ABOUT</li></a>
							<a href="AboutUs.php" style="text-decoration: none;"><li class="liTopRighttHeaderItem">HOW IT WORKS</li></a>
							<a href="Services.php" style="text-decoration: none;"><li class="liTopRighttHeaderItem">SERVICES</li></a>
							<a href="FAQs.php" style="text-decoration: none;"><li class="liTopRighttHeaderItem">FAQ</li></a>
							<a href="#" style="text-decoration: none;"><li class="liTopRighttHeaderItem">BLOG</li></a>
							<a href="ContactUs.php" style="text-decoration: none;"><li class="liTopRighttHeaderItem">CONTACT US</li></a>
							<a href="logout.php" style="text-decoration: none;"><li class="liTopRighttHeaderItem">logout</li></a>
						</ul>
					</div>
				</div>
			</div>
		</div>	
		<div id="divPageDescription">
			<div id="divAboutUs">
				<div id="divAboutUsDesc"> 

                <?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
$search=$_POST['search'];
$search_by=$_POST['search_by'];

if($search_by=="name")
{
    $sql = "SELECT * FROM users where firstname LIKE "."'".$search."%'";
}
if($search_by=="email")
{
    $sql = "SELECT * FROM users where email LIKE "."'".$search."%'";
}
if($search_by=="phone")
{
    $sql = "SELECT * FROM users where cell_phone LIKE "."'".$search."%'";
}



$result = mysqli_query($conn, $sql);
echo "<table class='table'>";
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
}
?>


				</div>
			</div>
	</div>


	</body>
</html>