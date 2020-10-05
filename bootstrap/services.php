<?php


error_reporting(0);

mysql_connect("localhost","root","");
mysql_select_db("parlour"); //database name


?>


<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
  <title>goGlamrs</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
  <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
  <link href="css/template.css" rel="stylesheet">
   <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
         <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
         
<script type="text/javascript" src="bootstrap/js/jquery.js"> </script>
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,700,300,600,800,400' rel='stylesheet' type='text/css'>

    
    
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
			#divFeedBack{padding-top:8%;padding-bottom:2%;}
			#divFeedBackDesc{font-size: 24px; color:rgb(255, 255, 255);font-family:RalewayThin;padding:10px;max-width:900px;margin:auto;line-height:50px;text-align: justify;}
			#pHeadingFeedBack{font-size:64px;margin:0;margin-bottom:40px;font-weight:600;line-height:70px;}
			#divContactForm{padding-top:2%;padding-bottom:3%;background-color:rgb(255,255,255);margin:auto;}
			#divHeadingContactForm{font-size: 18px; color:rgb(0, 0, 0);font-family:Raleway;padding:10px;max-width:600px;margin:auto;line-height:34px;}
			#pHeadingContactForm{font-family:RalewayThin;font-size:50px;margin:0;margin-bottom:40px;font-weight:600;color:rgb(204, 0, 0);}
			.formContactUs{padding-right:8px;padding-left:8px;padding-bottom:10px;padding-top:10px;font-family:Raleway;font-size:16px;font-weight:600;width:600px;margin:10px;}	#formbuttonSendMessage{padding-right:8px;padding-left:8px;padding-bottom:10px;padding-top:10px;font-family:Raleway;font-size:16px;font-weight:600;width:200px;float:right;color:rgb(255,255,255);background-color:#000000;border:1px solid rgb(0, 0, 0);margin:0;}
			#divPageFooter{background-color:rgb(204,0,0);font-family:Raleway;font-size:12px;color:#ffffff;opacity:.95;}
			#navlist {position: relative;margin:0;}
			#navlist li {display: block;float:left;margin: 0;padding: 0;list-style: none;position: relative;top: 0;margin-top:5px;margin-right:9px;width: 36px; height:36px;border-radius: 5px;background-size:225px 87.5px;}
			#liGoogle{background: url('SOCIAL-ICONS.png') -5px 35px;}
			#liFacebook{background: url('SOCIAL-ICONS.png') -65px 35px;}
			#liInsta{background: url('SOCIAL-ICONS.png') -125px 35px;}
			#liTwitter{background: url('SOCIAL-ICONS.png') -175px 35px;}
		</style>

    
    
    
  <script> 

$(window).load(function() {
 
      $('#gallery img').each(function() {
 
        createCanvas(this);
      });
 
      function createCanvas(image) {
 
        var canvas = document.createElement('canvas');
        if (canvas.getContext) {
          var ctx = canvas.getContext("2d");
 
// specify canvas size
          canvas.width = image.width;
          canvas.height = image.height;
 
// Once we have a reference to the source image object we can use 
// the drawImage(reference, x, y) method to render it to the canvas. 
//x, y are the coordinates on the target canvas where the image should be placed.
          ctx.drawImage(image, 0, 0);
 
// Taking the image data and storing it in the imageData array. 
//You can read the pixel data on a canvas using the getImageData() method. 
// Image data includes the colour of the pixel (decimal, rgb values) and alpha value. 
// Each color component is represented by an integer between 0 and 255. 
//imageData.data contains height x width x 4 bytes of data, with index values ranging from 0 to (height x width x 4)-1.
          var imageData = ctx.getImageData(0, 0, canvas.width, canvas.height),
              pixelData = imageData.data;
 
// Loop through all the pixels in the imageData array, and modify
// the red, green, and blue color values.
          for (var y = 0; y < canvas.height; y++) {
            for (var x = 0; x < canvas.width; x++) {
 
// You can access the color values of the (x,y) pixel as follows :
              var i = (y * 4 * canvas.width) + (x * 4);
 
// Get the RGB values.
              var red = pixelData[i];
              var green = pixelData[i + 1];
              var blue = pixelData[i + 2];
 
// Convert to grayscale. One of the formulas of conversion (e.g. you could try a simple average (red+green+blue)/3)   
              var grayScale = (red * 0.3) + (green * 0.59) + (blue * .11);
 
              pixelData[i] = grayScale;
              pixelData[i + 1] = grayScale;
              pixelData[i + 2] = grayScale;
            }
          }
 
// Putting the modified imageData back on the canvas.
          ctx.putImageData(imageData, 0, 0, 0, 0, imageData.width, imageData.height);
 
// Inserting the canvas in the DOM, before the image:
          image.parentNode.insertBefore(canvas, image);
        }
      }
    });


