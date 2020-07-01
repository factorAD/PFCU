<?php

$user = 'root';
$pass = '';
$db = 'accountsdb';

$db = new mysqli('localhost', $user, $pass, $db) or die("Unable to connect");

echo"Thumbs up.";


?>