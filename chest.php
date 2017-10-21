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
					<font size="12" face="italic" color="black"><b>Chest  </b></font>
						<iframe allowfullscreen="" frameborder="0" height="315" src="https://www.youtube.com/embed/gRVjAtPip0Y" width="681" ></iframe>
						<font size="5" face="italic" color="black"><b>Bench Press:<br></br></b></font>
						<font size="3" face="italic" color="black">Lie Down. Sit at the end of your flat bench first.Squeeze Your Shoulder-blades. Raise your chest and tighten your upper-back. ...
Grab The Bar. Pinky inside the ring marks. Set Your Feet. Feet flat on the floor using a shoulder-width stance. Unrack, Straighten your arms to lift the bar out of the uprights.</font><br></br>
						
						<iframe allowfullscreen="" frameborder="0" height="315" src="https://www.youtube.com/embed/IODxDxX7oi4" width="681" ></iframe>
						<font size="5" face="italic" color="black"><b>Push Ups:<br></br></b></font>
						<font size="3" face="italic" color="black">Get into a high plank position. Place your hands firmly on the ground, directly under shoulders. Lower your body. Begin to lower your body—keeping your back flat and eyes focused about three feet in front of you to keep a neutral neck—until your chest grazes the floor. Push back up.</font><br></br>
						
						<iframe allowfullscreen="" frameborder="0" height="315" src="https://www.youtube.com/embed/eozdVDA78K0" width="681" ></iframe>
						<font size="5" face="italic" color="black"><b>Dumbell Flys:<br></br></b></font>
						<font size="3" face="italic" color="black">Raise the dumbbells up like you're pressing them, but stop and hold just before you lock out. This will be your starting position. With a slight bend on your elbows in order to prevent stress at the biceps tendon, lower your arms out at both sides in a wide arc until you feel a stretch on your chest.<b><br></br></b></font>
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