</script>
  
 </head>
<body>

	<nav id="navbar" class="site-navbar navbar navbar-static-top" role="navigation">
	<div class="container">
	<div class="navbar-header">
	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
	<span class="sr-only">Toggle navigation</span>
        
	<i class="fa fa-bars"></i>
	</button>
	<a class="site-name navbar-brand" href="index.html"><img src="images/logos.png"></a>
	</div>
	<br>
    <div class="collapse navbar-collapse" id="navbar-collapse-1">
	<ul id="navigation" class="nav navbar-nav navbar-right animated lightSpeedIn">
	
            <li class=""><a href="index.php" class="current">Home</a></li>
        <li class=""><a href="about.php" class="current">About Us</a></li>
         <li class="active"><a href="services.php" class="current">Services</a></li>
  
    <li class=""><a href="booknow.php" class="current">Book Now Your Cart</a></li>
        <li> <?php 
   session_start();
       if(isset($_SESSION['email']))
           {  $user=$_SESSION['email'];
           echo "<a href='logout.php'> Logout ($user) 	      



</a>";

           
           }
else
       {
           echo "<a href='login.php'> Login </a>";
           
       }
       
       
       ?> </a></li>
      
        

        
        </ul>
	</div>
	</div>
	</nav>

   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   <!---start-content---->
                 
                 
                 
                 
                 
                 
                 
                 
                 
                 
                 
                 
                 
                 
                 
                 
                 
                 
                 
                 
                 
                 <br>
                 <div class="container">
                 
                     
                     <h1><center> Our Services </center></h1>
          <hr class="line" noshade align="left">
          
                     
                 
                  <ul id="gallery">
            <li><a href= "javascript:void(0)"  data-toggle="modal" data-target="#facial"><img src="images/facial.jpg" class="img-responsive">  <div> Facial</div></a></li>
            <li><a href="javascript:void(0)" data-toggle="modal" data-target="#cleansing"><img src="images/cleansing.jpg" class="img-responsive">  <div> Cleansing </div></a></li>
            <li><a href="javascript:void(0)" data-toggle="modal" data-target="#bleach"><img src="images/bleach.jpg" class="img-responsive"> <div> Bleach </div></a></li>
            <li><a href="javascript:void(0)" data-toggle="modal" data-target="#waxing"><img src="images/waxing.jpg" class="img-responsive"> <div> Waxing </div></a></li>
            <li><a href="javascript:void(0)" data-toggle="modal" data-target="#threading"><img src="images/threading.jpg" class="img-responsive"> <div> Threading </div></a></li>
             <li><a href="javascript:void(0)" data-toggle="modal" data-target="#manicure"><img src="images/manicure.jpg" class="img-responsive"> <div> Manicure & Pedicure </div></a></li>
         <li><a href="javascript:void(0)" data-toggle="modal" data-target="#hairtreatment"><img src="images/hairtreatment.jpg" class="img-responsive"> <div> Hair Treatment </div></a></li>
           
         <li><a href="javascript:void(0)" data-toggle="modal" data-target="#hairspa"><img src="images/hairspa.jpg" class="img-responsive"> <div> Hair Spa </div></a></li>
            <li><a href="javascript:void(0)" data-toggle="modal" data-target="#haircut"><img src="images/haircut.jpg" class="img-responsive"> <div> Hair Cut </div></a></li>
             <li><a href="javascript:void(0)" data-toggle="modal" data-target="#haircolor"><img src="images/haircolor.jpg" class="img-responsive"> <div> Hair Coloring </div></a></li>
           <li><a href="javascript:void(0)" data-toggle="modal" data-target="#massage"><img src="images/massage.jpg" class="img-responsive"> <div> Massage </div></a></li>     
              <li><a href="javascript:void(0)" data-toggle="modal" data-target="#makeup"><img src="images/makeup.jpg" class="img-responsive"> <div> Make Up </div></a></li>
                  </ul> 
                  
        
                 
                 </div>
	
                 <BR>
                 
                 <div id="divPageFooter">
			<div id="divCopyRightlong" style="float:left;padding:13px;padding-right:0;"> Copyright &copy; <a target="_blank" href="http://www.goglamrs.com/" style="color:rgb(255,255,255);text-decoration: none;">2015 goGlamrs. </a>	All Rights Reserved. Privacy Policy and Terms of Use</div> 
			<div id="divCopyRightShort" style="float:left;padding:13px;padding-right:0;;display:none;"> Copyright &copy; <a target="_blank" href="http://www.goglamrs.com/" style="color:rgb(255,255,255);text-decoration: none;">2015 goGlamrs </a> </div>
			<div style="position:relative; float: right;">
				<ul id="navlist">
					<a href="https://www.facebook.com/goglamrs"><li id="liFacebook"></li></a>
					<a href="https://www.twitter.com/goglamrs"><li id="liTwitter"></li></a>
					<a href="https://www.google.com/+goglamrsindia"><li id="liGoogle"></li></a>
					<a href="http://www.Instagram.com/goglamrs"><li id="liInsta"></li></a>
				</ul>
			</div>
		<br/><br/><br/>
		</div>
            
            

                 
                 
