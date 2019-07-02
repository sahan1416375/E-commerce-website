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

        	<div id="content_area">This is content area</div>
        </div>
        <!-- Content ends-->

        <!--Footer starts-->
        <div id="footer">
        	<h2 style="text-align:center; padding-top: 40px">&copy; 2014 by www.onlineTuting.com</h2>

        </div>
        <!--Footer ends-->


    </div>
    <!-- Main container ends-->
</body>
</html>
