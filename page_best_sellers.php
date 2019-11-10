<?php require './php/server.php' ?>
<!doctype html>
<html lang="en-us">

	<!-- Header of the page-->
	<head>
		<meta charset="utf-8">
		<meta author = "author" content = "Jesus,Ibrahima,Leland">
		<title>Game Galaxy</title>
		
		<link rel="stylesheet" href="css/site.css"> 				<!-- Needed for general page styling-->
		<link rel="stylesheet" href="css/bump.css"> 				<!-- Needed for general every single page that uses a bump picture-->
		<link rel="stylesheet" href="css/footer.css"> 				<!-- Needed for everypage that uses footer-->
		<link rel="stylesheet" href="css/non_index_styling.css"> 	<!-- Needed for navbar margin and color in genre pages, and genre block styling-->
		<script type="text/javascript" src="js/scripts.js"></script>
	</head>

	
	<!-- Body of the page starts here-->
	<body id="body_others">
	<script src="./js/ajax.js"></script>
	<script>
	 usercheck();
	</script>
	
	<?php 
	$target = "Best Sellers";
	fetch_tagged_games($db,$target);
	?>
	
	<div class = "container">
	<!-- Top of the page that use the logo-->
		<div class = "top">
			
			<img src="img/logo/logo2.png">
			
		</div>
		<!-- Navegation bar block-->
		<div class = "navbar_2">
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
							<li><a href="page_others.php">Others</a></li>
							
						</ul>
					</li>
					
					<li><a class="dropdown" href="#">Games</a>
						<ul>
							<li><a href="page_featured_games.php">Featured Games</a></li>
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
					
						<li><a class="dropdown" href="#">About Us</a>
							<ul>
								<li><a href="page_aboutus.php#developers">Get to know us</a></li>
								<li><a href="page_aboutus.php">Game Galaxy Project</a></li>
							</ul>
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
		
		
	<!-- Outer Frame of the main body starts here. -->	
	<div class = "frame">
		

		<!-- First banner that divides blocks. -->
		<div class = "bump_racing">
			
			<img src="img/bump/banner_best_sellers.png">
			
		</div>
	
		
		<!-- Best seller Game 1-->	
			
			
							</div>
		<!-- Advertising on sale games block -->	
		</body>
		
			
		
		<div id = "clear">
		
		<!-- Footer block starts here-->
		<footer>
		
				<div class = "social">
			
					<h4>Follow us!</h4>
					<a href="https://www.facebook.com/Games-Galaxy-1805648999468804/"><image src = "img/social/ico00.png" alt = "social0"></a>
					<a href="https://www.instagram.com/northamericanu/"><image src = "img/social/ico01.png" alt = "social0"></a>
					<a href="https://www.youtube.com/watch?v=_yF08r-49m0&feature=youtu.be"><image src = "img/social/ico02.png" alt = "social0"></a>
					<a href="https://twitter.com/NorthAmericanU"><image src = "img/social/ico03.png" alt = "social0"></a>
					<a href="https://www.twitch.tv/"><image src = "img/social/ico04.png" alt = "social0"></a>
					<a href="https://www.linkedin.com/"><image src = "img/social/ico05.png" alt = "social0"></a>
					
				</div>
				<div class="footer">
					<a href="index.php">Home</a>
					<a href="privacy.php">Privacy</a>
					<a href="page_aboutus.php">About uss</a>
					<a href="page_contactus.php">Contact us</a>
				</div>
				<div id = "rights">
					<a>&copy; 2017 Games Galaxy Corporation. All rights reserved. All trademarks are property of their respective owners in the US and other countries.</a>
				</div>

		</div>
		
		</footer>
	</div>
</html>