<!--                 <nav id="footer">
        <div class="container">
            <div class="pull-left fnav">
                <h3> Contact Details </h3>
                <p> Email : GoGlamrs.web@gmail.com <br>
                 Phone : +91-9930079300 <br> 
                 WhatsApp : +91-9930079300  </p>
 
            </div>
            <br>
            <div class="pull-right fnav">
                <ul class="footer-social">
                    <li><a href="www.facebook.com/goglamrs"><i class="fa fa-facebook"></i></a></li>
           
                    <li><a href="www.google.com/+goglamrsindia"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="www.twitter.com/goglamrs"><i class="fa fa-twitter"></i></a></li>
                </ul>
            </div>
        </div>
    </nav>
-->

        
                  <!-- Modal -->
<div id="facial" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"> Facial</h4>
      </div>
      <div class="modal-body">
          <div class="row">
              <div class="col-md-4">  <img src="images/facial.jpg" width="360px" height="270px" class="img-responsive"> </div>
              <div class= "col-md-7 ">
         
<table border="1" class="table table-hover">
<thead>
    <tr>
        <th>S.no.</th>
 <th>Types of Facial</th>
<th>Price (in rupees)</th>
    </tr>
</thead>



<?php

 $connection=mysql_connect("localhost","root","");

mysql_select_db("parlour","$connection");

$query="select * from facial";

$result=mysql_query($query);

//
//echo "<table border='2' class='table table-hover'>";
//echo "<thead>";

while($row=mysql_fetch_array($result))
{

extract($row);

echo "<tr>";
echo "<td>";echo $row[0]; echo "</td>";
echo "<td>";echo $row[1]; echo "</td>";
echo "<td>";echo $row[2]; echo "</td>";
echo "<td>";
 if(isset($_SESSION['email']))
           { 


echo "<a href='order.php?id=$id&type=facial'> <i class='fa fa-shopping-cart'> </i> </a>"; echo "</td>";
		   }else{echo "<a href='login.php?id=$id&type=facial'> <i class='fa fa-shopping-cart'> </i> </a>"; echo "</td>";}
echo "</tr>";
}

echo "</thead>";
echo "</table>";
?>
</table>


      </div>
          </div>
    
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
       </div>
                  
 
                  
                  
                         
                  <!-- Modal -->
<div id="cleansing" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"> Cleansing</h4>
      </div>
      <div class="modal-body">
          <div class="row">
              <div class="col-md-4">  <img src="images/cleansing.jpg" width="360px" height="270px" class="img-responsive"> </div>
              <div class= "col-md-7 ">
         
<table border="1" class="table table-hover">
<thead>
    <tr>
        <th>S.no.</th>
 <th>Types of Cleansing</th>
<th>Price (in rupees)</th>
    </tr>
</thead>



<?php

 $connection=mysql_connect("localhost","root","");

mysql_select_db("parlour","$connection");


$query="select * from cleansing";

$result=mysql_query($query);

