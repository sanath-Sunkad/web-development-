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
						<font size="12" face="italic" color="black"><b>Biceps  </b></font>
						<iframe allowfullscreen="" frameborder="0" height="315" src="https://www.youtube.com/embed/LY1V6UbRHFM" width="681" ></iframe>
						<font size="5" face="italic" color="black"><b>Barbell Curls: <br></br></b></font>
						<font size="3" face="italic" color="black">Stand up with your torso upright while holding a barbell at a shoulder-width grip.
Continue the movement until your biceps are fully contracted and the bar is at shoulder level.<b><br></br></b></font>
						
						<iframe allowfullscreen="" frameborder="0" height="315" src="https://www.youtube.com/embed/OYu7F9V2VfE" width="681" ></iframe>
						<font size="5" face="italic" color="black"><b>Hammer Curls: <br></br></b></font>
						<font size="3" face="italic" color="black">Stand up with your torso upright and a dumbbell on each hand being held at arms length.
The palms of the hands should be facing your torso.
Now, while holding your upper arm stationary, exhale and curl the weight forward while contracting the biceps.<b><br></br></b></font>
						
						<iframe allowfullscreen="" frameborder="0" height="315" src="https://www.youtube.com/embed/bd_A0kDAyK4" width="681" ></iframe>
						<font size="5" face="italic" color="black"><b>Chin ups: <br></br></b></font>
						<font size="3" face="italic" color="black">Grab The Bar. Grip it about shoulder-width apart.
Hang. Raise your feet off the floor by bending your knees.
Pull. Pull yourself up by pulling your elbows down to the floor.
Pass The bar.
Repeat.<b><br></br></b></font>
						
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