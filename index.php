<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width , intial-scale=1.02">
	<title>ArtInterest</title>
	<link rel="icon" type="image/x-icon" href="images/favicon.ico">

	<link rel="stylesheet" type="text/css" href="css/HomePageStyle.css">
	<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;500;600;700&display=swap" rel="stylesheet">

	<script src="https://kit.fontawesome.com/dbf904400b.js" crossorigin="anonymous"></script>
		<?php
	$conn = mysqli_connect("localhost" , "root" , "" , "artinterest");
	?>
</head>
<body>

<!-------------------- HEADER -------------------->

<div class="header">
	<div class="container">
		<div class="navbar">
			<div class="logo">
				<a href="http://localhost/ArtInterest/HomePage.php"><img src="images/BlueLogo-removebg.png"width="125px"></a>
				</div>
				<nav>
					<ul id="Menuitems">
						<li><a href="http://localhost/ArtInterest/HomePage.php" style="text-decoration: none;">
							<i class="fa-solid fa-house"></i> Home</a></li>
						<li><a href="http://localhost/ArtInterest/AllArtsPage.php" style="text-decoration: none;" >
							<i class="fa-solid fa-palette"></i> ArtWorks</a></li>
						<li><a href="http://localhost/ArtInterest/SearchPage.php" style="text-decoration: none;">
							<i class="fa-solid fa-magnifying-glass"></i> Search</a></li>
						<li><a href="http://localhost/ArtInterest/AboutUsPage.xml" style="text-decoration: none;">
							<i class="fa-solid fa-circle-info"></i> About</a></li>
						<li><a href="http://localhost/ArtInterest/ContactPage.html" style="text-decoration: none;">
							<i class="fa-solid fa-envelopes-bulk"></i> Contact</a></li>
						<li><a href="http://localhost/ArtInterest/NewProfilePage.php" style="text-decoration: none;">
							<i class="fa-solid fa-circle-user"></i> Account</a></li>
					</ul>
				</nav>
				<a href="CartPage.html"><i class="fa-solid fa-cart-shopping fa-xl"></i></a>
				<div class="menu-icon">
					<i class="fa-solid fa-bars fa-xl" onclick="menutoggle()"></i>
				</div>
			</div>
			<div class="row">
				<div class="col-2">
					<h1>Get The Art That <br>
					You Have Dreamed!</h1>
					<h4> Creativity is Allowing Yourself To Make Mistakes.<br>
					Art Is Knowing Which Ones To Keep.</h4>
					<a href="AllArtsPage.html" class="btn"> Explore Now &#10159;</a>
				</div>
				<div class="col-2">
					<img src="images/Art1.png">
				</div>
			</div>
		</div>
	</div>

<!-------------------- BODY -------------------->

<!-------------------- FEATURED CATEGORIES -------------------->

<div class="categories">
		<div class="small-container">
			<div class="row row-2">
				<h2 class="title"> Featured Categories </h2>
			</div>
			<div class="row">
				<div class="col-4">
					<a href="">
						<img src="images/Artists-1.jpg">
						<h3> Artists </h3>
						<p> 13,366 Artists </p>
					</a>
				</div>
				<div class="col-4">
					<a href="">
						<img src="images/Art Mediums-1.jpg">
						<h3> Art Mediums </h3>
						<p> 240 Mediums </p>
					</a>
				</div>
				<div class="col-4">
					<a href="">
						<img src="images/Art Movements-1.webp">
						<h3> Art Movemnts </h3>
						<p> 124 Movements </p>
					</a>
				</div>
				<div class="col-4">
					<a href="">
						<img src="images/Art Places-1.jpg">
						<h3> Places </h3>
						<p> 15,303 Places </p>
					</a>
				</div>
			</div>
		</div>
	</div>

<!-------------------- FEATURED ARTS -------------------->

<div class="featured">
	<div class="small-container">
		<div class="row row-2">
				<h2 class="title"> Featured Arts </h2>
				<a href="AllArtsPage.html" id="view-more"><p> view more </p></a>
			</div>
		<div class="row">
			<?php 
				$sql = "SELECT * FROM all_arts limit 0,4";
    			$result = mysqli_query($conn , $sql);
    			if(mysqli_num_rows($result)>0){
				$i = 0;
				while($row = mysqli_fetch_array($result)){
			?>
			<div class="col-4">
			<a href="ProductDetailsPage.php?imgname=<?php echo $row["Art_Name"];?>">
				<img src="<?php echo $row["Source"]; ?>">
				<h4><?php echo $row["Art_Name"]; ?></h4>
				<div class="rating">
					<i class="<?php echo $row["Rating One"]; ?>"></i>
					<i class="<?php echo $row["Rating Two"]; ?>"></i>
					<i class="<?php echo $row["Rating Three"]; ?>"></i>
					<i class="<?php echo $row["Rating Four"]; ?>"></i>
					<i class="<?php echo $row["Rating Five"]; ?>"></i>
				</div>
				<p> $<?php echo $row["Price"]; ?></p>
			</div></a>
			<?php 
			$i++;
		}}
		?>
	</div></div></div>
<!-------------------- LATEST ARTS -------------------->

