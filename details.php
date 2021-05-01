<?php
session_start();
  include("includes/db.php");
  include("functions/functions.php");
  

?>

<?php 
if(isset($_GET['pro_id']))
{
  $pro_id=$_GET['pro_id'];
  $get_product="select * from products where product_id='$pro_id'";
  $run_product=mysqli_query($con,$get_product);
  $row_product=mysqli_fetch_array($run_product);

  $p_cat_id=$row_product['p_cat_id'];
    $p_title=$row_product['product_title'];

  $p_price=$row_product['product_price'];

  $p_desc=$row_product['product_desc'];
  $p_img1=$row_product['product_img1'];
  $p_img2=$row_product['product_img2'];
  $p_img3=$row_product['product_img3'];

  $get_p_cat="select * from product_categories where p_cat_id='$p_cat_id'";
  $run_p_cat=mysqli_query($con,$get_p_cat);
  $row_p_cat=mysqli_fetch_array($run_p_cat);
  $p_cat_id=$row_p_cat['p_cat_id'];
  $p_cat_title=$row_p_cat['p_cat_title'];
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
             			<li class="active">
                          <a href="shop.php">Shop</a>
             			</li>
                          <li>
                          <!-- <a href="checkout.php">My Account</a> -->
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

                <li> <a href="shop.php?p_cat=<?php echo $p_cat_id; ?>"></a> <?php echo $p_cat_title; ?></li>
                <li><?php echo $p_title; ?> </li>
      </ul>

  </div><!---end container-->

<div class="col-md-3">
  <?php
      include("includes/sidebar.php");
  ?>
</div> 

<div class="col-md-9">
  <div class="row" id="productmain">
    <div class="col-sm-6">
      
        <div id="mainimage">
          <div id="mycarousel" class="carousel slide"  data-ride="carousel">

            <ol class="carousel-indicators">
              <li data-target="#mycarousel" 
               data-slide-to="0" class="active"></li>
              <li data-target="#mycarousel" data-slide-to="1" ></li>
              <li data-target="#mycarousel" data-slide-to="2"></li>
              

            </ol>

            <div class="carousel-inner"><!---carousel inner start-->
              <div class="item
               active">
                <center>
                 <?php echo  "<img src='admin_area/product_images/$p_img1' style='width:100%;height:490px;'>";  ?>
                </center>
                
              </div>
              <div class="item">
                <center>
                  <?php echo  "<img src='admin_area/product_images/$p_img2' style='width:100%;height:490px;'>";  ?>
                </center>
                
              </div>
              <div class="item">
                <center>
                  <?php echo  "<img src='admin_area/product_images/$p_img3' style='width:100%;height:490px;'>";  ?>
                </center>
                
              </div>

              </div><!---carousell inner end-->

              <a href="#mycarousel" class="left carousel-control" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left">
                                  
                </span>

                <span class="sr-only">Previous</span>
              </a>
              
              <a href="#mycarousel" class="right carousel-control" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right">
                                  
                </span>

                <span class="sr-only">Next</span>
              </a>


            </div>
            
          </div>
          
        </div> <!----col-sm-6 end-->


        <div class="col-sm-6">
          <div class="box">
            <h1 class="text-center">
             <?php echo $p_title;  ?>
            </h1>

           <?php 
                  addCart();
            ?>

            <form action="details.php?add_cart=<?php echo $pro_id; ?>" method="post" class="form-horizontal">
              <div class="form-group">
                <label class="col-md-5 control-label">
                  Product Quantity
                  
                </label>
                <div class="col-md-7">
                  <select name="product_qty" class="form-control">

                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                  </select>
                  
                </div>
                
              </div>
              
                    <div class="form-group">
                      <label class="col-md-5 control-label">Product Size
                        

                      </label>
                      <div class="col-md-7 ">
                        <select name="product_size" class="form-control">
                          <option>Small</option>
                    <option>Medium</option>
                    <option>Large</option>
                    <option>Extra Large</option>
                    

                        </select>
                        
                      </div>
                      
                    </div>
                <p class="price"> TAKA <?php echo $p_price;?></p>
                <p class="text-center buttons">
                  <button class="btn btn-primary" type="submit"><i class="fa fa-shopping-cart">Add to cart</i>
                    
                  </button>
                </p>


            </form>
            

          </div><!--end box-->
           
           <div class="col-xs-4">
             <a href="#" class="thumb">
            <?php echo  "<img src='admin_area/product_images/$p_img1' style='width:100%;height:100px;'>";  ?>
             </a>
           </div>
            <div class="col-xs-4">
             <a href="#" class="thumb">
            <?php echo  "<img src='admin_area/product_images/$p_img2' style='width:100%;height:100px;'>";  ?>

             </a>
           </div>
            <div class="col-xs-4">
             <a href="#" class="thumb">
            <?php echo  "<img src='admin_area/product_images/$p_img3' style='width:100%;height:100px;'>";  ?>

             </a>
           </div>



        </div>



    </div>
    <div class="box" id="details">
      <h4>Product Discription</h4>
      <p><?php echo $p_desc; ?></p>
      
      <h4>Size</h4>
      <ul>
        <li>Samll</li>
        <li>Medium</li>
        <li>Large</li>
        <li>Extra Large</li>        

      </ul>
    </div>

    <!----rating---->
    <div class="box">
      <form action="details.php" method="post" accept-charset="utf-8">
    <fieldset><legend style="font-weight: 20px; font-size: 30px;font-family: "Times New Roman", Times, serif;">Review This Product</legend>  
    <p><label style="font-weight: 20px; font-size: 20px; font-family: "Times New Roman", Times, serif;"  for="rating">Rating   </label><input type="radio" name="rating"
      value="5" /> 5 <input type="radio" name="rating" value="4" /> 4
      <input type="radio" name="rating" value="3" /> 3 <input type="radio"
      name="rating" value="2" /> 2 <input type="radio" name="rating" value="1" /> 1</p>
    <p><label style="font-weight: 20px; font-size: 20px; font-family: "Times New Roman", Times, serif;" for="review">Review</label><textarea class="form-control" name="review" rows="8" cols="40">
       </textarea></p>
    <p><input class="form-control" type="file" name="c_image"><p>
    <p><input class="btn-success" class="btn-lg" type="submit" name="submitratig" value="Submit Review"></p>
    <input type="hidden" name="product_type" value="actual_product_type" id="product_type">
    <input type="hidden" name="product_id" value="actual_product_id" id="product_id">
    </fieldset>
    </form>



    <?php 
if(isset($_POST['submitratig']))
{
  $rating=$_POST['rating'];
  $c_review=$_POST['review'];

  // $c_image=$_FILES['c_image']['name'];
  // $c_tmp_image=$_FILES['c_image']['tmp_name'];
  //$c_ip=getUserIP();
//image upload
//move_uploaded_file($c_tmp_image,"review/review_image/$c_image");

$insert_customer_review="insert into customer_rev(rating,review) values('$rating','$c_review')";


$run_customer_rev=mysqli_query($con,$insert_customer_review);

//$sel_cart="select * from cart where ip_add='$c_ip'";
//$run_cart=mysqli_query($con,$sel_cart);
//$check_cart=mysqli_num_rows($run_cart);

 // $_SESSION['customer_email']=$c_email;
if($run_customer_rev)
{
  echo "<script>alert('You have been reviewed successfully')</script>";
   //echo "<script>window.open('checkout.php','_self')</script>"
}



}

 ?>
     

    
    <!-- Here should be the rating of customer for every products -->

<!-- <script src="https://apps.elfsight.com/p/platform.js" defer></script>
<div class="elfsight-app-b97ecede-e352-4229-ba4c-bd2e191314ed"></div>
 -->

    </div>

<div>
 <!--  <h>Review by saiful</h> -->

     <?php 
          
          $get_rev="select * from customer_rev";
          $run_rev=mysqli_query($con,$get_rev);
          while ($row=mysqli_fetch_array($run_rev)) {
            $rev_id=$row['rev_id'];
            $rating=$row['rating'];
            $review=$row['review'];
            // $product_img1=$row['product_img1'];
            // $product_img2=$row['product_img2'];
            // $product_img3=$row['product_img3'];
            
          echo "
          <div class='box'>
          <p> $rev_id</p>
          <h3> $rating </h3>
          <p> Review   </p>
          <p> $review </p>
        
        </div>
          ";



          }

       ?>

</div>








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
    
  </div>
  



</div><!---end container-->

</div><!----end content-->





  <?php 
    include("includes/footer.php");
 ?>

 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</body>
</html>
