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
						<font size="12" face="italic" color="black"><b>Women's Workout  </b></font>
						<img src="wd/dead.jpg" width="420" height="420" alt="logo" /></div>
						<font size="5" face="italic" color="black"><b> Single Leg Dead Lift:<br></br></b></font>
						<font size="3" face="italic" color="black">Lifts and tones the glutes and activates my entire core (which helps prevent back pain). 
 	Grab a pair of dumbbells and stand on your left foot. Lift your right foot behind you and bend your knee so your right lower leg is parallel to the floor.
	Bend forward at your hips, and slowly lower your body as far as you can. Pause, then push your body back to the starting position. As you come up, think about using your glutes to push your hips forward instead of lifting from your back. Keep core engaged and chest up during the entire movement.<b><br></br></b></font>
	
						<img src="wd/plies.jpg" width="420" height="420" alt="logo" /></div>
						<font size="5" face="italic" color="black"><b>Second Position Plies:<br></br></b></font>
						<font size="3" face="italic" color="black"> Stand with feet wider than shoulder-width apart, toes turned out slightly. Lower your body down by bending your knees until your thighs are parallel with the floor. Bring arms overhead and shoulders down and back. Pause, then slowly push yourself back up to the starting position. <b><br></br></b></font>
						
						<img src="wd/should.jpg" width="420" height="420" alt="logo" /></div>
						<font size="5" face="italic" color="black"><b>Shoulder stand: <br></br></b></font>
						<font size="3" face="italic" color="black">Lie down on your back and lift your legs and hips off the ground, bringing your legs up over your head until your toes touch the floor behind you. Place your hands behind your back and extend legs straight in the air, creating a straight line from shoulders to ankles.
Keep your neck relaxed as your hold the shoulder stand. Try to hold it for at least one minute and then slowly come out of it.<b><br></br></b></font>
						
						
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