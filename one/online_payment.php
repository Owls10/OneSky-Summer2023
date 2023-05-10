<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Online Payment | OneSky</title>
    
    
	
	<?php include "header.php"; ?>
	
	
		<style type="text/css">
			.payment-form{
				width: 60%;
				margin: 0 auto;
				background-color: white;
				-webkit-box-shadow: -5px 1px 29px 0px rgba(224,215,224,1);
				-moz-box-shadow: -5px 1px 29px 0px rgba(224,215,224,1);
				box-shadow: -5px 1px 29px 0px rgba(224,215,224,1);
			}
			.payment-form form{
				padding: 20px;
			}
			.btn{
				border-radius: 0px;
			}
		</style>

			<section class="main-container">
				<div class="container">
					<div class="row">
						<div class="payment-form">
							<br>
							<center><img src="images/card.jpg"/></center><br>
							<center><h3 class="title">Payment Details</h3></center>
							<form action='payment/HostedCheckoutReturnToMerchant_NVP.php' method="POST">
							  <div class="form-group">
							    <input type="email" name="customer_receipt_email" placeholder="Enter your email" class="form-control" required>
							  </div>
							  <div class="form-group">
							    <input type="text" name="onenet_id" placeholder="Enter your OneSky ID" class="form-control" required>
							  </div>
							  <div class="form-group">
							    <input type="text" name="order_currency" value="BDT" class="form-control" required >
							  </div>
							  <div class="form-group">
							    <input type="number" name="order_amount" placeholder="Enter Amount" class="form-control" required>
							  </div>
							  <button type="submit" class="btn btn-success">Submit Payment</button>
							</form>
						</div>
					</div>
				</div>
			</section>
    <?php include "footer.php"; ?>
