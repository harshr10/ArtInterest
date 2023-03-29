<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Search Page</title>
		<link rel="stylesheet" type="text/css" href="css/SearchPageStyle.css">
		<link rel="icon" type="image/x-icon" href="images/favicon.ico">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
		<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;500;600;700&display=swap" rel="stylesheet">
		<script src="https://kit.fontawesome.com/dbf904400b.js" crossorigin="anonymous"></script>
	</head>
	<body>


<!-------------------- HEADER -------------------->

<div class="header">
	<div class="container">
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
	</div>

		<div class="small-container">
			<h2 align="center">Arts Search</h2><br />
			<div class="form-group">
				<div class="input-group">
					<span class="input-group-addon">Search</span>
					<input type="text" name="search_text" id="search_text" placeholder="Search for Art Works" class="form-control" />
				</div>
			</div>
			<br />
			<div id="result" class="row">
			
			</div>
		</div>
		<div style="clear:both"></div>
		<br />
		
		<br />
		<br />
		<br />
	</body>
</html>


<script>
$(document).ready(function(){
	function load_data(query)
	{
		$.ajax({
			url:"Search.php",
			method:"post",
			data:{query:query},
			success:function(data)
			{
				$('#result').html(data);
			}
		});
	}
	
	$('#search_text').keyup(function(){
		var search = $(this).val();
		if(search != '')
		{
			load_data(search);
		}
		else
		{
			load_data();			
		}
	});
});
</script>




