<?php session_start(); 
$_SESSION['extra'] = '';

?>
<?php
include "../config.php";

// Check user login or not
if(!isset($_SESSION['username'])){
	header('Location: ../index.php');
}

// logout
if(isset($_POST['but_logout'])){
    session_destroy();
    header('Location: ../index.php');
}
?>

<!doctype html>
<html lang="en"> 
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

	<link rel="stylesheet" href="../css/2020.css"> 
	<link rel="stylesheet" href="../account/accountlogin.css">
	<link rel="stylesheet" href="../css/activity.css"> 
	
    <title>Accounts - PCFU</title>
	
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
	<link rel="icon" href="/favicon.ico" type="image/x-icon">
	<script src="https://kit.fontawesome.com/c931ff6374.js" crossorigin="anonymous"></script>
	
  </head>
  <body>
	
	<?php 
	$_SESSION['extra'] =  '<li class="nav-item"><a class="nav-link" href="/">Log Out</a></li>';
	include("header.php");
	//$_SESSION['cc'] = base64_decode($_REQUEST['l']);
	//$_SESSION['username'] = $_SESSION["username"];
	$_SESSION['amount'] = '$' . '2.00';
	?>
	
	<div class="container">
	
		<div id="loading">
			<h3>Please Just Wait A Moment...</h3>
		</div>
		
		<div class="alert alert-info alert-dismissible fade show" role="alert" style="margin-top:5px">
		<i class="fa fa-exclamation-circle" aria-hidden="true"></i></i><strong> COVID-19 Update: COVID-19 Support can help you find the tools you need. <a href='#'>Go to COVID-19 Support</a></strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
</button>
		</div>
		
		<div class="alert alert-danger">
		<i class="fa fa-exclamation-circle" aria-hidden="true"></i></i>
		A recent pending transaction for <?php echo $_SESSION['amount']; ?> was flagged as suspicious. To verify please <a href='https://en.wikipedia.org/wiki/Technical_support_scam'>click here</a>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
</button>
		</div>
		
		
		
		
		<div class="row">
			
			<div class="col-md-8">
				
				<h3>Accounts</h3>
				<hr />
				<table id='accounts' class="table table-striped">
					<thead>
						<tr>
							<th>Type</th>
							<th>Account Number</th>
							<th>Current Balance</th>
							<th>Available Balance</th>
						</tr>
	
					</thead>
					<tbody>
						<tr>
							<td onclick="myFunction()" style="cursor:pointer"><u>Personal Checking</u></td>
							<td>****9218</td>
							<td>$9,337.00</td>
							<td>$1,234.00</td>
						</tr>
	
						<tr>
							<td onclick="myFunction2()" style="cursor:pointer"><u>Platinum AARP Credit Card</u></td>
							<td>****<?php echo $_SESSION ['username']; ?></td>
							<td>$420.00</td>
							<td>$24,580.00</td>
						</tr>
	
						<tr>
							<td onclick="myFunction3()" style="cursor:pointer"><u>Online Savings</u></td>
							<td>****3218</td>
							<td>$19,293.44</td>
							<td>$15,011.34</td>
						</tr>
	
						<tr>
							<td onclick="myFunction4()" style="cursor:pointer"><u>Roth IRA</u></td>
							<td>****1930</td>
							<td>$86,753.09</td>
							<td>$87,482.10</td>
						</tr>
				
						<tr>
							<td onclick="myFunction5()" style="cursor:pointer"><u>Fixed Rate War Bond</u></td>
							<td>****1816</td>
							<td>$11,420.00</td>
							<td>$12,492.10</td>
						</tr>
						
					</tbody>
				</table>
