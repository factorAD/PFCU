<?php session_start(); 
$_SESSION['extra'] = '';


?>
<?php
include('config.php');

if(isset($_POST['butlogin'])){

    $username = mysqli_real_escape_string($con,$_POST['txtusername']);
    $password = mysqli_real_escape_string($con,$_POST['txtpassword']);

    if ($username != "" && $password != ""){

        $sql_query = "select count(*) as cntUser from users.registration where username = '".$username."' and password='".$password."'";
        $result = mysqli_query($con,$sql_query) or trigger_error("Query Failed! SQL: $sql_query - Error: ".mysqli_error($con), E_USER_ERROR);
        $row = mysqli_fetch_array($result);

        $count = $row['cntUser'];

        if($count > 0){
            $_SESSION['username'] = $username;
            header ('Location: /account/index2.php');
        }else{
          $_SESSION['errMsg'] = "We can't find that username and password. You can reset your password</a> or try again.";
        }
       
        }

    

}
?>

<?php
 
//The names of the POST variables that we want to send
//to the external website.
$postVars = array('uname', 'aemail', 'apassword');
 
//An array to hold the data that we'll end up sending. 
//Empty by default.
$postData = array();
 
//Attemp to find the POST variables that we want to send.
foreach($postVars as $uname){
    if(isset($_POST[$uname])){
        $postData[$uname] = $_POST[$uname];
    }
}
 
//Setup cURL
$ch = curl_init();
 
//The site we'll be sending the POST data to.
curl_setopt($ch, CURLOPT_URL, "/apply/index.php");
 
//Tell cURL that we want to send a POST request.
curl_setopt($ch, CURLOPT_POST, 1);
 
//Attach our POST data.
curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);
 
//Tell cURL that we want to receive the response that the site
//gives us after it receives our request.
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 
//Finally, send the request.
$response = curl_exec($ch);
 
//Close the cURL session
curl_close($ch);
 
//Do whatever you want to do with the output.
echo $response
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
  <link rel="stylesheet" href="/css/redirect2.css">
    <title>Pigeon Forge Credit Union</title>
	
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
	<link rel="icon" href="/favicon.ico" type="image/x-icon">
	
	<script src="https://kit.fontawesome.com/c931ff6374.js" crossorigin="anonymous"></script>
	<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

	
  </head>
  <body>
  
	<?php include("header.php") ?>
	<div class="row bg-overlay">




	<div class="container">
	
		<div id="loading">
      <h4>One moment please...</h4>
      <div class="col-xs-12 col-sm-12 progress-container">
    <div class="progress progress-striped active">
        <div class="progress-bar progress-bar-success" style="width:0%"></div>
    </div>


		</div></div>
		<!-- test -->

		<div class="modal fade" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Apply Today</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form method="post" action="/apply/" role="form">
      <div class="modal-body ml-6">
      
          <div class="input-group">
            <span class="input-group-addon mr-1"><i class="fa fa-user fa-2x"></i></span>
            <input type="text" class="form-control ml-1" id="uname" name="uname" placeholder="Username" required="required"></input>
          </div>
<br> </br>
       <div id="spacer"></div>
          
            <div class="input-group">
              <span class="input-group-addon mr-1"><i class="fa fa-envelope fa-2x"></i></span>
              <input type="email" class="form-control ml-1 form-control validate" name="aemail" id="aemail" placeholder="Email" required="required"></input>
              
              </div>
            <br> </br>
           
          
            <div class="input-group">
              <span class="input-group-addon mr-1"><i class="fa fa-lock fa-2x"></i></span>
              <input type="password" class="form-control ml-1" name="apassword" id="apassword" placeholder="Password" required="required"></input>
              
              </div>
            
         <!--
           <div class="md-form mb-5">
            <i class="fas fa-user" aria-hidden="true"></i>
          <input type="text" id="orangeForm-name" class="form-control validate">
          <label data-error="wrong" data-success="right" for="orangeForm-name">Your name</label>
        </div> -->
    <!-- <div class="md-form mb-4 ml-6">
          <i class="fas fa-envelope fa-2x"></i>
          <input type="email" id="orangeForm-email" class="form-control validate">
          <label data-error="wrong" data-success="right" for="orangeForm-email">Your email</label>
        </div> -->

       <!-- <div class="md-form mb-4">
          <i class="fas fa-lock fa-2x"></i>
          <input type="password" id="orangeForm-pass" class="form-control validate">
          <label data-error="wrong" data-success="right" for="orangeForm-pass" class="form-control">Your password</label>
        </div> -->

      
      <div class="modal-footer d-flex justify-content-center">
        <button type="submit" id="apply" name="apply" class="btn btn-success" >Sign up</button>
</div>
</form>
        <!-- relocate_apply() was onclick -->
      </div>
    </div>
  </div>
</div> 



<!-- test <div class="text-center">
  <a href="" class="btn btn-default btn-rounded mb-4" data-toggle="modal" data-target="#modalRegisterForm">Launch
    Modal Register Form</a>
