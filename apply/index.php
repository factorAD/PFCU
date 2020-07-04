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

	<link rel="stylesheet" href="applycss.css"> 
  <link rel="stylesheet" href="../css/morecss.css">
  <link rel="stylesheet" href="../css/redirect2.css">
    <title>Start now - Online Enrollment</title>
	
	<link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
	<link rel="icon" href="../favicon.ico" type="image/x-icon">
	
	<script src="https://kit.fontawesome.com/c931ff6374.js" crossorigin="anonymous"></script>
	<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

	
  </head>
  <body>
  <?php include("header.php") ?>
  
  <?php
  function generateRandomString($length = 5) {
    $characters = '1234567890';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
?>
<div class="container">
  <div class="alert alert-dark" role="alert" style="margin-top:2px">
    <i class="fa fa-info-circle" aria-hidden="true"></i> Your application number is: 
   <?php print $_SESSION['rand'] = generateRandomString(); ?>

</div>
</div>


<div class="container pt-1">
  

<div class="progress w-75">
  <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 50%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
</div>

<div class="row pt-2">

<div class="col-12 col-sm-8 col-lg-8">
<h4>Thanks for enrolling.</h4>
<p>We need a bit more info to verify your identity</p>
<hr />

<div class="row">
<div class="col-4 util center aligned">
<div class="col-2 col-sm-12">
<img class="rounded enrollment-icons" src="../img/card.png"></img>
<p class="pt-2">Your driver's license</p>
</div>

</div>

<div class="col-4 util center aligned">
<!-- <div class="col-2 col-sm-12 ml-5"> -->
<img class="rounded enrollment-icons" src="../img/card2.png"></img>
<p class="pt-2">Any account or application number</p>
</div>
<div class="col-4 util center aligned">
<img class="rounded enrollment-icons" src="../img/device.png"></img>
<p class="pt-2">Access to the phone or email you told us</p>
</div>
</div>
<hr />
<div class="container">


<form id="registration-form" method="post" action="connect.php" role="form"
oninput='password2.setCustomValidity(password2.value != password.value ? "Passwords do not match." : "")'>
<div class="form-group">
    <label for="appnum">Application Number</label>
    <input type="text" class="form-control" id="appnum" aria-describedby="Application Number" placeholder="Application number" value="<?php print($_SESSION['rand']); ?>" name="appnum" readonly>
</div>
  <div class="form-group">
    <label for="username">Username</label>
    <input type="username" class="form-control" id="username" aria-describedby="Username" placeholder="Username" name="username" required>
</div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email" required>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password" required>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword2">Confirm Password</label>
    <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password" name="password2" required>
  </div>
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationCustom01">First name</label>
      <input type="text" class="form-control" id="validationCustom01" placeholder="First name" name="firstName" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustom02">Last name</label>
      <input type="text" class="form-control" id="validationCustom02" placeholder="Last name" name="lastName" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustomUsername">Driver's License Number</label>
      <div class="input-group">
        <input type="text" class="form-control" id="validationLicense" placeholder="123456789" aria-describedby="inputGroupPrepend" name="drivers" required>
        <div class="invalid-feedback">
          Please enter a valid driver's license number.
        </div>
      </div>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-5 mb-3">
      <label for="validationCustom03">City</label>
      <input type="text" class="form-control" id="validationCustom03" placeholder="City" name="city" required>
      <div class="invalid-feedback">
        Please provide a valid city.
      </div>
    </div>
    <div class="form-group">
	<label for="state" class="col-sm-2 control-label">State</label>
	<div class="col-md-12">
		<select class="form-control" id="state" name="state" name="state" required>
			<option value=""> </option>
			<option value="AK">Alaska</option>
			<option value="AL">Alabama</option>
			<option value="AR">Arkansas</option>
			<option value="AZ">Arizona</option>
			<option value="CA">California</option>
			<option value="CO">Colorado</option>
			<option value="CT">Connecticut</option>
			<option value="DC">District of Columbia</option>
			<option value="DE">Delaware</option>
			<option value="FL">Florida</option>
			<option value="GA">Georgia</option>
			<option value="HI">Hawaii</option>
			<option value="IA">Iowa</option>
			<option value="ID">Idaho</option>
			<option value="IL">Illinois</option>
			<option value="IN">Indiana</option>
			<option value="KS">Kansas</option>
			<option value="KY">Kentucky</option>
			<option value="LA">Louisiana</option>
			<option value="MA">Massachusetts</option>
			<option value="MD">Maryland</option>
			<option value="ME">Maine</option>
			<option value="MI">Michigan</option>
			<option value="MN">Minnesota</option>
			<option value="MO">Missouri</option>
			<option value="MS">Mississippi</option>
			<option value="MT">Montana</option>
			<option value="NC">North Carolina</option>
			<option value="ND">North Dakota</option>
			<option value="NE">Nebraska</option>
			<option value="NH">New Hampshire</option>
			<option value="NJ">New Jersey</option>
			<option value="NM">New Mexico</option>
			<option value="NV">Nevada</option>
			<option value="NY">New York</option>
			<option value="OH">Ohio</option>
			<option value="OK">Oklahoma</option>
			<option value="OR">Oregon</option>
			<option value="PA">Pennsylvania</option>
			<option value="PR">Puerto Rico</option>
			<option value="RI">Rhode Island</option>
			<option value="SC">South Carolina</option>
			<option value="SD">South Dakota</option>
			<option value="TN">Tennessee</option>
			<option value="TX">Texas</option>
			<option value="UT">Utah</option>
			<option value="VA">Virginia</option>
			<option value="VT">Vermont</option>
			<option value="WA">Washington</option>
			<option value="WI">Wisconsin</option>
			<option value="WV">West Virginia</option>
			<option value="WY">Wyoming</option>
		</select>
	</div>
</div>
    <div class="col-md-3 mb-3">
      <label for="validationCustom05">Zip</label>
      <input type="text" class="form-control" id="validationCustom05" placeholder="Zip" name="zip" required>
      <div class="invalid-feedback">
        Please provide a valid zip.
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
      <label class="form-check-label" for="invalidCheck">
        Agree to terms and conditions
      </label>
      <div class="invalid-feedback">
        You must agree before submitting.
      </div>
    </div>
  </div>
  <div class="button-row-margin col-3">
  <button type="submit" class="btn btn-primary btn-block text-center">Submit</button>
</div>
</form>
</div>


</div>
</div>




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