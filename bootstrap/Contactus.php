<?php


session_start();

error_reporting(0);

mysql_connect("localhost","root","");
mysql_select_db("parlour"); //database name


?>






<html>
	<head>
		<title>Contact - goGlamrs</title>
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
					$("#formbuttonSendMessage").on({
						mouseenter: function(){
							$(this).css("color","rgb(204, 0, 0)");
							$(this).css("background-color","rgb(250, 250, 250)");
							$(this).css("border","1px solid rgb(204, 0, 0)");
						},
						mouseleave: function(){
							$(this).css("color","rgb(255,255,255)");
							$(this).css("background-color","rgb(0, 0, 0)");
							$(this).css("border","1px solid rgb(0, 0, 0)");
						}
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
	</head>
	<body background="phoenix.jpg" style="padding:0;margin:0;background-attachment: fixed;background-repeat: no-repeat;">
		<div id="topwrapper">
			<div id="divTopRow">
				<div id="divTopLogo"style="float:left;margin-left:2%;display:inline;"> 
					<img id="imgTopLogoLong" src="Pics/goGlamrsLogo100.png"/>
					<img id="imgTopLogoShort" src="Pics/goGlamrsText50.png" style="display:none;padding-top:10px;"/>
				</div>
				<div id="divTopleftStrip">
					<ul id="ulTopLeftPannel">
						<li class="liTopLeftPannelElements"><a href="index.php">Home </a></li>
						<li class="liTopLeftPannelElements"><a href="AboutUs.html">about</a></li>
						<li class="liTopLeftPannelElements"><a href="AboutUs.html">how it works</a></li>
						<li class="liTopLeftPannelElements"><a href="services.php">services</a></li>
						<li class="liTopLeftPannelElements"><a href="FAQs.html">FAQ's</a></li>
						<li class="liTopLeftPannelElements"><a href="#">blog</a></li>
						<li class="liTopLeftPannelElements"><a href="ContactUs.html">contact us</a></li>
						<li class="liTopLeftPannelElements"><a href="booknow.php" id="aBookNow">book now</a></li>
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
			<div id="divFeedBack">
				<div id="divFeedBackDesc"> 
					<p id="pHeadingFeedBack">Feedback / Careers / Enquiry</p>
					<p>We welcome your feedback and queries. Please submit a request and we will be in touch with you shortly.</p>
				</div>
			</div>
			<div id="divContactForm">
				<div id="divHeadingContactForm"> 
					<p id="pHeadingContactForm">Contact Form</p>
					<div style="margin:auto;">
						<form>
							<input type="text" placeholder="Name" name="feedback[Name]" id="feedback-Name" class="formContactUs"/>
							<input type="text" placeholder="Email" name="feedback[email]" id="feedback-email" class="formContactUs"/>
							<input type="text" placeholder="Mobile No" name="feedback[Mobile]" id="feedback-Mobile" class="formContactUs"/>
							<input type="text" placeholder="City" name="feedback[City]" id="feedback-City" class="formContactUs"/>
							<select id="feedback-property" name="feedback[property]"class="formContactUs">
								<option selected="selected" value="Subject">Subject</option>
								<option value="Feedback">Feedback</option>
								<option value="Careers">Careers</option>
								<option value="Enquiry">Enquiry</option>
							</select>
							<textarea rows="6" placeholder="Message" name="feedback[message]" id="feedback-message" class="formContactUs"></textarea>
							<button type="submit" id="formbuttonSendMessage" >SEND A MESSAGE</button>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div id="divPageFooter">
			<div id="divCopyRightlong" style="float:left;padding:13px;padding-right:0;"> Copyright &copy; <a target="_blank" href="http://www.goglamrs.com/" style="color:rgb(255,255,255);text-decoration: none;">2015 goGlamrs. </a>	All Rights Reserved. Privacy Policy and Terms of Use</div> 
			<div id="divCopyRightShort" style="float:left;padding:13px;padding-right:0;;display:none;"> Copyright &copy; <a target="_blank" href="http://www.goglamrs.com/" style="color:rgb(255,255,255);text-decoration: none;">2015 goGlamrs </a> </div>
			<div style="position:relative; float: right;">
				<ul id="navlist">
					<a href="https://www.facebook.com/goglamrs"><li id="liFacebook"></li></a>
					<a href="https://www.twitter.com/goglamrs"><li id="liTwitter"></li></a>
					<a href="http://www.Instagram.com/goglamrs"><li id="liGoogle"></li></a>
					<a href="https://www.google.com/+goglamrsindia"><li id="liInsta"></li></a>
				</ul>
			</div>
		<br/><br/><br/>
		</div>
	</body>
</html>