<?php
require_once('connection.php');
$appnum = $username = $email = $password = $firstName = $lastName = $drivers = $city = $state = $zip = '';

    $appnum = $_POST['appnum'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $drivers = $_POST['drivers'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zip = $_POST['zip'];
// begin experiment

// $username2 = mysqli_real_escape_string($_POST['username']);
// $sql_query = "select count(*) as cntUser from users.registration where username = '".$username2."'";
// $result = mysqli_query($con,$sql_query) or trigger_error("Query Failed! SQL: $sql_query - Error: ".mysqli_error($con), E_USER_ERROR);
// $row = mysqli_fetch_array($result);

// $count = $row['cntUser'];

// if(!$count < 0){
//     header("Location: ../why-pfcu");
// }
// end experiment
$sql = "INSERT INTO registration (appnum,username,email,password,firstName,lastName,drivers,city,state,zip)
VALUES ('$appnum','$username','$email','$password','$firstName','$lastName','$drivers','$city','$state','$zip')";
$result = mysqli_query($conn, $sql);
if($result)
{
    header("Location: ../redirect2.php");
}
else{
    echo "An error was encountered. Please contact help at help@pfcu.com if this persists";
    // echo "Error: " .$sql;
}

?>