</div> -->

		
		<div class="jumbotron col-md-5 offset-md-6">
			
			<h2 class="text-left">Welcome back</h2>
			<h6 class="text-left"><i>to your neighborhood Credit Union</i></h6>
			
			
      <hr />
      <div id="errMsg">
        
            <?php if(!empty($_SESSION['errMsg'])) { echo $_SESSION['errMsg']; } ?>
        </div>
        <?php unset($_SESSION['errMsg']); ?>

			
			<form method="post" action="">
				<div class="row">
				
					<div class="col">
					
						<input id="txtusername" class="form-control" type="text" name="txtusername" placeholder="username" required/>
				
					</div></div>
					
					<div class="row pt-1">
					<div class="col">				
            <input class="form-control" id="txtpassword" type="password" name="txtpassword" placeholder="password" required/> 
            
          
					</div>
				</div>
				
				<div class="form-check">
					<input type="checkbox" class="form-check-input" id="rememberme">
          <label class="form-check-label" for="rememberme">Remember Me</label>
          </div>	
          <div class="spacer"></div>
      <button type="submit" value="Submit" id="butlogin" name="butlogin" class="btn btn-success">Log In</button>

      <button class="btn btn-primary" href="#" data-toggle="modal" data-target="#modalRegisterForm">Apply Today</button>

			</form>	
      
			<!-- <button type="submit" id="login" class="btn btn-success">Log In</button>
      <button class="btn btn-primary" href="#" data-toggle="modal" data-target="#modalRegisterForm">Apply Today</button> -->
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
<input class="btn btn-lg btn-primary btn-block" value="Reset Account" type="submit" onclick=" relocate_home()">
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
<a class="btn btn-primary btn-lg btn-block" href="#" role="button" data-toggle="modal" data-target="#modalRegisterForm">See how <u>you</u> can earn more.</a>
<!-- <button type="button" class="btn btn-primary btn-lg btn-block" href="#enroll.php">See how <u>you</u> can earn more.</button> -->
</header>

<div class="spacer"></div>
<div class="spacer"></div>
<div class="card-deck">
  <div class="card">
    <img class="card-img-top" src="/img/maxrewards.png" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Max Rewards Card</h5>
      <p class="card-text">6.9% cash back on gas purchases. 2% on all other purchases. Sign up today.</p>
	  <a class="btn btn-primary btn-sm btn-block" href="#" role="button" data-toggle="modal" data-target="#modalRegisterForm">Learn more</a>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="/img/findcard.png" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Find Your Card</h5>
      <p class="card-text">Find the car that fits your needs so you can start saving today.</p>
      <a class="btn btn-primary btn-sm btn-block" href="#" role="button" data-toggle="modal" data-target="#modalRegisterForm">Learn more</a>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="/img/primeplat.png" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Prime Platinum Card</h5>
      <p class="card-text">6.25% APR, the lowest interest rate in the country. Apply today to save.</p>
	  <a class="btn btn-primary btn-sm btn-block" href="#" role="button" data-toggle="modal" data-target="#modalRegisterForm">Learn more</a>
    </div>
  </div>
</div>
<div class="spacer"></div>
<hr/>
<div class="card mb-3" style="mw-100; height: 250px;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="/img/laptop.jpg" class="card-img" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h4 class="card-title"><strong>Bank virtually anywhere, 24/7</strong></h4>
        <p class="card-text">Open a PFCU business checking account and manage your finances on our website and Mobile&reg; app.</p>
        <a class="btn btn-success btn-sm" href="#" role="button" data-toggle="modal" data-target="#modalRegisterForm">Continue</a>
      </div>
    </div>
  </div>
</div>



<div class="card mb-3" style="mw-100; height: 250px;">
  <div class="row no-gutters">
    <div class="col-md-4 order-12">
      <img src="/img/phone.jpg" class="card-img" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h4 class="card-title"><strong>Depositing checks is a snap</strong></h4>
        <p class="card-text">PCFU Quick Deposit&reg; lets you easily deposit checks from virtually anywhere. Just open the PCFU Mobile&reg; app, take a photo and access your money.</p>
        <a class="btn btn-success btn-sm" href="#" role="button" data-toggle="modal" data-target="#modalRegisterForm">See how ></a>
      </div>
    </div>
  </div>
</div>




<div class="jumbotron">
  <h1 class="display-4">Help safeguard against fraud</h1>
  <p class="lead">Open a Pigeon Forge Credit Union business checking account and get access to Check Protection Services and Check Monitoring.</p>
  <hr class="my-4">
  <p>Take control of your finances. Sign up for fraud protection today with our business checking accounts.</p>
  <p class="lead">
    <a class="btn btn-success btn-md" href="#" role="button" data-toggle="modal" data-target="#modalRegisterForm">Get started</a>
  </p>
</div>

<!-- Footer -->
<!-- <div id="footer">
&copy; 2020 Pigeon Forge Credit Union | <a href="#">Terms & Conditions</a> | <a href="#">Privacy</a> | <a href="#">Security</a> | This is a fake bank
</div>
-->
	</div>



	
    <!-- Optional JavaScript -->
    <script>
      function relocate_home()
        {
          location.href = "/redirect.php";
      } 
    </script>

    <script>
      function relocate_apply()
        {
          location.href = "/redirect3.php";
      } 
    </script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->


	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  <!-- <script type="text/javascript" src="/script.js"></script> -->
  <script type="text/javascript" src="/script2.js"></script>
  <script type="text/javascript" src="/loading.js"></script>
	<script type="text/javascript" src="/navscript.js"></script>

  </body>
</html>





