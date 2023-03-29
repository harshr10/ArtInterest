<?php

//-------------------- CONNECTION --------------------

$db = mysqli_connect("localhost", "root", "", "ArtInterest");

//-------------------- INSERT --------------------

if(isset($_POST['insert'])){
	header("location: http://localhost/ArtInterest/AddArtPage.php");
}

else if (isset($_POST['addart'])){

	$artname = $_POST['artname'];
    $rating = $_POST['rating'];
    $price = $_POST['price'];
    $prod_details = $_POST['prod_details'];
	$filename = $_FILES["fileToUpload"]["name"];
    $tempname = $_FILES["fileToUpload"]["tmp_name"];   
    $folder = "images/".$filename;

    if($rating == 1)
    {
        $rating_one = "fa fa-star";
        $rating_two = "fa fa-star-o";
        $rating_three = "fa fa-star-o";
        $rating_four = "fa fa-star-o";
        $rating_four = "fa fa-star-o";

        $sql = "INSERT INTO all_arts VALUES ('images/$filename' , '$artname' ,'$rating_one' ,'$rating_two' , '$rating_three' ,
            '$rating_four' , '$rating_five' , '$price' , '$prod_details')";
    }
   else if($rating == 2)
    {
        $rating_one = "fa fa-star";
        $rating_two = "fa fa-star";
        $rating_three = "fa fa-star-o";
        $rating_four = "fa fa-star-o";
        $rating_five = "fa fa-star-o";

        $sql = "INSERT INTO all_arts VALUES ('images/$filename' , '$artname' ,'$rating_one' ,'$rating_two' , '$rating_three' ,
            '$rating_four' , '$rating_five' , '$price' , '$prod_details')";
    }
    else if($rating == 3)
    {
        $rating_one = "fa fa-star";
        $rating_two = "fa fa-star";
        $rating_three = "fa fa-star";
        $rating_four = "fa fa-star-o";
        $rating_five = "fa fa-star-o";

        $sql = "INSERT INTO all_arts VALUES ('images/$filename' , '$artname' ,'$rating_one' ,'$rating_two' , '$rating_three' ,
            '$rating_four' , '$rating_five' , '$price' , '$prod_details')";
    }
    else if($rating == 4)
    {
        $rating_one = "fa fa-star";
        $rating_two = "fa fa-star";
        $rating_three = "fa fa-star";
        $rating_four = "fa fa-star";
        $rating_five = "fa fa-star-o";

        $sql = "INSERT INTO all_arts VALUES ('images/$filename' , '$artname' ,'$rating_one' ,'$rating_two' , '$rating_three' ,
            '$rating_four' , '$rating_five' , '$price' , '$prod_details')";
    }
    else if($rating == 5)
    {
        $rating_one = "fa fa-star";
        $rating_two = "fa fa-star";
        $rating_three = "fa fa-star";
        $rating_four = "fa fa-star";
        $rating_five = "fa fa-star";

        $sql = "INSERT INTO all_arts VALUES ('images/$filename' , '$artname' ,'$rating_one' ,'$rating_two' , '$rating_three' ,
            '$rating_four' , '$rating_five' , '$price' , '$prod_details')";
    }

    mysqli_query($db, $sql);

    if (move_uploaded_file($tempname, $folder))  {
           echo 
           "<script>
			alert('Art Work Added Succesfully');
			window.location.href='http://localhost/ArtInterest/AdminProfilePage.php';
			</script>";
        }
        else{
            echo 
           "<script>
            alert('Failed To Add Art Work');
            window.location.href='http://localhost/ArtInterest/AdminProfilePage.php';
            </script>";
      }
  }

else if(isset($_POST['edit'])){
	echo
    "<script>
    window.location.href='http://localhost/ArtInterest/EditArtsPage.php';
    </script>";
}

if(isset($_GET['imgname']))
{
    $artname = $_GET['imgname'];
    $sql = "DELETE FROM all_arts WHERE Art_Name = '$artname'";
    mysqli_query($db, $sql);
    echo "<script>
    alert('Art Deleted Successfully');
    window.location.href='http://localhost/ArtInterest/EditArtsPage.php';
    </script>";
}

else if(isset($_POST['arttoedit'])){

}
?>