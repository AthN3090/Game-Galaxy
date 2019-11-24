<?php require './php/server.php';

?>
<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width">

<head>
<title> 
	<?php 
	
	if(isset($_SESSION['activeUser']))
			echo $_SESSION['activeUser']."'s cart";
			else
				header("location:user_login.php");
		
?>
</title>

<!-- For-Mobile-Apps -->
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="E Shop Cart Widget Responsive, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Android Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //For-Mobile-Apps -->

<!-- Custom-Theme-Files -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<!-- //Custom-Theme-Files -->

<!-- Remove-Item-JavaScript -->
<script src="./js/ajax.js"></script>
<script src="./js/cart.js"></script>
	<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
	<script>$(document).ready(function(c) {
		$('.alert-close1').on('click', function(c){
			$('.close1').fadeOut('slow', function(c){
		  		$('.close1').remove();
			});
		});	  
	});
	</script>
	<script>$(document).ready(function(c) {
		$('.alert-close2').on('click', function(c){
			$('.close2').fadeOut('slow', function(c){
		  		$('.close2').remove();
			});
		});	  
	});
	</script>
	<script>$(document).ready(function(c) {
		$('.alert-close3').on('click', function(c){
			$('.close3').fadeOut('slow', function(c){
		  		$('.close3').remove();
			});
		});	  
	});
	</script>
<!-- //Remove-Item-JavaScript -->
<?php
display_cart($db,$_SESSION['activeUser']);

?>
<script type="text/javascript">
window.addEventListener('load',function(){
	total_calculate();
});
</script>
</head>

<!-- Body-Starts-Here -->
<body>

	<!-- Content-Starts-Here -->
	<div class="container">

		<!-- Mainbar-Starts-Here -->
		<div class="main-bar">
			<div class="product">
				<h3>Product</h3>
			</div>
			<div class="quantity">
				<h3>Quantity</h3>
			</div>
			<div class="price">
				<h3>Price</h3>
			</div>
			<div class="clear"></div>
		</div>
		<!-- //Mainbar-Ends-Here -->

		<!-- Items-Starts-Here -->
		<div class="items">

			<!-- Item1-Starts-Here -->
			



		<!--	<div class="item1">
				<div class="close1"> 
					<div class="alert-close1"> </div>
					 <div class="image1">
						<img src="./img/games/game_adventure0.png" alt="item1">
					</div>
					<div class="title1">
						<p>Theif (PC)</p>
					</div>
					<div class="quantity1">
						<form action="action_page.php">
							<input onclick="" type="number" name="quantity" min="1" max="10" value="1">
						</form>
					</div>
					<div class="price1">
						<p class="cost">210</p>
					</div>
					<div class="clear"></div>
				</div>
			</div> -->
			
			
			<!-- //Item1-Ends-Here -->

			

			<!-- Item3-Starts-Here -->
			
			<!-- //Item3-Ends-Here -->

		</div>
		<!-- //Items-Ends-Here -->

		<!-- Total-Price-Starts-Here -->
		<div class="total">
			<div class="total1">Total Price</div>
			<div class="total2">$ 924</div>
			<div class="clear"></div>
		</div>
		<!-- //Total-Price-Ends-Here -->

		<!-- Checkout-Starts-Here -->
		<div class="checkout">
			<div class="discount">
				<span>Apply Discount Code</span> <input type="text">
			</div>
			<div class="add">
				<a href="#">Add to Cart</a>
			</div>
			<div class="checkout-btn">
				<a href="https://paytm.com/">Checkout</a>
			</div>
			<div class="clear"></div>
		</div>
		<!-- //Checkout-Ends-Here -->

	</div>
	<!-- Content-Ends-Here -->

	<!-- Copyright-Starts-Here -->
	<div class="copyright">
	    <p>&copy; 2019 Game Galaxy. All Rights Reserved. </p>
	</div>
	<!-- //Copyright-Ends-Here -->

</body>



<!-- Body-Ends-Here -->

</html>