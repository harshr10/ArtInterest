<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width , initial-scale=1.02">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="css/LoginPageStyle.css">
	<link rel="icon" type="image/x-icon" href="images/favicon.ico">
	<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;500;600;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<script src="https://kit.fontawesome.com/dbf904400b.js" crossorigin="anonymous"></script>
	

	<script type="text/javascript" language="javascript">
		function preventback(){
			window.history.forward();
		}
		setTimeout("preventback()" , 0);
		window.onunload = function(){null};
	</script>

</head>
<!-------------------- HEADER -------------------->
<div class="container">
	<div class="navbar">
		<div class="logo">
			<a href="HomePage.html"><img src="images/BlueLogo-removebg.png"width="125px"></a>
		</div>
		<nav>
                <nav>
                    <ul id="Menuitems">
                        <li><a href="http://localhost/ArtInterest/HomePage.php" style="text-decoration: none;">
                            <i class="fa-solid fa-house"></i> Home</a></li>
                        <li><a href="http://localhost/ArtInterest/AllArtsPage.html" style="text-decoration: none;" >
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
		<div class="menu-icon">
			<i class="fa-solid fa-bars fa-xl" onclick="menutoggle()"></i>
		</div>
	</div>
</div>

<!-------------------- BODY -------------------->

<div class="container">
	<div class="row">
		<div class="col-2">
			<img src="images/art.jpg">
		</div>
		<div class="col-2">
			<div class="wrapper">
				<div class="split right">
					<div class="title-text">
						<div class="title login"> Login Form </div>
						<div class="title signup"> SignUp Form </div>
					</div>
					<div class="form-container">
						<div class="slide-controls">
							<input type="radio" name="slider" id="login" checked>
							<input type="radio" name="slider" id="signup">
							<label for="login" class="slide login"> Login</label>
							<label for="signup" class="slide signup"> SignUp</label>
							<div class="slide-tab"></div>
						</div>
						<div class="form-inner">
							<form action="LoginCheck.php" method="post" class="login">
								<div class="field">
									<input type="text" placeholder="Email Address" id="emailid" name="emailid" required>
								</div>
									<div class="field">
										<input type="password" placeholder="Password" id="password" name="password"
										required>
									</div>
									<div class="remme">
										<input type="checkbox" name="rememberme" value="1"> Remember Me
									</div>
									<div class="pass-link"><a href="#"> Forgot Password?</a>
									</div>
									<div class="field"> <input type="submit" value="Login" name="loginbtn">
									</div>
									<div class="signup-link"> Not a member? <a href="#"> Sign Up</a>
									</div>
								</form>
								<form action="LoginCheck.php" method="post" class="signup">
									<div class="field">
										<input type="text" placeholder="Email Address" name="emailid" required></div>
										<div class="field">
											<input type="password" placeholder="Password" name="password" required></div>
											<div class="field">
												<input type="password" placeholder="Confirm Password"
												name="repassword" required></div>
												<div class="field">
													<input type="submit" value="SignUp" name="signupbtn">
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
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

	const loginform = document.querySelector("form.login");
	const signupform = document.querySelector("form.signup");
	const loginbtn = document.querySelector("label.login");
	const signupbtn = document.querySelector("label.signup");
	const signuplink = document.querySelector(".signup-link a");
	const logintext = document.querySelector(".title-text .login");
	const singnuptext = document.querySelector(".title-text .signup");

	signupbtn.onclick = (()=>
	{
		loginform.style.marginLeft = "-50%";
		logintext.style.marginLeft = "-50%";
	});

	loginbtn.onclick = (()=>
		{
			loginform.style.marginLeft = "0%";
			logintext.style.marginLeft = "0%";
		});

	signuplink.onclick = (()=>
		{
			signupbtn.click();	
			return false;
		});

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

<?php

if(isset($_COOKIE['email']))
	{
		$email = $_COOKIE['email'];
		echo "
		<script>
		document.getElementById('emailid').value = '$email';
		</script>
		";
	}

?>

</html>
