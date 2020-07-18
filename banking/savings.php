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
    <title>Savings Accounts | Pigeon Forge Credit Union</title>
	
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
    <li class="breadcrumb-item active" aria-current="page">Savings Accounts</li>
  </ol>
</nav>






<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
      <h1 class="display-4 text-justify">Savings Accounts</h1>
      <figure class="featured-image">
      <img class="mb-4" src="../img/savings-accounts.jpg"  alt sizes="(max-width: 479px) 92vw, (max-width: 767px) 94vw, (max-width: 991px) 66vw, 65vw"></i>

      <p class="lead text-justify">More ways to earn more.</p>
      <p class="text-justify">Save for a rainy day. Or a vacation, or car, or house. No matter what you are saving for, we help members earn more and pay less. That’s why we offer a wide variety of
       savings options, including CDs, HSAs and IRAs. Because we don’t have shareholders like traditional banks, our savings accounts typically earn more than similar accounts at traditional
        banks. It’s another good reason why you'll love banking here. You worked hard for your money. Now it’s time to sit back and let it work for you.</p>
 
      
    </div>

    <div class="container">
      <div class="card-deck mb-3 text-center">
        <div class="card mb-4 box-shadow">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Member Savings</h4>
          </div>
          <div class="card-body">
          <div class="rates-label">Earn up to</div>
            <h1 class="card-title pricing-card-title rates-value">0.25%</h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li class="text-justify">&#9642; $300.00 minimum daily balance</li>
              <li class="text-justify ml-2"> to avoid a $5.00 monthly fee</li>
              <li class="text-justify">&#9642; $5.00 to open the account</li>
              <li class="text-justify">&#9642; Sub savings accounts</li>
              <li class="text-justify">&#9642; And more benefits!</li>
            </ul>
            <a href="/apply" type="button" class="btn btn-lg ww-button">Open an Account</a>
          </div>
        </div>
        <div class="card mb-4 box-shadow">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Max Savings</h4>
          </div>
          <div class="card-body">
          <div class="rates-label">Earn up to</div>
            <h1 class="card-title pricing-card-title rates-value">1.50%</h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li class="text-justify">&#9642; Earn up to 1.50% on balances</li>
              <li class="text-justify ml-2"> over $250,000</li>
              <li class="text-justify">&#9642; No minimum deposit</li>
              <li class="text-justify">&#9642; 1% APY 100k-250k</li>
              <li class="text-justify">&#9642; And more benefits!</li>
            </ul>
            <a href="/apply" type="button" class="btn btn-lg ww-button">Open an Account</a>
          </div>
        </div>
        <div class="card mb-4 box-shadow">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Holiday Club</h4>
          </div>
          <div class="card-body">
          <div class="rates-label">Earn up to</div>
            <h1 class="card-title pricing-card-title rates-value">0.25%</h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li class="text-justify">&#9642; Save for the holidays, vacations </li>
              <li class="text-justify ml-2"> birthdays, weddings</li>
              <li class="text-justify">&#9642; Make deposits all year long</li>
              <li class="text-justify">&#9642; Interest deposited September</li>
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