<?php

error_reporting(0);
$id=$_GET['id'];
$type=$_GET['type'];


?>







<html>
	<head>
		<title>Book Now - goGlamrs</title>
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
			#divAboutUs{padding-top:8%;padding-bottom:2%;}
			#divAboutUsDesc{font-size: 24px; color:rgb(255, 255, 255);font-family:RalewayThin;padding:10px;max-width:1000px;margin:auto;line-height:34px;text-align: justify;}
			#pHeadingAboutUs{font-size:64px;margin:0;margin-bottom:40px;font-weight:600;line-height:70px;}
			#divHowItWorks{padding-top:2%;background-color:rgb(255,255,255);}
			#divHeadingHowItWorks{font-size: 18px; color:rgb(0, 0, 0);font-family:RalewayMedium;padding:10px;max-width:1050px;margin:auto;line-height:34px;}
			#pHeadingHowItWorks{font-family:Raleway;font-size:30px;margin:0;margin-bottom:0px;font-weight:500;color:rgb(204, 0, 0);padding:20px;}
			#divPageFooter{background-color:rgb(204,0,0);font-family:Raleway;font-size:12px;color:#ffffff;opacity:.95;}
			#navlist {position: relative;margin:0;}
			#navlist li {display: block;float:left;margin: 0;padding: 0;list-style: none;position: relative;top: 0;margin-top:5px;margin-right:9px;width: 36px; height:36px;border-radius: 5px;background-size:225px 87.5px;}
			#liGoogle{background: url('SOCIAL-ICONS.png') -5px 35px;}
			#liFacebook{background: url('SOCIAL-ICONS.png') -65px 35px;}
			#liInsta{background: url('SOCIAL-ICONS.png') -125px 35px;}
			#liTwitter{background: url('SOCIAL-ICONS.png') -175px 35px;}
			#formbuttonSendMessage{padding-right:8px;padding-left:8px;padding-bottom:10px;padding-top:10px;font-family:Raleway;font-size:16px;font-weight:600;width:200px;float:right;color:rgb(255,255,255);background-color:#000000;border:1px solid rgb(0, 0, 0);margin:0;}
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
						<li class="liTopLeftPannelElements"><a href="Home.html">Home </a></li>
						<li class="liTopLeftPannelElements"><a href="AboutUs.html">about</a></li>
						<li class="liTopLeftPannelElements"><a href="AboutUs.html">how it works</a></li>
						<li class="liTopLeftPannelElements"><a href="Services.html">services</a></li>
						<li class="liTopLeftPannelElements"><a href="FAQs.html">FAQ's</a></li>
						<li class="liTopLeftPannelElements"><a href="#">blog</a></li>
						<li class="liTopLeftPannelElements"><a href="ContactUs.html">contact us</a></li>
						<li class="liTopLeftPannelElements"><a href="BookNow.html" id="aBookNow">book now</a></li>
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
					<p id="pHeadingAboutUs">Book Now / Checkout</p>
				</div>
			</div>
                        </div>
			<div id="divHowItWorks">
		<!--		<div id="divHeadingHowItWorks"> 
					<div style="max-width:500px;width:100%;display:inline-block;">
						<p id="pHeadingHowItWorks">YOUR ORDER</p>
						<table cellpadding="15px" style=";border-collapse:collapse;max-width:475px;width:100%;font-size: 18px;font-family:Raleway;line-height:30px;">
							<tr style="border:1px solid rgb(204, 0, 0);border-collapse:collapse;">
								<td> 
									Back Massage <br/>
									Oil Oil massage on back<br/>
									<span style="color:rgb(204,0,0);">30 min </span>
								</td>
								<td> <b>INR 500</b></td>
							</tr>
							<tr style="border:1px solid rgb(204, 0, 0);border-collapse:collapse;">
								<td> 
									Champi Head Massage <br/>
									Stress buster cream or oil based massage<br/>
									<span style="color:rgb(204,0,0);">30 min </span>
								</td>
								<td> <b>INR 500</b></td>
							</tr>
							<tr style="background-color:rgba(204,0,0,0.1);border:1px solid rgb(204, 0, 0);border-collapse:collapse;">
								<td> 
									Promo code*
								</td>
								<td> 
									<input type="text" name="location" value="" placeholder="Promo Code" id="discount" style="padding: 5px; border: 1px #ccc solid;width:150px;font-size: 18px;font-family:Raleway;">
								</td>
							</tr>
							<tr style="border:1px solid rgb(204, 0, 0);border-collapse:collapse;">
								<td> 
									Total Time: 60 min
								</td>
								<td> <b>INR 1000</b></td>
							</tr>
							<tr style="border:0;border-collapse:collapse;">
								<td> </td>
								<td> </td>
							</tr>
							<tr style="border:0;border-collapse:collapse;">
								<td> </td>
								<td> </td>
							</tr>
						</table>
						
					</div>-->
					<div style="max-width:525px;width:100%;display:inline-block;margin-left:100px;">
						<table cellpadding="15px" cellspacing="0"style="max-width:500px;width:100%;font-size: 18px;font-family:Raleway;line-height:30px;display:inline-block;">
							<tr style="margin:15px;">
								<td style="background-color:rgb(204, 0, 0);color:#ffffff;border-collapse:collapse;"> 
									<b>1. </b>  Personal Details
								</td>
								<td style="width: 0;height: 0;border-top: 30px solid #e1e1e1;border-bottom: 30px solid #e1e1e1;border-left: 30px solid rgb(204, 0, 0);padding:0;"></td>
								<td style="background-color:#e1e1e1;"> 
									<b>2. </b>Date & Time
								</td>
							</tr>
							<tr>
								<td> <br/>
									<input type="text" name="location" value="" placeholder="First Name" id="discount" style="padding: 5px; border:0; border-bottom: 1px solid rgb(204,0,0);width:220px;font-size: 18px;font-family:Raleway;"/><br/>
								</td>
								<td></td>
								<td> <br/>
									<input type="text" name="location" value="" placeholder="Last Name" id="discount" style="padding: 5px; border:0; border-bottom: 1px solid rgb(204,0,0);width:220px;font-size: 18px;font-family:Raleway;"/><br/>
								</td>
							</tr>
							<tr>
								<td> 
									<input type="text" name="location" value="" placeholder="Contact No." id="discount" style="padding: 5px; border:0; border-bottom: 1px solid rgb(204,0,0);width:220px;font-size: 18px;font-family:Raleway;"/><br/>
								</td>
								<td></td>
								<td> 
									<input type="text" name="location" value="" placeholder="Email Address" id="discount" style="padding: 5px; border:0; border-bottom: 1px solid rgb(204,0,0);width:220px;font-size: 18px;font-family:Raleway;"/><br/>
								</td>
							</tr>
							<tr>
								<td> 
									<input type="text" name="location" value="<?php echo $id , $type; ?>" placeholder="City" id="discount" style="padding: 5px; border:0; border-bottom: 1px solid rgb(204,0,0);width:220px;font-size: 18px;font-family:Raleway;"/><br/>
								</td>
								<td></td>
								<td> 
									<input type="text" name="location" value="" placeholder="Address" id="discount" style="padding: 5px; border:0; border-bottom: 1px solid rgb(204,0,0);width:220px;font-size: 18px;font-family:Raleway;"/><br/></td>
							</tr>
							<tr>
								<td colspan="3">CHOOSE A DATE AND TIME<br/><br/><input id="demo1" type="text" size="25"style="padding: 5px; border:0; border-bottom: 1px solid rgb(204,0,0);width:220px;font-size: 18px;font-family:Raleway;"/><br/>
								<br/><br/><button type="submit" id="formbuttonSendMessage" >Book Now</button></td>
							</tr>
						</table>
					</div><div style="max-width:525px;width:100%;display:inline-block;margin:90px;">
						<table cellpadding="15px" cellspacing="0"style="max-width:500px;width:100%;font-size: 18px;font-family:Raleway;line-height:30px;display:inline-block;">
							<tr style="margin:15px;">
								<td style="background-color:rgb(204, 0, 0);color:#ffffff;border-collapse:collapse;"> 
									<b></b>Cart
								</td>
								<td style="width: 0;height: 0;border-top: 30px solid #e1e1e1;border-bottom: 30px solid #e1e1e1;border-left: 30px solid rgb(204, 0, 0);padding:0;"></td>
								<td style="background-color:#e1e1e1;"> 
									<b> </b>Services
								</td>
							</tr>
							
							
						
						</table>
						<table>
						<tr>
						<td>Sno.
						</td><td>Type
						</td><td>Service
						</td>
						</tr>
						
						
						</table>
						
					</div>
                
                
                
                
                
                    
                    
                
				</div>

            
            
            
            
            
            
            
            
            
            
            
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
            
            

            
	</body>
</html>