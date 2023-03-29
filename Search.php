<?php
$connect = mysqli_connect("localhost", "root", "", "artinterest");
$output = '';
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($connect, $_POST["query"]);
	$query = "
	SELECT * FROM all_arts 
	WHERE Art_Name LIKE '%".$search."%'";
}
else
{
	$query = "SELECT * FROM all_arts";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
	while($row = mysqli_fetch_array($result))
	{
		$output .= '
			<div class="col-4">
			<a href="ProductDetailsPage.php?imgname='.$row["Art_Name"].'" style="text-decoration:none;">
					<img src="'.$row["Source"].'">
					<h4>'.$row["Art_Name"].'</h4>
				<div class="rating">
					<i class="'.$row["Rating One"].'"></i>
					<i class="'.$row["Rating Two"].'"></i>
					<i class="'.$row["Rating Three"].'"></i>
					<i class="'.$row["Rating Four"].'"></i>
					<i class="'.$row["Rating Five"].'"></i>
				</div>
				<p> $'.$row["Price"].'</p>
			</div>
			</a>';
	}
			echo $output;
}
else
{
	echo 'Data Not Found';
}
?>