<!DOCTYPE>
<?php
include("functions/functions.php");
?>
<html>
<head>
    <title>My Ecommerce website</title>
    <link rel="stylesheet" href="styles/Css.css" media="all"/> 
</head>

<body>
    <form action="details.php" method="get">
	<!-- Main container starts-->
    <div class="main_wrapper">

    	<!-- Header starts-->
    <div class="header_wrapper">
        <img id="logo" src="images/banner.jpg"/>
        <img id="banner" src="images/shoplogo.png"/>
    </div>
    	<!-- Header ends-->

    	<!-- Menubar starts-->
        <div class="menubar">
        	<ul id="menu">
        		<li><a href="#">Home</li>
        		<li><a href="#">All products</li>
        		<li><a href="#">My Account</li>
        		<li><a href="#">Sign Up</li>
        		<li><a href="#">Shopping us</li>
        		<li><a href="#">Contact us</li>
        	</ul>
        	<div id="form">
        		<form method="get" action="result.php" enctype="multipart/form-data">
        			<input type="text" name="user_query" placeholder="Enter what you want">
        			<input type="submit" name="search" value="search">
        		</form>
        	</div>
        </div>
        <!-- Menubar ends-->

        <!-- Content starts-->
        <div class="content_wrapper">
        	<div id="sidebar">
        		<div id="sidebar_title">Categories</div>
        		<ul id="cats">
        			<?php  
        				getCat(); 
        			?>
        		</ul>
        		<div id="sidebar_title">Brands</div>
        		<ul id="cats">
        			<?php
        				getBrand();
        			?>
        		</ul>

        	</div>

        	<div id="content_area">
                    <div id="shopping_cart">
                        <span style="float:right; font-size: 18px; padding: 5px; line-height: 40px;">
                            Welcome Guest!! <b style="color: yellow">Shopping Cart-</b>Total Items : Total Price :<a href="cart.php" style="color: yellow">Go to the cart</a>
                        </span>
                        

                    </div>

                    <div id="products_box">
                     <h1>welcome to Details page</h1>       
                        <?php
                      global $con;
                      global $pro_id;

                       if(isset($_GET['pro_id']))
                       {

                        $product_id=$_GET['pro_id'];
                        $get_pro="Select * from products where product_id= $product_id";

                         $run_pro=mysqli_query($con, $get_pro);

                         while($row_pro=mysqli_fetch_array($run_pro))
                         {
                        $pro_id=$row_pro['product_id'];
                        $pro_title=$row_pro['product_title'];
                        $pro_price=$row_pro['product_price'];
                        $pro_image=$row_pro['product_image'];
                        $pro_desc=$row_pro['product_desc'];

                        echo "Complete";
            
                      echo "
                       <div id='single_product'>

                
                      <h3>$pro_title</h3>
                        <img src='admin_area/images/$pro_image' width='400' height='300'/>
                        <h4>Rs.$pro_price.00</h4>
                         <a href='index.php' style='float:left;'>Go Back</a>
                         <a href='index.php'><button style='float:right'>Add to cart</button></a>

        </div>
        ";

        
    }
}

?>              

              </div>
            </div>
        </div>
        <!-- Content ends-->

        <!--Footer starts-->
        <div id="footer">
        	<h2 style="text-align:center; padding-top: 40px">&copy; 2014 by www.onlineTuting.com</h2>

        </div>
        <!--Footer ends-->


    </div>
    <!-- Main container ends-->
</form>
</body>

</html>
