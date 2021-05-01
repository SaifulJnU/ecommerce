
<div class="box">
<center>
	<h1>
		My Order
        
	</h1>
	<p>
		If you have any question plase<a href="../contact.php"> contact us, </a>all are free and we are ready to help you 24/7.
	</p>
</center>
<hr>
<div class="table-responsive">
	<table class="table table-bordered table-hover">
		<thead>
			<tr>
				<th>
					Sr.No
				</th>
				<th>
					Due Amount
				</th>
				<th>
					Invoice Number
				</th>
				<th>
					Quantity
				</th>
				<th>
					Size
				</th>
				<th>
					Order Date
				</th>
				<th>
					Paid/Unpaid
				</th>
				<th>
					Status
				</th>
			</tr>
		</thead>
		<tbody>

              <?php




                  $customer_session=$_SESSION['customer_email'];
                  $get_customer="select * from customers where customer_email='$customer_session'";
                  $run_cust=mysqli_query($con,$get_customer);
                  $row_cust=mysqli_fetch_array($run_cust);
                  $customer_id=$row_cust['customer_id'];
                  $get_order="select * from customer_order where customer_id='$customer_id'";
                  $run_order= mysqli_query($con,$get_order);
                  $i=0;


              //    $pr1 = "select * from customers where customer_email='$customer_session'";


                  while($row_order=mysqli_fetch_array($run_order)) {
                  	$order_id=$row_order['order_id'];
                  	$order_due_amount=$row_order['due_amount'];
                  	$order_invoice=$row_order['invoice_no'];
                  	$order_qty=$row_order['qty'];
                  	$order_size=$row_order['size'];
                  	$order_date=substr($row_order['order_date'], 0,11);
                  	$order_status=$row_order['order_status'];
                  	$i++;
                  	if($order_status=='pending')
                  	{
                  		$order_status="Unpaid";
                  	}
                  	else{
                  		$order_status="Paid";
                  	}
                  
               ?>



			<tr>
				<td><?php echo $i; ?></td>
				<td><?php echo $order_due_amount; ?></td>
				<td><?php echo $order_invoice; ?></td>
				<td><?php echo $order_qty; ?></td>
				<td><?php echo $order_size; ?></td>
				<td><?php echo $order_date; ?></td>
				<td><?php echo $order_status; ?></td>
				<td><a href="confirm.php?order_id=<?php echo $order_id;    ?>" target="_blank" class="btn btn-primary btn-sm">Confirm If Paid</a></td>
				
			</tr>
			<?php  }  ?>

		</tbody>
			
		
	</table>
</div>
</div>