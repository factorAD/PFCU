<?php session_start(); 
$_SESSION['extra'] = '';

?>

<!doctype html>
<html lang="en"> 
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

	<link rel="stylesheet" href="/css/2020.css"> 
	<link rel="stylesheet" href="/css/morecss.css">
    <title>Pigeon Forge Credit Union</title>
	
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
	<link rel="icon" href="/favicon.ico" type="image/x-icon">
	
	
  </head>

  
  
	<?php include("header.php") ?>
	<div class="row bg-overlay">
	
	<div class="container">
	
		<div id="loading">
			<h4>One moment please...</h4>
		</div>
		
		
		<div class="jumbotron col-md-6 offset-md-6">
			
			<h2>Welcome back</h2>
			<h6><i>to your neighborhood Credit Union</i></h6>
			<br> </br>
			<h4><strong>Online Banking Login</strong></h4>
			<h6>Personal:</h6>
			
			
			<hr />
			
			<form>
				<div class="row">
				
					<div class="col">
					
						<input id="username" class="form-control" type="text" name="user" placeholder="username" />
				
					</div>
					
					<div class="col">
					
						<input class="form-control" id="password" type="password" name="pass" placeholder="password" />
					</div>
				</div>
				
				<div class="form-check">
					<input type="checkbox" class="form-check-input" id="rememberme">
					<label class="form-check-label" for="rememberme">Remember Me</label>
</div>	
			</form>	
			<div class="spacer"></div>
			<button id="login" class="btn btn-success" href="#">Log In</button>
			<button class="btn btn-primary" href="#">Apply Today</button>
			<div class="spacer"></div>
			
	<!-- Button trigger modal -->
<a href="#" data-toggle="modal" data-target="#pwmodal">
  Forgot username/password?
</a>

<!-- Modal -->
<div class="modal fade" id="pwmodal" tabindex="-1" role="dialog" aria-labelledby="pwmodal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="text-center" id="pwmodal">Forgot username or password</h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
		  <div class="col-md-12">
			  <div class="panel panel-default">
				  <div class="panel-body">
					  <div class="text-center">
						  <p> Enter your email address and we'll send you instructions on how to reset your account</p>
						  <div class="panel-body">
							  <fieldset>
								  <div class="form-group">
									  <input class="form-control input-lg" placeholder="E-mail Address" name="email" type="email">
								</div>
<input class="btn btn-lg btn-primary btn-block" value="Reset Account" type="submit">
</fieldset>
							</div>
						</div>
					</div>
				</div>
	  </div>
</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>
</div>
<div>

			<br />
			<small>
				
			</small>
		</div>

		<div class="spacer"></div>
<section class="home-section" id="earn more">
	<header class="section-header">
		<h2 class="home-h2">
			Earn <strong>More.</strong>
</h2>
<p>We have more ways for your money to earn even more. Choose from CDs, Health Savings Accounts, nationally recognized credit cards and the checking account Money magazine called "The Best Checking Account in America".
<br>
<br>
Earn more interest, more returns, and more rewards with Pigeon Forge Credit Union

</p>

<div class="spacer"></div>
<a class="btn btn-primary btn-lg btn-block" href="#" role="button">See how <u>you</u> can earn more.</a>
<!-- <button type="button" class="btn btn-primary btn-lg btn-block" href="#enroll.php">See how <u>you</u> can earn more.</button> -->
</header>

<div class="spacer"></div>




<!-- <div id="footer">
&copy; 2020 Pigeon Forge Credit Union | <a href="#">Terms & Conditions</a> | <a href="#">Privacy</a> | <a href="#">Security</a> | This is a fake bank
</div>
-->
	</div>



	
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
	<script type="text/javascript" src="/script.js"></script>
	<script type="text/javascript" src="/navscript.js"></script>

  </body>
</html>