//
//echo "<table border='2' class='table table-hover'>";
//echo "<thead>";

while($row=mysql_fetch_array($result))
{

extract($row);

echo "<tr>";
echo "<td>";echo $row[0]; echo "</td>";
echo "<td>";echo $row[1]; echo "</td>";
echo "<td>";echo $row[2]; echo "</td>";
echo "<td>";
 if(isset($_SESSION['email']))
           { 


echo "<a href='order.php?id=$id&type=cleansing'> <i class='fa fa-shopping-cart'> </i> </a>"; echo "</td>";
		   }else{echo "<a href='login.php?id=$id&type=cleansing'> <i class='fa fa-shopping-cart'> </i> </a>"; echo "</td>";}
echo "</tr>";
}
echo "</thead>";
echo "</table>";
?>
</table>


      </div>
          </div>
    
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
       </div>
               
                  
                    
                  <!-- Modal -->
<div id="bleach" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"> Bleach</h4>
      </div>
      <div class="modal-body">
          <div class="row">
              <div class="col-md-4">  <img src="images/bleach.jpg" width="360px" height="270px" class="img-responsive"> </div>
              <div class= "col-md-7 ">
         
<table border="1" class="table table-hover">
<thead>
    <tr>
        <th>S.no.</th>
 <th>Types of Bleach</th>
<th>Price (in rupees)</th>
    </tr>
</thead>



<?php

 $connection=mysql_connect("localhost","root","");

mysql_select_db("parlour","$connection");


$query="select * from bleach";

$result=mysql_query($query);

//
//echo "<table border='2' class='table table-hover'>";
//echo "<thead>";
while($row=mysql_fetch_array($result))
{

extract($row);

echo "<tr>";
echo "<td>";echo $row[0]; echo "</td>";
echo "<td>";echo $row[1]; echo "</td>";
echo "<td>";echo $row[2]; echo "</td>";
echo "<td>";
 if(isset($_SESSION['email']))
           { 


echo "<a href='order.php?id=$id&type=bleach'> <i class='fa fa-shopping-cart'> </i> </a>"; echo "</td>";
		   }else{echo "<a href='login.php?id=$id&type=bleach'> <i class='fa fa-shopping-cart'> </i> </a>"; echo "</td>";}
echo "</tr>";
}
echo "</thead>";
echo "</table>";
?>
</table>


      </div>
          </div>
    
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
       </div>
               
                  
                    
                  <!-- Modal -->
<div id="waxing" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"> Waxing</h4>
      </div>
      <div class="modal-body">
          <div class="row">
              <div class="col-md-4">  <img src="images/waxing.jpg" width="360px" height="270px" class="img-responsive"> </div>
              <div class= "col-md-7 ">
         
<table border="1" class="table table-hover">
<thead>
    <tr>
        <th>S.no.</th>
 <th>Types of Waxing</th>
<th>Price (in rupees)</th>
    </tr>
</thead>



<?php

 $connection=mysql_connect("localhost","root","");

mysql_select_db("parlour","$connection");


$query="select * from waxing";

$result=mysql_query($query);

//
//echo "<table border='2' class='table table-hover'>";
//echo "<thead>";
while($row=mysql_fetch_array($result))
{

extract($row);

echo "<tr>";
echo "<td>";echo $row[0]; echo "</td>";
echo "<td>";echo $row[1]; echo "</td>";
echo "<td>";echo $row[2]; echo "</td>";
echo "<td>";
 if(isset($_SESSION['email']))
           { 


echo "<a href='order.php?id=$id&type=waxing'> <i class='fa fa-shopping-cart'> </i> </a>"; echo "</td>";
		   }else{echo "<a href='login.php?id=$id&type=waxing'> <i class='fa fa-shopping-cart'> </i> </a>"; echo "</td>";}
echo "</tr>";
}

echo "</thead>";
echo "</table>";
?>
</table>


      </div>
          </div>
    
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
       </div>
               
                  
                    
                  <!-- Modal -->
<div id="threading" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"> Threading</h4>
      </div>
      <div class="modal-body">
          <div class="row">
              <div class="col-md-4">  <img src="images/threading.jpg" width="360px" height="270px" class="img-responsive"> </div>
              <div class= "col-md-7 ">
         
