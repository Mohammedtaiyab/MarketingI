<?php

// Grab User submitted information
$email = $_POST["users"];
$pass = $_POST["password"];

// Connect to the database
$con = mysqli_connect("localhost","root","","ojoadmin");
// Make sure we connected successfully
if(! $con)
{
    die('Connection Failed'.mysql_error());
}

// Select the database to use
// mysql_select_db("ojoadmin",$con);

$result = mysqli_query("SELECT username, password FROM adminuser WHERE username = $email");

$row = mysqli_fetch_array($result);

if($row["users_email"]==$email && $row["users_pass"]==$pass)
    echo"You are a validated user.";
else
    echo"Sorry, your credentials are not valid, Please try again.";
?>