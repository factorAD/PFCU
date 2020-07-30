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
  <link rel="stylesheet" href="../why-pfcu/whypfcucss.css">
  <link rel="stylesheet" href="../css/redirect2.css">
    <title>Checking Accounts | Pigeon Forge Credit Union</title>
	
	<link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
	<link rel="icon" href="../favicon.ico" type="image/x-icon">
	
	<script src="https://kit.fontawesome.com/c931ff6374.js" crossorigin="anonymous"></script>
	<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

	
  </head>
  <body>
  <?php include("../mainheader.php") ?>

  
 <section class="landing-intro why-pfcu" id="introduction">
     <div class="section-header why-pfcu wide-header">
         <h2 class="landing-h1 why-pfcu">You're really going to like it here.</h2>
         <p>
             Pigeon Forge Credit Union isn't better because we're bigger, we're bigger because we're better.
</p>
</div>
</section>

<section>
    <div class="blue why-pfcu-row">
        <div class="content-col why-pfcu-col">
            <div class="why-pfcu-content">
                <h2 class="why-pfcu-h2">We're all in this together.</h2>
                <p>
                    Pigeon Forge Credit Union is fundamentally different than other guys, both in our structure and mission. Our goal is to treat you right, by any means necessary. 
                    This approach guides every decision we make and every service we offer. Every. Single. One.
</P>
<div>
</div>
</div>
</div>
<div class="image-1 image-col why-pfcu-col lazy" data-bg="url(''../img/why-pfcu-faces.jpg')" data-was-processed="true" style="background-image: url('../img/why-pfcu-faces.jpg');">
<div class="section-image" aria-hidden="true">
</div>
</div>
</section>


<section>
    <div class="reverse why-pfcu-row">
        <div class="content-col why-pfcu-col">
            <div class="why-pfcu-content">
                <h2 class="why-pfcu-h2">Earn more. Pay less.</h2>
                <p>
As a credit union, our goal isn’t to generate profits for shareholders. It’s to improve the lives of our members. That's why PFCU is rated #1 
in the nation for Return of Member by Callahan & Associates – that means we give back more to our members in the form of higher rates when they save and lower rates when they borrow.
<br>
<br>
At PFCU, the emphasis on delivering real value to our members has been job one, since day one.</p>
<div>
    <a class="button btn-lg w-button why-pfcu" href="../index.php#earnlink">Earn More</a>
</div>
</div>
</div>
<div class="image-1 image-col why-pfcu-col lazy" data-bg="url(''../img/bikes.jpg')" data-was-processed="true" style="background-image: url('../img/bikes.jpg');">
<div class="section-image" aria-hidden="true">
</div>
</div>
</div>
</section>

<section>
    <div class="light why-pfcu-row">
        <div class="content-col why-pfcu-col">
            <div class="why-pfcu-content">
                <h2 class="why-pfcu-h2">PFCU is for everyone.</h2>
                <p>
                When we say 'membership,' some people think there’s some kind of test, or that joining is difficult.
                Actually, becoming a member is incredibly easy, and almost everyone has what it takes to join. In fact, we have basically no security! You don't have to belong to any specific industry, company or organization to join PFCU.
</P>
<div>
</div>
</div>
</div>
<div class="image-1 image-col why-pfcu-col lazy" data-bg="url(''../img/lakedog.png')" data-was-processed="true" style="background-image: url('../img/lakedog.png');">
<div class="section-image" aria-hidden="true">
</div>
</div>
</section>

<section>
    <div class="reverse why-pfcu-row">
        <div class="content-col why-pfcu-col">
            <div class="why-pfcu-content">
                <h2 class="why-pfcu-h2">Spend time with the truly valuable.</h2>
                <p>
Our fake website acts and operates like the real deal, because "it is" the real deal.
<br>
Learn exactly how to operate the website to start scambaiting with PFCU today.</p>
<div>
    <a class="button btn-lg w-button why-pfcu" href="#">Learn More</a>
</div>
</div>
</div>
<div class="image-1 image-col why-pfcu-col lazy" data-bg="url(''../img/scambait.jpg')" data-was-processed="true" style="background-image: url('../img/scambait.jpg');">
<div class="section-image" aria-hidden="true">
</div>
</div>
</div>
</section>

<div class="footer-top">
    <div class="footer-top-col">
        <h2 class="footer-h2">
            <span class="header-emphasis">
                <span class="emphasis-text">Join</span> Today!</span>
</h2>
</div>
<div class="footer-top-col">
    <a class="button footer-button w-button" href="/apply">Get Started</a>
</div>
</div>
<section class="site-footer">
<footer class="container py-5 footer-bottom-wrapper page-wrapper site-footer">
  <div class="row">
    <div class="col-12 col-md-3">
 
      <small class="d-block mb-3">&copy; 2020 Pigeon Forge Credit Union.</small>
    </div>
    <div class="col-6 col-md">
      <h6>Contact Us</h6>
      <ul class="list-unstyled text-small">
        <li><a class="text-muted" href="#">Branch & ATM Locations</a></li>
        <li><a class="text-muted" href="#">(800 969-8762)</a></li>
        <li><a class="text-muted">NMLS: 553781</a></li>
        <li><a class="text-muted" href="#"><i class="fas fa-comment"></i> Chat</a></li>
        <li><a class="text-muted" href="#"><i class="fa fa-clock-o" aria-hidden="true"></i> Schedule Appointmennt</a></li>
      </ul>
    </div>

    <div class="col-6 col-md">
      <h6>About Us</h6>
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
</section>

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