<table border="1" class="table table-hover">
<thead>
    <tr>
        <th>S.no.</th>
 <th>Types of Threading</th>
<th>Price (in rupees)</th>
    </tr>
</thead>



<?php

 $connection=mysql_connect("localhost","root","");

mysql_select_db("parlour","$connection");


$query="select * from threading";

$result=mysql_query($query);

//
//echo "<table border='2' class='table table-hover'>";
//echo "<thead>";
while($row=mysql_fetch_array($result))
{

extract($row);

echo "<tr>";
echo "<td>";echo $row[0]; echo "</td>";
echo "<td>";echo $row[1]; echo "</td>";
echo "<td>";echo $row[2]; echo "</td>";
echo "<td>";
 if(isset($_SESSION['email']))
           { 


echo "<a href='order.php?id=$id&type=threading'> <i class='fa fa-shopping-cart'> </i> </a>"; echo "</td>";
		   }else{echo "<a href='login.php?id=$id&type=threading'> <i class='fa fa-shopping-cart'> </i> </a>"; echo "</td>";}
echo "</tr>";
}
echo "</thead>";
echo "</table>";
?>
</table>


      </div>
          </div>
    
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
       </div>
               
                  
                    
                  <!-- Modal -->
<div id="manicure" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"> Manicure & Pedicure</h4>
      </div>
      <div class="modal-body">
          <div class="row">
              <div class="col-md-4">  <img src="images/manicure.jpg" width="360px" height="270px" class="img-responsive"> </div>
              <div class= "col-md-7 ">
         
<table border="1" class="table table-hover">
<thead>
    <tr>
        <th>S.no.</th>
 <th>Types of Manicure & Pedicure</th>
<th>Price (in rupees)</th>
    </tr>
</thead>



<?php

 $connection=mysql_connect("localhost","root","");

mysql_select_db("parlour","$connection");


$query="select * from manicure";

$result=mysql_query($query);

//
//echo "<table border='2' class='table table-hover'>";
//echo "<thead>";
while($row=mysql_fetch_array($result))
{

extract($row);

echo "<tr>";
echo "<td>";echo $row[0]; echo "</td>";
echo "<td>";echo $row[1]; echo "</td>";
echo "<td>";echo $row[2]; echo "</td>";
echo "<td>";
 if(isset($_SESSION['email']))
           { 


echo "<a href='order.php?id=$id&type=manicure'> <i class='fa fa-shopping-cart'> </i> </a>"; echo "</td>";
		   }else{echo "<a href='login.php?id=$id&type=manicure'> <i class='fa fa-shopping-cart'> </i> </a>"; echo "</td>";}
echo "</tr>";
}
echo "</thead>";
echo "</table>";
?>
</table>


      </div>
          </div>
    
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
       </div>
               
                  
                    
                  <!-- Modal -->
<div id="hairtreatment" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"> Hair Treatment</h4>
      </div>
      <div class="modal-body">
          <div class="row">
              <div class="col-md-4">  <img src="images/hairtreatment.jpg" width="360px" height="270px" class="img-responsive"> </div>
              <div class= "col-md-7 ">
         
<table border="1" class="table table-hover">
<thead>
    <tr>
        <th>S.no.</th>
 <th>Types of Hair Treatment</th>
<th>Price (in rupees)</th>
    </tr>
</thead>



<?php

 $connection=mysql_connect("localhost","root","");

mysql_select_db("parlour","$connection");


$query="select * from hairtreatment";

$result=mysql_query($query);

//
//echo "<table border='2' class='table table-hover'>";
//echo "<thead>";

while($row=mysql_fetch_array($result))
{

extract($row);

echo "<tr>";
echo "<td>";echo $row[0]; echo "</td>";
echo "<td>";echo $row[1]; echo "</td>";
echo "<td>";echo $row[2]; echo "</td>";
echo "<td>";
 if(isset($_SESSION['email']))
           { 


echo "<a href='order.php?id=$id&type=hairtreatment'> <i class='fa fa-shopping-cart'> </i> </a>"; echo "</td>";
		   }else{echo "<a href='login.php?id=$id&type=hairtreatment'> <i class='fa fa-shopping-cart'> </i> </a>"; echo "</td>";}
echo "</tr>";
}
echo "</thead>";
echo "</table>";
?>
</table>


      </div>
          </div>
    
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
       </div>
               
                  
                    
                  <!-- Modal -->
