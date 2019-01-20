<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>View Claim</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	
	<script type="text/javascript" src="view.js"></script>
</head>


<body id="main_body">

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
	
	echo "<body id='main_body' style = 'background-color: #b3eeff';>	
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
				
				<div style='text-align: center;'>
				<img src='img/crash-1.jpg' style='width: 340px; height: 240px; padding-bottom: 5px;'>
				<img src='img/crash-2.jpg' style='width: 340px; height: 240px; padding-bottom: 5px;'>
				<img src='img/crash-3.jpg' style='width: 340px; height: 240px; padding-bottom: 5px;'>
				<img src='img/crash-4.jpg' style='width: 340px; height: 240px; padding-bottom: 5px;'>
				<p></p>
				</div>

		<form>
		
		  			
		
		<p style='font-weight:bold'>Customer Statement: </p>
		<div style='border: solid 2px black; padding: 3px;'>
			<p>'$client_description'</p>
		</div>
		<p></p>
		<p style='font-weight:bold'>Location of Accident: </p>
		<div style='border: solid 2px black; padding: 3px;'>
			<p>$other_city, $location</p>
		</div>
		<p></p>
		<p style='font-weight:bold'>Date of Claim Submission: </p>
		<div style='border: solid 2px black; padding: 3px;'>
			<p>$date_entered</p>
		</div>
		<p></p>  
		<p style='font-weight:bold'>Name of other party: </p>
		<div style='border: solid 2px black; padding: 3px;'>
			<p>$other_party</p>
		</div>
		<p></p>
		<p style='font-weight:bold'>Other driver name: </p>
		<div style='border: solid 2px black; padding: 3px;'>
			<p>$other_name</p>
		</div>
		<p></p>
		<p style='font-weight:bold'>Other driver address: </p>
		<div style='border: solid 2px black; padding: 3px;'>
			<p>$other_address</p>
		</div>
		<p></p>
		<p style='font-weight:bold'>Other driver state: </p>
		<div style='border: solid 2px black; padding: 3px;'>
			<p>$other_state</p>
		</div>
		<p></p>
		<p style='font-weight:bold'>Other driver area code: </p>
		<div style='border: solid 2px black; padding: 3px;'>
			<p>$other_zip</p>
		</div>
		<p></p>
		<h1 style='text-decoration:underline'><a>Inspector Report:</a></h1>
		<p style='font-weight:bold'>Date of inspection: $date_of_inspection</p>
		<p style='font-weight:bold; color: green;'>Repairable? $repairable</p>
		<p></p>
		<p style='font-weight:bold'>Settlement: $settlement</p>
		<p style='font-weight:bold'>Needed repairs:  </p>
		<div style='text-align: left;'>
			<img src='img/repairs.png' style='width: 300px; height: 150px;'/>
		</div>
		<p></p>
		<p style='font-weight:bold'>Communication History: </p>
		
		<p></p>
		
<div class='accordion' id='accordionExample'>
  <div class='card'>
    <div class='card-header' id='headingOne'>
      <h5 class='mb-0'>
        Scheduling - Availability:
        </button>
      </h5>
    </div>

    <div id='collapseOne' class='collapse show' aria-labelledby='headingOne' data-parent='#accordionExample'>
      <div class='card-body'>
	  <p>10-DEC-2018 09:20AM</p>
	  <p>Jeffery,</p>
		<p>
		Thanks for submitting your availability for the for our insurance adjuster. We're looking forward to working with you.
		
		You're confirmed for your phone meeting with me on Dec 12, 2018 4:00pm-4:30pm EST: Vern V. Moulton. 
		
		Vern will meet you at 619 Red Cedar Rd East Lansing MI 48824 at the scheduled time above. We're looking forward to working with you!
		</p>
		<p>
		Thank you,
		</p>
		EasyAutoConnect Client Team
      </div>
    </div>
  </div>
  <div class='card'>
    <div class='card-header' id='headingTwo'>
      <h5 class='mb-0'>
        Meeting - Inspector Visit Summary:
      </h5>
    </div>
	
    <div id='collapseTwo' class='' aria-labelledby='headingTwo' data-parent='#accordionExample'>
      <div class='card-body'>
	  <p>Vern:</p>
	  <p>
			Met with Jeffery Tagsold Dec 12, 2018 4:00 pm to 4:45 pm at his home located on 619 Red Cedar Rd East Lansing MI 48824. A 2016 Lexus LS 450 dark gray was inspected. Three damaged items were found and estimated: </p>
			<p>Bumper: $800 - dislocated; damaged level 8</p>
			<p>Hood: $900 - hood crunched; damaged level 6</p>
			<p>Lights: $500 - dislocated; damaged 4</p>
			<p>TOTAL: $2200 </p>
			
<p>Check has been sent for processing.  Mr. Tagsold signed the completion inspection agreement.</p>
      </div>
    </div>
  </div>
  <div class='card'>
    <div class='card-header' id='headingThree'>
      <h5 class='mb-0'>
        Voice Call - Found Damaged Wheel:
      </h5>
    </div>
    <div id='collapseThree' class='' aria-labelledby='headingThree' data-parent='#accordionExample'>
      <div class='card-body'>
	 <p> Jeffery: Hi Vern, I found some damaged on the passenger tire yesterday when I go the car back from the mechanic. I submitted and update to my current claim. Is there anything else I need to do. 
	</p>
	<p>Vern: Oh wow, that's not good. But, yes, that was perfect to submit an update to your current claim. Just make sure you upload a photo. 
	</p>
	<p>Jeffery: Will I need to schedule another appointment.
	</p>
	<p>Vern: As long as there is a good photo in your claim we should be good. I'm out doing inspection but when I get back to the office I'll take a look. 
	</p>
	<p>Jeffery: Will this effect the process of my check? 
	</p>
	<p>Vern: Nope! If all checks out I'll send another message. 
	</p>
	<p>Jeffery: At what point will I not be able to make an update to the claim?
	</p>
	<p>Vern: After 2 months from when the final check is sent. 
	</p>
	<p>Jeffery: Great!! Thanks for the info, I'll let you get back to! 
	</p>
	<p>Vern: Alright then! You'll get an  automatic when I finish review your last submission. Have a great day!
	</p>
	<p>Jeffery: You as well! 
	</p>
	<p>End call.
	</p>
      </div>
    </div>
  </div>
</div>
<p></p>
</form>
<form action='homepage.html'>
	<button onclick='homepage.html';>Back</button>
</form>
</div>

";
	
?>

	</body>
</html>