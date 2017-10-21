<?php
session_start();
?>
<!doctype html>
<html>
<head>
<script type="text/javascript">
function processData(f1){
var v1= document.getElementById(f1).value;
alert (v1);
}
</script>
<meta charset="utf-8">
<title>fitness training</title>
<link href="webstyle6.css" rel="stylesheet" type="text/css">
</head>

<body>
<div class="wrappeer">
	<div id="header">
			<div class="logo"><img src="wd/weblogo.png" width="234" height="120" alt="logo" /></div>
			<div class="header_right">
				<div class="loginarea"><form> <b>Hi </b><font size="3" face="italic" color="blue"><?php echo $_SESSION['username'];?></font><b> !</b><br></br>
				<ul><li><a href="logout.php">Logout</a><li>  <li><a href="reg.php">signup</a></li></ul>
				</form>					
				</div>
				<div class="button">
				<ul>
					<li><a href="new.php">Home</a></li>
					<li><a href="abtus.php">About Us</a></li>
					<li><a href="#">My Account</a></li>
					<li><a href="login10.php">Log In</a></li>
					<li><a href="demo.php">Nutrition</a></li>
					<li><a href="#">Contact</a></li>
				</ul>
				</div>
			</div>
	</div>
	<div class="content">
			<div class="lt_content">
				<div class="lt_content_lis">
					<ul>
						<li><a href="chest.php">Chest</a></li>
						<li><a href="should.php">Shoulders</a></li>
						<li><a href="back.php">Back</a></li>
						<li><a href="bicep.php">Biceps</a></li>
						<li><a href="triceps.php">Triceps</a></li>
						<li><a href="legs.php">Legs</a></li>
						<li><a href="abs.php">Abs/Core</a></li>
						<li><a href="women.php">Women's Workout</a></li>
						<li><a href="home.php">Workout at home</a></li>
					</ul>
				</div>
				<div class="lt_content_cat">
					<ul>
						
					</ul>
				
				</div>
				<div class="lt_content_rev">
				<div class="lt_content_rev_sb"></div>
				<div class="lt_content_rev_in">
				<form>ENTER REVIEW:<input type="text" required/>
									<input type="submit" value="submit"/>
				</form>
				</div>
				</div>
			</div>
			<div class="rt_content">
				<div class="rt_content_top"></div>
				<div class="rt_cont_cat">
				<ul>
						<font size="12" face="italic" color="black"><b>Abs/ Core  </b></font>
						<iframe allowfullscreen="" frameborder="0" height="315" src="https://www.youtube.com/embed/hdng3Nm1x_E" width="681" ></iframe>
						<font size="5" face="italic" color="black"><b>Hanging Leg Raise: <br></br></b></font>
						<font size="3" face="italic" color="black">Grab a bar and just hang, let the momentum disappear and do nothing until your body is still and the legs are straight. Flex all your muscles especially your Lats, Abs, and muscles surrounding your elbows. Slowly raise your feet up to the bar, remember to keep your legs straight. Lower your Legs and Repeat.<b><br></br></b></font>
						
						<iframe allowfullscreen="" frameborder="0" height="315" src="https://www.youtube.com/embed/gvHVdNVBu6s" width="681" ></iframe>
						<font size="5" face="italic" color="black"><b>Plank: <br></br></b></font>
						<font size="3" face="italic" color="black">Place the forearms on the ground with the elbows aligned below the shoulders, and arms parallel to the body at about shoulder-width distance. If flat palms bother your wrists, clasp your hands together. (Note: Any of the following plank variations can be performed with straight arms or in a forearm position.)<b><br></br></b></font>
						
						<img src="wd/ab1.jpg" width="650" height="315" alt="logo" /></div>
						<font size="5" face="italic" color="black"><b>Arms-high partial situp:<br></br></b></font>
						<font size="3" face="italic" color="black">Lie on your back, knees bent at 90 degrees, and raise your arms straight overhead, keeping them pointing up throughout the exercise. Sit up halfway, then steadily return to the floor. That's one rep.<b><br></br></b></font>
						
					</ul>
					
				</div>
			</div>
	</div>
	<div id="footer">
		<div class="footer_paytag"></div>
		<div class="footer_b">
			<div class="footer_menu">
				<ul>
						<li class="footer_border"><a href="#">Home Page</a></li>
						<li class="footer_border"><a href="#">New Tech</a></li>
						<li class="footer_border"><a href="#">All exe</a></li>
						<li class="footer_border"><a href="#">Reviews</a></li>
						<li class="footer_border"><a href="#">F.A.Q</a></li>
						<li class="footer_border"><a href="#">Contact</a></li>
				</ul>
			</div>
			<div class="footer_copyrt">Copyright &copy All rights reserved Design by <a href="https://www.facebook.com/sanath.sunkad">Sanath</a>          <a href="http://www.facebook.com/rohit.cricketer97?ref=bookmarks">Rohit</a></div>

		</div>
	</div>
</body>
</html>