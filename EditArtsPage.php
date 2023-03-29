<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width , initial-scale=1.0">
	<title>Edit Art Work</title>
	<link rel="stylesheet" type="text/css" href="css/EditArtPageStyle.css">
	<link rel="icon" type="image/x-icon" href="images/favicon.ico">
	<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;500;600;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
			<?php
	$conn = mysqli_connect("localhost" , "root" , "" , "artinterest");
	?>
</head>
<body>
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

		<?php
		
				$sql = "SELECT * FROM all_arts";
    			$result = mysqli_query($conn , $sql);
    			if(mysqli_num_rows($result)>0){
    				?>
    				<div class="small-container">
	<div class="row">
		<?php
				$i = 0;
				while($row = mysqli_fetch_array($result)){
			?>
			<div class="col-4">
				<img src="<?php echo $row["Source"]; ?>"style="border-radius: 30px;">
				<h4><?php echo $row["Art_Name"]; ?></h4>
				<div class="rating">
					<i class="<?php echo $row["Rating One"]; ?>"></i>
					<i class="<?php echo $row["Rating Two"]; ?>"></i>
					<i class="<?php echo $row["Rating Three"]; ?>"></i>
					<i class="<?php echo $row["Rating Four"]; ?>"></i>
					<i class="<?php echo $row["Rating Five"]; ?>"></i>
				</div>
				<p> $<?php echo $row["Price"]; ?></p>
				<a href="EditPage.php?imgname=<?php echo $row["Art_Name"];?>">
				<input type="submit" value="Edit" name="arttoedit" class="btn">
			</a>
			<a href="Database.php?imgname=<?php echo $row["Art_Name"];?>">
			<input type="submit" value="Delete" name="deleteart" class="btn">
				</a>
			</div>
			<?php 
			$i++;
		}}
		?>
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
