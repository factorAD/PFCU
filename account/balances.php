<?php
//set global sessions
    $_SESSION['personal'] = 9337;
    $_SESSION['aarp'] = 420;
    $_SESSION['savings'] = 19293;
    $_SESSION['roth'] = 61969.69;
?>

<?php
if(isset($_POST['buttrans'])){ // if "next" on /transfer.php is clicked
  sleep(2); // wait 2 seconds (for spinner animation /transfer.php);
  $transamount = mysqli_real_escape_string($con,$_POST['transamount']); //convert "Amount" box on /transfer.php to a variable
  $origin = $_REQUEST['origin']; //request the value of the "Transfer from" account dropdown box
  $destination = $_REQUEST['destination']; // request the value of the "to" account dropdown box
  
  // create session variables
  $_SESSION['origin'] = $origin; 
  $_SESSION['destination'] = $destination;
  $_SESSION['transamount'] = $transamount;
header('Location: ../account'); // redirect to main account page
}
?>
<?php
if(isset($_SESSION['origin'])) { 
    //^ only run the following code if a transfer has occurred:
//codeblock to change account balances based on the "Transfer from" dropdown
if($_SESSION['origin'] === '2'){ //if "From account" is = "Personal"
  $sum_total2 = $_SESSION ['personal'] - $_SESSION ['transamount'] ; 
  $_SESSION['personal'] = $sum_total2;
}
elseif($_SESSION['origin'] === '3'){ //if "From account" is = "AARP credit card"
      $sum_total3 = $_SESSION ['aarp'] - $_SESSION ['transamount'] ; 
      $_SESSION['aarp'] = $sum_total3;
}
elseif($_SESSION['origin'] === '4'){ //if "From account" is = "Online Savings"
    $sum_total4 = $_SESSION ['savings'] - $_SESSION ['transamount'] ; 
    $_SESSION['savings'] = $sum_total4;
}
//codeblock to change account balances based on the "Trasnsfer to" dropdown
if($_SESSION['destination'] === '2'){ //if "To account" is = "Personal"
      $sum_total5 = $_SESSION ['personal'] + $_SESSION ['transamount'] ; 
      $_SESSION['personal'] = $sum_total5;
    }
elseif($_SESSION['destination'] === '3'){ //if "To account" is = "AARP credit card"
    $sum_total6 = $_SESSION ['aarp'] + $_SESSION ['transamount'] ; 
    $_SESSION['aarp'] = $sum_total6;
  }
  elseif($_SESSION['destination'] === '4'){ //if "To account" is = "Online savings"
    $sum_total7 = $_SESSION ['savings'] + $_SESSION ['transamount'] ; 
    $_SESSION['savings'] = $sum_total7;
  }
  elseif($_SESSION['destination'] === '5'){ //if "To account" is = "Roth IRA"
    $sum_total7 = $_SESSION ['roth'] + $_SESSION ['transamount'] ; 
    $_SESSION['roth'] = $sum_total7;
  }
}
?>







<?php
if(isset($_POST['butext'])){
  sleep(1);
  $routing = mysqli_real_escape_string($con,$_POST['routing']);
  $accountname = mysqli_real_escape_string($con,$_POST['accountname']);

  $_SESSION['routing'] = $routing;
  $_SESSION['accountname'] = $accountname; 
  $masked = str_pad(substr($routing,-4),strlen($routing));
  $_SESSION['routingf'] = $masked;

  header('Location: ../account/transfer.php');
}
  ?>
