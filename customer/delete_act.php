




<div class="box">
	<center>
		<h1>Do You Really want to Delete Your Account</h1>
	
	<form action="" method="post">
		<input type="submit" name="yes" value="Yes, I want To Delete" class="btn btn-danger">
		<input type="submit" name="no" value="NO, I Dont Want" class="btn btn-primary">
	</form>
    </center>
</div>
<?php
      $c_email=$_SESSION['customer_email'];
      if(isset($_POST['yes']))
      {
      	$delete_q="delete from customers where customer_email='$c_email'";
      	$run_q=mysqli_query($con,$delete_q);
      	if($run_q)
      	{
      		session_destroy();
      		echo "<script>alert('Your account has been deleted')</script>";
      		echo "<script>window.open('../index.php','_self')</script>";

      	}
      }

?>