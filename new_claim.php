<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
 



<body id="main_body" style = "background-color: #b3eeff";>

<?php

$username = 'root';
$pass = '';
$host = 'localhost';
$dbname = 'spartahack_database';

$dbc = @mysqli_connect($localhost, $username, $pass, $dbname) OR die('Could not connect to MySQL ' . mysqli_connect_error());
	
$query = "SELECT type, id, status, date_entered, location, client_description, date_of_inspection, repairable, settlement, parts_to_be_replaced FROM claims";
$query2 = "SELECT other_driver_party, other_driver_name, other_driver_address, other_driver_city, other_driver_state, other_driver_zip FROM other_driver";
$query3 = "SELECT first, last FROM user_information";



$response = @mysqli_query($dbc, $query);
$response2 = @mysqli_query($dbc, $query2);
$response3 = @mysqli_query($dbc, $query3);


	$row = mysqli_fetch_array($response);
	$row2 = mysqli_fetch_array($response2);
	$row3 = mysqli_fetch_array($response3);


	
	//Client Table
	$car_type = $row["type"];
	$id = $row["id"];
	$status = $row["status"];
	$date_entered = $row["date_entered"];
	$location = $row["location"];
	$client_description = $row["client_description"];
	$date_of_inspection = $row["date_of_inspection"];
	$repairable = $row["repairable"];
	$settlement = $row["settlement"];
	$parts_to_be_replaced = $row["parts_to_be_replaced"];
	
	
	// Other Driver Table
	$other_party = $row2["other_driver_party"];
	$other_name = $row2["other_driver_name"];
	$other_address = $row2["other_driver_address"];
	$other_city = $row2["other_driver_city"];
	$other_state = $row2["other_driver_state"];
	$other_zip = $row2["other_driver_zip"];
	
	// User information table
	$client_first_name = $row3["first"];
	$client_last_name = $row3["last"];
	
	echo "<body id='main_body' style = 'background-color: #b3eeff;>	
	<img id='top' src='top.png' alt=''>
	<div id='form_container'>
	
		<div style = 'margin-top:20px; margin-left:auto; margin-right:auto; width:100%; max-width:600px; padding:20px; border:1px solid black; border-radius: 8px; background-color:white;'>
		<form action='homepage.html'>
			<button onclick='homepage.html';>Back</button>
		</form>
		
				<h1 style='text-decoration:underline'><a>Claim Report:</a></h1>
				<p style='font-weight:bold'>Client Name: $client_first_name $client_last_name</p>
				<p style='font-weight:bold'>Claim Type: $car_type</p>
				<p style='font-weight:bold'>Claim ID: $id</p>
				<p style='font-weight:bold; color:red;'>Claim Status: $status</p>
				<button type='button'>Insert Images</button>
				<p></p>
				
		<p style='font-weight:bold'>Customer Statement: </p>
		<form>
			<textarea rows='4' cols='50'></textarea>
		</form>
		<p></p>
		<p style='font-weight:bold'>Location of Accident: </p>
		<form>
			<textarea rows='1' cols='50'></textarea>
		</form>
		<p></p>
		<p style='font-weight:bold'>Date: (day/month/year) </p>
		<form>
			<textarea rows='1' cols='50'></textarea>
		</form>
		<p></p>
		<p style='font-weight:bold'>Name of other party: </p>
		<form>
			<textarea rows='1' cols='50'></textarea>
		</form>
		<p></p>
		<p style='font-weight:bold'>Other driver name: </p>
		<form>
			<textarea rows='1' cols='50'></textarea>
		</form>
		<p></p>
		<p style='font-weight:bold'>Other driver address: </p>
		<form>
			<textarea rows='1' cols='50'></textarea>
		</form>
		<p></p>
		<p style='font-weight:bold'>Other driver state: </p>
		<form>
			<textarea rows='1' cols='50'></textarea>
		</form>
		<p></p>
		<p style='font-weight:bold'>Other driver area code: </p>
		<form>
			<textarea rows='1' cols='50'></textarea>
		</form>
		<p></p>
		<form action='homepage.html'>
		<div  style='margin:auto;'>
			<button onclick='homepage.html';>Submit</button>
		</div>
		</form>
</form>
</div>";


	
?>

	</body>
</html>