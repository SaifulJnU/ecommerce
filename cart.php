 
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
             			<li>
                             <a href="index.php">Home</a>
             			</li>
             			<li >
                          <a href="shop.php">Shop</a>
             			</li>
                          <li>
                          <a href="customer/my_account.php">My Account</a>
             			</li>
             			<li class="active">
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
                          <a href="contact.php">Blog</a>
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
                <li> <a href="#">My Account</a></li>
                <li> <a href="#">Cart</a></li>
      </ul>

  </div><!---end container-->
<div class="col-md-9" id="cart">
  <div class="box">
    <form action="cart.php" method="post" enctype="multipart-form-data">
      <h1>
        Shopping Cart
      </h1>
       
       <?php
               $ip_add=getUserIP();
               $select_cart="select * from cart where ip_add='$ip_add'";
               $run_cart=mysqli_query($con,$select_cart);
               $count=mysqli_num_rows($run_cart);



       ?>


      <p class="text-muted">Currently you have <?php echo $count;  ?> item(s) in your cart</p>
      <div class="table-responsive">
        <table class="table">
        <thead>
          <tr>
            <th colspan="2">Product</th>
            <th>Quentity</th>
            <th>Unit Price</th>
            <th>Size</th>
            <th colspan="1">Delete</th>
            <th colspan="1">Sub Total</th>
          </tr>
        </thead>
        <tbody>
          <?php 
             $total=0;
             while($row=mysqli_fetch_array($run_cart))
             {

               $pro_id=$row['p_id'];
               $pro_size=$row['size'];
               $pro_qty=$row['qty'];
               $get_product="select * from products where product_id='$pro_id'";
               $run_pro=mysqli_query($con,$get_product);
               while($row=mysqli_fetch_array($run_pro))
               {
              
              $p_title=$row['product_title'];
              $p_img1=$row['product_img1'];
              $p_price=$row['product_price'];
              $sub_total=(int)$row['product_price']*$pro_qty;
              $total+=$sub_total;

           ?>
          </tbody>
           
          <tr>
            <td><?php echo"<img src='admin_area/product_images/$p_img1' style='width:50px;height:60px;'>" ?>  </td>
            <td><?php echo $p_title; ?></td>
            <td><?php echo $pro_qty; ?></td>
            <td><?php echo $p_price; ?></td>
            <td><?php echo $pro_size; ?></td>
            <td><input type="checkbox" name="remove[]" value="<?php echo $pro_id  ?>"></td>
            <td><?php echo $sub_total; ?></td>
          </tr>
        
        
        <?php  } } ?>
        </tfoot>
      </table>

     </div>

     <div class="box-footer">
      <div class="pull-left">
       <h4 style="padding-left: 5px">Total Price</h4>
        
      </div>
      <div class="pull-right">
        
       <h4 style="padding-right:80px;">TAKA <?php echo $total;  ?></h4>
      </div>
       
     </div>

         




     <div class="box-footer">
      <div class="pull-left">
        <a href="shop.php" class="btn btn-default">
          <i class="fa fa-chevron-left"></i>
          Continue Shopping
        </a>
        
      </div>
      <div class="pull-right">
        <button class="btn btn-default" type="submit" name="update" value="Update Cart">
          <i class="fa fa-refresh"></i>
          Update Cart
          
        </button>
        <a href="checkout.php" class="btn btn-primary">
          Proceed to checkout<i class="fa fa-chevron-right"></i>
        </a>
      </div>
       
     </div>
    </form>
  </div>
    

    <?php 
          
          function update_cart()
          {
            global $con;
            if(isset($_POST['update']))
            {
              foreach ($_POST['remove'] as $remove_id) {
                $delete_product="delete from cart where p_id='$remove_id'";

                $run_del=mysqli_query($con,$delete_product);
                 if($run_del)
                 {
                  echo "<script>window.open('cart.php','_self')</script>";
                 }
              }
            }
          }
        echo @$up_cart=update_cart();
     ?>




     <div id="row same-height-row">
      <div class="col-md-3 col-sm-6">
        <div class="box same-height headline">
          <h3 class="text-center">You also like these products</h3>
          
        </div>
      </div>
      <?php 
          
          $get_product="select * from products order by 1 LIMIT 0,3";
          $run_product=mysqli_query($con,$get_product);
          while ($row=mysqli_fetch_array($run_product)) {
            $pro_id=$row['product_id'];
            $product_title=$row['product_title'];
            $product_price=$row['product_price'];
            $product_img1=$row['product_img1'];
            $product_img2=$row['product_img2'];
            $product_img3=$row['product_img3'];
            
          echo "
          <div class='center-responsive col-md-3 col-md-6'>

          <div class='product same-height'>
          <a href='details.php?pro_id=$pro_id'>
          <img src='admin_area/product_images/$product_img1' style='width:100%;height:250px;' class='img-responsive'>
          </a>
         <div class='text'>
          <h3> <a href='details.php?pro_id=$pro_id'>$product_title</a></h3>
          <p class='price'> TAKA $product_price  </p>
        </div>
        </div>
        </div>
          ";



          }

       ?>
      

    </div>

</div><!---col-md-9- end---->

<div class="col-md-3"><!--col-md-3 start--->
  
<div class="box" id="order-summary">
  <div class="box-header">
    <h3>Order Summary</h3>
  </div>
   <p class="text-muted">
     Shopping and additional costs are calculated based on the values you have entered
   </p>
   <div class="table-responsive">
     
     <table class="table">
      <tbody>
        <tr>
          <td>Order Subtotal</td>
          <th><?php echo $total; ?></th>
        </tr>
         <tr>
          <td>Shopping and handling</td>
          <th>TAKA 0</th>
        </tr>
         <tr>
          <td>Tax</td>
          <th>TAKA 0</th>
        </tr>
         <tr class="total">
          <td>Total</td>
          <th><?php echo $total; ?></th>
        </tr>
      </tbody>
       
     </table>
   </div>
  
</div>

</div><!--col-md-3 end--->


</div>
</div>




<!--footer--->
 <?php 
    include("includes/footer.php");
 ?>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


</body>
</html>