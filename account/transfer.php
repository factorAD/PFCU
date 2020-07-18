<?php session_start(); 
$_SESSION['extra'] = '';
$_SESSION['personal'] = '9337.00'
?>
<?php
include('../config.php');
// logout
if(isset($_POST['but_logout'])){
  session_destroy();
  header('Location: ../index.php');
}
?>
<?php
if(isset($_POST['buttrans'])){
  sleep(2);
  $transamount = mysqli_real_escape_string($con,$_POST['transamount']);

  $_SESSION['transamount'] = $transamount;
header('Location: ../account');
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
	<link rel="stylesheet" href="../account/accountlogincss.css">
  <link rel="stylesheet" href="../css/redirect2.css">
    <title>Transfer & Pay | Pigeon Forge Credit Union</title>
	
	<link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
	<link rel="icon" href="../favicon.ico" type="image/x-icon">
	
  <script src="https://kit.fontawesome.com/c931ff6374.js" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
	<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

	
  </head>
  <body>
  <?php include("../indexheader.php") ?>
  
  <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item active ml-4"><a href="../index.php">Home</a></li>
    <li class="breadcrumb-item active"><a href="/account">Account</a></li>
    <li class="breadcrumb-item active"><a href="#">Transfer & Pay</a></li>
    
  </ol>
</nav>


<section class="brokerageTransfer payments">
  <form method="post" action="">
<div class="container-xl transfercontainer">
  <div class="row">
    <div class="col-6 col-md-4"><label for="originaccount" class="control-label">Transfer from</label></div>
    <div class="col-6 col-md-4"><label for="destinationaccount" class="control-label">Transfer to</label></div>
    <div class="col-6 col-md-4"><label for="transferamount" class="control-label">Amount</label></div>
  </div>

  <div class="row">
    <div class="col-6 col-md-4">
      <select class="form-control">
        <option value="2">PERSONAL CHECKING (...9218): $9,337.00</option>
        <option value="3">PLATINUM AARP CREDIT CARD (...<?php echo $_SESSION ['username']; ?>): $420.00</option>
        <option value="4">ONLINE SAVINGS (...3218): $19,293.44</option>
        <option value="5">ROTH IRA (...1930): $86,753.09</option>
      </select>
    </div>
    <div class="col-6 col-md-4">
      <select class="form-control" required>
        <option />
        <option value="2">PERSONAL CHECKING (...9218): $9,337.00</option>
        <option value="3">PLATINUM AARP CREDIT CARD (...<?php echo $_SESSION ['username']; ?>): $420.00</option>
        <option value="4">ONLINE SAVINGS (...3218): $19,293.44</option>
        <option value="5">ROTH IRA (...1930): $86,753.09</option>
      </select>
      <div class="invalid-feedback">
          Please tell us where the money is going.
        </div>
    </div>
  
    <div class="col-6 col-md-4">
      <div class="input-group-prepend">
        <div class="input-group-text">$</div>  
        <input class="form-control" min="0" id="transamounttext" name="transamount" maxlength="18" type="currency" step="any" required>
      </div>
      <div class="invalid-feedback">
          Please enter a valid amount.
        </div>
    </div>

</div>
<div class="spacer"></div>
<div class="row">
    <div class="col-6 col-md-4"></div>
    <div class="col-6 col-md-4"><!--<label for="transferdate" class="control-label">Transfer Date</label>--></div>
    <div class="col-6 col-md-4"><label for="transfermemo" class="control-label">Memo (optional)</label></div>
  </div>

  <div class="row">
    <div class="col-6 col-md-4">
   
    </div>
    <div class="col-6 col-md-4">
    <!-- <a href="#" type="button" class="btn btn-lg extacc-button" id="extacc">Add a new external account</a> -->
      <!-- this would be the transfer date column -->
    </div>
  
    <div class="col-6 col-md-4">
        <input class="form-control" id="transfermemo" name="transfermemo" maxlength="32" type="text">
      </div>
    </div>

    <div class="col-lg-offset-8 col-lg-2 col-md-offset-8 col-md-2 col-sm-offset-6 col-sm-3 col-xs-6">
    <a href="/account" type="button" class="btn btn-lg cancelbtn"><span class="cancellabel">Cancel</span></a>
    <button type="submit" class="btn btn-lg transnextbtn" id="buttrans" name="buttrans"><span class="transnextlabel">Next</span></a>

</div>
</form>
<?php if( isset($_SESSION['success']) && !empty($_SESSION['success']) )
{
?>
<div class="container success">
  <h5>success</h5>
</div>
<?php } ?>
<!-- <p>
<?php echo $_SESSION ['personal'] - $_SESSION ['transamount'] ; ?>
<?php echo $_SESSION ['transamount'] ?>
</p> -->

</section>


<div class="container nudgeContainer">
<div class="row no-gutters">
  <div class="col-md-1">
  <div class="bannerContainer col">
    <div class="imageContainer">
      <div class="NOTEDARK imageText">
        Open a<br><strong>CD Account</strong>
      </div>
      <img src="../img/openacd.png">
    </div>
  </div>
</div>
  <div class="col-md-8 textContainer">
  <!-- <div class="container textContainer col-12 col-sm-11 col-lg-9"> -->
    <h2 class="BODYLABEL nudgeTitle">Grow your money</h2>
      <div class="BODY nudgeCaption">
        Save and earn when you open a PFCU CD. Qualifying linked checking account required for CD Relationship Rates. <a href="#">See details.</a>
      </div>
</div>
  </div>
</div>
</div>



<!-- <div class="container">
<div class="row">

<div class="col-sm-12 md-4 sm-6 md-6">
<label for="originaccount" class="control-label">Transfer from</label>
<select class="form-control">
<option value="1">PERSONAL CHECKING (...9218): $9,337.00</option>
<option value="2">PLATINUM AARP CREDIT CARD (...<?php echo $_SESSION ['username']; ?>): $420.00</option>
<option value="3">ONLINE SAVINGS (...3218): $19,293.44</option>
<option value="4">ROTH IRA (...1930): $86,753.09</option>
</select>
</div>
<div class="col-sm-12 md-4 sm-6 md-6">
<label for="originaccount" class="control-label">Transfer to</label>
<select class="form-control">
  <option />
  <option value="1">PERSONAL CHECKING (...9218): $9,337.00</option>
<option value="2">PLATINUM AARP CREDIT CARD (...<?php echo $_SESSION ['username']; ?>): $420.00</option>
<option value="3">ONLINE SAVINGS (...3218): $19,293.44</option>
<option value="4">ROTH IRA (...1930): $86,753.09</option>
</select>
</div>
</div>

</div> -->






        <!-- Optional JavaScript -->
    <script>
      function relocate_home()
        {
          location.href = "../redirect.php";
      } 
    </script>
<script>
  $('select').on('change', function() {
  $('option').prop('disabled', false);
  $('select').each(function() {
    var val = this.value;
    $('select').not(this).find('option').filter(function() {
      return this.value === val;
    }).prop('disabled', true);
  });
}).change();
</script>
<script>
var currencyInput = document.querySelector('input[type="currency"]')
var currency = 'USD' // https://www.currency-iso.org/dam/downloads/lists/list_one.xml

 // format inital value
onBlur({target:currencyInput})

// bind event listeners
currencyInput.addEventListener('focus', onFocus)
currencyInput.addEventListener('blur', onBlur)


function localStringToNumber( s ){
  return Number(String(s).replace(/[^0-9.-]+/g,""))
}

function onFocus(e){
  var value = e.target.value;
  e.target.value = value ? localStringToNumber(value) : ''
}

function onBlur(e){
  var value = e.target.value

  var options = {
      maximumFractionDigits : 2,
      currency              : currency,
      style                 : "currency",
      currencyDisplay       : "symbol"
  }
  
  e.target.value = value 
    ? localStringToNumber(value).toLocaleString(undefined, options)
    : ''
}  
</script>
<script>
  $(document).ready(function() {
  $('.btn').on('click', function() {
    var $this = $(this);
    var loadingText = '<i class="fa fa-spinner fa-spin transload"></i>';
    if ($(this).html() !== loadingText) {
      $this.data('original-text', $(this).html());
      $this.html(loadingText);
    }
    setTimeout(function() {
      $this.html($this.data('original-text'));
    }, 2000);
  });
})
</script>

  
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->


	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

</body>
</html>