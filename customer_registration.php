<?php
  session_start();
  include("includes/db.php");
  include("functions/functions.php");

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
                  echo "Welcome Bro";
                 }
                 else {
                echo "Welcome: " .$_SESSION['customer_email'] . "";
                 }

                ?>


                  </a>
                  <a href="#">Shopping Cart Total Price: Taka 100, Total items : 2 </a> 
     </div>

     <div class = "col-md-6">
         <ul class="menu">
         	<li>
         		<a href="#">Register</a>
         	</li>
         	<li>
         		<a href="customer/my_account">My Account</a>
         	</li>
         	<li>
         		<a href="cart.php">Go to Cart</a>
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
                          <a href="customer/my_account.php">My Account</a>
             			</li>
             			<li>
                          <a href="cart.php">Shopping Cart</a>
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
             			<a href="cart.php" class="btn btn-primary navbar-btn right">
             				<i class="fa fa-shopping-cart">
             				</i>
             				<span>
             					4 items in cart
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
</div>  <!--hedder end-->



<div id="content"><!---content start-->

  <div class="container"><!---container start-->
    <div class="col-md-12"><!---col-md-12 start-->
      <ul class ="breadcrumb">
        <li> <a href="index.php">Home</a></li>
                <li> <a href="#">Customer Registration</a></li>
      </ul>

  </div><!---end container-->
<div class="col-md-3">
  <?php
      include("includes/sidebar.php");
  ?>
</div>  
<div class="col-md-9">
  <div class="header"style="background-color: #e7e7e7; padding: 8px 3px;font-weight: bold">
    <center>
      <h1>Customer Registration</h1>
    </center>
  </div>

  <form action="customer_registration.php" method="post" enctype="multipart/form-data" class="box">
    <div class="form-group">
      <label>Customer Name</label>
      <input type="text" name="c_name"  required="" class="form-control">
      
    </div>
    <div class="form-group">
      <label>Customer Email</label>
      <input type="text" name="c_email" class="form-control" required="">
      
    </div>
    <div class="form-group">
      <label>Customer Password</label>
      <input type="Password" name="c_password" class="form-control" required="">
      
    </div>
     <div class="form-group">
      <label>Country</label>
      <input type="text" name="c_country" class="form-control" required="">
      
    </div>
    <div class="form-group">
      <label>City</label>
      <input type="text" name="c_city" class="form-control" required="">
    </div>
      <div class="form-group">
      <label>Contact Number</label>
      <input type="text" name="c_contact" class="form-control" required=""> 
    </div>
    <div class="form-group">
      <label>Address</label>
      <input type="text" name="c_address" class="form-control" required="">
    </div>

    <div class="form-group">
      <label>Image</label>
      <input type="file" name="c_image" class="form-control" required="">
    </div>
      
     <div class="text-center">
    
      <button type="submit" name="submit" class="btn btn-primary">
        <i class="fa fa-user-md"></i>Register
      </button>
    </div>
  </form>
</div>
</div>
</div>





<?php 
    include("includes/footer.php");
 ?>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</body>
</html>

<?php 
if(isset($_POST['submit']))
{
  $c_name=$_POST['c_name'];
  $c_email=$_POST['c_email'];
  $c_password=$_POST['c_password'];
  $c_country=$_POST['c_country'];
  $c_city=$_POST['c_city'];
  $c_contact=$_POST['c_contact'];
  $c_address=$_POST['c_address'];
  $c_image=$_FILES['c_image']['name'];
  $c_tmp_image=$_FILES['c_image']['tmp_name'];
  $c_ip=getUserIP();
//image upload
move_uploaded_file($c_tmp_image,"customer/customer_images/$c_image");

$insert_customer="insert into customers (customer_name,customer_email,customer_pass,customer_country,customer_city,customer_contact,customer_address,customer_image,customer_ip) values('$c_name','$c_email','$c_password','$c_country','$c_city','$c_contact','$c_address','$c_image','$c_ip')";


$run_customer=mysqli_query($con,$insert_customer);

$sel_cart="select * from cart where ip_add='$c_ip'";
$run_cart=mysqli_query($con,$sel_cart);
$check_cart=mysqli_num_rows($run_cart);
if($check_cart>0)
{
  $_SESSION['customer_email']=$c_email;
  echo "<script>alert('You have been registered successfully')</script>";
   echo "<script>window.open('checkout.php','_self')</script>";
}
else{
  $_SESSION['customer_email']=$c_email;
  echo "<script>alert('You have been registered successfully')</script>";
   echo "<script>window.open('index.php','_self')</script>";
}



}

 ?>