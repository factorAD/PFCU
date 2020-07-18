<?php session_start(); 
$_SESSION['extra'] = '';

?>
<?php
include('../config.php');
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
  <link rel="stylesheet" href="../css/morecss.css">
  <link rel="stylesheet" href="../banking/bankingcss.css">
  <link rel="stylesheet" href="../css/redirect2.css">
    <title>Checking Accounts | Pigeon Forge Credit Union</title>
	
	<link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
	<link rel="icon" href="../favicon.ico" type="image/x-icon">
	
	<script src="https://kit.fontawesome.com/c931ff6374.js" crossorigin="anonymous"></script>
	<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

	
  </head>
  <body>
  <?php include("../mainheader.php") ?>
  
  <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item active ml-4"><a href="../index.php">Home</a></li>
    <li class="breadcrumb-item active"><a href="#">Personal</a></li>
    <li class="breadcrumb-item active"><a href="#">Bank</a></li>
    <li class="breadcrumb-item active" aria-current="page">Checking Accounts</li>
  </ol>
</nav>






<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
      <h1 class="display-4 text-justify">Checking Accounts</h1>
      <figure class="featured-image">
      <img class="mb-4" src="../img/checking-accounts.jpg"  alt sizes="(max-width: 479px) 92vw, (max-width: 767px) 94vw, (max-width: 991px) 66vw, 65vw"></i>

      <p class="lead text-justify">With our checking accounts, LESS is MORE.</p>
      <p class="text-justify">A lot of banks seem to have a fee for everything. Fortunately, we’re not a bank. We want to help you pay less,
      so we provide our members with a free debit/ATM card, free online banking and mobile banking, direct deposit with free automatic transfers, and unlimited check writing.
       Less interest, less in fees — and a lot less hassle.</p>
      <p class="text-justify">Not only do we want to help you pay less for checking services, we want to help you earn more. Which is why 
      Money  magazine called our 3% Max Checking account, “The Best Checking Account in America.” So whether you’re opening your first account to help make the most of your hard-earned dollars or looking for an account that grows with your investments,
       we have the perfect account for you.</p>
      
    </div>

    <div class="container">
      <div class="card-deck mb-3 text-center">
        <div class="card mb-4 box-shadow">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Max Checking</h4>
          </div>
          <div class="card-body">
          <div class="rates-label">Earn up to</div>
            <h1 class="card-title pricing-card-title rates-value">3.00%</h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li class="text-justify">&#9642; 3.00% APY on balances of up</li>
              <li class="text-justify ml-2"> to $15,000</li>
              <li class="text-justify">&#9642; No minimum balance required</li>
              <li class="text-justify">&#9642; Totally free – no monthly fees</li>
              <li class="text-justify">&#9642; And more benefits!</li>
            </ul>
            <a href="/apply" type="button" class="btn btn-lg ww-button">Open an Account</a>
          </div>
        </div>
        <div class="card mb-4 box-shadow">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Free Checking</h4>
          </div>
          <div class="card-body">
          <div class="rates-label">&nbsp; </div>
          <h1 class="card-title pricing-card-title rates-value">NO FEES</h1>
          <ul class="list-unstyled mt-3 mb-4">

              <li class="text-justify">&#9642; Free debit card and free</li>
              <li class="text-justify ml-2"> PFCU ATM use</li>
              <li class="text-justify">&#9642; Free starter checks</li>
              <li class="text-justify">&#9642; Free online banking</li>
              <li class="text-justify">&#9642; And more benefits!</li>
            </ul>
            <a href="/apply" type="button" class="btn btn-lg ww-button">Open an Account</a>
          </div>
        </div>
        <div class="card mb-4 box-shadow">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Max Checking</h4>
          </div>
          <div class="card-body">
          <div class="rates-label">Earn up to</div>
            <h1 class="card-title pricing-card-title rates-value">0.35%</h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li class="text-justify">&#9642; Save more, earn more with </li>
              <li class="text-justify ml-2">tiered interest rates</li>
              <li class="text-justify">&#9642; Interest computed daily</li>
              <li class="text-justify">&#9642; Free online and mobile banking</li>
              <li class="text-justify">&#9642; And more benefits!</li>
            </ul>
            <a href="/apply" type="button" class="btn btn-lg ww-button">Open an Account</a>
          </div>
        </div>
      </div>

      <footer class="pt-4 my-md-5 pt-md-5 border-top">
        <div class="row">
          <div class="col-12 col-md">
            <img class="mb-2" src="../img/pigeon.png" alt="" width="24" height="24">
            <small class="d-block mb-3 text-muted">&copy; 2020</small>
          </div>
          <div class="col-6 col-md">
            <h5>Contact Us</h5>
            <ul class="list-unstyled text-small">
            <li><a class="text-muted" href="#">Branch & ATM Locations</a></li>
        <li><a class="text-muted" href="#">(800 969-8762)</a></li>
        <li><a class="text-muted">NMLS: 553781</a></li>
        <li><a class="text-muted" href="#"><i class="fas fa-comment"></i> Chat</a></li>
        <li><a class="text-muted" href="#"><i class="fa fa-clock-o" aria-hidden="true"></i> Schedule Appointmennt</a></li>
            </ul>
          </div>
          <div class="col-6 col-md">
            <h5>About Us</h5>
            <ul class="list-unstyled text-small">
            <li><a class="text-muted" href="#">Member Perks</a></li>
        <li><a class="text-muted" href="#">Help Center</a></li>
        <li><a class="text-muted" href="#">Contact Us</a></li>
        <li><a class="text-muted" href="#">Company Profile</a></li>
            </ul>
          </div>
          <div class="col-6 col-md">
          <ul class="list-unstyled text-small">
        <li><a class="text-muted" href="#">Careers</a></li>
        <li><a class="text-muted" href="#">News Center</a></li>
        <li><a class="text-muted" href="#">Privacy</a></li>
        <li><a class="text-muted" href="#">Terms & Conditions</a></li>
            </ul>
          </div>
        </div>
      </footer>
    </div>











        <!-- Optional JavaScript -->
    <script>
      function relocate_home()
        {
          location.href = "../redirect.php";
      } 
    </script>
  
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->


	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

</body>
</html>