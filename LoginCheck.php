<?php



session_start();
//-------------------- CONNECTION --------------------

$conn = oci_connect('system', 'root' , '//localhost/orcl');


$email = $_POST['emailid'];
$pass = $_POST['password'];

//-------------------- LOGIN --------------------

if(isset($_POST['loginbtn']))
	{
		$query = "select * from login where email='".$email."' and password='".$pass."'";

		$stid = oci_parse($conn, $query);
		$r = oci_execute($stid);
		$check = oci_fetch_array($stid);

		if(!$check){
			echo "<script>
			alert('Invalid Crendentials Enter Again');
			window.location.href='http://localhost/ArtInterest/loginPage.php';
			</script>";
		}

		else{

			$rem = $_POST['rememberme'];

			if(isset($_POST['rememberme']))
			{
			setcookie('email' , $email , time()+60*60*7);
			}

			
			$_SESSION['email'] = $email;
			$_SESSION['loggedin'] = true;


			header("Location: http://localhost:8080/ArtInterest/LoginServlet?email=".$email);
	}
	}

//-------------------- REGISTER --------------------

	else if(isset($_POST['signupbtn']))
	{

		$query="insert into login (email , password) values('".$email."' , '".$pass."')";
		$repass = $_POST['repassword'];

		if($pass == $repass){

		$stid = oci_parse($conn, $query);
		$r = oci_execute($stid);

		$query1 = "select * from login where email='".$email."' and password='".$pass."'";
		$stid1 = oci_parse($conn, $query1);
		$r1 = oci_execute($stid1);
		$check = oci_fetch_array($stid1);

		if($check){
		echo "<script>
			alert('SuccessFully Registered');
			window.location.href='http://localhost:8080/ArtInterest/RegistrationPage.html';
			</script>";
		}
		else{

			ini_set('display_errors', 1);
			ini_set('display_startup_errors', 1);
			error_reporting(E_ALL);	
		}

		}
		else{

		echo "<script>
			alert('Invalid Crendentials Enter Again');
			window.location.href='http://localhost/ArtInterest/NewProfilePage.php';
			</script>";

		}

	}

//-------------------- LOGOUT --------------------

	else if(isset($_POST['logoutbtn'])){
		session_start();
        session_destroy(); //destroy the session
		header("Location: http://localhost:8080/ArtInterest/LogoutServlet");
		//to redirect back to "index.php" after logging out
        exit();
	}

	else{
		header("location: http://localhost/ArtInterest/NewProfilePage.php");
	}


?>