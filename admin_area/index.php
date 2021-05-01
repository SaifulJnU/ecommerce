<?php
session_start();
include ("includes/db.php");
if(!isset($_SESSION['admin_email'])){
	echo "<script>window.open('login.php','_self')</script>";
}else{

?>
<?php
$admin_session= $_SESSION['admin_email'];
$get_admin="select * from admins where admin_email='$admin_session'";
$run_admin=mysqli_query($con,$get_admin);
$row_admin= mysqli_fetch_array($run_admin);
$admin_id=$row_admin['admin_id'];
$admin_name=$row_admin['admin_name'];
$admin_email=$row_admin['admin_email'];
$admin_image=$row_admin['admin_image'];
$admin_country=$row_admin['admin_country'];
$admin_job=$row_admin['admin_job'];
$admin_contact=$row_admin['admin_contact'];
$admin_about=$row_admin['admin_about'];

$get_pro="select * from products";
$run_pro=mysqli_query($con,$get_pro);
$count_pro=mysqli_num_rows($run_pro);

$get_cust="select * from customers";
$run_cust=mysqli_query($con,$get_cust);
$count_cust=mysqli_num_rows($run_cust);

$get_p_cat="select * from product_categories";
$run_p_cat=mysqli_query($con,$get_p_cat);
$count_p_cat=mysqli_num_rows($run_p_cat);

$get_p_cat="select * from customer_order";
$run_order=mysqli_query($con,$get_p_cat);
$count_order=mysqli_num_rows($run_order);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Panel</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>
	<div id="wrapper">
		<?php include 'includes/sidebar.php';  ?>
		<div id="page-wrapper">
			<div class="container-fluid">
				<?php
				if(isset($_GET['dashboard'])){
					include 'dashboard.php';
				}

				if(isset($_GET['insert_product'])){
					include 'insert_product.php';
				}

				if(isset($_GET['view_product'])){
					include 'view_product.php';
				}

				if(isset($_GET['delete_product'])){
					include 'delete_product.php';
				}

				if(isset($_GET['edit_product'])){
					include 'edit_product.php';
				}

				if(isset($_GET['insert_product_cat'])){
					include 'insert_p_cat.php';
				}

				if(isset($_GET['view_product_cat'])){
					include 'view_p_cat.php';
				}

				if(isset($_GET['delete_p_cat'])){
					include 'delete_p_cat.php';
				}

				if(isset($_GET['edit_p_cat'])){
					include 'edit_p_cat.php';
				}

				if(isset($_GET['insert_categories'])){
					include 'insert_cat.php';
				}

				if(isset($_GET['view_categories'])){
					include 'view_cat.php';
				}

				if(isset($_GET['delete_cat'])){
					include 'delete_cat.php';
				}

				if(isset($_GET['edit_cat'])){
					include 'edit_cat.php';
				}
				if(isset($_GET['insert_slider'])){
					include 'insert_slider.php';
				}
				if(isset($_GET['view_slider'])){
					include 'view_slider.php';
				}
				if(isset($_GET['delete_slide'])){
					include 'delete_slider.php';
				}
				
				if(isset($_GET['edit_slide'])){
					include 'edit_slider.php';
				}

				if(isset($_GET['view_customer'])){
					include 'view_customer.php';
				}
				
				if(isset($_GET['customer_delete'])){
					include 'customer_delete.php';
				}
				if(isset($_GET['view_order'])){
					include 'view_order.php';
				}
				if(isset($_GET['order_delete'])){
					include 'order_delete.php';
				}
				if(isset($_GET['view_payments'])){
					include 'view_payments.php';
				}
				
                 if(isset($_GET['payment_delete'])){
					include 'payment_delete.php';
				}
				 if(isset($_GET['insert_user'])){
					include 'insert_user.php';
				}
				 if(isset($_GET['view_user'])){
					include 'view_user.php';
				}
				 if(isset($_GET['user_profile'])){
					include 'user_profile.php';
				}
				
				 
			 
				
				
				
				?>
			</div>
		</div>
	</div>





<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</body>

</html>
<?php } ?>