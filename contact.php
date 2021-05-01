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
                  echo "Welcome bro";
                 }
                 else {
                echo "Welcome: " .$_SESSION['customer_email'] . "";
                 }

                ?>
                  </a>
                  <a href="#">Shopping Cart Total Price: Taka <?php tatalPrice(); ?>, Total items : 2 </a> 
     </div>

     <div class = "col-md-6">
         <ul class="menu">
         	<li>
         		<a href="#">Register</a>
         	</li>
         	<li>
         		<a href="customer/my_account.php">My Account</a>
         	</li>
         	<li>
         		<a href="#">Go to Cart</a>
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
             			<li>
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
             			<li class="active">
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
      <ul class="breadcrumb">
        <li> <a href="index.php">Home</a></li>
                <li> <a href="#">Contact Us</a></li>
      </ul>

  </div><!---end container-->
<div class="col-md-3">
  <?php
      include("includes/sidebar.php");
  ?>
</div>  
<div class="col-md-9">
  <div class="header" style="background-color: #e7e7e7; padding: 8px 3px;font-weight: bold">
    <center>
      <h2>Contact Us</h2>
      <p class="text-muted">If you hava any questions, Please feel free to contact us, our customer service center is working for you 24/7.</p>
    </center>
  </div>
  <form action="contact.php" method="post" class="box">
    <div class="form-group">
      <label>Name</label>
      <input type="text" name="name"  required="" class="form-control">
      
    </div>
    <div class="form-group">
      <label>Email</label>
      <input type="text" name="email" class="form-control" required="">
      
    </div>
    <div class="form-group">
      <label>Subject</label>
      <input type="text" name="subject" class="form-control"required="">
      
    </div>
     <div class="form-group">
      <label>Massage</label>
      <textarea class="form-control" name="massage"></textarea>
      
    </div>
     <div class="text-center">
    
      <button type="submit" name="submit" class="btn btn-primary">
        <i class="fa fa-user-md"></i>Send Massage
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
//Admin Mail
if(isset($_POST['submit']))
{
  $senderName=$_POST['name'];
  $senderEmail=$_POST['email'];
  $senderSubject=$_POST['subject'];
  $senderMassage=$_POST['massage'];

  $receiverEmail="saiful2561998@gmail.com";
  mail($receiverEmail,$senderName,$senderSubject,$senderMassage,$senderEmail);

//Customer mail

$email=$_POST['email'];
$subject="Welcome to our website";
$msg="I shall get you soon, thanks for sending email";
$from="saiful2561998@gmail.com";
mail($email,$subject,$msg,$from);
echo "<h2 align='center'>Your mail sent</h2>";
}
?>

