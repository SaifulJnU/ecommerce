
<?php
session_start();
  include("includes/db.php");
 // include("functions/fun.php");
include("functions/functions.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Online Shopping</title>

    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">


<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="styles/style.css">


</head>
<body>
     
     <div id="top">  
     	<div class = "container">
     		<div class = "col-md-6 offer">
     			<a href = "#" class="btn btn-success btn sm">
               <?php

                 if(!isset($_SESSION['customer_email']))
                 {
                  echo "Welcome Guest";
                
                 }
                
                 else{
                  $customer_email=$_SESSION['customer_email'];
                  $get_customer="select * from customers where customer_email='$customer_email'";

 
                 $run_cust=mysqli_query($db,$get_customer);
                 $row_cust=mysqli_fetch_array($run_cust);
                 $customer_name=$row_cust['customer_name'];

                    echo "Welcome, ". $customer_name ;
                    
                 }
                    
                ?>

                 </a>

                
                 <span href="cart.php" style="font-size: 12px;">Shopping Cart Total Price: Taka <?php tatalPrice(); ?>, Total items : <?php item(); ?> </span> 
         
                 
                
                 
     </div>

     <div class = "col-md-6">
         <ul class="menu">
         	<li>
         		<!-- <a href="customer_registration.php">Register</a> -->
            <?php 
                 if(!isset($_SESSION['customer_email']))
                 {
                  echo "<a href='customer_registration.php'>Register</a>";
                 }
                 else{
                  echo "";
                 }

             ?>

         	</li>
         	<li>
         		<!-- <a href="customer/my_account.php">My Account</a> -->
            <?php 
                 if(isset($_SESSION['customer_email']))
                 {
                  echo "<a href='customer/my_account.php'>My Account</a>";
                 }
                 else{
                  echo "<a href='shop.php' style=' text-decoration: none;'><span style='color:orange;' >Buy Quality Products</span></a>" ;
                 }

             ?>
         	</li>
         	<li>
         		<!-- <a href="cart.php">Go to Cart</a> -->
             <?php
                          if(!isset($_SESSION['customer_email']))
                          {
                            echo "<a href='checkout.php'>Shopping Cart</a>";
                          }
                          else{
                            echo "<a href='cart.php'>Shopping Cart</a>";
                          }
                    ?>
         	</li>
         	<li>
         		<?php 
                 if(!isset($_SESSION['customer_email']))
                 {
                  echo "<a href='checkout.php'>Login</p>";
                 }
                 else{
                  echo "<a href='logout.php'>Logout</p>";
                 }

             ?>
         	</li>

         </ul>
        
     </div>

     </div>
 </div>

<div class="navbar navbar-default" id="navbar">
      <div class="container">
      	<div class="navbar-header">
      		 <a class="navbar-brand home" href="index.php">
      		 	<img src="images/logo2.png" class="hidden-xs">
      		 	<img src="images/logo1.png" class="visible-xs">
      		 </a>
             <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
             	<span class="sr-only">Toggle Navigation</span>
             	<i class="fa fa-align-justify"></i>

             	
             </button>
             <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#search">
             
             <span class="sr-only"></span>
             <i class="fa fa-search"></i>
  
             </button>
         </div>

             <div class="navbar-collapse collapse" id="navigation">
             	<div class="padding-nav">
             		<ul class="nav navbar-nav navbar-left">
             			<li class="active">
                             <a href="index.php">Home</a>
             			</li>
             			<li>
                          <a href="shop.php">Shop</a>
             			</li>
                          <li>
                         <!--  ?php
                          if(!isset($_SESSION['customer_email']))
                          {
                            echo "<a href='checkout.php'>My Account</a>";
                          }
                          else{
                            echo "<a href='customer/my_account.php?my_order'>My Account</a>";
                          }
                          ?> -->

                          <?php 
                 if(isset($_SESSION['customer_email']))
                 {
                  echo "<a href='customer/my_account.php?my_order'>My Account</a>";
                 }
                 else{
                  echo "" ;
                 }

             ?>

             			</li>
             			<li>
                          <!-- <a href="cart.php">Shopping Cart</a>-->
                           <?php
                          if(!isset($_SESSION['customer_email']))
                          {
                            echo "<a href='checkout.php'>Shopping Cart</a>";
                          }
                          else{
                            echo "<a href='cart.php'>Shopping Cart</a>";
                          }
                          ?>
             			</li>
             			<li>
                          <a href="about.php">About Us</a>
             			</li>
             			<li>
                          <a href="service.php">Services</a>
             			</li>
             			<li>
                          <a href="contact.php">Contact</a>
             			</li>
             			<li>
                          <a href="#">Blog</a>
             			</li>
                     
             		</ul>
             	</div>

             		<div>
             			<a href="#" class="btn btn-primary navbar-btn right">
             				<i class="fa fa-shopping-cart">
             				</i>
                   <span>
                      <?php item(); ?> items in cart
                    </span>
             				
             			</a>
                    </div>
             			<div class="navbar-collapse collapse right">
             				<button class="btn navbar-btn btn-primary"type="button" data-toggle="collapse" data-target="#search"
             				>
             				<span class="sr-only">Toggle search
             					
             				</span>
             				<i class="fa fa-search"></i>
             					
             				</button>
             			</div>
             			
                   <div class="collapse clearfix" id="search">

                   	<form class="navbar-form" method="get" action="result.php">
                   		<div class="input-group">
                   			<input type="text" name="user_query" placeholder="search"
                   			class="form-control" required="">
                             <span class="input-group-btn">
                             	<button
                   			type="submit" value="Search" name ="search" class="btn btn-primary">
                   				<i class="fa fa-search"></i>
                   			</button>
                             </span>
                   			
                   			

                   		</div>
                   		
                   	</form>
                   	

                   </div>

             		
             </div>


      	</div>
</div>

<!-- slider -->
<div class="container" id="slider">
  <div  class="col-md-12">
  <div class = "carousel slide" id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">


            <?php
            $get_slider= "select * from slider LIMIT 0,1";
            $run_slider=mysqli_query($con,$get_slider);
            while($row=mysqli_fetch_array($run_slider))
            {
                            $slider_name=$row['slider_name'];
                            $slider_image=$row['slider_image'];
                            echo "<div class= 'item active'>
                            <img src='admin_area/slider_images/$slider_image' style='width:100%;height:600px;'>
                            </div>
                            ";
            } 
             ?>

            <?php
            $get_slider= "select * from slider LIMIT 1,2";
            $run_slider=mysqli_query($con,$get_slider);
            while($row=mysqli_fetch_array($run_slider))
            {
                            $slider_name=$row['slider_name'];
                            $slider_image=$row['slider_image'];
                            echo "<div class= 'item'>
                            <img src='admin_area/slider_images/$slider_image' style='width:100%;height:600px;'>  
                            </div>
                            ";
            } 
             ?>





      <!-- <div class="item active">
        <img src="admin_area/slider_images/first.jpg" alt="Los Angeles" style="width:100%;">
        <div class="carousel-caption">
          <h3>Los Angeles</h3>
          <p>LA is always so much fun!</p>
        </div>
      </div>

      <div class="item">
        <img src="admin_area/slider_images/second.jpg" alt="Chicago" style="width:100%;">
        <div class="carousel-caption">
          <h3>Chicago</h3>
          <p>Thank you, Chicago!</p>
        </div>
      </div>
    
      <div class="item">
        <img src="admin_area/slider_images/third.jpg" alt="New York" style="width:100%;">
        <div class="carousel-caption">
          <h3>New York</h3>
          <p>We love the Big Apple!</p>
        </div>
      </div> -->
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

</div>
<div id="advantage">

<div class="container">
	<div class="same-height-row">
		<div class="col-sm-4">
			<div class="box same-height">
				<div class="icon">
					<i class="fa fa-heart">
						
					</i>
				</div>
                  <h3><a href="#">BEST PRICES 
                  </h3>
                  <p> You can check all website than compare with us</p>

			</div>
           
		</div>
		
		<div class="col-sm-4">
			<div class="box same-height">
				<div class="icon">
					<i class="fa fa-heart">
						
					</i>
				</div>
                  <h3><a href="#">GIVE AWAYS
                  </h3>
                  <p> You can check all website than compare with us</p>

			</div>
           
		</div>
		<div class="col-sm-4">
			<div class="box same-height">
				<div class="icon">
					<i class="fa fa-heart">
						
					</i>
				</div>
                  <h3><a href="#">OFFER CONDITIONS
                  </h3>
                  <p> You can check all website than compare with us</p>

			</div>
           
		</div>

	</div>
	

</div>


</div>
<!-----hot start----------->
<div id="hot">
	<div class="box">
		<div class="container">
			<div class= "col-md-12">
				<h2> Latest this week </h2>
			</div>
			
		</div>
		
	</div>

</div>
<!-----hot end----------->
<div id="content" class="container">
<div class="row">
	

  
<?php 
   getPro();
 ?>


	<!-- <div class="col-sm-4 col-sm-6 single">    
		 <div class="product">
			<a href="details.php">
				
				<img src="admin_area/slider_images/first.jpg" class="img-responsive">
			</a>
			<div class="text">
				<h3><a href="details.php">pillo shirt</a></h3>

				<p class="price">
					
                     Taka 299
				</p>
				
				<p class="button">
					<a href="details.php" class="btn btn-default">View Details</a>
					<a href="details.php" class="btn btn-primary">
						<i class = "fa fa-shopping-cart"></i>
						Add to cart
					</a>

				</p>


			</div>

		</div>
		

	</div> ---->  
	

</div>

</div>

<!--------------footer start---->
<?php 
    include("includes/footer.php");

 ?>
<!-------footer end------->

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</body>
</html>


<!--------jekhane # sekhane cart.php----->