<?php

$username = 'root';
$pass = '';
$host = 'localhost';
$dbname = 'spartahack_database';



$dbc = @mysqli_connect($localhost, $username, $pass, $dbname) OR die('Could not connect to MySQL ' . mysqli_connect_error());
	
$query = "SELECT email, password FROM user_information";

$response = @mysqli_query($dbc, $query);


	$row = mysqli_fetch_array($response);
	$user_email = $row["email"];
	$user_pass = $row["password"];
	
	
	
	if($_POST["email"] == $user_email) {
		if(	$_POST["password"] == $user_pass) {
			include "homepage.html";
		} else {
			echo "<p style='color:red; text-align:center; font-size: 20px; weight: bold;'>The username or password does not exist.</p>";
			echo "<p style='color:red; text-align:center; font-size: 20px; weight: bold;'>Please enter a valid login</p>";
			include "form.html";
		}
	} else {
		
		
		echo "<p style='color:red; text-align:center; font-size: 20px; weight: bold;'>The username or password does not exist.</p>";
		echo "<p style='color:red; text-align:center; font-size: 20px; weight: bold;'>Please enter a valid login</p>";

		include "form.html";
	}
				





?>