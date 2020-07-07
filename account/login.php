<?php session_start(); 
$_SESSION['extra'] = '';


?>
<?php
include('../config.php');

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
            header ('Location: /account/index.php');
        }else{
          $_SESSION['errMsg'] = "We can't find that username and password. You can reset your password</a> or try again.";
        }
       
        }

    

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
  <link rel="stylesheet" href="../css/redirect2.css">
  <link rel="stylesheet" href="../account/accountlogincss.css">
    <title>Sign in | Pigeon Forge Credit Union</title>
	
	<link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
	<link rel="icon" href="../favicon.ico" type="image/x-icon">
	
	<script src="https://kit.fontawesome.com/c931ff6374.js" crossorigin="anonymous"></script>
	<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

	
  </head>
  <body>

  <?php include("loginheader.php") ?>
  <div class="row bg-login box_shadow">

 
 
 

    <div class="jumbotron col-md-3 offset-md-4" id="logontron">
        
        <form method="post" action="">
        <div class="logintitle">
        <i class="fa fa-shield" aria-hidden="true"></i> Online Banking Login</div>
<div id="errMsg">
    <?php if(!empty($_SESSION['errMsg'])) { echo $_SESSION['errMsg']; } ?>
    </div>
<?php unset($_SESSION['errMsg']); ?>
            <div class="row pt-3">
            
                <div class="col usernameinput">
                
                    <input id="txtusername" class="form-control" type="text" name="txtusername" placeholder="Username" required/>
            
                </div></div>
                
                <div class="row pt-3">
                <div class="col passwordinput">				
        <input class="form-control" id="txtpassword" type="password" name="txtpassword" placeholder="Password" required/> 
        
      
                </div>
            </div>
            
            <div class="form-check pt-3">
                <input type="checkbox" class="form-check-input" id="rememberme"></input>
      <label class="form-check-label" for="rememberme" id="logonremember">Remember Me</label>
      </div>	
      <div class="spacer"></div>
  <button type="submit" value="Submit" id="butlogin" name="butlogin" class="btn btn-primary btn-block ml-1 mr-1">Log In</button>
  <div class="spacer"></div>

  <a href="#" data-toggle="modal" data-target="#pwmodal">
  Forgot username/password? <i class="fa fa-caret-right" aria-hidden="true"></i>
</a><br>
<a href="/apply">
  Sign Up Now <i class="fa fa-caret-right" aria-hidden="true"></i>
</a>
 
        </form>






                


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
 </div>
</div>
<div class="container">
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
</div>


        <!-- Optional JavaScript -->
    <script>
      function relocate_home()
        {
          location.href = "../redirect.php";
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

</body>
</html>