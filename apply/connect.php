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

$sql = "INSERT INTO registration (appnum,username,email,password,firstName,lastName,drivers,city,state,zip)
VALUES ('$appnum','$username','$email','$password','$firstName','$lastName','$drivers','$city','$state','$zip')";
$result = mysqli_query($conn, $sql);
if($result)
{
    header("Location: ../redirect2.php");
}
else{
    echo "Error :" .$sql;
}

?>