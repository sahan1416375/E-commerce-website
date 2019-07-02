<?php

$con = mysqli_connect("localhost","root","","e-commerce");

function getCat(){
	global $con;
	$get_cats="select * from categories";
	$run_cats=mysqli_query($con, $get_cats);

	while($row_cats=mysqli_fetch_array($run_cats))
	{
		$cat_id=$row_cats['cat_id'];
		$cat_title=$row_cats['cat_title'];
	

	echo "<li><a href='#'>$cat_title</a></li>";
	}
}

function getBrand(){
	global $con;
	$get_brand="select * from brands";
	$run_brand=mysqli_query($con, $get_brand);

	while($row_brand=mysqli_fetch_array($run_brand))
	{
		$brand_id=$row_brand['brand_id'];
		$brand_title=$row_brand['brand_title'];

	echo "<li><a href='#'>$brand_title</a></li>";
	}
}


?>