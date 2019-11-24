<!doctype html>
<?php require './php/server.php' ?>
<html lang="en-us">

	<!-- Header of the page-->
	<head>
		<meta charset="utf-8">
		<meta author = "author" content = "Jesus,Ibrahima,Leland">
		<title>Game Galaxy</title>
		
		<link rel="stylesheet" href="css/site.css">
		<link rel="stylesheet" href="css/slider.css">
		<link rel="stylesheet" href="css/bump.css">
		<link rel="stylesheet" href="css/footer.css">
		
		<script type="text/javascript" src="js/scripts.js"></script>
	</head>

	
	<!-- Body of the page starts here-->
	<body id="body">
	
	<script src="./js/ajax.js"></script>
	<script>
	 usercheck();
	</script>
	<?php

	fetch_game_main($db);
	
	?>
	
	<div class = "container">
	<!-- Top of the page that use the logo-->
		<div class = "top">
			
			<a><img src="img/logo/logo2.png"></a>
			
		</div>
		<!-- Navegation bar block-->
		<div class = "navbar">
			<nav>
				<ul class="cf">
				
					<li>
						<a class="dropdown" href="index.php">Home</a>
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
					
						<li><a class="dropdown" href="#">About Us</a>
							<ul>
								<li><a href="page_aboutus.php#developers">Get to know us</a></li>
								<li><a href="page_aboutus.php">Game Galaxy Project</a></li>
							</ul>
						</li>
						
						<li><a class="dropdown" href="page_contactus.php">Contact us</a>
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
		<div class = "slider">
			<figure>
				<div class="slide" >
					<img src="img/slide/banner00.png" >
				</div>
			
				<div class="slide">
					<img src="img/slide/banner01.png" >
				</div>
			
				<div class="slide">
					<img src="img/slide/banner02.png" >
				</div>
			
				<div class="slide">
					<img src="img/slide/banner03.png" >
				</div>
			
				<div class="slide">
					<img src="img/slide/banner04.png" >
				</div>
			</figure>
		</div>
		
		
		
	<!-- Frame of the main body starts here. -->	
	<div class = "frame">
		<!-- Partition of news-->
		<div class = "block0">
			<h4>News</h4>
					
					
						
						<div class = "news0">
							<div class="ele">
								<img src="img/news/news2.png">
							</div>
							<div class="ele">
								<div class ="news0info" >
									<a href="news.php#nintendo1">Double the battery life on your Nintendo Switch with this awesome accessory</a>
								</div>
							</div>
						</div>
						
						<div class = "news1">
							<div class="ele2">
								<img src="img/news/news3.png">
							</div>
							<div class="ele2">
								<div class = "news1info">
									<a href="news.php#nintendo2">Xenoblade Chronicles 2: How to Get Salty Soil</a>
								</div>
							</div>
						</div>
						
						<div class = "news1">
							<div class="ele2">
								<img src="img/news/news1.png">
							</div>
							<div class="ele2">
								<div class = "news1info">
									<a href="news.php#xboxone1">The best Xbox One games that are available right now</a>
								</div>
							</div>
						</div>
						
						<div class = "news1">
							<div class="ele2">
								<img src="img/news/news0.png">
							</div>
							<div class="ele2">
								<div class = "news1info">
									<a href="news.php#pc_gamer1">Save 20% off a PC Gamer or Maximum PC subscription in our 24-hour flash sale</a>
								</div>
							</div>
						</div>
							
							
		</div>
		
		<!-- Partition of hot deals -->
		<div class = "block1">
			<h4>Hotdeals</h4>
				
				
				
				<div class="slideshow-container">

				<div class="mySlides fade">
					<div class="numbertext">1 / 3</div>
					<img src="img/background/backg05.png" style="width:100%">
					<div class="text">BUY NOW: NEED FOR SPEED PAYBACK 20% OFF!!!</div>
				</div>

				<div class="mySlides fade">
				  <div class="numbertext">2 / 3</div>
				  <img src="img/background/backg06.png" style="width:100%">
				  <div class="text">BUY NOW: COD:WWII 30% OFF!!!</div>
				</div>

				<div class="mySlides fade">
				  <div class="numbertext">3 / 3</div>
				  <img src="img/background/backg07.png" style="width:100%">
				  <div class="text">BUY NOW: FINAL FANTASY XV 50% OFF!!!</div>
				</div>

				</div>
				<br>

				<div style="text-align:center">
				  <span class="dot"></span> 
				  <span class="dot"></span> 
				  <span class="dot"></span> 
				</div>
				
		<!-- JavaScript Function to make the hot deals slider work-->
				<script>var slideIndex = 0;showSlides();</script>
		</div>
		<div id="social_news_index">
						<a href="https://www.facebook.com/Games-Galaxy-1805648999468804/"><image src = "img/social/ico00.png" alt = "social0"></a>
						<a href="https://www.instagram.com/northamericanu/"><image src = "img/social/ico01.png" alt = "social0"></a>
						<a href="https://www.youtube.com/watch?v=_yF08r-49m0&feature=youtu.be"><image src = "img/social/ico02.png" alt = "social0"></a>
						<a href="https://twitter.com/NorthAmericanU"><image src = "img/social/ico03.png" alt = "social0"></a>
						<a href="https://www.twitch.tv/"><image src = "img/social/ico04.png" alt = "social0"></a>
						<a href="https://www.linkedin.com/"><image src = "img/social/ico05.png" alt = "social0"></a>
						</div>
		
		
		<!-- First banner that divides blocks. -->
		<div class = "bump0">
			
			<a href="page_featured_games.php"><img src="img/bump/bump_nier2.png"></a>
			
		</div>
		
		<!-- Feature games block-->
		<div class = "feat_games">
		
			
			
			<div id = "inner_frame">
				
					
				
				
			</div>
			
			

		</div>
			
			<!-- Second banner that divides blocks -->
			<div class = "bump1">
				<a href="page_best_sellers.php"><img src="img/bump/bump02.png"></a>
			</div>
			
			
			<!-- Best Sellers block -->
			
			
			<div class = "best_sellers">
			
			
		
			<!-- <table> Table will make them smaller when decreasing page size -->
			<div id = "inner_frame">
			
				
			</div>
			<!-- </table> -->
		
		</div>
		
		<!-- Third banner that divides blocks -->
		<div class = "bump2">
				<a href="page_on_sale.php"><img src="img/bump/bump01.png"></a>
		</div>
		
		<!-- ON SALE block-->
		<div class = "on_sale">

		<div id = "inner_frame">
			
					</div>
		
		</div>
	
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