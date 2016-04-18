<!DOCTYPE>
<?php 
session_start(); 

include("functions/functions.php");

include("includes/db.php");
?>
<html>
	<head>
		<title>My Online Shop</title>
		
		
	<link rel="stylesheet" href="styles/style.css" media="all" /> 
	</head>
	
<body>
	
	<!--Main Container starts here-->
	<div class="main_wrapper">
	
		<!--Header starts here-->
		<div class="header_wrapper">
		
			<a href="index.php"><img id="logo" src="images/logo.jpg" /> </a>
			<img id="banner" src="images/banner.jpg" />
		</div>
		<!--Header ends here-->
		
		<!--Navigation Bar starts-->
		<div class="menubar">
			
			<ul id="menu">
				<li><a href="http://localhost/ecommerce/index.php">Home</a></li>
				<li><a href="http://localhost/ecommerce/all_products.php">All Products</a></li>
				<li><a href="http://localhost/ecommerce/customer/my_account.php">My Account</a></li>
				<li><a href="http://localhost/ecommerce/customer_register.php">Sign Up</a></li>
				<li><a href="http://localhost/ecommerce/cart.php">Shopping Cart</a></li>
				<li><a href="http://localhost/ecommerce/contact.php">Contact Us</a></li>
			
			
			</ul>
			
			<div id="form">
				<form method="get" action="results.php" enctype="multipart/form-data">
					<input type="text" name="user_query" placeholder="Search a Product"/ > 
					<input type="submit" name="search" value="Search" />
				</form>
			
			</div>
			
		</div>
		<!--Navigation Bar ends-->
	
		<!--Content wrapper starts-->
		<div class="content_wrapper">
		
			<div id="sidebar">
			
				<div id="sidebar_title">Categories</div>
				
				<ul id="cats">
				
				<?php getCats(); ?>
				
				<ul>
					
				<div id="sidebar_title">Brands</div>
				
				<ul id="cats">
					
					<?php getBrands(); ?>
				
				<ul>
			
			
			</div>
		
			<div id="content_area">
			
			<?php cart(); ?>
			
			<div id="shopping_cart"> 
					
					<span style="float:right; font-size:17px; padding:5px; line-height:40px;">
					
					<?php 
					if(isset($_SESSION['customer_email'])){
					echo "<b>Welcome:</b>" . $_SESSION['customer_email'] . "<b style='color:yellow;'>Your</b>" ;
					}
					else {
					echo "<b>Welcome Guest:</b>";
					}
					?>
					
					<b style="color:yellow">Shopping Cart -</b> Total Items: <?php total_items();?> Total Price: <?php total_price(); ?> <a href="index.php" style="color:yellow">Back to Shop</a>
					
					<?php 
					if(!isset($_SESSION['customer_email'])){
					
					echo "<a href='checkout.php' style='color:orange;'>Login</a>";
					
					}
					else {
					echo "<a href='logout.php' style='color:orange;'>Logout</a>";
					}
					
					
					
					?>
					
					</span>
			</div>
			
				<div id="products_box">
				
			<form action="" method="post" enctype="multipart/form-data">
			
				<table align="center" width="700" bgcolor="skyblue">
					
					<tr align="center">
					
					<p>University of West London<br />
			St Mary&#39;s Road<br />
			Ealing<br />
			London<br />
			W5 5RF</p>
						<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d9933.417778500445!2d-0.30319!3d51.506713!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x422f2334ccf21438!2sUniversity+of+West+London!5e0!3m2!1sen!2sus!4v1460757531332" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
					</tr>
					
		

				
				</div>
			
			</div>
		</div>
		<!--Content wrapper ends-->
		
		
		
	
	
	
	
	
	</div> 
<!--Main Container ends here-->


</body>
</html>