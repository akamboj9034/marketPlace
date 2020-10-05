<?php

session_start();
error_reporting(0);

mysql_connect("localhost","root","");
mysql_select_db("parlour"); //database name



?>





<html>
	<head>
		<title>goGlamrs - Stay Home! Stay Glamorous!</title>
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
					});
					$(window).load(function() {
						$(this).resize();
						ChangebckGrnddummy();
					});
					var a=-1;
					function setTopDivAndImage(){
						var windowsize = $(window).height();
						$("#divPageDescription").css("height",windowsize-77);
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
							$(this).css("color","rgb(255, 255, 255)");
						}
					});
					$("#aBookNow").on({
						mouseenter: function(){
							$(this).css("color","rgb(204, 0, 0)");
							$(this).css("background-color","rgba(250, 250, 250,0)");
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
							$(this).css("background-position","-13px -2px");
						},
						mouseleave: function(){
							$(this).css("background-position","-13px 70px");
						}
					});
					$("#liInsta").on({
						mouseenter: function(){
							//$(this).css("background-size","225px 87.5px");
							$(this).css("background-position","-245px -2px");
						},
						mouseleave: function(){
							//$(this).css("background-size","300px 116.67px");
							$(this).css("background-position","-245px 70");
						}
					});
					$("#liFacebook").on({
						mouseenter: function(){
							//$(this).css("background-size","225px 87.5px");
							$(this).css("background-position","-130px -2px");
						},
						mouseleave: function(){
							//$(this).css("background-size","300px 116.67px");
							$(this).css("background-position","-130px 70");
						}
					});
					$("#liTwitter").on({
						mouseenter: function(){
							//$(this).css("background-size","225px 87.5px");
							$(this).css("background-position","-353px -2px");
						},
						mouseleave: function(){
							//$(this).css("background-size","300px 116.67px");
							$(this).css("background-position","-353px 70");
						}
					});
					var bckGrnd=1;
					function ChangebckGrnddummy(){
						ChangebckGrnd();
						setTimeout(ChangebckGrnddummy, 10000);
							
					}
					function ChangebckGrnd(){
						if(bckGrnd==4)
							bckGrnd=1;
						else
							bckGrnd=bckGrnd+1;
						var url="WebsitePics/"+bckGrnd+".jpg"
						$("#body").attr("background", url);
					}
					$("#liRightArrow").click(function(){
						ChangebckGrnd();
					});
					$("#liLeftArrow").click(function(){
						if(bckGrnd==1)
							bckGrnd=4;
						else
							bckGrnd=bckGrnd-1;
						var url="WebsitePics/"+bckGrnd+".jpg"
						$("#body").attr("background", url);
					});
			});
		</script>
		<style>
			@font-face {font-family: RalewayMedium;src: url('raleway/Raleway-Medium.ttf');}
			@font-face {font-family: RalewayThin;src: url('raleway/Raleway-Thin.ttf');}
			@font-face {font-family: Raleway;src: url('raleway/Raleway-Regular.ttf');}
			#divTopRow{padding-top:1%;padding-left:0%;padding-bottom:1%;padding-right:0%;width:100%;display:inline;position:absolute;z-index:5;border:0;}
			#divTopleftStrip{float:right;margin:0;z-index:1;padding-left:10px;padding-top:1%;display:inline;border:0;}
			#ulTopLeftPannel{list-style-type: none;margin: 0;padding:0;}
			.liTopLeftPannelElements{float: left;z-index:1;padding-left:12px;padding-right:12px;}
			.liTopLeftPannelElements a{text-decoration:none; font-size: 16px; padding-right:20; color:rgb(255, 255, 255);text-transform: uppercase;line-height: 80px;letter-spacing: 1px;font-family: Raleway;-webkit-font-smoothing:antialiased;font-weight:600;}
			#aBookNow{background-color:rgb(204, 0, 0);border-radius:10px;text-align:center;color:rgb(255,255,255);padding:15px;border:1px solid rgb(204, 0, 0);}
			#divTopMenuButton{float:right;margin:0;z-index:1;padding-left:10px;padding-top:1%;padding-right:20px;display:none;width:250px;}
			.liTopRighttHeaderItem {font-family:'PT Sans', 'Helvetica Neue', Arial, Helvetica, sans-serif; opacity:.8; font-size:16px;font-stretch:condensed;color:#ffffff;padding:15px;background-color:rgb(204,0,0);border: 1px solid rgba(255, 255, 255, 0.0666667);display:none;}
			.liTopRighttHeaderItem a{font-family:'PT Sans', 'Helvetica Neue', Arial, Helvetica, sans-serif;font-size:16px;font-stretch:condensed;color:#ffffff;text-decoration:none;}
			#divPageDescription{z-index:0;}
			#divAboutUs{padding-top:8%;padding-bottom:2%;}
			#divAboutUsDesc{font-size: 24px; color:rgb(255, 255, 255);font-family:RalewayThin;padding:10px;max-width:1000px;margin:auto;line-height:34px;text-align: justify;}
			#pHeadingAboutUs{font-size:64px;margin:0;margin-bottom:40px;font-weight:600;line-height:70px;position:fixed;top:300px;right:200px;}
			#divPageFooter{font-family:Raleway;font-size:12px;color:#ffffff;opacity:.95;height:77px;position:fixed;bottom:0;min-width:100%;}
			#navlist1 {position: relative;margin:0;}
			#navlist1 li {display: block;float:left;margin: 0;padding: 0;list-style: none;position: relative;top: 0;margin-top:5px;margin-right:9px;width: 72px; height:72px;border-radius: 5px;background-size:450px 175px;}
			#liGoogle{background: url('SOCIAL-ICONS1.png') -5px 70px;}
			#liFacebook{background: url('SOCIAL-ICONS1.png') -130px 70px;}
			#liInsta{background: url('SOCIAL-ICONS1.png') -245px 70px;}
			#liTwitter{background: url('SOCIAL-ICONS1.png') -353px 70px;}
			#navlist2 {position: relative;margin:0;}
			#navlist2 li {display: block;float:right;margin: 0;padding: 0;list-style: none;position: relative;top: 0;margin-top:5px;margin-right:9px;width: 72px; height:72px;border-radius: 5px;background-size:450px 175px;}
			#liRightArrow{background: url('SOCIAL-ICONS1.png') -5px 70px;}
			#liLeftArrow{background: url('SOCIAL-ICONS1.png') -130px 70px;}
		</style>
	</head>
	<body id="body" background="phoenix.jpg" style="padding:0;margin:0;background-attachment: fixed;background-repeat: no-repeat;">
		<div id="topwrapper">
			<div>
				<div id="divTopLogo"style="float:left;margin-left:2%;display:inline;"> 
					<img id="imgTopLogoLong" src="Pics/goGlamrsLogo100.png"/>
					<img id="imgTopLogoShort" src="Pics/goGlamrsText50.png" style="display:none;padding-top:10px;"/>
				</div>
				<div id="divTopleftStrip">
					<ul id="ulTopLeftPannel">
						<li class="liTopLeftPannelElements"><a href="index.php">Home </a></li>
						<li class="liTopLeftPannelElements"><a href="AboutUs.html">about</a></li>
						<li class="liTopLeftPannelElements"><a href="AboutUs.html">HOW IT WORKS</a></li>
						<li class="liTopLeftPannelElements"><a href="services.php">services</a></li>
						<li class="liTopLeftPannelElements"><a href="FAQs.html">FAQ's</a></li>
						<li class="liTopLeftPannelElements"><a href="#">blog</a></li>
						<li class="liTopLeftPannelElements"><a href="ContactUs.html">contact us</a></li>
						<li class="liTopLeftPannelElements"><a href="Booknow.php" id="aBookNow">Book now</a></li>
					</ul>
				</div>
				<div id="divTopMenuButton" align="right">
					<div><img id="imgTopMenuButton"src="Pics/Button.png" style="clear:both;opacity:.7;padding-top:20px;"/></div>
					<div id="divDropDownMenu"style="z-index:100;position:absolute;" >
						<ul style="list-style-type: none;margin: 0;padding: 0;width:250px;border-collapse:collapse;text-align:left;">
							<a href="Home.html" style="text-decoration: none;"><li class="liTopRighttHeaderItem">HOME </li></a>
							<a href="AboutUs.html" style="text-decoration: none;"><li class="liTopRighttHeaderItem">ABOUT</li></a>
							<a href="AboutUs.html" style="text-decoration: none;"><li class="liTopRighttHeaderItem">HOW IT WORKS</li></a>
							<a href="Services.html" style="text-decoration: none;"><li class="liTopRighttHeaderItem">SERVICES</li></a>
							<a href="FAQs.html" style="text-decoration: none;"><li class="liTopRighttHeaderItem">FAQ</li></a>
							<a href="#" style="text-decoration: none;"><li class="liTopRighttHeaderItem">BLOG</li></a>
							<a href="ContactUs.html" style="text-decoration: none;"><li class="liTopRighttHeaderItem">CONTACT US</li></a>
							<a href="BookNow.html" style="text-decoration: none;"><li class="liTopRighttHeaderItem">BOOK NOW</li></a>
						</ul>
					</div>
				</div>
			</div>
		</div>	
		<div id="divPageDescription">
			<div id="divAboutUs">
				<div id="divAboutUsDesc"> 
					<p id="pHeadingAboutUs">About Us</p>
				</div>
			</div>
		</div>
		<div id="divPageFooter">
			<div style="position:relative; float: left;">
				<ul id="navlist1">
					<a href="https://www.facebook.com/goGlamrs"><li id="liFacebook"></li></a>
					<a href="https://www.twitter.com/goGlamrs"><li id="liTwitter"></li></a>
					<a href="https://www.google.com/+goGlamrsIndia"><li id="liGoogle"></li></a>
					<a href="http://www.Instagram.com/goGlamrs"><li id="liInsta"></li></a>
				</ul>
			</div>
			<div style="position:relative; float:right;padding-right:30px;">
				<ul id="navlist2">
					<li id="liRightArrow"></li>
					<li id="liLeftArrow"></li>
				</ul>
			</div>
		<br/><br/><br/>
		</div>
	</body>
</html>