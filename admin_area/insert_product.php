<!DOCTYPE>
<!DOCTYPE html>
<?php

include("includes/db.php");

?>
<html>
<head>
	<title>Inserting Product</title>
	<script type="text/javascript"  src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
	<script>
		tinymce.init({selector:textarea});
	</script>
</head>
<body bgcolor="skyblue">
	<form action="insert_product.php" method="post/get" enctype="multipart/form-data">
	<table align="center" border="2" width="600px"bgcolor="orange">
		<tr align="center">
			<td colspan="6"><h1>Insert new post here</h1></td>
		</tr>
		<tr>
			<td align="right"><b>Product Title : </b></td>
			<td><input type="text" name="product_title" size="50" required/></td>
		</tr>

		<tr>
			<td align="right"><b>Product Category : </b></td>
			<td>
				<select name="product_cat" required/>
					<option>Select a Category</option>
					<?php
					$get_cats="select * from categories";
			$run_cats=mysqli_query($con, $get_cats);

			while($row_cats=mysqli_fetch_array($run_cats))
			{
			$cat_id=$row_cats['cat_id'];
			$cat_title=$row_cats['cat_title'];
	

			echo "<option value='$cat_id'>$cat_title</option>";
			}
					?>
				</select>
			</td>
		</tr>

		<tr>
			<td align="right"><b>Product Brand : </b></td>
			<td>
				<select name="product_brand"/>
					<option>Select a Brand</option>
				<?php $get_brand="select * from brands";
	$run_brand=mysqli_query($con, $get_brand);

	while($row_brand=mysqli_fetch_array($run_brand))
	{
		$brand_id=$row_brand['brand_id'];
		$brand_title=$row_brand['brand_title'];

	echo "<option value='$brand_id'>$brand_title</option>";
	}
	?>
	</select>


			</td>
		</tr>

		<tr>
			<td align="right"><b>Product Image : </b></td>
			<td><input type="file" name="product_image"/></td>
		</tr>

		<tr>
			<td align="right"><b>Product Price : </b></td>
			<td><input type="number" name="product_price"></td>
		</tr>

		<tr>
			<td align="right"><b>Product Description : </b></td>
			<td><textarea name="product_desc" cols="30" rows="10"></textarea></td>
		</tr>

		<tr>
			<td align="right"><b>Product Keywords : </b></td>
			<td><input type="text" name="product_keywords" size="50"></td>
		</tr>

		<tr align="center">
			<td colspan="6"><input type="submit" name="insert_post" value="Insert product Now"/></td>
		</tr>
	</table>
</form>
</body>
</html>

<?php

	#  $con=mysqli_connect("localhost","root","","e-commerce");
	if (isset($_POST['insert_post'])) {
		# code...
		$product_title=$_POST['product_title'];
		$product_cat=$_POST['product_cat'];
		$product_brand=$_POST['product_brand'];
		$product_price=$_POST['product_price'];

		$product_image=$_FILES['product_image']['name'];
		$product_image_tmp=$_FILES['product_image']['tmp_name'];

		$product_desc=$_POST['product_desc'];
		$product_keywords=$_POST['product_keywords'];
 
 		 move_uploaded_file($product_image_tmp, "images/$product_image");

 		

		 $insert_product="insert into products (product_cat, product_brand, product_title, product_price, product_desc, product_image, product_keywords) values ('$product_cat','$product_brand','$product_title',$product_price,'$product_desc','$product_image','$product_keywords')";

		$insert_pro =mysqli_query($con, $insert_product);

		if($insert_pro){
		echo "<script>alert('Product has been inserted')</script>";
		echo "<script>window.open('insert_product.php','_self')</script>";

		}
		else{
			echo "<script>alert('Wrong')</script>";
		} 
 		 }

   
	
?>