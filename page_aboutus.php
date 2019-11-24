<?php require './php/server.php' ?>
<!doctype html>
<html lang="en-us">

	<!-- Header of the page-->
	<head>
		<meta charset="utf-8">
		<meta author = "author" content = "Jesus,Ibrahima,Leland">
		<title>Game Galaxy</title>
		
		
		<link rel="stylesheet" href="css/footer.css">
		<link rel="stylesheet" href="css/about_us.css">				<!-- Needed for about us styling-->
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
							
								<li><a class="dropdown" href="#">News</a>
									<ul>
										<li><a href="news.php">Nintendo Switch</a></li>
										<li><a href="news.php">Xbox One</a></li>
										<li><a href="news.php">PlayStation</a></li>
										<li><a href="news.php">PC</a></li>
									</ul>
								</li>
								</li>
								
								<li><a class="dropdown" href="#">Contact us</a>
									<ul>
										<li><a href="page_contactus.php">Support</a></li>
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
		

		<!-- First banner that divides blocks. -->
		<div class = "about_us_logo">
			
			<img src="img/logo/logo2.png">
			
		</div>
		
		<div class = "about_us">
		
			<h2>Games Galaxy Corporation</h2>
		
				<p>Games Galaxy is an idea born as a project for software engineering at IIIT SURAT. Since all the team members
				liked videogames, we decided to create a friendly website whose main purpose is not only serving as a
				retail-seller website, but to also have a news section that will encourage users to visit Games Galaxy
				frequently to read topics related to the videogame industry. In our journey we encountered difficulties due
				to time constraints and honing our programming skills. However, we worked hard, and shared our ideas
				to make possible the final result. We like our project so much that we would love to keep developing
				this website prototype and see it become a reality as a fully functional website in the future.</p>
		
		</div>
		
		<!-- Know the developers-->
	
		<div class = "about_us_dev" id="developers">
		
			<h3>Know the developers!</h3>
			
				<div class = "dev">
				
				<a href="best_sellers.php"></a><img src="img/social/dev0.JPG">
				<h4>Aman Dev Chowdhary</h4>
				<p>3rd year student at IIIT Surat</p>
				<p>amandevrishi12@gmail.com</p>
				<p>
				UI17CO12
				</p>
				
				
				
				</div>
				
				<div class = "dev1">
				
				
				<img src="img/social/dev1.png">
				<h4>Ankit Patel</h4>
				<p>3rd year student at IIIT Surat</p>
				<p>ankit.patel@gmail.com</p>
				<p>UI17CO11</p>
				
				
			
				
				</div>
				
				
				<div class = "dev2">
				
				<img src="img/social/dev2.png">
				<h4>Tuneer Upadhyay</h4>
				
				<p>3rd year student at IIIT Surat</p>
				<p>tuneer.upadhyay@gmail.com</p>
				<p>UI17CO19</p>
				
				
				</div>
				
				
		
		</div>
		
		<!-- Third banner that divides blocks -->
		
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