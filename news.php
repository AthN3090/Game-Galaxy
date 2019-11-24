<?php require './php/server.php' ?>
<!doctype html>
<html lang="en-us">

	<!-- Header of the page-->
	<head>
		<meta charset="utf-8">
		<meta author = "author" content = "Jesus,Ibrahima,Leland">
		<title>Game Galaxy</title>
		
		<link rel="stylesheet" href="css/site.css"> 				<!-- Needed for general page styling-->
		<link rel="stylesheet" href="css/footer.css"> 				<!-- Needed for everypage that uses footer-->
		<link rel="stylesheet" href="css/non_index_styling.css"> 	<!-- Needed for navbar margin and color in genre pages, and genre block styling-->
		<link rel="stylesheet" href="css/news.css">					<!-- Needed for news page styling-->
		<script type="text/javascript" src="js/scripts.js"></script>
	</head>
	<script src="./js/ajax.js"></script>
	<script>
	 usercheck();
	</script>
	
	<!-- Body of the page starts here-->
	<body id="body_news">
	
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
								<li><a href="news.php#nintendo1">Nintendo Switch</a></li>
								<li><a href="news.php#xboxone1">Xbox One</a></li>
								<li><a href="news.php#sony1">PlayStation</a></li>
								<li><a href="news.php#pc_gamer1">PC</a></li>
								</ul>
							</li>
						
							<li><a class="dropdown" href="#">About Us</a>
								<ul>
									<li><a href="page_aboutus.php">Get to know us</a></li>
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
			
			
		<!-- Frame of the main body starts here. -->	
		<div class = "frame_news">
			<!-- Partition of news-->
		
			<!-- News Block start-->
			
			<!-- News 1-->
				
				<div class = "outer_news" id="nintendo1">
					<h1 id="title_news">Double the battery life on your Nintendo Switch with this awesome accessory</h1>
						<h5>Raging when the battery runs out? The solution is right here</h5>
						<image src = "img/logo/logo2.png" alt = "social0" id="author_img">
							<p class="small">by: Games Galaxy Team<br/>
							Posted on November 01, 2019</p>
							<img src="img/news/news2.png" id="news_picture">
						
						<p class ="big">As is the case with a smartphone, the most annoying thing about the Nintendo Switch is that it tends to run out of battery when you need it most. But again, just like a smartphone,
						there’s something you can do to fix that. The Antank Switch Battery Charger Case packs a massive 6,500 mAh battery into a compact case that attaches to the back of your Switch.
						Presto, you’ve doubled your battery life!

						Here’s some key info from the product page:

						The Switch battery backup specially design for [2017 Switch] video game machine, not only give 6500mAh additional power, but also protect it from dropping by accident

						Technical specification
						Battery type: Li-Polymer Battery
						Model: SWBC-007
						Capacity: 6500mAh(32.5Wh)
						Input: 0.5-1.8A(auto-identity)
						Output: DC=1.5A
						Charging interface: Type-c
						Size:165x110x26mm
						Net weight: 227g
						</p>
						
						
						
						<p class="big" id="nintendo">Category: Nintendo Switch</p>
						
						
						<div id = "clear"></div>
					<div id = "clear"></div>
					
					
				</div>
				
				
				<!-- News 2-->
				
				<div class = "outer_news" id="nintendo2">
					<h1 id="title_news">Xenoblade Chronicles 2: How to Get Salty Soil</h1>
						<h5>Stop wasting time looking around, we got your back!</h5>
						<image src = "img/logo/logo2.png" alt = "social0" id="author_img">
							<p class="small">by: Games Galaxy Team<br/>
							Posted on November 02, 2019</p>
							<img src="img/news/news3.png" id="news_picture_style_2">
						
						<p class ="big">Xenoblade Chronicles 2 offers a vast world for players to explore and make the
						most of. Partner up with Rex and Pyra as they traverse through Alrest with the purpose of reaching
						the mythical land of Elysium. While there’s plenty going on in the grand adventure, the game also
						offers other side quests and activities for players to do.

						The world is interactive as there are plenty of collection points scattered throughout the map.
						You can use these drops to unlock certain abilities, trade them in for other items, or give them
						to NPCs to finish certain quests. Since Alrest is so big, it might feel like a bit of a challenge
						trying to find certain drops.
						That said, one particular item called Salty Soil might be a bit tricky to find. All you need to do
						is skip travel to the Stone Gate Ruins and head up until you find a collection point nearby. There
						’s a chance you will dig up some Salty Soil, but beware of the Karlin Skwaror lurking nearby.
						To make things easier, try having a blade that knows Mineralogy to spawn more drops.

						here are plenty of other items to find and collect in Xenoblade Chronicles 2.
						For more help with the game, be sure to search for Twinfinite!
						</p>
						
						<img src="img/news/xeno2.png" id="news_picture_style_3">
						<img src="img/news/xeno1.jpg" id="news_picture_style_3">
						<div id = "clear"></div>
						<p class="big" id="nintendo">Category: Nintendo Switch</p>
						
						
						<div id = "clear"></div>
						
					
				</div>
				
				<!-- News 3-->
				
				<div class = "outer_news" id="xboxone1">
					<h1 id="title_news">The best Xbox One games</h1>
						<h5>This is how you should spend your time gaming on the Xbox One</h5>
						<image src = "img/logo/logo2.png" alt = "social0" id="author_img">
							<p class="small">by: Games Galaxy Team<br/>
							Posted on November 02, 2019</p>
	
							<img src="img/news/pic_xbox.png" id="news_picture_style_4">
						
						<p class ="big"></br>The Xbox One has come a long way since its 2013 debut. Microsoft has fixed the
						console's hardware flaws with the One S and the recently released One X, but now it has a
						different problem to address: a dearth of compelling games you can't play anywhere else. In
						recent years the company has relied on timed third-party exclusives that eventually make their
						way to other platforms or are also available on Windows and Steam.</br></br>

						It happens on PS4 as well, but the difference there is that Sony has a wide assortment of games
						that you can only play on its console. That's not to say there aren't exclusive games worth
						playing on Xbox; it's just that they're buried among annual Forza racing games, middling modern
						Halo releases and the testosterone-fueled Gears of War franchise. Microsoft has promised to break
						out of that predictable release cadence, though, so the future could be brighter than you may have
						come to expect. As it stands, these are the best Xbox One games you can play right now.</br>

						
						</p></br>
						
						<a href="page_featured_games.php#forza_horizon3"><img src="img/news/pic_xbox_1.png" id="news_picture_style_3"></a>
						
						<h5>Forza Horizon 3</h5>
						
						<p class="big">Forza Horizon 3 isn't just Microsoft's most recent off-road racer -- it's the best entry in
						the Horizon series to date. And you don't have to be a gearhead to have a blast tooling around
						the game's Australian outback. Unlike the mainline Forza Motorsport series, the emphasis here is
						on pedal-to-the-metal, arcade-inspired fun that emphasizes silliness over simulation. But that 
						doesn't mean Horizon isn't serious about accuracy; physics still matter, and you can of course
						upgrade and tune your favorite ride to your heart's content. Need a break from the Outback's
						beaches and jungles? The "Blizzard Mountain" expansion takes the terror out of driving in 
						inclement weather, while the Hot Wheels add-on puts the toy cars and their trademark orange
						loop-de-loop tracks on your flatscreen.
						</p>
						
						<h5>Cuphead</h5>
						
						<p class="big">After a series of delays, Cuphead finally came out this year. And it was worth the wait. Studio 
						MDHR's challenging side-scrolling shooter calls to mind classics like Contra and Ghouls 'n Ghosts,
						with retro visuals to match. Rather than pixel art reminiscent of the 8- or 16-bit era, though,
						Cuphead features hand-drawn animation inspired by cartoons from the 1930s. Keep in mind, this game
						isn't for the faint of heart. You'll simultaneously have to memorize level layouts, enemy placemen
						ts and bosses' attack patterns if you want to succeed. That's in addition to reminding yourself to
						duck incoming fire and not get distracted by the inventive audio and visual design. If that seems
						like a tall order, it is. But you like a challenge, right?</p>
						
						
						<img src="img/news/pic_xbox_2.png" id="news_picture_style_5">
						
						<h5>Overwatch</h5>
						
						<p class="big">If you're playing Blizzard's hero shooter on a console, Xbox One is where you should do it. 
						Playing with friends online feels effortless thanks to the way Xbox Live is baked into every 
						facet of the console. Adjusting the balance between party chat and game audio, adding new 
						friends to your group and even broadcasting your session via Mixer is dead simple on Microsoft's
						hardware. The game was first released last year, and is showing no signs of getting stale. The 
						team at Blizzard keeps the game humming by regularly releasing new heroes, maps and modes, for 
						free. Just remember, if you're going to play, there are never enough people moving the payload 
						toward the objective. Your team will be grateful for the help.</p>
						
						<img src="img/news/img_xbox_4.png" id="news_picture_style_4">
						<img src="img/news/img_xbox_3.png" id="news_picture_style_5">
						<div id = "clear"></div>
						<h5>Quantum Break</h5>
						
						<p class-"big">Quantum Break is at once a cinema-inspired third-person shooter and an interactive TV drama where
						the choices you make in the game affect how each episode of the show plays out. Manipulating time goes
						beyond the game's narrative and impacts how you solve puzzles and take out enemies. The game's surreal vistas are
						particularly impressive. Thanks to a glitch in the space-time continuum, time itself is breaking 
						down. Which means every now and again, everything in a given scene will go into still-frame, be
						it a shipping barge crashing into a suspension bridge, or a helicopter attacking an office 
						building. It makes for some incredibly cool platforming sequences. And if you've just picked up 
						an Xbox One X, Remedy went back over the game to make those "stutters" (and everything else) 
						perform better on Microsoft's new hardware.</p>
						
						<img src="img/news/pic_xbox_6.png" id="news_picture_style_5">
						
						<div id = "clear"></div>
						<p class="big" id="nintendo">Category: Xbox One</p>
						
						
						<div id = "clear"></div>
						
						
						</div>
				
				<!-- News 4-->

				
				<div class = "outer_news" id="pc_gamer1">
					<h1 id="title_news">Save 20% off a PC Gamer or Maximum PC subscription in our 24-hour flash sale</h1>
						<h5>Missed black friday? Were you broke? No problem, just use the code FESTIVE20 to save some bucks</h5>
						<image src = "img/logo/logo2.png" alt = "social0" id="author_img">
							<p class="small">by: Games Galaxy Team<br/>
							Posted on November 03, 2019</p>
							<img src="img/news/img_pc_0.png" id="news_picture_style_5">
						
						<p class ="big">Missed our Black Friday sale? You can save an extra 20% off all PC Gamer 
						subscriptions today only by clicking here and using the code FESTIVE20. For Indian 
						residents, this means a year of PC Gamer to your door for just Rs 1,381.71</br>

						For indian readers, this is on top of our already discounted holiday sale prices, meaning you can 
						subscribe to the print version of the magazine for under Rs 277.14 an issue if you live in the India, 
						which is a massive saving. You'll also get downloadable gifts every month and exclusive subscriber
						covers with the indian print edition.</br>

						The same deal also applies to our hardware-focused sister magazine Maximum PC. Indian residents can
						get this for just Rs 1,381.71 with the code FESTIVE20.</br>

						Prices vary depending on where you live, but it's 20% off everything regardless of where you live.
						This offer ends at 08.00 Indian time on November 25th. That's tomorrow or today, depending on when 
						you're reading this. Be quick!
						</p>
						
						<img src="img/news/img_pc_1.png" id="news_picture_style_5">
						
						<div id = "clear"></div>
						<p class="big" id="nintendo">Category: PC</p>
						
						
						<div id = "clear"></div>
						
					
				</div>
				
				<!-- News 5-->
				
					<div class = "outer_news" id="sony1">
					<h1 id="title_news">Free PS4 PS Plus Games For December 2017 Now Available</h1>
						<h5>That's the way you do it, SONY</h5>
							<image src = "img/logo/logo2.png" alt = "social0" id="author_img">
							<p class="small">by: Games Galaxy Team<br/>
							Posted on November 04, 2019</p>
							<img src="img/news/img_ps4_0.png" id="news_picture_style_5">
						
						<p class ="big">It's officially December, and the first Tuesday of the month has brought with it a
						new batch of free games for PlayStation Plus members. A total of six more games are now available
						for download to Plus subscribers, including a total of as many as four on PlayStation 4 
						(or five if you're in Europe).<br/>

						PS4's lineup is headlined by Darksiders II: Deathinitive Edition, a remastered version of the 2012
						Zelda-esque action game. This version includes all of the original release's DLC along with a 
						variety of technical improvements. It's free this month alongside Kung Fu Panda: Showdown of 
						Legendary Legends. A PSVR freebie from November, Until Dawn: Rush of Blood, remains free 
						throughout this month, and those in Europe can also pick up That's You for free. Additionally, 
						thanks to Cross-Buy, Forma 8 is available on PS4 in addition to Vita.<br/><br/>

						The PS3 side features Xblaze: Lost Memories and Syberia Collection, the latter of which is a 
						compilation of the two Syberia adventure games. In addition to the aforementioned Forma 8, Vita 
						owners can download Wanted Corp for free.<br/><br/>

						All of these games are available now for PS Plus members on the PlayStation Store. They'll be 
						free to download until Tuesday, January 2, when Sony will replace them with the next batch of 
						freebies. Claiming these games allows you to play them as much as you want for as long as you 
						have an active Plus membership.<br/><br/>

						In addition to the free game downloads, PS Plus subscribers receive some other bonuses this month.
						Plus members get exclusive access to the Monster Hunter World beta, which runs from December 
						9-12 on PS4. Later in the month, they'll also receive the PlayStation Plus Pack for free-to-play 
						game Smite, which consists of various characters, skins, and voice packs.<br/><br/>

						December 2017 Free PS Plus Games<br/><br/>

						PS4<br/>

						1. Darksiders II: Deathinitive Edition
						Forma 8<br/>
						2. Kung Fu Panda: Showdown of the Legendary Legends
						That's You (EU only)<br/>
						3. Until Dawn: Rush of Blood (PSVR)<br/><br/>
						PS3<br/>

						1. Xblaze Lost: Memories<br/>
						2. Syberia Collection<br/><br/>
						Vita<br/>

						1.Forma 8<br/>
						2.Wanted Corp
						</p>
						
						
						<p class="big" id="nintendo">Category: PS4, PS4 Pro, PS3, PS Vita</p>
						
						
						
						<div id = "clear"></div>
				</div>
				
				
				
				
				

				
	</body>
				
		
		<div id = "clear">
		
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