<div id="hairspa" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"> Hair Spa</h4>
      </div>
      <div class="modal-body">
          <div class="row">
              <div class="col-md-4">  <img src="images/hairspa.jpg" width="360px" height="270px" class="img-responsive"> </div>
              <div class= "col-md-7 ">
         
<table border="1" class="table table-hover">
<thead>
    <tr>
        <th>S.no.</th>
 <th>Types of Hair spa</th>
<th>Price (in rupees)</th>
    </tr>
</thead>



<?php

 $connection=mysql_connect("localhost","root","");

mysql_select_db("parlour","$connection");


$query="select * from spa";

$result=mysql_query($query);

//
//echo "<table border='2' class='table table-hover'>";
//echo "<thead>";

while($row=mysql_fetch_array($result))
{

extract($row);

echo "<tr>";
echo "<td>";echo $row[0]; echo "</td>";
echo "<td>";echo $row[1]; echo "</td>";
echo "<td>";echo $row[2]; echo "</td>";
echo "<td>";
 if(isset($_SESSION['email']))
           { 


echo "<a href='order.php?id=$id&type=spa'> <i class='fa fa-shopping-cart'> </i> </a>"; echo "</td>";
		   }else{echo "<a href='login.php?id=$id&type=spa'> <i class='fa fa-shopping-cart'> </i> </a>"; echo "</td>";}
echo "</tr>";
}

echo "</thead>";
echo "</table>";
?>
</table>


      </div>
          </div>
    
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
       </div>
               
                  
                    
                  <!-- Modal -->
<div id="haircut" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"> Hair Cut</h4>
      </div>
      <div class="modal-body">
          <div class="row">
              <div class="col-md-4">  <img src="images/haircut.jpg" width="360px" height="270px" class="img-responsive"> </div>
              <div class= "col-md-7 ">
         
<table border="1" class="table table-hover">
<thead>
    <tr>
        <th>S.no.</th>
 <th>Types of Hair Cut</th>
<th>Price (in rupees)</th>
    </tr>
</thead>



<?php

 $connection=mysql_connect("localhost","root","");

mysql_select_db("parlour","$connection");


$query="select * from haircut";

$result=mysql_query($query);

//
//echo "<table border='2' class='table table-hover'>";
//echo "<thead>";

while($row=mysql_fetch_array($result))
{

extract($row);

echo "<tr>";
echo "<td>";echo $row[0]; echo "</td>";
echo "<td>";echo $row[1]; echo "</td>";
echo "<td>";echo $row[2]; echo "</td>";
echo "<td>";
 if(isset($_SESSION['email']))
           { 


echo "<a href='order.php?id=$id&type=haircut'> <i class='fa fa-shopping-cart'> </i> </a>"; echo "</td>";
		   }else{echo "<a href='login.php?id=$id&type=haircut'> <i class='fa fa-shopping-cart'> </i> </a>"; echo "</td>";}
echo "</tr>";
}

echo "</thead>";
echo "</table>";
?>
</table>


      </div>
          </div>
    
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
       </div>
               
                  
                    
                  <!-- Modal -->
<div id="haircolor" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"> Hair Color</h4>
      </div>
      <div class="modal-body">
          <div class="row">
              <div class="col-md-4">  <img src="images/haircolor.jpg" width="360px" height="270px" class="img-responsive"> </div>
              <div class= "col-md-7 ">
         
<table border="1" class="table table-hover">
<thead>
    <tr>
        <th>S.no.</th>
 <th>Types of Hair Color</th>
<th>Price (in rupees)</th>
    </tr>
</thead>



<?php

 $connection=mysql_connect("localhost","root","");

mysql_select_db("parlour","$connection");


$query="select * from haircoloring";

$result=mysql_query($query);

//
//echo "<table border='2' class='table table-hover'>";
//echo "<thead>";

while($row=mysql_fetch_array($result))
{

extract($row);

echo "<tr>";
echo "<td>";echo $row[0]; echo "</td>";
echo "<td>";echo $row[1]; echo "</td>";
echo "<td>";echo $row[2]; echo "</td>";
echo "<td>";
 if(isset($_SESSION['email']))
           { 


echo "<a href='order.php?id=$id&type=haircoloring'> <i class='fa fa-shopping-cart'> </i> </a>"; echo "</td>";
		   }else{echo "<a href='login.php?id=$id&type=haircoloring'> <i class='fa fa-shopping-cart'> </i> </a>"; echo "</td>";}
echo "</tr>";
}

