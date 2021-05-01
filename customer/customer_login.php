<div class="box">
	
  <div class="box-header">
  	<center>
  		
  		<h2>Login</h2>
  		<p class="lead">Already our customer</p>
  	</center>
  </div>
<form action="checkout.php" method="post">
	<div class="form-group">
		<label>Email: </label>
		<input type="text" class="form-control" name="c_email" required="">
	</div>
	<div class="form-group">
		<label>Password: </label>
		<input type="Password" class="form-control" name="c_password" required="">
	</div>
	<div class="text-center">
		<button name="login" value="Login" class="btn btn-primary">
			<i class="fa fa-sign-in"></i> Login
		</button>
	</div>
</form>

<center>
	<a href="customer_registration.php">
		<h3>New ? Register Now</h3>
	</a>
</center>

</div>



<?php 
  if(isset($_POST['login']))
  {
  	$customer_email=$_POST['c_email'];
  	$customer_pass=$_POST['c_password'];
  	$select_customers="select * from customers where customer_email='$customer_email' AND customer_pass='$customer_pass'";
  	$run_cust=mysqli_query($con,$select_customers);
  	$get_ip=getUserIP();
  	$check_customer=mysqli_num_rows($run_cust);
  	$select_cart="select * from cart ip_add='$get_ip'";
  	$run_cart=mysqli_query($con,$select_cart);
  	$check_cart=mysqli_num_rows($run_cart);
  	if($check_customer==0)
  	{
  		echo "<script>alert('Password/Email wrong')</script>";
  		exit();
  	}
  	if($check_customer==1 AND $check_cart==0)
  	{
  		$_SESSION['customer_email']=$customer_email;
        echo "<script>alert('You are Logged in')</script>";

  		echo "<script>window.open('customer/my_account.php','_self')</script>";
  	}
  	else
  	{
  		$_SESSION['customer_email']=$customer_email;
        echo "<script>alert('You are Logged in')</script>";

  		echo "<script>window.open('checkout.php','_self')</script>";
  	}

  }
  
 ?>