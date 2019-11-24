<?php require './php/server.php' ?>
<!doctype html>
<html lang="en-us">

	<!-- Header of the page-->
	<head>
		<meta charset="utf-8">
		<meta author = "author" content = "Jesus,Ibrahima,Leland">
		<title>Game Galaxy</title>
		
		
		<link rel="stylesheet" href="css/slider.css">
	
		<link rel="stylesheet" href="css/footer.css">
		<link rel="stylesheet" href="css/about_us.css">				<!-- Needed for about_us & contact_us pages--> 
		
		<link rel="stylesheet" href="css/site.css"> 				<!-- Needed for general page styling-->
		<link rel="stylesheet" href="css/footer.css"> 				<!-- Needed for everypage that uses footer-->
		<link rel="stylesheet" href="css/non_index_styling.css"> 	<!-- Needed for navbar margin and color in genre pages, and genre block styling-->
		
		<script type="text/javascript" src="js/scripts.js"></script>
		
	</head>
	<script src="./js/ajax.js"></script>
	<script>
	 usercheck();
	</script>

	
	<!-- Body of the page starts here-->
	<body id="about_us_body">
	
			<div class = "container">
			
			<!-- Top of the page that use the logo-->
				<div class = "top">
			
					<img src="img/logo/logo2.png">
			
				</div>
		
		
			<!-- Navegation bar block-->
			<div class = "navbar_3">
					<nav>
						<ul class="cf">
							<li><a class="dropdown" href="index.php">Home</a>
								
							</li>
							
							<li><a class="dropdown" href="#">Genre</a>
								<ul>
									<li><a href="page_adventure.php">Adventure</a></li>
									<li><a href="page_racing.php">Racing</a></li>
									<li><a href="page_shooter.php">Shooter</a></li>
									<li><a href="page_sports.php">Sports</a></li>
									<li><a href="page_rpg.php">RPG</a></li>
									<li><a href="page_others.php">Other</a></li>
								</ul>
							</li>
							
							<li><a class="dropdown" href="#">Games</a>
								<ul>
									<li><a href="page_featured_games.php">Featured Games</a></li>
									<li><a href="page_best_sellers.php">Best Bellers</a></li>
									<li><a href="page_on_sale.php">On Sale</a></li>
								</ul>
							</li>
							
								<li><a class="dropdown" href="news.php">News</a>
									<ul>
										<li><a href="news.php#nintendo1">Nintendo Switch</a></li>
										<li><a href="news.php#xboxone1">Xbox One</a></li>
										<li><a href="news.php#sony1">PlayStation</a></li>
										<li><a href="news.php#pc_gamer1">PC</a></li>
									</ul>
								</li>
								</li>
								
								<li><a class="dropdown" href="#">About Us</a>
									<ul>
										<li><a href="page_aboutus.php">Get to know us</a></li>
										<li><a href="page_aboutus.php">Game Galaxy Project</a></li>
									</ul>
								</li>
								<li style="float:right;border-bottom:solid;">
							<a href="user_login.php"><font size="3"  color="cyan"><?php 
							if(isset($_SESSION['activeUser'])){
								echo $_SESSION['activeUser'];
							}
							else
								echo "Log in";
							
							?></font>
							</a>
							<ul id="hidelogout">
							<li style="float:right;">
							<a><form method="POST" action="user_cart.php">
							<input name="cart" style="
										cursor:pointer;
										background: transparent;
										outline:none;
										border:none;
										color:white;
										padding:0px;"
							type="submit" value="View cart"></input>
							</form>
						</a>
						</li>
							<li style="float:right;">
							<a><form method="POST">
							<input name="userLogout" style="
										cursor:pointer;
										background: transparent;
										outline:none;
										border:none;
										color:white;
										padding:0px;"
							type="submit" value="Log out"></input>
							</form>
						</a>
						</li>
							</ul>
							
						</li>
						</ul>
					</nav>
			</div>
		<!-- Slider of the top-->
		
		
	<!-- Frame of the main body starts here. -->	
	<div class = "about_us_frame">
		
		<div class = "contact_us_wrap">
		
		
			<div class = "contact_us_block0">
			
			
				<h2 class="sideline" style="text-align: center">Contact Us</h2>
				
				<form action="" method="get" onsubmit="return confirmSubmit()">
					<p>First Name <br />
						<input type="text" name="first_name" id="firstname" size="50" value="Enter Your First Name" onclick="if (this.value == 'Enter Your First Name') this.value = '';"/>
					</p>
					<p>Last Name <br />
						<input type="text" name="last_name" id="lastname" size="50" value="Enter Your Last Name" onclick="if (this.value == 'Enter Your Last Name') this.value = '';"/>
					</p>
					<p>E-mail Address <br />
						<input type="text" name="email" id="email"size="50" value="Enter your E-mail Address" onclick="if (this.value == 'Enter your E-mail Address') this.value = '';"/>
					</p>
					<p>Phone Number <br />
						<input type="text" name="phone" id="phone" size="50" value="Enter Your Phone Number" onclick="if (this.value == 'Enter Your Phone Number') this.value = '';"/>
					</p>
					<p>Subject: 
						<select name="subject_type" id="subjecttype" >
							<option value="unselected">Select a Subject Type</option>
							<option value="Order">		ORDER AND PAYMENTS</option>
							<option value="Account">	ACCOUNT AND WEBSITE</option>
							<option value="Games">		GAMES TECHNICAL ISSUES</option>
							<option value="Downloads">	DOWNLOADS</option>
							<option value="Policies">	POLICIES AND GENERAL INFO</option>
							<option value="GG">			GAMES GALAXY</option>
							<option value="other">		OTHER SUBJECT</option>
						</select>
					</p>
					<div id="divother" style="display: none;">
						<p>Other
							<input type="text" name="othertext" size="50" value="Enter Other Subject Type" onclick="if (this.value == 'Enter Other Subject Type') this.value = '';" /></p></div>
							
					<fieldset id="fieldset">
					
						<legend>Comment</legend>
						
						<textarea rows="20" cols="80" name="comment" id="text_area">
						
						</textarea>
						
					</fieldset>
					
					<p>How should we contact you? 
					
						<input type="radio" name="contactHow" value="call_me" /> Call me
						<input type="radio" name="contactHow" value="e-mail_me" /> E-mail me
						
					</p>
					
					<p><input class = "button_3" type="submit" /></p>
					
					 <span id="result"></span>
					 
					   
					
				</form>
			
			
				
			</div>	
				
			<div class = "contact_us_block1">	
			
			<div class="contactside">
				<h3 class="sideline" style="text-align: center">Contact Information</h3>
				<p><b>Our Office</b></p>
				<p>BG-13, Tagore bhavan, SVNIT, Surat</p>
				<p><b>Office Hours</b></p>
				<p>Monday - Thursday: 8:30am to 7:00pm</p>
				<p>Friday - Saturday: 9:00am to 5:30pm</pm>
				<p>Sunday: Closed</p>
				<p><b>Contact us</b></p>

				<a href="tel:+919265456646"><image src = "img/social/ico06.png" alt = "social0" style="width:40px;height:40px;padding:5px;cursor: pointer;margin-left:10px"</a>
				<a href="mailto:admissions@na.edu"><image src = "img/social/ico07.png" alt = "social0" style="width:40px;height:40px;padding:5px;cursor: pointer;"</a>
				
			</div>
			<h3 id="map_header">Our location</h3>
			<div>
			
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!
			1m12!1m3!1d3720.7916856082916!2d72.78713821502782!3d21.
			160686885927056!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1
			!3m3!1m2!1s0x3be04df1d48abe53%3A0x999a950275a9f065!2s
			Tagore%20Bhavan%20Hostel%20-%208!5e0!3m2!1sen!2sin!4v1573736936368!5m2!1sen!2sin" 
			width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
			
			
			
				
			
			</div>
			
		
		</div>
		
		<div id = "clear"></div>
		
		
		
		
		
		
		</body>
		
		<!-- Footer block starts here-->
		<footer>
		
		<div class = "social">
			
			<h4>Follow us!</h4>
			<a href="#"><image src = "img/social/ico00.png" alt = "social0"></a>
			<a href="#"><image src = "img/social/ico01.png" alt = "social0"></a>
			<a href="#"><image src = "img/social/ico02.png" alt = "social0"></a>
			<a href="#"><image src = "img/social/ico03.png" alt = "social0"></a>
			<a href="#"><image src = "img/social/ico04.png" alt = "social0"></a>
			<a href="#"><image src = "img/social/ico05.png" alt = "social0"></a>
			
		</div>
		<div class="footer">
			<a href="index.php">Home</a>
			<a href="#">Privacy</a>
			<a href="page_aboutus.php">About us</a>
			<a href="page_contactus.php">Contact us</a>
		</div>
				<div id = "rights">
					<a>&copy; 2019 Games Galaxy Corporation. All rights reserved.</a>
				</div>



		</div>
		</footer>
	</div>
</html>