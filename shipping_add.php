
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
  <form action="checkout.php" class="form-container">
    <h1></h1>

    <label for="name"><b>Full Name</b></label>
    <input type="text" placeholder="Full name" name="customer_name" required>

    <label for="Address"><b>Address</b></label>
    <textarea type="text" name="shipping_add" placeholder="Shipping Address" style="height:200px"></textarea>


    <label for="Region"><b>Region</b></label>
    <input type=text placeholder="Region" name="region" required>

    <label for="phnnumber"><b>Phone Number</b></label>
    <input type="text" placeholder="Phone Number" name="contact_number" required>


    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
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










<?php 
if(isset($_POST['submit']))
{
  $customer_name=$_POST['customer_name'];
  $shipping_add=$_POST['shipping_add'];
  $region=$_POST['region'];
  $custoemr_contact=$_POST['customer_contact'];

  //$c_ip=getUserIP();


$insert_shipping_add="insert into shipping_add (customer_name,shipping_add,region,customer_contact) values('$customer_name','$shipping_add','$region','$customer_contact')";


$run_shipping_add=mysqli_query($con,$insert_shipping_add);


if($run_shipping_add){
    echo "<script>alert('Information Inserted Successfully')</script>";
    echo "<script>window.open('checkout.php')</script>";
  }


}
?>