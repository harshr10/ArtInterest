<!DOCTYPE html>
<html lang="en">
<head> 
	<?php
	session_start();
	if(!$_SESSION['loggedin'] == true){
		header("Location:http://localhost/ArtInterest/LoginPage.php");
    }
    else if($_SESSION['email'] == "admin@gmail.com"){
			header("Location:http://localhost/ArtInterest/AdminProfilePage.php");
		}
    $conn = mysqli_connect("localhost" , "root" , "" , "artinterest");
    $email = $_SESSION['email'];
    $sql = "SELECT * FROM PROFILE WHERE Email_Id='".$email."'";
    $result = mysqli_query($conn , $sql);
	?>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Profile Page</title>
	<link rel="icon" type="image/x-icon" href="images/favicon.ico">

	<link rel="stylesheet" type="text/css" href="css/ProfileStyle.css">

	<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;500;600;700&display=swap" rel="stylesheet">

	<!--script src="https://kit.fontawesome.com/dbf904400b.js" crossorigin="anonymous"></script-->
</head>
<body>

<!-------------------- HEADER -------------------->
<div class="headercontainer">
	<div class="navbar">
		<div class="logo">
			<a href="HomePage.html"><img src="images/BlueLogo-removebg.png"width="125px"></a>
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
	if(mysqli_num_rows($result)>0){
		$i = 0;
		while($row = mysqli_fetch_array($result)){
?>

<div class="container">
		<div class="profile-header">
			<div class="profile-img">
				<img src="images/user.png" width="200">				
			</div>
			<div class="profile-nav-info">
				<h3 class="user-name"> <?php echo $row["First_Name"]; echo $row["Last_Name"]; ?> </h3>
				<div class="address">
					<p class="state"> <?php echo $row["State"]; ?> </p>
					<span class="country"> <?php echo $row["Country"]; ?> </span>
				</div>
			</div>
			<div class="profile-option">
				<div class="notification">
					<i class="fa fa-bell"></i>
					<span class="alert-message">1</span>
				</div>
			</div>
		</div>
		<div class="main-bd">
			<div class="left-side">
				<div class="profile-side">
					<p class="mobile-no">
						<i class="fa fa-phone"></i> 
						<?php echo $row["Mob_No"]; ?> 
					</p>
						<p class="user-mail">
							<i class="fa fa-envelope"></i>
						<?php echo $row["Email_Id"]; ?>
					</p>
					<div class="user-bio">
						<h3> Address </h3>
						<p class="bio">
							<?php echo $row["Address"]; ?></p>
					</div>
					<div class="profile-btn">
                        <form action="LoginCheck.php" method="post">
                            <button class="logout" name="logoutbtn">
							<i class="fa-solid fa-arrow-right-from-bracket"></i></i> Logout</button>
                        </form>
					</div>
				</div>
			</div>
			<div class="right-side">
				<div class="nav">
					<ul>
						<li onclick="tabs(0)"
						class="user-post active">
						Posts</li>
						<li onclick="tabs(1)"
						class="user-review">
						Reviews</li>
						<li onclick="tabs(2)"
						class="user-setting">
						Setting</li>
					</ul>
				</div>
				<div class="profile-body">
					<div class="profile-posts tab">
						<h1>Posts</h1>
						<p>NO POSTS YET</p>
					</div>
					<div class="profile-reviews tab">
						<h1>Review</h1>
						<p>NO REVIEWS YET</p>
					</div>
					<div class="profile-setting tab">
						<h1>Setting</h1>
						<p></p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php 
	$i++;
}}
	 ?>
<script src="./jquery/jquery.js"></script>
<script src="js/main.js"></script>
</body>
</html>
