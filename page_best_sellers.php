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
			<div class = "outer" id = "nier">
			<!-- Left block: Video and sinopsys-->
			<p id="title">Nier: Automata</p>
			
				<div class = "wrap_left">
				
					<div id = "video">
						<iframe width="560" height="315" src="https://www.youtube.com/embed/wJxNhJ8fjFk" frameborder="0" gesture="media" allowfullscreen></iframe>
					</div>
					<p>The story is based around themes similar to Yoko's earlier works, such as people's impulse to kill, while also incorporating issues such as confronting prejudice and
					escaping difficult situations. The goal was to make a Nier game true to the spirit of the original
					, while simultaneously crafting a better combat system. As a project entirely new to the developers,
					the staff at Platinum Games faced multiple challenges when developing its gameplay and open world environment.</p>
				</div>
				<!-- Right block: Information, picture of game, and buying options-->
				<div class = "wrap_right"> 
					<div id = "game_text">
						<p>Price: <span style="background-color:green;font-size:1.1em;">
						35%off </span>
						<span style="text-decoration: line-through;font-size:1.6em;color:grey"> $59.99</span>
						<span style="font-size:1.6em;"> $39.99</span>
						<br/>Category: RPG<br/>Developer: PlatinumGames<br/>
						Publisher: Square Enix<br/>
						Release Date: Feb 23, 2017<br/>
						Platform: PS4, PC
						</p>
					</div>
					
					
							<div id = "game_img">
							<img src="img/games/game_adventure02.png">
							<div id = "clear"></div>
						
						
						<form target="PayPal" action="https://www.paypal.com/cgi-bin/webscr" method="post" style="margin:0;padding:0;">
							<input type="hidden" name="business" value="ljb2k5@gmail.com">
							<input type="hidden" name="cmd" value="_cart">
							<input type="hidden" name="add" value="1">
							<input type="hidden" name="item_name" value="Nier:Automata">
							<input type="hidden" name="item_number" value="ACO">
							<input type="hidden" name="amount" value="39.99">
							<input type="hidden" name="tax" value="3.96">
							<input type="hidden" name="currency_code" value="USD">
							<input type="hidden" name="return" value="">
							<input type="hidden" name="cancel_return" value="">
							<input type="hidden" name="receiver_email" value="ljb2k5@gmail.com">
							<input type="hidden" name="no_shipping" value="0">
							<input type="hidden" name="no_note" value="1">
							<input type="hidden" name="shipping" value="3.00">
							<input type="hidden" name="shipping2" value="0.00">
							<input type="hidden" name="handling" value="0.00">
							<input type="hidden" name="on0" value="Platform">
							
						<div class ="platform_wrap">
							
							<p style="color:white;" >Select Platform</p>
							
							<select name="os0" id="platform_choice">
							<option value="PS4">PS4</option>
							<option value="PC">PC</option>
							</select>
							
							
							<div id = "clear"></div>
							
							<div id="button_left">
							<input id="PayPal5" type="image" style="font-size: 0.7em;" value="Add to cart" <button class="button"></button> 
							</div>
							
						</form>
							
							<div id="button_right">
							<form target="PayPal" action="https://www.paypal.com/cgi-bin/webscr" method="post" style="margin:0;padding:0;">
								<input type="hidden" name="business" value="ljb2k5@gmail.com">
								<input type="hidden" name="cmd" value="_cart">
								<input type="hidden" name="display" value="1">
								<input id="PayPal6" type="image" style="font-size: 0.7em;" value="View Cart" <button class="button"></button> 
							</form>
							</div>
							<div id = "clear"></div>							
						
						</div>
					</div>
			
				
				</div>
				<div id = "clear"></div>
				
			</div>
			
			
			<!-- Best seller Game 2-->
			<div class = "outer" id="TEW2">
			<!-- Left block: Video and sinopsys-->
			<p id="title">The Evil Within 2</p>
			
				<div class = "wrap_left">
				
					<div id = "video">
					<iframe width="560" height="315" src="https://www.youtube.com/embed/KvP2H0UERZw"  frameborder="0" gesture="media" allowfullscreen></iframe>
					
										
					</div>
					<p>Detective Sebastian Castellanos has lost everything, including his daughter, Lily. To save her, he must descend into the nightmarish world of STEM.
					Horrifying threats emerge from every corner, and he must rely on his wits to survive. For his one chance at redemption, the only way out is in.</p>
				</div>
				
				<div class = "wrap_right"> <!-- Right block-->
					<div id = "game_text">
						<p>Price: <span style="background-color:green;font-size:1.1em;">
						50%off </span>
						<span style="text-decoration: line-through;font-size:1.6em;color:grey"> $59.00</span>
						<span style="font-size:1.6em;"> $29.99</span>
						<br/>Category: Horror<br/>Developer: Tango Gameworks<br/>
						Publisher: Bethesda Softworks<br/>
						Release Date: Oct 13, 2017<br/>
						Platform: PS4, Xbox one, Microsoft Windows
						</p>
					</div>
					
					<div id = "game_img">
							<img src="img/games/game_other02.png">	
							<div id = "clear"></div>
						
						
						<form target="PayPal" action="https://www.paypal.com/cgi-bin/webscr" method="post" style="margin:0;padding:0;">
							<input type="hidden" name="business" value="ljb2k5@gmail.com">
							<input type="hidden" name="cmd" value="_cart">
							<input type="hidden" name="add" value="1">
							<input type="hidden" name="item_name" value="The Evil Within 2">
							<input type="hidden" name="item_number" value="ACO">
							<input type="hidden" name="amount" value="29.99">
							<input type="hidden" name="tax" value="3.96">
							<input type="hidden" name="currency_code" value="USD">
							<input type="hidden" name="return" value="">
							<input type="hidden" name="cancel_return" value="">
							<input type="hidden" name="receiver_email" value="ljb2k5@gmail.com">
							<input type="hidden" name="no_shipping" value="0">
							<input type="hidden" name="no_note" value="1">
							<input type="hidden" name="shipping" value="3.00">
							<input type="hidden" name="shipping2" value="0.00">
							<input type="hidden" name="handling" value="0.00">
							<input type="hidden" name="on0" value="Platform">
							
						<div class ="platform_wrap">
							
							<p style="color:white;" >Select Platform</p><select name="os0" id="platform_choice">
							
							<option value="XBOX ONE">XBOX ONE</option>
							<option value="PS4">PS4</option>
							<option value="PC">PC</option>
							</select>
							
							
							<div id = "clear"></div>
							
							<div id="button_left">
							<input id="PayPal5" type="image" style="font-size: 0.7em;" value="Add to cart" <button class="button"></button> 
							</div>	
							</form>
							
							<div id="button_right">
							<form target="PayPal" action="https://www.paypal.com/cgi-bin/webscr" method="post" style="margin:0;padding:0;">
								<input type="hidden" name="business" value="ljb2k5@gmail.com">
								<input type="hidden" name="cmd" value="_cart">
								<input type="hidden" name="display" value="1">
								<input id="PayPal6" type="image" style="font-size: 0.7em;" value="View Cart" <button class="button"></button> 
							</form>
							</div>
							<div id = "clear"></div>							
						
						</div>
					</div>
				</div>
				
				<div id = "clear">
				</div>
			</div>
			
			<!-- Best seller Game 3-->
			
			<div class = "outer" id="shadow_of_war">
				<p id="title">Middle Earth : Shadow of War</p>
					<div class = "wrap_left">
					
						<div id = "video">
							<iframe  src="https://www.youtube.com/embed/bhSfjt8jQyk?rel=0&amp" frameborder="0" gesture="media" allowfullscreen></iframe>
						</div>
							<p>The sequel to the critically-acclaimed Middle-Earth: Shadow of Mordor-winner of over 50 industry awards-arrives this August.&nbsp; 
							   Continuing the original story of Talion and Celebrimbor, who must now go behind enemy lines to forge an army 
							   in order to turn all of Mordor against the Dark Lord, Sauron.</p>			
					</div>
				
								<div class = "wrap_right"> <!-- Right block-->
					<div id = "game_text">
						 <p>Price: 
						
						<span style="font-size:1.6em;"> $59.99</span>
						<br/>Category: Adventure<br/>Developer: Monolith Studios<br/>
						Publisher: Warner Bothers Interactive<br/>
						Release Date: Oct 10, 2017<br/>
						Platform: PC, Xbox One, PS4
						</p>
					</div>
					
					
					
					<div id = "game_img">
							<img src="img/games/game_adventure04.png">
							<div id = "clear"></div>
						
						
						<form target="PayPal" action="https://www.paypal.com/cgi-bin/webscr" method="post" style="margin:0;padding:0;">
							<input type="hidden" name="business" value="ljb2k5@gmail.com">
							<input type="hidden" name="cmd" value="_cart">
							<input type="hidden" name="add" value="1">
							<input type="hidden" name="item_name" value="Middle Earth: Shadow of War">
							<input type="hidden" name="item_number" value="MESW">
							<input type="hidden" name="amount" value="59.99">
							<input type="hidden" name="tax" value="3.96">
							<input type="hidden" name="currency_code" value="USD">
							<input type="hidden" name="return" value="">
							<input type="hidden" name="cancel_return" value="">
							<input type="hidden" name="receiver_email" value="ljb2k5@gmail.com">
							<input type="hidden" name="no_shipping" value="0">
							<input type="hidden" name="no_note" value="1">
							<input type="hidden" name="shipping" value="3.00">
							<input type="hidden" name="shipping2" value="0.00">
							<input type="hidden" name="handling" value="0.00">
							<input type="hidden" name="on0" value="Platform">
							
						<div class ="platform_wrap">
							
							<p style="color:white;" >Select Platform</p><select name="os0" id="platform_choice">
							
							<option value="PC">Microsoft Windows</option>
							<option value="XBOX ONE">XBOX ONE</option>
							<option value="PS4">PS4</option>
							
							</select>
							
							
							<div id = "clear"></div>
							
							<div id="button_left">
							<input id="PayPal5" type="image" style="font-size: 0.7em;" value="Add to cart" <button class="button"></button> 
							</div>	
							</form>
							
							<div id="button_right">
							<form target="PayPal" action="https://www.paypal.com/cgi-bin/webscr" method="post" style="margin:0;padding:0;">
								<input type="hidden" name="business" value="ljb2k5@gmail.com">
								<input type="hidden" name="cmd" value="_cart">
								<input type="hidden" name="display" value="1">
								<input id="PayPal6" type="image" style="font-size: 0.7em;" value="View Cart" <button class="button"></button> 
							</form>
							</div>
							<div id = "clear"></div>							
						
						</div>
					</div>
				</div>
				
				<div id = "clear"></div>
				
				
			</div>
			
			
			<!-- Best seller Game 4-->	
			
			<div class = "outer" id="gts">
			
			<p id="title">Gran Turismo Sport</p>
			
				<div class = "wrap_left">
				
					<div id = "video">
						<iframe width="560" height="315" src="https://www.youtube.com/embed/0siGVASN9PQ" frameborder="0" gesture="media" allowfullscreen></iframe>
					</div>
					<p>Gran Turismo Sport is a racing video game developed by Polyphony Digital and published by Sony Interactive Entertainment for PlayStation 4.</p>		
				</div>
				
				<div class = "wrap_right"> <!-- Right block-->
					<div id = "game_text">
						<p>Price:
						<span style="font-size:1.6em;"> $59.00</span>
						<br/>Category: Racing<br/>Developer: Polyphony Digital<br/>
						Publisher: Sony Interactive Entertainment<br/>
						Release Date: Nov 10, 2017<br/>
						Platform: PS4
						</p>
					</div>
					
					
					
							<div id = "game_img">
							<img src="img/games/game_racing03.png">
							<div id = "clear"></div>
						
						
						<form target="PayPal" action="https://www.paypal.com/cgi-bin/webscr" method="post" style="margin:0;padding:0;">
							<input type="hidden" name="business" value="ljb2k5@gmail.com">
							<input type="hidden" name="cmd" value="_cart">
							<input type="hidden" name="add" value="1">
							<input type="hidden" name="item_name" value="Gran Turismo Sport">
							<input type="hidden" name="item_number" value="ACO">
							<input type="hidden" name="amount" value="59.00">
							<input type="hidden" name="tax" value="3.96">
							<input type="hidden" name="currency_code" value="USD">
							<input type="hidden" name="return" value="">
							<input type="hidden" name="cancel_return" value="">
							<input type="hidden" name="receiver_email" value="ljb2k5@gmail.com">
							<input type="hidden" name="no_shipping" value="0">
							<input type="hidden" name="no_note" value="1">
							<input type="hidden" name="shipping" value="3.00">
							<input type="hidden" name="shipping2" value="0.00">
							<input type="hidden" name="handling" value="0.00">
							<input type="hidden" name="on0" value="Platform">
							
						<div class ="platform_wrap">
							
							<p style="color:white;" >Select Platform</p><select name="os0" id="platform_choice">
							
							<option value="PS4">PS4</option>
							
							</select>
							
							
							<div id = "clear"></div>
							
							<div id="button_left">
							<input id="PayPal5" type="image" style="font-size: 0.7em;" value="Add to cart" <button class="button"></button> 
							</div>	
							</form>
							
							<div id="button_right">
							<form target="PayPal" action="https://www.paypal.com/cgi-bin/webscr" method="post" style="margin:0;padding:0;">
								<input type="hidden" name="business" value="ljb2k5@gmail.com">
								<input type="hidden" name="cmd" value="_cart">
								<input type="hidden" name="display" value="1">
								<input id="PayPal6" type="image" style="font-size: 0.7em;" value="View Cart" <button class="button"></button> 
							</form>
							</div>
							<div id = "clear"></div>							
						
						</div>
					</div>
				</div>
				<div id = "clear"></div>
				
				
			</div>
			
			<!-- Best seller Game 5-->
			
			<div class = "outer" id="swb2">
				<p id="title">Star Wars: Battlefront II</p>
					<div class = "wrap_left">
					
						<div id = "video">
							<iframe  src="https://www.youtube.com/embed/Uvmx94cUVEY" frameborder="0" gesture="media" allowfullscreen></iframe>
						</div>
							<p>Star Wars is at its best when it focuses on a group of unlikely heroes coming together to save the day. Luke meeting Leia, Rey finding Finn - their stories intertwine and become one, like the Force.
							   Star Wars Battlefront II features a single-player campaign that is told from the perspective of the Empire.</p>			
					</div>
				
								<div class = "wrap_right"> <!-- Right block-->
					<div id = "game_text">
						 <p>Price: 
						
						<span style="font-size:1.6em;"> $59.99</span>
						<br/>Category: Shooter<br/>Developer: EA DICE <br/>
						Publisher: Electronic Arts<br/>
						Release Date: Nov 17, 2017<br/>
						Platform: PC, Xbox One, PS4
						</p>
					</div>
					
					
					
					<div id = "game_img">
							<img src="img/games/game_shooter0.png">
							<div id = "clear"></div>
						
						
						<form target="PayPal" action="https://www.paypal.com/cgi-bin/webscr" method="post" style="margin:0;padding:0;">
							<input type="hidden" name="business" value="ljb2k5@gmail.com">
							<input type="hidden" name="cmd" value="_cart">
							<input type="hidden" name="add" value="1">
							<input type="hidden" name="item_name" value="Star Wars: Battlefront II">
							<input type="hidden" name="item_number" value="SWBF2">
							<input type="hidden" name="amount" value="59.99">
							<input type="hidden" name="tax" value="3.96">
							<input type="hidden" name="currency_code" value="USD">
							<input type="hidden" name="return" value="">
							<input type="hidden" name="cancel_return" value="">
							<input type="hidden" name="receiver_email" value="ljb2k5@gmail.com">
							<input type="hidden" name="no_shipping" value="0">
							<input type="hidden" name="no_note" value="1">
							<input type="hidden" name="shipping" value="3.00">
							<input type="hidden" name="shipping2" value="0.00">
							<input type="hidden" name="handling" value="0.00">
							<input type="hidden" name="on0" value="Platform">
							
						<div class ="platform_wrap">
							
							<p style="color:white;" >Select Platform</p><select name="os0" id="platform_choice">
							
							<option value="PC">Microsoft Windows</option>
							<option value="XBOX ONE">XBOX ONE</option>
							<option value="PS4">PS4</option>
							
							</select>
							
							
							<div id = "clear"></div>
							
							<div id="button_left">
							<input id="PayPal5" type="image" style="font-size: 0.7em;" value="Add to cart" <button class="button"></button> 
							</div>	
							</form>
							
							<div id="button_right">
							<form target="PayPal" action="https://www.paypal.com/cgi-bin/webscr" method="post" style="margin:0;padding:0;">
								<input type="hidden" name="business" value="ljb2k5@gmail.com">
								<input type="hidden" name="cmd" value="_cart">
								<input type="hidden" name="display" value="1">
								<input id="PayPal6" type="image" style="font-size: 0.7em;" value="View Cart" <button class="button"></button> 
							</form>
							</div>
							<div id = "clear"></div>							
						
						</div>
					</div>
				</div>
				
				<div id = "clear"></div>
				
				
			</div>
				
			<!-- Best seller Game 6-->
			
			<div class = "outer" id="origins">
			
			<p id="title">Assassin's Creed Origins: Gold Edition</p>
				
				<div class = "wrap_left">
				
					<div id = "video">
						<iframe width="560" height="315" src="https://www.youtube.com/embed/cUuKIpCM2o0" frameborder="0" gesture="media" allowfullscreen></iframe>
					</div>
						<p>Assassin's Creed Origins is a new beginning. Take on epic enemies with a whole new combat system. Explore the Great Pyramids and hidden tombs across the country of Ancient Egypt.
						   Experience visceral quests and discover the origin story of the Assassin's Brotherhood!</p>
				</div>
				
				<div class = "wrap_right"> <!-- Right block-->
					<div id = "game_text">
						<p>Price:
						<span style="font-size:1.6em;"> $99.00</span>
						<br/>Category: Adventure<br/>Developer: Ubisoft Montreal<br/>
						Publisher: Ubisoft/Square Enix<br/>
						Release Date: Oct 27, 2017<br/>
						Platform: PC, Xbox One, PS4
						</p>
					</div>
					
					
					
							<div id = "game_img">
							<img src="img/games/game_adventure01.jpg">
							<div id = "clear"></div>
						
						
						<form target="PayPal" action="https://www.paypal.com/cgi-bin/webscr" method="post" style="margin:0;padding:0;">
							<input type="hidden" name="business" value="ljb2k5@gmail.com">
							<input type="hidden" name="cmd" value="_cart">
							<input type="hidden" name="add" value="1">
							<input type="hidden" name="item_name" value="Assassin's Creed Origins: Gold Edition">
							<input type="hidden" name="item_number" value="ACOG">
							<input type="hidden" name="amount" value="99.00">
							<input type="hidden" name="tax" value="3.96">
							<input type="hidden" name="currency_code" value="USD">
							<input type="hidden" name="return" value="">
							<input type="hidden" name="cancel_return" value="">
							<input type="hidden" name="receiver_email" value="ljb2k5@gmail.com">
							<input type="hidden" name="no_shipping" value="0">
							<input type="hidden" name="no_note" value="1">
							<input type="hidden" name="shipping" value="3.00">
							<input type="hidden" name="shipping2" value="0.00">
							<input type="hidden" name="handling" value="0.00">
							<input type="hidden" name="on0" value="Platform">
							
						<div class ="platform_wrap">
							
							<p style="color:white;" >Select Platform</p><select name="os0" id="platform_choice">
							
							<option value="PC">Microsoft Windows</option>
							<option value="XBOX ONE">XBOX ONE</option>
							<option value="PS4">PS4</option>
							
							</select>
							
							
							<div id = "clear"></div>
							
							<div id="button_left">
							<input id="PayPal5" type="image" style="font-size: 0.7em;" value="Add to cart" <button class="button"></button> 
							</div>	
							</form>
							
							<div id="button_right">
							<form target="PayPal" action="https://www.paypal.com/cgi-bin/webscr" method="post" style="margin:0;padding:0;">
								<input type="hidden" name="business" value="ljb2k5@gmail.com">
								<input type="hidden" name="cmd" value="_cart">
								<input type="hidden" name="display" value="1">
								<input id="PayPal6" type="image" style="font-size: 0.7em;" value="View Cart" <button class="button"></button> 
							</form>
							</div>
							<div id = "clear"></div>							
						
						</div>
					</div>
				</div>
				<div id = "clear"></div>
				
			</div>
				
			
			<!-- Best seller Game 7-->
			
			<div class = "outer" id="codww2">
			
			<p id="title">Call of Duty: World War II</p>
				<div class = "wrap_left">
				
					<div id = "video">
						<iframe width="560" height="315" src="https://www.youtube.com/embed/a9ITIaKzG3A" frameborder="0" gesture="media" allowfullscreen></iframe>
					</div>
					<p>Call of Duty returns to its roots with Call of Duty: WWII - a breathtaking experience that redefines World War II for a new gaming generation.
					   Land in Normandy on D-Day and battle across Europe through iconic locations in history's most monumental war.</p>
				</div>
				
				<div class = "wrap_right"> <!-- Right block-->
					<div id = "game_text">
						<p>Price: <span style="background-color:green;font-size:1.1em;">
						20%off </span>
						<span style="text-decoration: line-through;font-size:1.6em;color:grey"> $59.00</span>
						<span style="font-size:1.6em;"> $48.00</span>
						<br/>Category: Shooter<br/>Developer: Sledgehammer Games/Raven Software <br/>
						Publisher: Activision<br/>
						Release Date: Nov 3, 2017<br/>
						Platform: PC, Xbox One, PS4
						</p>
					</div>
					
					
					
							<div id = "game_img">
							<img src="img/games/game_shooter02.jpg">
							<div id = "clear"></div>
						
						
						<form target="PayPal" action="https://www.paypal.com/cgi-bin/webscr" method="post" style="margin:0;padding:0;">
							<input type="hidden" name="business" value="ljb2k5@gmail.com">
							<input type="hidden" name="cmd" value="_cart">
							<input type="hidden" name="add" value="1">
							<input type="hidden" name="item_name" value="Call of Duty: World War II">
							<input type="hidden" name="item_number" value="CODWW2">
							<input type="hidden" name="amount" value="48.00">
							<input type="hidden" name="tax" value="3.96">
							<input type="hidden" name="currency_code" value="USD">
							<input type="hidden" name="return" value="">
							<input type="hidden" name="cancel_return" value="">
							<input type="hidden" name="receiver_email" value="ljb2k5@gmail.com">
							<input type="hidden" name="no_shipping" value="0">
							<input type="hidden" name="no_note" value="1">
							<input type="hidden" name="shipping" value="3.00">
							<input type="hidden" name="shipping2" value="0.00">
							<input type="hidden" name="handling" value="0.00">
							<input type="hidden" name="on0" value="Platform">
							
						<div class ="platform_wrap">
							
							<p style="color:white;" >Select Platform</p><select name="os0" id="platform_choice">
							
							<option value="PC">Microsoft Windows</option>
							<option value="XBOX ONE">XBOX ONE</option>
							<option value="PS4">PS4</option>
							
							
							</select>
							
							
							<div id = "clear"></div>
							
							<div id="button_left">
							<input id="PayPal5" type="image" style="font-size: 0.7em;" value="Add to cart" <button class="button"></button> 
							</div>	
							</form>
							
							<div id="button_right">
							<form target="PayPal" action="https://www.paypal.com/cgi-bin/webscr" method="post" style="margin:0;padding:0;">
								<input type="hidden" name="business" value="ljb2k5@gmail.com">
								<input type="hidden" name="cmd" value="_cart">
								<input type="hidden" name="display" value="1">
								<input id="PayPal6" type="image" style="font-size: 0.7em;" value="View Cart" <button class="button"></button> 
							</form>
							</div>
							<div id = "clear"></div>							
						
						</div>
					</div>
				</div>
				<div id = "clear">
				</div>
				
			</div>
			
			
			<!-- Best seller Game 8-->
			
			<div class = "outer" id="wolf2">
			
			<p id="title">Wolfenstein II: The New Colossus </p>
				
				<div class = "wrap_left">
				
					<div id = "video">
						<iframe width="560" height="315" src="https://www.youtube.com/embed/bkrwUzWeACg" frameborder="0" gesture="media" allowfullscreen></iframe>
					</div>
						<p>Wolfenstein II sends players to Nazi-controlled America on a mission to recruit the boldest resistance leaders left.
						   Fight the Nazis in iconic locations and equip an arsenal of badass guns, and unleash new abilities against advanced Nazi über soldiers in this definitive first-person shooter.</p>
				</div>
				
				<div class = "wrap_right"> <!-- Right block-->
					<div id = "game_text">
						<p>Price:
						<span style="font-size:1.6em;"> $59.00</span>
						<br/>Category: Shooter<br/>Developer: MachineGames<br/>
						Publisher: Bethesda Softworks<br/>
						Release Date: Oct 27, 2017<br/>
						Platform: PC, Xbox One, PS4
						</p>
					</div>
					
					
					
							<div id = "game_img">
							<img src="img/games/game_shooter03.jpg">
							<div id = "clear"></div>
						
						
						<form target="PayPal" action="https://www.paypal.com/cgi-bin/webscr" method="post" style="margin:0;padding:0;">
							<input type="hidden" name="business" value="ljb2k5@gmail.com">
							<input type="hidden" name="cmd" value="_cart">
							<input type="hidden" name="add" value="1">
							<input type="hidden" name="item_name" value="Wolfenstein II: The New Colossus">
							<input type="hidden" name="item_number" value="WF2NC">
							<input type="hidden" name="amount" value="59.00">
							<input type="hidden" name="tax" value="3.96">
							<input type="hidden" name="currency_code" value="USD">
							<input type="hidden" name="return" value="">
							<input type="hidden" name="cancel_return" value="">
							<input type="hidden" name="receiver_email" value="ljb2k5@gmail.com">
							<input type="hidden" name="no_shipping" value="0">
							<input type="hidden" name="no_note" value="1">
							<input type="hidden" name="shipping" value="3.00">
							<input type="hidden" name="shipping2" value="0.00">
							<input type="hidden" name="handling" value="0.00">
							<input type="hidden" name="on0" value="Platform">
							
						<div class ="platform_wrap">
							
							<p style="color:white;" >Select Platform</p><select name="os0" id="platform_choice">
							
							<option value="PC">Microsoft Windows</option>
							<option value="XBOX ONE">XBOX ONE</option>
							<option value="PS4">PS4</option>
							
							</select>
							
							
							<div id = "clear"></div>
							
							<div id="button_left">
							<input id="PayPal5" type="image" style="font-size: 0.7em;" value="Add to cart" <button class="button"></button> 
							</div>	
							</form>
							
							<div id="button_right">
							<form target="PayPal" action="https://www.paypal.com/cgi-bin/webscr" method="post" style="margin:0;padding:0;">
								<input type="hidden" name="business" value="ljb2k5@gmail.com">
								<input type="hidden" name="cmd" value="_cart">
								<input type="hidden" name="display" value="1">
								<input id="PayPal6" type="image" style="font-size: 0.7em;" value="View Cart" <button class="button"></button> 
							</form>
							</div>
							<div id = "clear"></div>							
						
						</div>
					</div>
				</div>
				<div id = "clear">
				</div>
			</div>
				
			
			<!-- Best seller Game 9-->	
			
			<div class = "outer" id="pc2">
			
			<p id="title">Project Cars 2: Collector's Edition</p>
				
				<div class = "wrap_left">
				
					<div id = "video">
						<iframe width="560" height="315" src="https://www.youtube.com/embed/0YrrK92fQmk" frameborder="0" gesture="media" allowfullscreen></iframe>
					</div>
						<p>Project CARS 2 is a motorsport racing simulator video game developed by Slightly Mad Studios and published and distributed by Bandai Namco Entertainment.</p>
				</div>
				
				<div class = "wrap_right"> <!-- Right block-->
					<div id = "game_text">
						<p>Price:
						<span style="font-size:1.6em;"> $59.00</span>
						<br/>Category: Racing<br/>Developer: Slightly Mad Studios<br/>
						Publisher: Bandai Namco Entertainment<br/>
						Release Date: Sep 22, 2017<br/>
						Platform: Xbox one, PC, PS4
						</p>
					</div>
					
					
					
							<div id = "game_img">
							<img src="img/games/game_racing02.jpg">
							<div id = "clear"></div>
						
						
						<form target="PayPal" action="https://www.paypal.com/cgi-bin/webscr" method="post" style="margin:0;padding:0;">
							<input type="hidden" name="business" value="ljb2k5@gmail.com">
							<input type="hidden" name="cmd" value="_cart">
							<input type="hidden" name="add" value="1">
							<input type="hidden" name="item_name" value="Project Cars 2: Collector's Edition">
							<input type="hidden" name="item_number" value="ACO">
							<input type="hidden" name="amount" value="59.00">
							<input type="hidden" name="tax" value="3.96">
							<input type="hidden" name="currency_code" value="USD">
							<input type="hidden" name="return" value="">
							<input type="hidden" name="cancel_return" value="">
							<input type="hidden" name="receiver_email" value="ljb2k5@gmail.com">
							<input type="hidden" name="no_shipping" value="0">
							<input type="hidden" name="no_note" value="1">
							<input type="hidden" name="shipping" value="3.00">
							<input type="hidden" name="shipping2" value="0.00">
							<input type="hidden" name="handling" value="0.00">
							<input type="hidden" name="on0" value="Platform">
							
						<div class ="platform_wrap">
							
							<p style="color:white;" >Select Platform</p><select name="os0" id="platform_choice">
							
							<option value="PC">Microsoft Windows</option>
							<option value="XBOX ONE">XBOX ONE</option>
							<option value="PS4">PS4</option>
							
							</select>
							
							
							<div id = "clear"></div>
							
							<div id="button_left">
							<input id="PayPal5" type="image" style="font-size: 0.7em;" value="Add to cart" <button class="button"></button> 
							</div>	
							</form>
							
							<div id="button_right">
							<form target="PayPal" action="https://www.paypal.com/cgi-bin/webscr" method="post" style="margin:0;padding:0;">
								<input type="hidden" name="business" value="ljb2k5@gmail.com">
								<input type="hidden" name="cmd" value="_cart">
								<input type="hidden" name="display" value="1">
								<input id="PayPal6" type="image" style="font-size: 0.7em;" value="View Cart" <button class="button"></button> 
							</form>
							</div>
							<div id = "clear"></div>							
						
						</div>
					</div>
				</div>
				<div id = "clear">
				</div>
			</div>
			
			<!-- Best seller Game 10-->

			<div class = "outer" id="nfs_payback">
				<p id="title">Need For Speed: Payback</p>
					<div class = "wrap_left">
					
						<div id = "video">
							<iframe  src="https://www.youtube.com/embed/K-5EdHZ0hBs" frameborder="0" gesture="media" allowfullscreen></iframe>
						</div>
							<p>Need for Speed Payback is a racing video game developed by Ghost Games and published by Electronic Arts for Microsoft Windows, PlayStation 4 and Xbox One.
							It is the twenty-third installment in the Need for Speed series. The game was revealed with a trailer released on June 2, 2017.
							The game was released worldwide on November 10, 2017</p>			
					</div>
				
								<div class = "wrap_right"> <!-- Right block-->
					<div id = "game_text">
						 <p>Price: 
						
						<span style="font-size:1.6em;"> $59.99</span>
						<br/>Category: Racing<br/>Developer: Ghost Games <br/>
						Publisher: Electronic Arts<br/>
						Release Date: Nov 10, 2017<br/>
						Platform: PS4, Xbox One, PC
						</p>
					</div>
					
					
					
					<div id = "game_img">
							<img src="img/games/game_racing0.png">
							<div id = "clear"></div>
						
						
						<form target="PayPal" action="https://www.paypal.com/cgi-bin/webscr" method="post" style="margin:0;padding:0;">
							<input type="hidden" name="business" value="ljb2k5@gmail.com">
							<input type="hidden" name="cmd" value="_cart">
							<input type="hidden" name="add" value="1">
							<input type="hidden" name="item_name" value="Need For Speed: Payback">
							<input type="hidden" name="item_number" value="ACO">
							<input type="hidden" name="amount" value="59.99">
							<input type="hidden" name="tax" value="3.96">
							<input type="hidden" name="currency_code" value="USD">
							<input type="hidden" name="return" value="">
							<input type="hidden" name="cancel_return" value="">
							<input type="hidden" name="receiver_email" value="ljb2k5@gmail.com">
							<input type="hidden" name="no_shipping" value="0">
							<input type="hidden" name="no_note" value="1">
							<input type="hidden" name="shipping" value="3.00">
							<input type="hidden" name="shipping2" value="0.00">
							<input type="hidden" name="handling" value="0.00">
							<input type="hidden" name="on0" value="Platform">
							
						<div class ="platform_wrap">
							
							<p style="color:white;" >Select Platform</p><select name="os0" id="platform_choice">
							
							<option value="XBOX ONE">XBOX ONE</option>
							<option value="PS4">PS4</option>
							<option value="PC">PC</option>
							</select>
							
							
							<div id = "clear"></div>
							
							<div id="button_left">
							<input id="PayPal5" type="image" style="font-size: 0.7em;" value="Add to cart" <button class="button"></button> 
							</div>	
							</form>
							
							<div id="button_right">
							<form target="PayPal" action="https://www.paypal.com/cgi-bin/webscr" method="post" style="margin:0;padding:0;">
								<input type="hidden" name="business" value="ljb2k5@gmail.com">
								<input type="hidden" name="cmd" value="_cart">
								<input type="hidden" name="display" value="1">
								<input id="PayPal6" type="image" style="font-size: 0.7em;" value="View Cart" <button class="button"></button> 
							</form>
							</div>
							<div id = "clear"></div>							
						
						</div>
					</div>
				</div>
				
				<div id = "clear"></div>
				
				
			</div>
			
			<!-- Best seller Game 11 Grand theft auto v--->	
			
			<div class = "outer" id="gtav">
			
			<p id="title">Grand Theft Auto V</p>
			
				<div class = "wrap_left">
				
					<div id = "video">
						<iframe width="560" height="315" src="https://www.youtube.com/embed/Bf38HiYPMiI" frameborder="0" gesture="media" allowfullscreen></iframe>
				
					</div>
					
					<p>Michael Townley, Trevor Philips, and Brad Snider partake in a botched robbery in Ludendorff, North Yankton.
					Nine years later, Michael is living under witness protection with his family in Los Santos, 
					under the alias Michael De Santa. Across town, gangbanger Franklin Clinton is working for a 
					corrupt Armenian car salesman and meets Michael while attempting to fraudulently repossess his
					son's car; the two later become friends.</p>
					
					
				</div>
				
				<div class = "wrap_right"> <!-- Right block-->
					<div id = "game_text">
						<p>Price: <span style="background-color:green;font-size:1.1em;">
						50%off </span>
						<span style="text-decoration: line-through;font-size:1.6em;color:grey"> $59.00</span>
						<span style="font-size:1.6em;"> $29.99</span>
						<br/>Category: Shooting<br/>Developer: Rockstar Games<br/>
						Publisher: Rockstar Games<br/>
						Release Date: Sep 17, 2013<br/>
						Platform: PS4, Xbox one, Microsoft Windows, PS3, Xbox 360
						</p>
					</div>
					<div id = "game_img">
							<img src="img/games/game_shooter03.png">
							<div id = "clear"></div>
						
						
						<form target="PayPal" action="https://www.paypal.com/cgi-bin/webscr" method="post" style="margin:0;padding:0;">
							<input type="hidden" name="business" value="ljb2k5@gmail.com">
							<input type="hidden" name="cmd" value="_cart">
							<input type="hidden" name="add" value="1">
							<input type="hidden" name="item_name" value="GTA V">
							<input type="hidden" name="item_number" value="ACO">
							<input type="hidden" name="amount" value="29.99">
							<input type="hidden" name="tax" value="3.96">
							<input type="hidden" name="currency_code" value="USD">
							<input type="hidden" name="return" value="">
							<input type="hidden" name="cancel_return" value="">
							<input type="hidden" name="receiver_email" value="ljb2k5@gmail.com">
							<input type="hidden" name="no_shipping" value="0">
							<input type="hidden" name="no_note" value="1">
							<input type="hidden" name="shipping" value="3.00">
							<input type="hidden" name="shipping2" value="0.00">
							<input type="hidden" name="handling" value="0.00">
							<input type="hidden" name="on0" value="Platform">
							
						<div class ="platform_wrap">
							
							<p style="color:white;" >Select Platform</p><select name="os0" id="platform_choice">
							
							<option value="PS4">PlayStation 4</option>
							<option value="PS3">PlayStation 3</option>
							<option value="Xbox One">Xbox One</option>
							<option value="Xbox 360">Xbox 360</option>
							<option value="PC">Microsoft Windows</option>
							
							</select>
							
							
							<div id = "clear"></div>
							
							<div id="button_left">
							<input id="PayPal5" type="image" style="font-size: 0.7em;" value="Add to cart" <button class="button"></button> 
							</div>	
							</form>
							
							<div id="button_right">
							<form target="PayPal" action="https://www.paypal.com/cgi-bin/webscr" method="post" style="margin:0;padding:0;">
								<input type="hidden" name="business" value="ljb2k5@gmail.com">
								<input type="hidden" name="cmd" value="_cart">
								<input type="hidden" name="display" value="1">
								<input id="PayPal6" type="image" style="font-size: 0.7em;" value="View Cart" <button class="button"></button> 
							</form>
							</div>
							<div id = "clear"></div>							
						
						</div>
						</div>
			
				
				</div>
				
				<div id = "clear">
				</div>
				
				
				
				
				
			</div>
			
			<!-- Best seller Game 12 PES2018-->	
			
						<div class = "outer" id="pes2018">
			
			<p id="title">PES2018</p>
			
				<div class = "wrap_left">
				
					<div id = "video">
						<iframe width="560" height="315" src="https://www.youtube.com/embed/vh54LG8kSh4" frameborder="0" gesture="media" allowfullscreen></iframe>
				
					</div>
					
					<p>Pro Evolution Soccer 2018 is a sports video game developed by PES Productions
					and published by Konami for Microsoft Windows, PlayStation 3, PlayStation 4, Xbox 360 and Xbox One
					. The game is the 17th installment in the Pro Evolution Soccer series and was released worldwide
					in September 2017.</p>
					
					
				</div>
				
				<div class = "wrap_right"> <!-- Right block-->
					<div id = "game_text">
						<p>Price: <span style="background-color:green;font-size:1.1em;">
						50%off </span>
						<span style="text-decoration: line-through;font-size:1.6em;color:grey"> $59.00</span>
						<span style="font-size:1.6em;"> $29.99</span>
						<br/>Category: Sports<br/>Developer: Konami<br/>
						Publisher: Konami<br/>
						Release Date: Sep 12, 2017<br/>
						Platform: PS4, Xbox one, Microsoft Windows, PS3, Xbox 360, Android
						</p>
					</div>
					<div id = "game_img">
							<img src="img/games/game_sports0.jpg">
							<div id = "clear"></div>
						
						
						<form target="PayPal" action="https://www.paypal.com/cgi-bin/webscr" method="post" style="margin:0;padding:0;">
							<input type="hidden" name="business" value="ljb2k5@gmail.com">
							<input type="hidden" name="cmd" value="_cart">
							<input type="hidden" name="add" value="1">
							<input type="hidden" name="item_name" value="PES2018">
							<input type="hidden" name="item_number" value="ACO">
							<input type="hidden" name="amount" value="29.99">
							<input type="hidden" name="tax" value="3.96">
							<input type="hidden" name="currency_code" value="USD">
							<input type="hidden" name="return" value="">
							<input type="hidden" name="cancel_return" value="">
							<input type="hidden" name="receiver_email" value="ljb2k5@gmail.com">
							<input type="hidden" name="no_shipping" value="0">
							<input type="hidden" name="no_note" value="1">
							<input type="hidden" name="shipping" value="3.00">
							<input type="hidden" name="shipping2" value="0.00">
							<input type="hidden" name="handling" value="0.00">
							<input type="hidden" name="on0" value="Platform">
							
						<div class ="platform_wrap">
							
							<p style="color:white;" >Select Platform</p><select name="os0" id="platform_choice">
							
							<option value="PS4">PlayStation 4</option>
							<option value="PS3">PlayStation 3</option>
							<option value="Xbox One">Xbox One</option>
							<option value="Xbox 360">Xbox 360</option>
							<option value="PC">Microsoft Windows</option>
							<option value="Android">Android</option>
							
							</select>
							
							
							<div id = "clear"></div>
							
							<div id="button_left">
							<input id="PayPal5" type="image" style="font-size: 0.7em;" value="Add to cart" <button class="button"></button> 
							</div>	
							</form>
							
							<div id="button_right">
							<form target="PayPal" action="https://www.paypal.com/cgi-bin/webscr" method="post" style="margin:0;padding:0;">
								<input type="hidden" name="business" value="ljb2k5@gmail.com">
								<input type="hidden" name="cmd" value="_cart">
								<input type="hidden" name="display" value="1">
								<input id="PayPal6" type="image" style="font-size: 0.7em;" value="View Cart" <button class="button"></button> 
							</form>
							</div>
							<div id = "clear"></div>							
						
						</div>
						</div>
			
				
				</div>
				
				<div id = "clear">
				</div>
				
				
				
				
				
			</div>
			

		<!-- Advertising on sale games block -->	
		</body>
		
			<div id = "on_sale_advertise">
			
				<p>Check out our games on sale!</p>
				
			</div>
		
		<div class = "on_sale_non_index">
		<table>
			<tr>
				<th><a href="page_on_sale.php#NOA"><img src = "img/games/game_other01.png" alt = "ON_SALE"</a></th>
				<th><a href="page_on_sale.php#blue_reflection"><img src = "img/games/game_rpg01.png" alt = "ON_SALE"</a></th>
				<th><a href="page_on_sale.php#fatal_frame_v"><img src = "img/games/game_other0.png" alt = "ON_SALE"</a></th>
				<th><a href="page_on_sale.php#nfl17"><img src = "img/games/game_sports01.jpg" alt = "ON_SALE"</a></th>
				<th><a href="page_on_sale.php#pdx"><img src = "img/games/game_other02.jpg" alt = "ON_SALE"</a></th>
				<th><a href="page_on_sale.php#ffxv"><img src = "img/games/game_rpg0.png" alt = "ON_SALE"</a></th>
				<th><a href="page_on_sale.php#rbi2017"><img src = "img/games/game_sports03.png" alt = "ON_SALE"</a></th>
			</tr>
		</table>
		</div>
		
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
					<a href="page_aboutus.php">About us</a>
					<a href="page_contactus.php">Contact us</a>
				</div>
				<div id = "rights">
					<a>&copy; 2017 Games Galaxy Corporation. All rights reserved. All trademarks are property of their respective owners in the US and other countries.</a>
				</div>

		</div>
		
		</footer>
	</div>
</html>