
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
             			<li class="active">
                          <a href="shop.php">Shop</a>
             			</li>
                          <li>
                          <!-- ?php 
                 if(!isset($_SESSION['customer_email']))
                 {
                  echo "<a href='checkout.php'>Login</p>";
                 }
                 else{
                  echo "<a href='logout.php'>Logout</p>";
                 }

             ?> -->
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
                         <!--  <a href="cart.php">Shopping Cart</a> -->
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
                <li> <a href="#">Shop</a></li>
      </ul>

  </div><!---end container-->

<div class="col-md-3">
  <?php
      include("includes/sidebar.php");
  ?>
</div>  

<div class="col-md-9"><!---col-md-9 start----------->

  <?php
     if(!isset($_GET['p_cat'])){
      if(!isset($_GET['cat_id'])){
        echo "<div class='box'> 
        <h1> Shop </h1>
        <p> This is the best shop ever to buy anything. Thanks for visiting our site. 
         </p>
        </div>";
      }
     }


  ?>






<div id="extra">
<div class="row">
 
   <?php
          if(!isset($_GET['p_cat']))
          {
            if(!isset($_GET['cat_id']))
            {
              
            $per_page=6;
            if(isset($_GET['page']))
            {
              $page=$_GET['page'];
            }
            else{
              $page=1;
            }
            $start_from=($page-1)*$per_page;
            $get_product="select * from products order by 1 DESC LIMIT $start_from,$per_page";

            $run_pro=mysqli_query($con,$get_product);
            while($row=mysqli_fetch_array($run_pro))
            {
              $pro_id=$row['product_id'];
                            $pro_title=$row['product_title'];
              $pro_price=$row['product_price'];
              $pro_img1=$row['product_img1'];
            
            echo "
            <div class='col-md-4 col-sm-6 center-responsive'>
            <div class='product'>
            <a href='details.php?pro_id=$pro_id'>
            <img src='admin_area/product_images/$pro_img1' style='width:100%;height:350px;'>
            </a>


            <div class='text'>
                <h3><a href='details.php?pro_id=$pro_id'>$pro_title</a></h3>
                 
                 <p class='price'>
                 TAKA $pro_price

                 </p>
                 
                 <p class='buttons'>
                 <a href='details.php?pro_id=$pro_id' class = 'btn btn-default'>View Details
                  </a>
                      
                  <a href='details.php?pro_id=$pro_id' class = 'btn btn-primary'><i class='fa fa-shopping-cart'></i>Add to cart
                  </a>    

                  </p>


            </div>
            </div>

            </div>";

            }

   ?>




    <!-- <div class="col-md-4 col-sm-6 center responsive">
      <div class="product">
        <a href="details.php">
          <img src="admin_area/slider_images/third.jpg" class="img-responsive">
        </a>
        <div class="text">
          <h3>
            <a href="details.php">
              Mardaz pack of 5 - Multicolor Cotton V-Neck T-Shirts for Men
            </a>
          </h3>
          <p class="price">TAKA 200</p>
          <p class="button">
            <a href="details.php" class="btn btn-default">View Details</a>

            <a href="details.php" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>View Details</a>
            
          </p>
          

        </div>

      </div>
      
    </div>  
 -->
 





</div>


</div><!---col-md-9 end----------->

<center>  <!---page numbering start--->
  <ul class="pagination">

   <?php
          $query="select * from products";
          $result=mysqli_query($con,$query);
          $total_record=mysqli_num_rows($result);
          $total_pages=ceil($total_record/$per_page);

          echo"

            <li>
            <a href='shop.php?page=1'>".'Frist page'."</a>
            </li>
           ";
             for($i=1;$i<=$total_pages;$i++)
             {
              echo"

            <li>
            <a href='shop.php?page=".$i."'>".$i."</a>
            </li>
           ";
             }
               echo "
            <li>
            <a href='shop.php?page=$total_pages'>".'Last page'."</a>

            </li>

               ";
              
            }
          }

   ?>




    <!-- <li>
      <a href="shop.php">First Page</a>
    </li>
    <li>
      <a href="shop.php">2</a>
    </li>
    <li>
      <a href="shop.php">3</a>
    </li>
    <li>
      <a href="shop.php">3</a>
    </li>
    <li>
      <a href="shop.php">5</a>
    </li>
    <li>
      <a href="shop.php">Last Page</a>
    </li> -->
  </ul>

</center><!---page numbering end--->


   <?php
   
       getPcatPro();
       getCatPro();
      

   ?>

</div>

</div>



  </div><!---end container-->
  <!-- <div class="box" style="width: 80px; height: 80px; background-color: gray;  margin-left: 90%">
    
    
    <a href="chatbot/chatbotindex.php">  <img src="chatbot/botpic.jpg" style="height: 80px; width: 80px;"></a>
    
  </div> -->
</div><!----end content-->


  <?php 
    include("includes/footer.php");
 ?>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</body>
</html>

<!-------footer end------->
