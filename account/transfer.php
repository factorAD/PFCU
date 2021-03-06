<?php session_start(); 
$_SESSION['extra'] = '';

?>
<?php
include('../config.php');
include "../account/balances.php";
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
<div class="alertcontainer" name="alertcontainer" id="alertcontainer" style="display:none;">
<div class="alert alert-success alert-dismissible fade show" role="alert" style="margin-top:0px" aria-hidden="true">
		<i class="fa fa-check" aria-hidden="true"></i></i><strong> External account added successfully</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
</button>
</div>
</div>

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
      <select class="form-control styledselect" name="origin">
        <option value="2">PERSONAL CHECKING (...9218): <?php echo "$".number_format($_SESSION['personal'], 2); ?></option>
        <option value="3">PLATINUM AARP CREDIT CARD (...<?php echo $_SESSION ['username']; ?>): <?php echo "$".number_format($_SESSION['aarp'], 2); ?></option>
        <option value="4">ONLINE SAVINGS (...3218): <?php echo "$".number_format($_SESSION['savings'], 2); ?></option>
        <!-- <option value="5">ROTH IRA (...1930): $86,753.09</option> -->
      </select>
    </div>
    <div class="col-6 col-md-4">
      <select class="form-control styledselect" name="destination" id="destination" required>
        <option />
        <option value="1" data-toggle="modal" class="externaladd" data-target="#externalaccount" data-backdrop="static" data-keyboard="false">Add new external account...</option>
          <?php if( isset($_SESSION['routing']) && !empty($_SESSION['routing']) ){?>
            <option value="6">External: <?php echo strtoupper($_SESSION ['accountname'])?> (...<?php echo $_SESSION['routingf'].")" ?></option>
          <?php } ?> 
        <option value="2">PERSONAL CHECKING (...9218): <?php echo "$".number_format($_SESSION['personal'], 2); ?></option>
        <option value="3">PLATINUM AARP CREDIT CARD (...<?php echo $_SESSION ['username']; ?>): <?php echo "$".number_format($_SESSION['aarp'], 2); ?></option>
        <option value="4">ONLINE SAVINGS (...3218): <?php echo "$".number_format($_SESSION['savings'], 2); ?></option>
        <option value="5">ROTH IRA (...1930): <?php echo "$".number_format($_SESSION['roth'], 2); ?></option>
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
    <button type="submit" class="btn btn-lg transnextbtn" id="buttrans" name="buttrans"><span class="transnextlabel">Next</span>

</div>
</form>



<div class="modal fade" id="externalaccount" tabindex="-1" role="dialog" data-keyboard="false" data-backdrop="static" aria-labelledby="externalaccount"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Add an External Account</h4>
        <button type="button" class="close closefirstmodal">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form method="post" action="" role="form" data-toggle="validator" novalidate="true">
      <div class="modal-body ml-6">
      <img class="w-100 rounded mx-auto d-block mb-3" src="../img/check_example.png" alt="Routing & account number location">
      <div class="mb-3">
      

            <!-- <span class="input-group-addon mr-1"><i class="fa fa-user fa-2x"></i></span> -->
            <label for="routingnumber ml-2" class="routingnumberlabel">Routing number</label>
            <div class="form-group">
            <input type="number" class="form-control ml-1" id="routing" name="routing" placeholder="" required="required" minlength="9" maxlength="9" data-error="Please enter a valid 9-digit routing number."></input>
            <div class="help-block with-errors ml-1"></div> 
             </div>
             <label for="accountnumber ml-2" class="accountnumberlabel">Account number</label>
            <div class="form-group">
            <input type="number" class="form-control ml-1" id="accountno" name="accountno" placeholder="" required="required" minlength="11" maxlength="11" data-error="Please enter a valid 11-digit account number."></input>
            <div class="help-block with-errors ml-1"></div> 
             </div>
             <div class="form-group">
              <label for="accounttype ml-2" class="accountnumberlabel">Account type</label>
                <select class="form-control" name="accounttype">
                  <option>Checking</option>
                  <option>Savings</option>
                </select>
              </div>

              <label for="accountname ml-2" class="accountnumberlabel">Account nickname</label>
              <div class="form-group">
              <input type="text" class="form-control ml-1" id="accountname" name="accountname" placeholder="" required="required" minlength="4" maxlength="15" data-error="Please create an account nickname"></input>
              <div class="help-block with-errors ml-1"></div>  
            </div>
              <div class="externalbtns">
                <button type="button" class="btn cancelbtn extcancelbtn closefirstmodal"><span class="cancellabel">Cancel</span></a>
                <button type="submit" class="btn externalaccountbtn" id="butext" name="butext"><span class="transnextlabel">Next</span>
              </div>
</div>
</form>
</section>

<div id="Warning" class="modal fade" role="dialog" data-backdrop="false">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-body">
              <h4>Are you sure you want to leave?</h4><br>
                <p>You haven't saved your changes yet, and you'll lose them if you leave the page.</p>
                <button type="button" class="btn cancelbtn extcancelbtn removeblur" data-dismiss="modal"><span class="cancellabel">Don't leave</span></button>
                <button type="button" class="btn externalaccountbtn confirmclosed"><span class="transnextlabel">Leave</span></button>
            </div>
        </div>
    </div>
</div>

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
<!--
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
</script> -->
<script>
  $(document).ready(function() {
  $('.transnextbtn').on('click', function() {
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
<script>
$("#destination").change(function () {
    if ($(this).val() == "1") {
        $('#externalaccount').modal('show');
      }
 })
//   function openPopup() {
//     $("#externalaccount").modal();
// }
</script>


  
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->


	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.min.js"></script>

    <!-- <script>
      //jQuery and Bootstrap Lib's always comes first
$(document).ready(function () { //Dom Ready
    $('.closefirstmodal').click(function () { //Close Button on Form Modal to trigger Warning Modal
        $('#Warning').modal('show').on('show.bs.modal', function () { //Show Warning Modal and use `show` event listener
            $('.confirmclosed').click(function () { //Waring Modal Confirm Close Button
                $('#Warning').modal('hide'); //Hide Warning Modal
                $('#externalaccount').modal('hide'); //Hide Form Modal
            });
        });
    });
});

</script> -->
<script>
	$(document).ready(function () {
	    $('.closefirstmodal').click(function () {
        $('#externalaccount').addClass('blur');
          $('#Warning').modal('show');
	    });

	    $('.confirmclosed').click(function () {
        location.reload();
return false;
	        // $('#Warning').modal('hide');
          // $('#externalaccount').modal('hide');
          // $('#externalaccount').removeClass('blur');
          
      });
      
       $('.removeblur').click(function () {
         $('#externalaccount').removeClass('blur');
       });
	});
</script>




</body>
</html>