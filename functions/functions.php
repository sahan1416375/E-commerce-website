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

function getPro(){
	global $con;
	$get_pro="Select * from products";
	$run_pro=mysqli_query($con, $get_pro);

	while($row_pro=mysqli_fetch_array($run_pro))
	{
		$pro_id=$row_pro['product_id'];
		$pro_cat=$row_pro['product_cat'];
		$pro_brand=$row_pro['product_brand'];
		$pro_title=$row_pro['product_title'];
		$pro_price=$row_pro['product_price'];
		$pro_image=$row_pro['product_image'];
		
		echo "
		<div id='single_product'>
			   <h3>$pro_title</h3>
			   <img src='admin_area/images/$pro_image' width='180px' height='180px'/>
			   <h4>Rs.$pro_price.00</h4>
			   <a href='details.php' style='float:left;' name='submit'>Details</a>
			   <a href='index.php'><button style='float:right'>Add to cart</button></a>

		</div>

		";
	}


}

function getPro2(){
	global $con;
	if (isset($_GET['$pro_id'])) {
              $product_id=$_GET('pro_id');
              $get_pro="select * from products where product_id=$product_id";
              $run_pro=mysqli_query($con, $get_pro);

	while($row_pro=mysqli_fetch_array($run_pro))
	{
		$pro_id=$row_pro['product_id'];
		$pro_cat=$row_pro['product_cat'];
		$pro_brand=$row_pro['product_brand'];
		$pro_title=$row_pro['product_title'];
		$pro_price=$row_pro['product_price'];
		$pro_image=$row_pro['product_image'];
		
		echo "
		<div id='single_product'>
			   <h3>$pro_title</h3>
			   <img src='admin_area/images/$pro_image' width='180px' height='180px'/>
			   <h4>Rs.$pro_price.00</h4>
			   <a href='details.php' style='float:left;' name='submit'>Details</a>
			   <a href='index.php'><button style='float:right'>Add to cart</button></a>

		</div>

		";
	}

}

?>