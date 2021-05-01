
<?php
session_start();
if(!isset($_SESSION['customer_email']))
{
  echo "<script>window.open('../checkout.php','_self')</script>";
}
else{

  include("includes/db.php");
  include("functions/functions.php");
  include("functions/fun.php");


?>


<!DOCTYPE html>
<html>
<head>
	<title>Online Shopping</title>

    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="styles/style.css">


<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">


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
                  <a href="cart.php" style="font-size: 12px;">Shopping Cart Total Price: Taka <?php tatalPrice(); ?>, Total items : <?php item(); ?> </a> 
     </div>

     <div class = "col-md-6">
         <ul class="menu">
         	<li>
         		<!-- <a href="../customer_registration.php">Register</a> -->
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
         		<!-- <a href="../checkout.php">My Account</a> -->
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
         	<!-- 	<a href="../cart.php">Go to Cart</a> -->
          <?php
                          if(!isset($_SESSION['customer_email']))
                          {
                            echo "<a href='checkout.php'>Shopping Cart</a>";
                            
                          }
                          else{
                            echo "<a href='../cart.php'>Shopping Cart</a>";
                          }
                    ?>
         	</li>
         	<li>
         	<!-- 	<a href="../login.php">Login</a> -->
          <?php 
                 if(!isset($_SESSION['customer_email']))
                 {
                  echo "<a href='../checkout.php'>Login</p>";
                 }
                 else{
                  echo "<a href='../logout.php'>Logout</p>";
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
             			<li>
                             <a href="../index.php">Home</a>
             			</li>
             			<li>
                          <a href="../shop.php">Shop</a>
             			</li>
                          <li class="active">
                          <a href="my_account.php">My Account</a>
             			</li>
             			<li>
                         <!--  <a href="../cart.php">Shopping Cart</a> -->
                         <?php
                          if(!isset($_SESSION['customer_email']))
                          {
                            echo "<a href='checkout.php'>Shopping Cart</a>";
                          }
                          else{
                            echo "<a href='../cart.php'>Shopping Cart</a>";
                          }
                    
                    ?>
             			</li>

                  <li>
                          <a href="service.php">Services</a>
                  </li>
             			
             			<li>
                          <a href="../contact.php">Contact</a>
             			</li>
             			<li>
                          <a href="../index.php">Blog</a>
             			</li>
                     
             		</ul>
             	</div>

             		<div>
             			<a href="cart.php" class="btn btn-primary navbar-btn right">
             				<i class="fa fa-shopping-cart">
             				</i>
             				<span>
                      <?php item(); ?> items in cart
                    </span>
             			</a>
                    </div>
             			<div class="navbar-collapse collapse right">
             				<button class="btn navbar-btn btn-primary"type="button" data-toggle=customer/my_account.php"collapse" data-target="#search"
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
</div>  <!--hedder end-->



<div id="content"><!---content start-->

  <div class="container"><!---container start-->
    <div class="col-md-12"><!---col-md-12 start-->
      <ul class="breadcrumb">
        <li> <a href="../index.php">Home</a></li>
                <li> <a href="#">My Account</a></li>
      </ul>

  </div><!---end container-->
<div class="col-md-3">
  <?php
      include("includes/sidebar.php");
  ?>
</div>  

<div class="col-md-9">
  <?php
      if(isset($_GET['my_order']))
      {
        include("my_order.php");
      }
  ?>
  <!-----------payoffline start---->
  <?php
    if(isset($_GET['pay_offline'])){
    include("pay_offline.php");
  }

  ?><!-----------payoffline end---->

<!-----------edit account start---->

<?php
    if(isset($_GET['edit_act'])){
    include("edit_act.php");
  }

  ?>


<!-----------edit account end---->


<!-----------change password start---->

<?php
    if(isset($_GET['change_pass'])){
    include("change_pass.php");
  }

  ?>


<!-----------change Password end---->

<!-----------delete account start---->

<?php
    if(isset($_GET['delete_act'])){
    include("delete_act.php");
  }

  ?>


<!-----------delete account end---->



</div>




  </div><!---end container-->

</div><!----end content-->



  <?php 
    include("includes/footer.php");
 ?>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</body>
</html>


<?php 

       }
 ?>