echo "</thead>";
echo "</table>";
?>
</table>


      </div>
          </div>
    
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
       </div>
               
                  
                    
                  <!-- Modal -->
<div id="massage" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"> Massage</h4>
      </div>
      <div class="modal-body">
          <div class="row">
              <div class="col-md-4">  <img src="images/massage.jpg" width="360px" height="270px" class="img-responsive"> </div>
              <div class= "col-md-7 ">
         
<table border="1" class="table table-hover">
<thead>
    <tr>
        <th>S.no.</th>
 <th>Types of Massage</th>
<th>Price (in rupees)</th>
    </tr>
</thead>



<?php

 $connection=mysql_connect("localhost","root","");

mysql_select_db("parlour","$connection");


$query="select * from massage";

$result=mysql_query($query);

//
//echo "<table border='2' class='table table-hover'>";
//echo "<thead>";

while($row=mysql_fetch_array($result))
{

extract($row);

echo "<tr>";
echo "<td>";echo $row[0]; echo "</td>";
echo "<td>";echo $row[1]; echo "</td>";

echo "<td>";echo $row[2]; echo "</td>";
echo "<td>";
 if(isset($_SESSION['email']))
           { 



echo "<a href='order.php?id=$id&type=massage'> <i class='fa fa-shopping-cart'> </i> </a>";
 echo "</td>";
		   }else{echo "<a href='login.php?id=$id&type=massage'> <i class='fa fa-shopping-cart'> </i> </a>"; echo "</td>";}
echo "</tr>";
}
echo "</thead>";
echo "</table>";
?>


</table>


      </div>
          </div>
    
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
       </div>
               
                  
                    
                  <!-- Modal -->
<div id="makeup" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"> MAKEUP</h4>
      </div>
      <div class="modal-body">
          <div class="row">
              <div class="col-md-4">  <img src="images/makeup.jpg" width="360px" height="270px" class="img-responsive"> </div>
              <div class= "col-md-7 ">
         
<table border="1" class="table table-hover">
<thead>
    <tr>
        <th>S.no.</th>
 <th>Types of Makeup</th>
<th>Price (in rupees)</th>
    </tr>
</thead>



<?php

 $connection=mysql_connect("localhost","root","");

mysql_select_db("parlour","$connection");


$query="select * from makeup";

$result=mysql_query($query);

//
//echo "<table border='2' class='table table-hover'>";
//echo "<thead>";

while($row=mysql_fetch_array($result))
{

extract($row);

echo "<tr>";
echo "<td>";echo $row[0]; echo "</td>";
echo "<td>";echo $row[1]; echo "</td>";
echo "<td>";echo $row[2]; echo "</td>";
echo "<td>";
 if(isset($_SESSION['email']))
           { 


echo "<a href='order.php?id=$id&type=makeup'> <i class='fa fa-shopping-cart'> </i> </a>"; echo "</td>";
		   }else{echo "<a href='login.php?id=$id&type=makeup'> <i class='fa fa-shopping-cart'> </i> </a>"; echo "</td>";}
echo "</tr>";
}
echo "</thead>";
echo "</table>";
?>
</table>


      </div>
          </div>
    
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
       <button type="button" class="btn btn-default" onclick="view()"> view in cart </button>
      
      </div>
    </div>

  </div>
</div>
       </div>
               
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                    
                    
                    
                    
        
         <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>        
                 
   
        <script type="text/javascript" src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
        
        <style>        
        a
        {
        
        color:black !important;
}        

        a:hover
        {
        
        color:black !important;
}        




</style>



<script>
var arr = []; // the array
var a=1;
function myfunction(int) {
	for(i=0;i<arr.length;i++){
//		if(arr[i]==int){
//			alert("alreday in cart");
//			a=0;
//			}
		
		
	}if(a==1){arr.push( int);}

}
function view(){
	 document.write(arr.join(', '));
}
</script>







<link rel="stylesheet" type="text/css"  href="css/style (2).css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">

    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,700,300,600,800,400' rel='stylesheet' type='text/css'>

  <link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">

</body>
</html>