<!-- Popup Table onClick() -->
<div class="row" id="activity">
	<hr />
			
			<div class="col-md-11.1 shadow p-4 mb-4 bg-white mr-3">
				<div  onclick="myFunction()" style="cursor:pointer">
				<h3>Account Activity<small class="text-muted"> (...9218)</small><i class="fa fa-angle-up rounded float-right" aria-hidden="true"></i></h3></div>
				<hr />
				<table class="table table-striped">
					<thead>
						<tr>
							<th>Date</th>
							<th>Description</th>
							<th>Type</th>
							<th>Amount</th>
						</tr>
					</thead>
				<tbody>
				<tr>
				<td><?php echo date('m/d'); ?></td>
				<td>APL*ITUNES.COM/BILL HOLD </td>
				<td>Credit</td>
				<td>$1.00</td>
		</tr>
				<tr>
					<td><i class="fa fa-exclamation-circle"></i> Pending</td>
					<td>APL*ITUNES.COM/BILL</td>
					<td>Card</td>
					<td><b>-$50.00</b></td>
				</tr>
				<tr>
					<td><i class="fa fa-exclamation-circle"></i> Pending</td>
					<td>Netflix</td>
					<td>Card</td>
					<td><b>-$14.99</b></td>
				</tr>
				<tr>
					<td><i class="fa fa-exclamation-circle"></i> Pending</td>
					<td>CandyCrush Checkout</td>
					<td>Card</td>
					<td><b>-$13.37</b></td>
				</tr>
				<tr>
					<td><i class="fa fa-exclamation-circle"></i> Pending</td>
					<td>APL*ITUNES.COM/BILL HOLD</td>
					<td>Debit</td>
					<td><b>-$1.00</b></td>
				</tr>
				<tr>
				<td><?php echo date('m/d',  strtotime('-4 days')); ?></td>
				<td>MOJANG STOCKHOLM </td>
				<td>Card</td>
				<td><b>-$26.95</b></td>
		</tr>
		<tr>
				<td><?php echo date('m/d',  strtotime('-9 days')); ?></td>
				<td>MICROSOFT </td>
				<td>Debit</td>
				<td><b>-$199.95</b></td>
		</tr>

			</tbody>
		</table>
		<hr />
		</div></div>

		<div class="row" id="activity2">
			
		<div class="col-md-11.1 shadow p-4 mb-4 bg-white mr-3">
				
		<h3 onclick="myFunction2()" style="cursor:pointer">Account Activity<small class="text-muted"> (...<?php echo $_SESSION['username']; ?>)</small><i class="fa fa-angle-up rounded float-right" aria-hidden="true"></i></h3>
				<hr />
				<table class="table table-striped">
					<thead>
						<tr>
							<th>Date</th>
							<th>Description</th>
							<th>Type</th>
							<th>Amount</th>
						</tr>
					</thead>
				<tbody>
					<tr>
					<td><?php echo date('m/d'); ?></td>
					<td>MOJANG HOLMSTOCK </td>
					<td>Card</td>
					<td><b>-$69.96</b></td>
		</tr>
		</tbody>
		</table>

		<hr />
		</div></div>

		<div class="row" id="activity3">
			
		<div class="col-md-11.1 shadow p-4 mb-4 bg-white mr-3">
				
			<h3 onclick="myFunction3()" style="cursor:pointer">Account Activity<small class="text-muted"> (...3218)</small><i class="fa fa-angle-up rounded float-right" aria-hidden="true"></i></h3>
				<hr />
				<table class="table table-striped">
					<thead>
						<tr>
							<th>Date</th>
							<th>Description</th>
							<th>Type</th>
							<th>Amount</th>
						</tr>
					</thead>
				<tbody>
					<tr>
					<td><?php echo date('m/d'); ?></td>
					<td>MOJANG HOLMSTOCK </td>
					<td>Card</td>
					<td><b>-$69.96</b></td>
		</tr>
		</tbody>
		</table>

		<hr />
		</div></div>

		<div class="row" id="activity4">
			
		<div class="col-md-11.1 shadow p-4 mb-4 bg-white mr-3">
				
			<h3 onclick="myFunction4()" style="cursor:pointer">Account Activity<small class="text-muted"> (...1930)</small><i class="fa fa-angle-up rounded float-right" aria-hidden="true"></i></h3>
				<hr />
				<table class="table table-striped">
					<thead>
						<tr>
							<th>Date</th>
							<th>Description</th>
							<th>Type</th>
							<th>Amount</th>
						</tr>
					</thead>
				<tbody>
					<tr>
					<td><?php echo date('m/d'); ?></td>
					<td>MOJANG HOLMSTOCK </td>
					<td>Card</td>
					<td><b>-$69.96</b></td>
		</tr>
		</tbody>
		</table>

		<hr />
		</div></div>

		<div class="row" id="activity5">
			
		<div class="col-md-11.1 shadow p-4 mb-4 bg-white mr-3">
				
			<h3 onclick="myFunction5()" style="cursor:pointer">Account Activity<small class="text-muted"> (...1816)</small><i class="fa fa-angle-up rounded float-right" aria-hidden="true"></i></h3>
				<hr />
				<table class="table table-striped">
					<thead>
						<tr>
							<th>Date</th>
							<th>Description</th>
							<th>Type</th>
							<th>Amount</th>
						</tr>
					</thead>
				<tbody>
					<tr>
					<td><?php echo date('m/d'); ?></td>
					<td>MOJANG HOLMSTOCK </td>
					<td>Card</td>
					<td><b>-$69.96</b></td>
		</tr>
		</tbody>
		</table>

		<hr />
		</div></div>