<div class="latest">
	<div class="small-container">
		<div class="row row-2">
				<h2 class="title"> Latest Arts </h2>
				<a href="AllArtsPage.html" id="view-more"><p> view more </p></a>
			</div>
		<div class="row">
			<?php 
				$sql = "SELECT * FROM all_arts limit 4,8";
    			$result = mysqli_query($conn , $sql);
    			if(mysqli_num_rows($result)>0){
				$i = 0;
				while($row = mysqli_fetch_array($result)){
			?>
			<div class="col-4">
			<a href="ProductDetailsPage.php?imgname=<?php echo $row["Art_Name"];?>">
				<img src="<?php echo $row["Source"]; ?>">
				<h4><?php echo $row["Art_Name"]; ?></h4>
				<div class="rating">
					<i class="<?php echo $row["Rating One"]; ?>"></i>
					<i class="<?php echo $row["Rating Two"]; ?>"></i>
					<i class="<?php echo $row["Rating Three"]; ?>"></i>
					<i class="<?php echo $row["Rating Four"]; ?>"></i>
					<i class="<?php echo $row["Rating Five"]; ?>"></i>
				</div>
				<p> $<?php echo $row["Price"]; ?></p>
			</div></a>
			<?php 
			$i++;
		}}
		?>
	</div>
</div>
</div>

<!-------------------- OFFERS -------------------->

<div class="offer">
	<div class="small-container">
		<div class="row">
			<div class="col-2">
				<img src="images/AbstractDefault.jpg" class="offer-img">
			</div>
			<div class="col-2">
				<p> Exclusivesly Available On ArtInterst</p>
				<h1> Name </h1>
				<small> ahckjsdnsdv </small><br>
				<a href="" class="btn"> Buy Now &#10159;</a>
			</div>
		</div>
	</div>
</div>

<!-------------------- TESTIMONIAL -------------------->

	<div class="testimonial">
		<div class="small-container">
			<div class="row">
				<div class="col-3">
					<i class="fa fa-quote-left"></i>
					<p> sdvnsdnvsjdvefnvenfv
					sibvfeibvijeeger
					dvijefivbueubeiubni
					eonviuefuvirevg
					evbuervevnienugerugnenen9vteb
					8eyrvbenv8env8e </p>
					<div class="rating">
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star-o"></i>
					</div>
					<img src="images/AbstractDefault.jpg">
					<h3> Name </h3>
				</div>
				<div class="col-3">
					<i class="fa fa-quote-left"></i>
					<p> sdvnsdnvsjdvefnvenfv
					sibvfeibvijeeger
					dvijefivbueubeiubni
					eonviuefuvirevg
					evbuervevnienugerugnenen9vteb
					8eyrvbenv8env8e </p>
					<div class="rating">
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star-o"></i>
					</div>
					<img src="images/AbstractDefault.jpg">
					<h3> Name </h3>
				</div>
				<div class="col-3">
					<i class="fa fa-quote-left"></i>
					<p> ssdvnsdnvsjdvefnvenfv
					sibvfeibvijeeger
					dvijefivbueubeiubni
					eonviuefuvirevg
					evbuervevnienugerugnenen9vteb
					8eyrvbenv8env8e </p>
					<div class="rating">
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star-o"></i>
					</div>
					<img src="images/AbstractDefault.jpg">
					<h3> Name </h3>
				</div>
			</div>
		</div>
	</div>

	<!---BRANDS-->	

	<div class="brands">
		<div class="small-container">
			<div class="row">
				<div class="col-5">
					<img src="images/AbstractDefault.jpg">
				</div>
				<div class="col-5">
					<img src="images/AbstractDefault.jpg">
				</div>
				<div class="col-5">
					<img src="images/AbstractDefault.jpg">
				</div>
				<div class="col-5">
					<img src="images/AbstractDefault.jpg">
				</div>
				<div class="col-5">
					<img src="images/AbstractDefault.jpg">
				</div>
			</div>
		</div>
	</div>
-->

<!-------------------- FOOTER -------------------->

<div class="footer">
	<div class="container">
		<div class="row">
			<div class="footer-col-1">
				<h3> Download Our Apps </h3>
				<h4>Available on both Android and IOS </h4>
				<div class="app-logo">
					<a href=""><i class="fa-brands fa-google-play fa-2x"></i></a>
					<a href=""><i class="fa-brands fa-app-store-ios fa-2x"></i></a>
				</div>
			</div>
			<div class="footer-col-2">
				<a href="HomePage.html"><img src="images/BlueLogo-removebg.png"></a>
				<h4>Get The Art That <br>
				You Have Dreamed!</h4>
			</div>
			<div class="footer-col-3">
				<h3> Usefull Links</h3>
				<ul>
					<h4><li> Coupons </li>
					<li> BLogPost </li>
					<li> Return Policy </li>
					<li> Join Affiliate </li></h4>
				</ul>
			</div>
			<div class="footer-col-4">
				<h3> FOllow Us</h3>
				<ul>
					<h4><li> Instagram </li>
					<li> Facebook </li>
					<li> Teittwe </li>
					<li> Y=Utube </li></h4>
				</ul>
			</div>
		</div>
		<hr>
		<p class="copyright"> <i class="fa-solid fa-copyright"></i> Copyright &#64;ArtInterest 2022 </p>
	</div>
</div>

<!-------------------- END -------------------->

<script>
	var MenuItems = document.getElementById("Menuitems");
	MenuItems.style.maxHeight = "0px";

	function menutoggle() {
		if(MenuItems.style.maxHeight == "0px")
		{
			MenuItems.style.maxHeight = "200px";
		}
		else
		{
			MenuItems.style.maxHeight = "0px";
		}
	}
</script>
</body>
</html>
