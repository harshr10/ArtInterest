<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width , initial-scale=1.0">
	<title>Add Art Work</title>
	<link rel="stylesheet" type="text/css" href="css/RegistrationPageStyle.css">
	<link rel="icon" type="image/x-icon" href="images/favicon.ico">
	<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;500;600;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<script src="https://kit.fontawesome.com/dbf904400b.js" crossorigin="anonymous"></script>
</head>

<!-------------------- HEADER -------------------->
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
</div>

<!-------------------- BODY -------------------->
<div class="wrapper">
	<div class="title"> Register Art Work </div>
	<div class="form">
		<form action="Database.php" method="post" enctype="multipart/form-data">
			<div class="input_field">
				<label>Art Name</label>
				<input type="text" class="input" name="artname" placeholder="Art Name" required>
			</div>
			<div class="input_field">
				<label>Rating (1-5)</label>
				<input type="number" class="input" name="rating" placeholder="Rating (1-5)" required min="0" max="5">
			</div>
		<div class="input_field">
			<label>Price</label>
			<input type="text" class="input" name="price" placeholder="Price $" required>
		</div>
		<div class="input_field">
			<label>Product Details</label>
			<textarea class="textarea" name="prod_details" placeholder="Product Details" required></textarea>
		</div>
		<div class="input_field">
			<input type="file" name="fileToUpload" id="fileToUpload">
		<input type="submit" value="Register" class="btn" name="addart">
		</div>
		<div class="input_field">
		</div>
		</form>
	</div>
</div>

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
</body>

<!-------------------- END -------------------->

<!-------------------- JAVA SCRIPT -------------------->

<script>

	var MenuItems = document.getElementById("Menuitems");
	MenuItems.style.maxHeight = "0px";

	function menutoggle() 
	{
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

</html>