<!-- End Popup Table onClick() -->
				<div class="row">
					
					<div class="col">
					

						<div class="card">
							<div class="card-body">
								<h4 class="class-title">What's your Credit Score?</h4>
								</p>Find out what your credit score is right now, seriousy it's really easy.</p>
								<a href="/redirect.php">Learn More</a>
							</div>
						</div>
					
					</div>
					
					<div class="col">
					

						<div class="card">
							<div class="card-body">
								<h4 class="class-title">Join AARP Rewards</h4>
								</p>You could be saving serious coin on everyday purchases.
								</p>
								<a href="/redirect.php">Learn More</a>
							</div>
						</div>
					
					</div>
					
					<div class="col">
					

						<div class="card">
							<div class="card-body">
								<h4 class="class-title">Record Low Interest Rates</h4>
								</p>You're already approved. It takes just a moment to open an account</p>
								<a href="/redirect.php">Learn More</a>
							</div>
						</div>
					
					</div>
					
					
					<div class="spacer"></div>
					
					

					<button class="btn btn-warning">Contact Support</button>

		<div class="spacer"></div>
				</div>
			</div>
		
			
				
			
			
			<div class="col-md-4">
				<h3>Pending Transactions</h3>
				<hr />
					<table id='accounts' class="table table-striped">
					<thead>
						<tr>
							<th>Date</th>
							<th>Description</th>
							<th>Amount</th>
							
						</tr>
	
					</thead>
					<tbody>
						<tr>
							<td><?php echo date('m/d'); ?></td>
							<td>APL*ITUNES.COM/BILL</td>
							<td><span class="badge badge-danger">-50.00</td>
						</tr>
						
						<tr>	
							<td><?php echo date('m/d'); ?></td>
							<td>Netflix</td>
							<td><span class="badge badge-danger">-14.99</td>
						</tr>
						
						<tr>
							<td><?php echo date('m/d'); ?></td>
							<td>CandyCrush Checkout</td>
							<td><span class="badge badge-danger">-13.37</td>
						</tr>
						
						<tr>
							<td><?php echo date('m/d'); ?></td>
							<td>Apple iTunes</td>
							<td><span class="badge badge-danger">-50.00</td>
						</tr>
						
						<tr>
							<td><?php echo date('m/d'); ?></td>
							<td>Checque #103 Deposit</td>
							<td><span class="badge badge-success">$50.00</td>
						</tr>
	
						<tr>
							<td><?php echo date('m/d'); ?></td>
							<td>Social Security</td>
							<td><span class="badge badge-success">$1,393.19</td>
						</tr>
						
						<tr>
							<td><?php echo date('m/d', strtotime('-1 day')); ?></td>
							<td>AMZN MARKETPLACE</td>
							<td><span class="badge badge-danger">-$100.00</td>
						</tr>
						
						<tr>
							<td><?php echo date('m/d', strtotime('-1 days')); ?></td>
							<td>WINRAR/BILL</td>
							<td><span class="badge badge-danger">-$30.00</td>
						</tr>
						

						<tr>
							<td><?php echo date('m/d', strtotime('-1 days')); ?></td>
							<td>QVC*SHOPPING BILL</td>
							<td><span class="badge badge-danger">-$140.50</td>
						</tr>
						
						
						<tr>
							<td><?php echo date('m/d', strtotime('-2 days')); ?></td>
							<td>Fashion Barn</td>
							<td><span class="badge badge-danger">-$333.50</td>
						</tr>
						
						
						<tr>
							<td><?php echo date('m/d',  strtotime('-4 days')); ?></td>
							<td>McDonald's</td>
							<td><span class="badge badge-danger">-$18.20</td>
						</tr>
					</tbody>
				</table>

			</div>

	</div>
	
	
	
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
	<script type="text/javascript" src="/script.js"></script>
	<script type="text/javascript" src="/activity.js"></script>
  </body>
</html>
