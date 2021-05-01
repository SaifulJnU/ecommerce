<?php
session_start();
if(!isset($_SESSION['customer_email']))
{
  echo "<script>window.open('../checkout.php','_self')</script>";
}
else{

  include("includes/db.php");
  include("functions/functions.php");
  if(isset($_GET['order_id']))
  {
    $order_id=$_GET['order_id'];


  }

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
                 Welcome Guest
                  </a>
                  <a href="#">Shopping Cart Total Price: Taka 100, Total items : 2 </a> 
     </div>

     <div class = "col-md-6">
         <ul class="menu">
         	<li>
         		<a href="../customer_registration.php">Register</a>
         	</li>
         	<li>
         		<a href="../checkout.php">My Account</a>
         	</li>
         	<li>
         		<a href="../cart.php">Go to Cart</a>
         	</li>
         	<li>
         		<a href="../login.php">Login</a>
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
                          <a href="../cart.php">Shopping Cart</a>
             			</li>
             			<li>
                          <a href="../about.php">About Us</a>
             			</li>
             			<li>
                          <a href="../service.php">Services</a>
             			</li>
             			<li>
                          <a href="../contact.php">Contact</a>
             			</li>
             			<li>
                          <a href="contact.php">Team</a>
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
        <li> <a href="index.php">Home</a></li>
                <li> <a href="#">My Account</a></li>
      </ul>

  </div><!---end container-->
<div class="col-md-3">
  <?php
      include("includes/sidebar.php");
  ?>
</div><!----col-md-3------>

<div class="col-md-9">
  <div class="box">
    <h1 align="center">Please Confirm Your Payment</h1>
    <form action="confirm.php?update_id=<?php echo $order_id; ?>" method="post" enctype="multipart/form-data">
      <div class="form-group">
          <label>Invoice Number</label>        
          <input type="text" name="invoice_number" class="form-control" required="">
      </div>

      <div class="form-group">
          <label>Amount</label>        
          <input type="text" name="amount" class="form-control" required="">
      </div>

      <div class="form-group">
          <label>Select Payment Mode</label>        
          
          <select class="form-control" name="payment_mode" required="">
            <option>Bank transfer</option>
            <option>Paypal</option>
            <option>Bkash</option>
          </select>
      </div>
       <div class="form-group">
          <label>Transection Number</label>        
          <input type="text" name="trfr_number" class="form-control" required="">
      </div>
      <div class="form-group">
          <label>Payment Date</label>        
          <input type="date" name="date" class="form-control" required="">
      </div>
      <div class="text-center">
          <button type="submit" name="confirm_payment" class="btn btn-primary btn-lg">
            Conform Payment
          </button>
      </div>
    </form>
  
    <?php
      if(isset($_POST['confirm_payment']))
      {

        $update_id=$_GET['update_id'];
        $invoice_number=$_POST['invoice_number'];
        $amount=$_POST['amount'];
        $payment_mode=$_POST['payment_mode'];
        $trfr_number=$_POST['trfr_number'];
        $date=$_POST['date'];
        $complete="Complete";
         
        $insert="insert into payments(invoice_id,amount,payment_mode,ref_no,payment_date) values('$invoice_number','$amount','$payment_mode','$trfr_number','$date')";

        $run_insert=mysqli_query($con,$insert);
        $update_q="update customer_order set order_status='$complete' where order_id='$update_id'";
        $run_insert=mysqli_query($con,$update_q);

        // $update_p="update pending_order set order_status='$complete' where order_id='$update_id'";
        // $run_insert=mysqli_query($con,$update_p);
        echo "<script>alert('Your order has been received')</script>";
        echo "<script>window.open('my_account.php?order','_self')</script>";
      }

    ?>




  </div>
  

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