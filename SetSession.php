<?php

    session_start();

    if (!isset($_GET['email'])) {
        header("Location: https://localhost/HomePage.php");
    }
    else {
        $_SESSION['email'] = $_GET['email'];
        $_SESSION['loggedin'] = true;

        if($_GET['email'] == "admin@gmail.com"){
            echo "<script>
            alert('SuccessFull Login');
            window.location.href='http://localhost/ArtInterest/AdminProfilePage.php';
            </script>";
        }
    }

?>