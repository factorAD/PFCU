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
    <li class="breadcrumb-item active ml-4"><a href="#">Home</a></li>
    <li class="breadcrumb-item active"><a href="#">Personal</a></li>
    <li class="breadcrumb-item active"><a href="#">Bank</a></li>
    <li class="breadcrumb-item active" aria-current="page">Checking Accounts</li>
  </ol>
</nav>








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