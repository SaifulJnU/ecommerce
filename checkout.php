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
                 <!-- php 
                 if(!isset($_SESSION['customer_email']))
                 {
                  echo "<a href='checkout.php'>Login</p>";
                 }
                 else{
                  echo "<a href='logout.php'>Logout</p>";
                 }
 -->               

                   <?php 
                 if(isset($_SESSION['customer_email']))
                 {
                  echo "<a href='customer/my_account.php'>My Account</a>";
                 }
                 else{
                  echo "" ;
                 }
             ?>
            
             			</li>
             			<li>
                          <!-- <a href="cart.php">Shopping Cart</a> -->
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
</div>  <!--hedder end-->



<div id="content"><!---content start-->

  <div class="container"><!---container start-->
    <div class="col-md-12"><!---col-md-12 start-->
      <ul class ="breadcrumb">
        <li> <a href="index.php">Home</a></li>
                <li> <a href="#">Checkout </a></li>
      </ul>

  </div><!---end container-->
<div class="col-md-3">
  <?php
     // include("includes/sidebar.php");

      include("includes/ShippingAndBilling.php");
  ?>

<!-- <button class="open-button"  class="btn btn-default" onclick="openForm()">Shipping Form</button>

<div class="form-popup" id="myForm">
  <form action="checkout.php" class="form-container">
    <h1></h1>
    <div class="form-group">
    <label for="customer_name"><b>Full Name</b></label>
    <input type="text" placeholder="Full name" name="customer_name" class="form-control" required>
</div>
<div class="form-group">
    <label for="shipping_add"><b>Address</b></label>
    <textarea type="text" name="shipping_add" placeholder="Shipping Address" class="form-control" style="height:200px"></textarea>
</div>
   <div class="form-group">
    <label for="region"><b>Region</b></label>
    <input type=text placeholder="Region" name="region" class="form-control" required>
</div>
<div class="form-group">
    <label for="customer_contact"><b>Phone Number</b></label>
    <input type="text" placeholder="Phone Number" name="contact_number" class="form-control" required>
</div>
<div class="text-center">
    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    <button type="button" class="btn btn-danger" class="btn cancel" onclick="closeForm()">Close</button></div>
  </form>
</div>

 -->
<!-- <button class="btn btn-primary btn-lg"><a href="shipping_add.php">shipping address</a></button>
 -->
<!-- 
<div class="form-popup" id="myForm">
  <form action="checkout.php" method="post" class="form-container">
    <h1></h1>

    <label><b>Full Name</b></label>
    <input type="text" placeholder="Full name" name="customer_name" required>

    <label><b>Address</b></label>
    <textarea type="text" placeholder="Shipping Address"  name="shipping_add" style="height:200px"></textarea>


    <label><b>Region</b></label>
    <input type="text" placeholder="Region" name="region" required>

    <label><b>Phone Number</b></label>
    <input type="text" placeholder="Phone Number" name="contact_number" required>


    <button type="submit" name="submit" class="btn">Submit</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div> -->







</div> 


<div class="col-md-9"><!---col-md-9 start-->
<?php 

if(!isset($_SESSION['customer_email']))
  {
    include('customer/customer_login.php');
  }
  else{
    include('payment_options.php');
  }

 ?>


</div>



</div>
</div>


<?php 
    include("includes/footer.php");
 ?>
<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</body>
</html>

<?php 
if(isset($_POST['submit']))
{
  $customer_name=$_POST['customer_name'];
  $shipping_add=$_POST['shipping_add'];
  $region=$_POST['region'];
  $contact_number=$_POST['contact_number'];


  //$c_ip=getUserIP();


$insert_customer="insert into shipping_address(cust_id,customer_name,shipping_add,region,contact_number) values('$cust_id','$customer_name','$shipping_add','$region','$contact_number')";


$run_customer=mysqli_query($con,$insert_customer);


if($run_customer){
    echo "<script>alert('Information Inserted Successfully')</script>";
    //echo "<script>window.open('index.php?view_product')</script>";
  }
  
}

 ?>