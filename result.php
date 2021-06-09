
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
                        
                    <!-- Search Option implementation -->
                   <div class="collapse clearfix" id="search">

                    <form class="navbar-form" method="get" action="result.php">
                        <div class="input-group">
                            <input type="text" name="user_query" placeholder="search"
                            class="form-control" required="">
                             <span class="input-group-btn">
                                <button
                                         type="submit" name="search" value="search" class="btn btn-primary">
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
                <li> <a href="shop.php">Shop</a></li>
      </ul>

  </div><!---end container-->

<div class="col-md-3">
  <?php
      include("includes/sidebar.php");
  ?>
</div>  

<div class="col-md-9"><!---col-md-9 start----------->

  <?php
     
  $sname= $_GET['search'];
  $user_querys= $_GET['user_query'];

  if(isset($_GET['search']))
  {
       echo "<div class='box'> 
        <h1> You search with the key : $user_querys</h1>
        <p> Here is your searching result...
         </p>
        </div>";
  }


  ?>






<div id="extra">
<div class="row">
 <?php  


  $sname= $_GET['search'];
  $user_querys= $_GET['user_query'];

  if(isset($_GET['search']))
  {
    

     global $db; 
  //$searchstr=$str;
  $user_querys= $_GET['user_query'];
  $get_product="select * from products where product_title='$user_querys'";
  $run_products=mysqli_query($db,$get_product);
    
  while ($row_product=mysqli_fetch_array($run_products)) {
    $pro_id=$row_product['product_id'];
    $pro_title=$row_product['product_title'];
    $pro_price=$row_product['product_price'];
    $pro_img1=$row_product['product_img1'];
  
    echo "<div class='col-md-3 col-sm-7'>
<div class='product'>

<a href='details.php?pro_id=$pro_id'>
<img src='admin_area/product_images/$pro_img1' class='img-responsive' style='width:100%;height:300px;' > </a>

<div class='text'>
<h3><a href='details.php?pro_id=$pro_id'>$pro_title</a></h3>
<p class='price'>TAKA $pro_price</p>
<p class='button'>
<a href=details.php?pro_id=$pro_id class='btn btn-default'>View Details</a>
<a href=details.php?pro_id=$pro_id class='btn btn-primary'><i class='fa fa-shopping-cart'></i>Add to cart</a>
</p>
</div>
</div>
    </div>";
}
  
 }










    
















      

  //    $sname= $_GET['search'];
  //    $user_querys= $_GET['user_query'];
  //   $select_searchpro="select * from products where product_title='$user_querys'";
  //   $run_cust=mysqli_query($con,$select_searchpro);
  //   //$get_ip=getUserIP();
  //   $check_customer=mysqli_num_rows($run_cust);
  //   //$select_cart="select * from cart ip_add='$get_ip'";
  //   //$run_cart=mysqli_query($con,$select_cart);
  //  // $check_cart=mysqli_num_rows($run_cart);
  //   if($check_customer==0)
  //   {
  //     echo "<script>alert('Password/Email wrog')</script>";
  //    // exit();
  //   }
   
  //   else
  //   {
     
  //      getSearchPro($user_querys); 
  //   }

  // }

 







  

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

<center>  <!---page numbering start--->
 




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
