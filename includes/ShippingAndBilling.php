

<div class="panel panel-default sidebar-menu">
	<div class="panel-heading">
    <h3 class="panel-title">
       Add Shipping Address
    </h3>		
	</div>
         

        



	<div class="panel-body">
        <ul class="nav nav-pills nav-stacked category-menu">

           <!-- <?php

           //   getPCates();

           ?> -->

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

/* Button used to open the contact form - fixed at the bottom of the page */
.open-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
 /* position: fixed;
  bottom: 23px;
  right: 28px;*/
  width: 225px;
}

/* The popup form - hidden by default */
.form-popup {
  display: none;
  /*position: fixed;
  bottom: 0;
  right: 15px;*/
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Full-width input fields */
.form-container input[type=text], .form-container input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}
</style>
</head>
<body>

<h2></h2>


<button class="open-button" onclick="openForm()">Shipping Form</button>
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
</div>

<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>


</body>
</html>




        </ul>		

	</div>
	
</div>


<div class="panel panel-default sidebar-menu">
	<div class="panel-heading">
    <h3 class="panel-title">
       Add Billig Address
    </h3>		
	</div>


	<div class="panel-body">
        <ul class="nav nav-pills nav-stacked category-menu">

<button class="open-button" onclick="openFormB()">Billing Form</button>
<div class="form-popup" id="myFormA">
  <form action="checkout.php" method="get" class="form-container">
    <h1></h1>

    <label><b>Full Name</b></label>
    <input type="text" placeholder="Full name" name="customer_name" required>

    <label><b>Address</b></label>
    <textarea type="text" placeholder="Billing Address"  name="billing_add" style="height:200px"></textarea>

    <label><b>Region</b></label>
    <input type="text" placeholder="Region" name="region" required>

    <label><b>Phone Number</b></label>
    <input type="text" placeholder="Phone Number" name="contact_number" required>


    <button type="submit" name="submit" class="btn">Submit</button>
    <button type="button" class="btn cancel" onclick="closeFormB()">Close</button>
  </form>
</div>

<script>
function openFormB() {
  document.getElementById("myFormA").style.display = "block";
}

function closeFormB() {
  document.getElementById("myFormA").style.display = "none";
}
</script>
<?php 
if(isset($_GET['submit']))
{
  $customer_name=$_GET['customer_name'];
  $billing_add=$_GET['billing_add'];
  $region=$_GET['region'];
  $contact_number=$_GET['contact_number'];

  //$c_ip=getUserIP();


$insert_customer="insert into billing_address(customer_name,billing_add,region,contact_number) values('$customer_name','$billing_add','$region','$contact_number')";


$run_customer=mysqli_query($con,$insert_customer);
if($run_customer){
    echo "<script>alert('Billing Address Inserted Successfully')</script>";
    //echo "<script>window.open('index.php?view_product')</script>";
  }
  
}

 ?>

        </ul>		

	</div>
	
</div>



<?php 
if(isset($_POST['submit']))
{
  $customer_name=$_POST['customer_name'];
  $shipping_add=$_POST['shipping_add'];
  $region=$_POST['region'];
  $contact_number=$_POST['contact_number'];

  //$c_ip=getUserIP();


$insert_customer="insert into shipping_add (customer_name,shipping_add,region,contact_number) values('$customer_name','$shipping_add','$region','$contact_number')";


$run_customer=mysqli_query($con,$insert_customer);


if($run_customer){
		echo "<script>alert('Shipping Address Inserted Successfully')</script>";
		//echo "<script>window.open('index.php?view_product')</script>";
	}
	
}

 ?>



