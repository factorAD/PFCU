<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

    $userID = $_POST['userID'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $drivers = $_POST['drivers'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zip = $_POST['zip'];

    //Database connection
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "users";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    }else{
        $sql = "INSERT INTO registration (userID, email, password, firstName, lastName, drivers, city, state, zip
        VALUES ('$userID', '$email', '$password', '$firstName', '$lastName', '$drivers', '$city', '$state', '$zip')";
        $result = mysqli_query($conn, $sql);
        if($result)
        {
            header("Location: login.php");
        }
        else{
            echo "Error :" .$sql;
        }

        //$stmt = $conn->prepare("insert into registration(userID, email, password, firstName, lastName, drivers, city, state, zip)
        //values($userID, $email, $password, $firstName, $lastName, $drivers, $city, $state, $zip,)");
        //$stmt->bind_param("sssssissi", 'userID', 'email', 'password', 'firstName', 'lastName', 'drivers', 'city', 'state', 'zip');
        //$execval = $stmt->execute();
        //echo $execval;
        //echo "Registration Successful";
        //$stmt->close();
        //$conn->close();
    
    }

?>